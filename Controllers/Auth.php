<?php

    namespace Controllers;

    use \System\Controller;
    use \Models\User;

    class Auth extends Controller {
        
        public function index() {
            $user_model = new User;
            $users = $user_model->getAllUsers();
            var_dump($users);
            echo "inside Auth index";
        }

        public function login() {
            unset($_SESSION['userID']);
            $this->view->render("Login", false);
        }

        public function logout() {
            unset($_SESSION['userID']);
            header('Location: /');
        }

        public function registration() {
            if ($_POST) {
                if ($_POST['name'] !== '' && $_POST['email'] !== '' && $_POST['username'] !== '' && $_POST['password'] !== '') {
                    $user_model = new User;
                    $createUser = $user_model->createUser($_POST);
                    if ($createUser) {
                        $email = trim($_POST['email']);
                        $password = md5($_POST['password']);
                        $userID = $user_model->login($email, $password);
                        $_SESSION["userID"] = $userID;
                        header('Location: /account');
                        exit;
                    } else {
                        $this->view->registrationError = "Something went wrong, try again later";
                    }
                } else {
                    if ($_POST['name'] === '') {
                        $this->view->nameError = "Name Required";
                    }
                    if ($_POST['email'] === '') {
                        $this->view->emailError = "Email Required";
                    }
                    if ($_POST['username'] === '') {
                        $this->view->usernameError = "Username Required";
                    }
                    if ($_POST['password'] === '') {
                        $this->view->passwordError = "Password Required";
                    }
                }
            }
            $this->view->render("Registration", false);
        }
    }
?>