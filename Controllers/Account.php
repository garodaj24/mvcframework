<?php

    namespace Controllers;

    use \System\Controller;
    use \Models\User;

    class Account extends Controller {
        public function __construct() {
            if (!isset($_SESSION["userID"]) || !$_SESSION["userID"]) {
                header('Location: /auth/login');
                exit;
            }
            parent::__construct();
        }

        public function index() {
            $user_model = new User;
            if (isset($_POST['Submit'])) {
                $updateUserImage = $user_model->updateUserImage(basename($_FILES["image"]["name"]), $_SESSION["userID"]);
            }
            $this->view->user = $user_model->getUser($_SESSION["userID"]);
            $this->view->render("Account");
        }
    }

?>