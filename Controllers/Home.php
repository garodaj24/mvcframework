<?php

    namespace Controllers;

    use \System\Controller;
    use \Models\User;

    class Home extends Controller {
        public function index() {
            unset($_SESSION['loginError']);
            if ($_POST) {
                $user_model = new User;
                $email = trim($_POST['email']);
                $password = md5($_POST['password']);
                $userID = $user_model->login($email, $password);
                if ($userID) {
                    unset($_SESSION['loginError']);
                    $_SESSION["userID"] = $userID;
                    header('Location: /account');
                } else {
                    $_SESSION['loginError'] = "Please enter a valid email and password";
                    $this->view->render("Login", false);
                }
            } else {
                $this->view->render("Login", false);
            }
        }
    }

?>