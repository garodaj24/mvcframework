<?php

    namespace Controllers;

    use \System\Controller;
    use \Models\User;

    class Home extends Controller {
        public function __constructor() {
            if ($_SESSION["userID"]) {
                header('Location: /account');
                exit;
            }
        }

        public function index() {
            if ($_POST) {
                $user_model = new User;
                $email = trim($_POST['email']);
                $password = md5($_POST['password']);
                if ($email === '' || $_POST['password'] === '') {
                    if ($email === '') {
                        $this->view->emailError = "Email Required";
                    }
                    if ($_POST['password'] === '') {
                        $this->view->passwordError = "Password Required";
                    }
                } else {
                    $userID = $user_model->login($email, $password);
                    if ($userID) {
                        $_SESSION["userID"] = $userID;
                        header('Location: /account');
                        exit;
                    } else {
                        $this->view->loginError = "Please enter a valid email and password";
                    }
                }
            }
            $this->view->render("Login", false);
        }
    }

?>