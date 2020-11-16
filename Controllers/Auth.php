<?php

    namespace Controllers;

    class Auth {
        public function index() {
            echo "inside Auth index";
        }

        public function login() {
            echo "inside login";
        }

        public function verification($x, $y) {
            echo "inside verification $x and $y";
        }
    }

?>