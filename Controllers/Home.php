<?php

    namespace Controllers;

    use \System\Controller;
    use \Models\User;

    class Home extends Controller {
        public function index() {
            $user_model = new User;
            $users = $user_model->getAllUsers();
            foreach ($users as $key => $value) {
                if (trim($value['email']) === trim($_POST['email'])) {
                    if (trim($value['password']) === md5(trim($_POST['password']))) {
                        unset($_SESSION['loginError']);
                        $_SESSION["userID"] = $value['id'];
                        echo $_SESSION['userID'];
                    } else {
                        $_SESSION['loginError'] = "Please enter a valid email and password";
                    }
                } else {
                    $_SESSION['loginError'] = "Please enter a valid email and password";
                }
            }
            if (!$_SESSION['userID'] && $_SESSION['userID'] !== '') {
                header('Location: /auth/login');
            }
        }
    }

?>