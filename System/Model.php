<?php

    namespace System;

    class Model {
        public $db;

        public function __construct() {
            $this->db = new Db;
        }
    }

?>