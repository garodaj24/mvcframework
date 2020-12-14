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

        public function registration() {
            if ($_POST) {
                if ($_POST['name'] !== '' && $_POST['email'] !== '' && $_POST['username'] !== '' && $_POST['password'] !== '') {
                    $user_model = new User;
                    $createUser = $user_model->createUser($_POST);
                    if ($createUser) {
                        echo 'success';
                    } else {
                        echo 'failed';
                    }
                } else {
                    echo 'please fill all the fields!';
                }
            } else {
                $this->view->render("Registration", false);
            }
        }

        public function verification() {
            $this->view->render("Verification");
        }
    }
?>