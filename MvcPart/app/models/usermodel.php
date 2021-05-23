<?php

class UserModel extends Controller
{
    public  $id;
    public  $type;
    public  $user_name;
    
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
            $this->user_name = $user_name;
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
        return $results;
    }

    public function checkType($type , $idUser)
    {
        $sql_isType = "SELECT COUNT(id_user) FROM " . $type . " WHERE id_user = " . $idUser;
        $query_isType = $this->conn->prepare($sql_isType);
        $query_isType->execute();
        $result = $query_isType->fetch(PDO::FETCH_ASSOC);
        $typeCount = $result['COUNT(id_user)'];
        if($typeCount > 0)
            $this->type = $type;
            $this->id = $idUser;
            return true;
        return false;
    }

    public function getUserId($username)
    {
        $sql_getId= "SELECT id_user FROM users WHERE user_name = :username";
        $query_getId = $this->conn->prepare($sql_getId);
        $query_getId->execute(array(":username" => $username));
        $result = $query_getId->fetch(PDO::FETCH_ASSOC);
        $id_user = $result['id_user'];
        $this->id =  $id_user;
        $this->user_name = $username;
        return $id_user;
    }

    // Based on a user id we return the type (cabinet/doctor/patient)
    public function getUserType($username)
    {
        
        $id_user = $this->getUserId($username);
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


    #Only for cabinets 
    public function getDepartments($username)
    {
        $id_user = $this->getUserId($username);
        $departments = array();
        if($id_user)
        {
            // SELECT DISTINCT department FROM doctors as d INNER JOIN employees as e WHERE d.id_user = e.id_doctor AND e.id_cabinet = 1;
            // print_r($username . $id_user);
            $sql_getDepartments = "SELECT DISTINCT department FROM doctors as d INNER JOIN employees as e WHERE d.id_user = e.id_doctor AND e.id_cabinet =".$id_user;
            $query_getDepartments = $this->conn->prepare($sql_getDepartments);
            $query_getDepartments->execute();
            while($departament = $query_getDepartments->fetch(PDO::FETCH_ASSOC))
            {
                array_push($departments, $departament['department']);
            }
        }
        return $departments;
    }
    #Only for cabinets 
    public function getDoctors($username)
    {
        $id_user = $this->getUserId($username);
        $doctors = array();
        if($id_user)
        {
            // SELECT first_name,last_name,department FROM doctors as d INNER JOIN employees as e WHERE d.id_user = e.id_doctor AND e.id_cabinet = 1;
            // print_r($username . $id_user);
            $sql_getDoctors = "SELECT first_name,last_name,department FROM doctors as d INNER JOIN employees as e WHERE d.id_user = e.id_doctor AND e.id_cabinet = ".$id_user;
            $query_getDoctors = $this->conn->prepare($sql_getDoctors);
            $query_getDoctors->execute();
            while($doctor = $query_getDoctors->fetch(PDO::FETCH_ASSOC))
            {
                array_push($doctors, $doctor);
            }
        }
        return $doctors;
    }

    
}