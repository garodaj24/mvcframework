<?php

    namespace Controllers;

    use \System\Controller;

    class Auth extends Controller {
        public function index() {
            echo "inside Auth index";
        }

        public function login() {
            $this->view->render("Login");
        }

        public function registration() {
            $this->view->render("Registration");
        }

        public function verification() {
            echo $_POST['email'];
            echo "</br>";
            echo $_POST['password'];
        }
    }
?>