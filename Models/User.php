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
            $userID = $this->db->select($query, false);
            return $userID['id'];
        }

        public function getUser($id) {
            $query = "SELECT * FROM users WHERE id=$id";
            $user = $this->db->select($query, false);
            return $user;
        }

        public function updateUserImage($image, $id) {
            $where = "id=$id";
            $data = array("image" => $image);
            $updateUserImage = $this->db->update("users", $data, $where);
            return $updateUserImage;
        }

    }

?>