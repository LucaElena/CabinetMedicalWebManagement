<?php

class UserModel extends Controller
{
    public $id;
    //SELECT * from users;
    public function getData($username)
    {
        $sql = "SELECT * from users WHERE user_name = :username";
        $query = $this->conn->prepare($sql);
        $query->execute(array(":username" => $username));
        $results = $query->fetch(PDO::FETCH_ASSOC);
        print_r("Suntem in UserModel getData and results:");
        print_r($results);
        return $results;
    }
    public function getUserType($username)
    {
        $sql = "SELECT * from users WHERE user_name = :username";
        $query = $this->conn->prepare($sql);
        $query->execute(array(":username" => $username));
        $results = $query->fetch(PDO::FETCH_ASSOC);
        print_r("Suntem in UserModel getData and results:");
        print_r($results);
        return $results;
    }
    
}