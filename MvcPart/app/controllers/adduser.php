<?php
	class AddUser extends Controller
	{

		public function patient()
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$adduser = $this->model('AddUserModel');
			$adduser->userType = "patient"; 

			$this->view('adduser/patient' , ['patientType' => $adduser->userType]);
            
		}
		public function doctor()
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$adduser = $this->model('AddUserModel');
			$adduser->userType = "doctor"; 

			$this->view('adduser/doctor' , ['patientType' => $adduser->userType]);
            

		}
		

	}

?>