<?php

//class DoctorModel extends Controller
class DoctorModel extends UserModel
{
    // public $id;
    //SELECT * from users as u INNER JOIN doctors as d ON u.id_user=d.id_user;

    /*public function isDefined($user_name)
    {
        $sql = "SELECT COUNT(user_name) FROM users where user_name = :username";
        $query = $this->conn->prepare($sql);
        $query->execute(array(":username" => $user_name));
        $results = $query->fetch(PDO::FETCH_ASSOC);

        // print_r("</br>Suntem in DoctorModel isDefined and results:");
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
    */
    public function isDoctor($username)
    {

        $id_user = $this->getUserId($username);

        $sql_isDoctor = "SELECT COUNT(id_user) FROM doctors WHERE id_user = " . $id_user;
        $query_isDoctor = $this->conn->prepare($sql_isDoctor);
        $query_isDoctor->execute();
        $result = $query_isDoctor->fetch(PDO::FETCH_ASSOC);
        $doctorCount = $result['COUNT(id_user)'];

        if($doctorCount > 0)
            return true;
        return false;

    }
}
// print_r("Suntem in DoctorModel");
?>