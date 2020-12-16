<?php

    namespace Controllers;

    use \System\Controller;
    use \Models\User;

    class Home extends Controller {
        public function index() {
            if ($_SESSION["userID"]) {
                header('Location: /account');
            } else {
                unset($_SESSION['loginError']);
                unset($_SESSION['emailError']);
                unset($_SESSION['passwordError']);
                if ($_POST) {
                    $user_model = new User;
                    $email = trim($_POST['email']);
                    $password = md5($_POST['password']);
                    if ($email === '' || $_POST['password'] === '') {
                        if ($email === '') {
                            $_SESSION["emailError"] = "Email Required";
                        }
                        if ($_POST['password'] === '') {
                            $_SESSION["passwordError"] = "Password Required";
                        }
                        $this->view->render("Login", false);
                    } else {
                        $userID = $user_model->login($email, $password);
                        if ($userID) {
                            $_SESSION["userID"] = $userID;
                            header('Location: /account');
                        } else {
                            $_SESSION['loginError'] = "Please enter a valid email and password";
                            $this->view->render("Login", false);
                        }
                    }
                } else {
                    $this->view->render("Login", false);
                }
            }
        }
    }

?>