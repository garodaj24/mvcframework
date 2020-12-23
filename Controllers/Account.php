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
            $target_dir = "Views/public/images/";
            $upload = true;
            if(isset($_POST["Submit"])) {
                $target_file = $target_dir.basename($_FILES["image"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    $upload = true;
                } else {
                    $this->view->uploadError = "File is not an image.";
                    $upload = false;
                }
                if (file_exists($target_file)) {
                    $upload = false;
                    $user_model->updateUserImage(basename($_FILES["image"]["name"]), $_SESSION["userID"]);
                }
                if ($_FILES["image"]["size"] > 1000000) {
                    $this->view->uploadError = "Sorry, your file is too large.";
                    $upload = false;
                }
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                    $this->view->uploadError = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $upload = false;
                }
                if ($upload) {
                    $uploadUserImage = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                    if ($uploadUserImage) {
                        $updateUserImage = $user_model->updateUserImage(basename($_FILES["image"]["name"]), $_SESSION["userID"]);
                    }
                    if (!$updateUserImage || !$uploadUserImage) {
                        $this->view->uploadError = "Sorry, there was an error uploading your file.";
                    }
                }
            }
            $this->view->user = $user_model->getUser($_SESSION["userID"]);
            $this->view->render("Account");
        }
    }

?>