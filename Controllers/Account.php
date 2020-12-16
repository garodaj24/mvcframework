<?php

    namespace Controllers;

    use \System\Controller;
    use \Models\User;

    class Account extends Controller {
        public function index() {
            echo $_SESSION["userID"];
        }
    }

?>