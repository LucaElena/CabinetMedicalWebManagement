<?php

class CabinetModel extends Controller
{
    public $id;
    //SELECT * from users as u INNER JOIN cabinets as c ON u.id_user=c.id_user;
    
    public function isDefined($user_name)
    {
        $sql = "SELECT COUNT(user_name) FROM users where user_name = :username";
        $query = $this->conn->prepare($sql);
        $query->execute(array(":username" => $user_name));
        $results = $query->fetch(PDO::FETCH_ASSOC);

        print_r("</br>Suntem in CabinetModel isDefined and results:");
        print_r($results);
        
        if ($results['COUNT(user_name)'] > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function getData($username)
    {
        $sql = "SELECT * from users as u INNER JOIN cabinets as c ON u.id_user=c.id_user WHERE user_name = :username";
        $query = $this->conn->prepare($sql);
        $query->execute(array(":username" => $username));
        $results = $query->fetch(PDO::FETCH_ASSOC);
        print_r("</br>Suntem in CabinetModel getData and results:");
        print_r($results);
        return $results;
    }
    
}
// print_r("Suntem in CabinetModel");
?>