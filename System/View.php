<?php

    namespace System;

    class View {
        public function render($filename) {
            try {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . "Views/$filename.php")) {
                    include $_SERVER['DOCUMENT_ROOT'] . "Views/$filename.php";
                } else {
                    throw new \Exception("The file Views/$filename.php does not exist");
                }
            }
            catch(\Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }
        }
    }

?>