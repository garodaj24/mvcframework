<?php

    namespace System;

    use \Controllers\Auth;

    class Routes {
        public function __construct($uri) {
            try {
                if (isset($uri[0]) && $uri[0] !== '') {
                    if (file_exists($_SERVER['DOCUMENT_ROOT'] . "Controllers/$uri[0].php")) {
                        if (class_exists("\\Controllers\\$uri[0]")) {
                            $route = new Auth;
                            if (isset($uri[1]) && $uri[1] !== '') {
                                if (method_exists($route, $uri[1])) {
                                    $route->{$uri[1]}();
                                } else {
                                    throw new \Exception("The method $uri[1] does not exist in the class $uri[0]");
                                }
                            } else {
                                #coming soon
                            }
                        } else {
                            throw new \Exception("The class $uri[0] does not exist");
                        }
                    } else {
                        throw new \Exception("The file Controllers/$uri[0].php does not exist");
                    }
                } else {
                    #coming soon
                }
            } 
            catch(\Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }
        }
    }

?>