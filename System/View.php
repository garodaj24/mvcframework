<?php

    namespace System;

    class View {
        public function render($filename, $layout=true) {
            try {
                if (file_exists("Views/$filename.php")) {
                    if ($layout) {
                        if (file_exists("Views/layout/Header.php") && file_exists("Views/layout/Footer.php")) {
                            include "Views/layout/Header.php";
                            include "Views/$filename.php";
                            include "Views/layout/Footer.php";
                        }
                    } else {
                        include "Views/$filename.php";
                    }
                } else {
                    throw new \Exception("The file Views/$filename.php does not exist");
                }
            }
            catch(\Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }
        }
    
        public function __get($name) {
            return null;
        }
    }

?>