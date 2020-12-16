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

        public function login($email, $password) {
            $query = "SELECT id FROM users WHERE email='$email' AND password='$password'";
            $userID = $this->db->select($query);
            return $userID['id'];
        }

    }

?>