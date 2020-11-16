<?php

    namespace Controllers;

    use \System\Controller;

    class Auth extends Controller {
        public function index() {
            echo "inside Auth index";
        }

        public function login() {
            echo "inside login";
        }

        public function verification($x, $y) {
            $this->view->render("Verification");
        }
    }

?>