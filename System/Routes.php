<?php

    namespace System;

    class Routes {
        public function __construct($uri) {
            try {
                $ctrl = (isset($uri[0]) && $uri[0] !== '') ? ucfirst($uri[0]) : "Home";
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . "Controllers/$ctrl.php")) {
                    if (class_exists("\\Controllers\\$ctrl")) {
                        $className = "\\Controllers\\$ctrl";
                        $ctrl_obj = new $className;
                        if (isset($uri[1]) && $uri[1] !== '') {
                            $method = $uri[1];
                            if (method_exists($ctrl_obj, $method)) {
                                $params = array_slice($uri, 2);
                                call_user_func_array(array($ctrl_obj, $method), $params);
                            } else {
                                throw new \Exception("The method $uri[1] does not exist in the class $uri[0]");
                            }
                        } else {
                            if (method_exists($ctrl_obj, "index")) {
                                $ctrl_obj->index();
                            } else {
                                throw new \Exception("The method index does not exist in the class $uri[0]");
                            }
                        }
                    } else {
                        throw new \Exception("The class $uri[0] does not exist");
                    }
                } else {
                    throw new \Exception("The file Controllers/$uri[0].php does not exist");
                }
            } 
            catch(\Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }
        }
    }

?>