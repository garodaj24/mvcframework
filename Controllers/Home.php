<?php

    namespace Controllers;

    use \System\Controller;
    use \Models\User;

    class Home extends Controller {
        public function index() {
            if ($_POST) {
                $user_model = new User;
                $email = trim($_POST['email']);
                $password = md5($_POST['password']);
                $query = "SELECT id FROM users WHERE email='$email' AND password='$password'";
                $user = $user_model->selectUser($query);
                if ($user[0]['id']) {
                    $_SESSION["userID"] = $user[0]['id'];
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