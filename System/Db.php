<?php

    namespace System;

    class Db{
	
        private $connection = null;
    	
        public function __construct( $dbhost = "localhost:3306", $dbname = "mvc_framework", $username = "root", $password = "Garod@248") {
            $this->connection = new \mysqli($dbhost, $username, $password, $dbname);
            
            if(mysqli_connect_errno()) {
                throw new Exception("Could not connect to database.");   
            }
        }

        public function select($query) {
            $result = $this->connection->query($query);
            $finalResult = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    array_push($finalResult,$row);
                }
            }
            return $finalResult;
        }

        public function insert($table, $data) {
            $query = "INSERT INTO $table (" . implode(", ",array_keys($data)) . ") VALUES ('" . implode("',' ",$data) . "')";
            return $this->connection->query($query);
        }

        public function update($table, $data, $where) {
            $query = "UPDATE $table SET ";
            foreach ($data as $key => $val) {
                if (gettype($val) === "integer") {
                    $query .= "$key=$val, ";
                } else {
                    $query .= "$key='$val', ";
                }
            }
            $query = rtrim($query, ", ");
            $query .= " WHERE $where";
            return $this->connection->query($query);
        }

        public function delete($table, $where) {
            $query = "DELETE FROM $table WHERE $where";
            return $this->connection->query($query);
        }
    }

?>