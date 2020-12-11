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
            $this->view->render("Login", false);
        }

        public function registration() {
            if ($_POST) {
                $user_model = new User;
                $createUser = $user_model->createUser($_POST);
                if ($createUser) {
                    echo 'success';
                } else {
                    echo 'failed';
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