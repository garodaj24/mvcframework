<?php

    namespace Controllers;

    use \System\Controller;

    class Auth extends Controller {
        public function index() {
            echo "inside Auth index";
        }

        public function login() {
            $this->view->render("Login", false);
        }

        public function registration() {
            $this->view->render("Registration", false);
        }

        public function verification() {
            $this->view->render("Verification");
        }
    }
?>