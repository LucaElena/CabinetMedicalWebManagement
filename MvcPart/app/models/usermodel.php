<?php

class UserModel extends Controller
{
    public $id;
    public $type;
    
    // check if user exist in db
    public function isDefined($user_name)
    {
        $sql = "SELECT COUNT(user_name) FROM users where user_name = :username";
        $query = $this->conn->prepare($sql);
        $query->execute(array(":username" => $user_name));
        $results = $query->fetch(PDO::FETCH_ASSOC);

        // print_r("<br>Suntem in UserModel isDefined and results:");
        // print_r($results);
        
        if ($results['COUNT(user_name)'] > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    // return general data based on user id
    public function getData($username)
    {
        $sql = "SELECT * from users WHERE user_name = :username";
        $query = $this->conn->prepare($sql);
        $query->execute(array(":username" => $username));
        $results = $query->fetch(PDO::FETCH_ASSOC);
        // print_r("<br>Suntem in UserModel getData and results:");
        // print_r($results);
        return $results;
    }

    public function checkType($type , $idUser)
    {
        $sql_isType = "SELECT COUNT(id_user) FROM " . $type . " WHERE id_user = " . $idUser;
        // print_r("<br>checkType  " . $type);
    
        $query_isType = $this->conn->prepare($sql_isType);
        $query_isType->execute();
        $result = $query_isType->fetch(PDO::FETCH_ASSOC);
        $typeCount = $result['COUNT(id_user)'];
        // print_r($typeCount);
        if($typeCount > 0)
            return true;
        return false;
    }

    // Based on a user id we return the type (cabinet/doctor/patient)
    public function getUserType($username)
    {
        $sql_getId= "SELECT id_user FROM users WHERE user_name = :username";
        $query_getId = $this->conn->prepare($sql_getId);
        $query_getId->execute(array(":username" => $username));
        $result = $query_getId->fetch(PDO::FETCH_ASSOC);
        $id_user = $result['id_user'];
        $this->id =  $id_user;
        if($id_user)
        {
            if($this->checkType("cabinets" , $id_user))
            {
                $this->type = "cabinet";
                return "cabinet";
            }
            if($this->checkType("doctors" , $id_user))
            {
                $this->type = "doctor";
                return "doctor";
            }
            if($this->checkType("patients" , $id_user))
            {
                $this->type = "patient";
                return "patient";
            }
        }
        return "";
    }
    
}