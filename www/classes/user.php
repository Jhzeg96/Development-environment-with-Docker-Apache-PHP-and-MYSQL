<?php
    class User {
        private $connection;

        public function __construct($connection) {
            $this->connection = $connection;
        }
    
        public function getUsers() {
            $query = "SELECT * FROM users";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($users == null)
            {
                return null;
            }
            else 
            {
                return $users;
            }
        }

        public function userExists($email,$password)
        {
            $query = "SELECT * FROM users WHERE email = :email AND password = :password";
            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($stmt->rowCount() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function signUpUser($email, $password)
        {
            $query = "INSERT INTO users (email,password) VALUES (:email, :password)";
            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            if($stmt->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
            
        }
    }    
?>