<?php

//class PatientModel extends Controller
class PatientModel extends UserModel
{
    //public $id;
    //SELECT * from users as u INNER JOIN patients as p ON u.id_user=p.id_user;

    public function isPatient($username)
    {

        $id_user = $this->getUserId($username);

        $sql_isPatient = "SELECT COUNT(id_user) FROM patients WHERE id_user = " . $id_user;
        $query_isPatient = $this->conn->prepare($sql_isPatient);
        $query_isPatient->execute();
        $result = $query_isPatient->fetch(PDO::FETCH_ASSOC);
        $PatientCount = $result['COUNT(id_user)'];

        if($PatientCount > 0)
            return true;
        return false;

    }
    
}
// print_r("Suntem in PatientModel");
?>