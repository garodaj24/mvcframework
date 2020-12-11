<?php

    namespace Models;

    use \System\Model;

    class User extends Model {

        public function getAllUsers() {
            $query = "SELECT * FROM users";
            $data = $this->db->select($query);
            return $data;
        }

        public function createUser($data) {
            $createUser = $this->db->insert("users", $data);
            return $createUser;
        }

    }

?>