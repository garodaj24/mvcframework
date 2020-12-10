<?php

    namespace System;

    class View {
        public function render($filename, $layout=true) {
            try {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . "Views/$filename.php")) {
                    if ($layout) {
                        if (file_exists($_SERVER['DOCUMENT_ROOT'] . "Views/layout/Header.php") && file_exists($_SERVER['DOCUMENT_ROOT'] . "Views/layout/Footer.php")) {
                            include $_SERVER['DOCUMENT_ROOT'] . "Views/$filename.php";
                            include $_SERVER['DOCUMENT_ROOT'] . "Views/layout/Header.php";
                            include $_SERVER['DOCUMENT_ROOT'] . "Views/layout/Footer.php";
                        } else {
                            include $_SERVER['DOCUMENT_ROOT'] . "Views/$filename.php";
                        }
                    }
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