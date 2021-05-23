<?php
	class AddUser extends Controller
	{

		public function index($userType = '' , $userName = '')
		{
			
			$user = $this->model('userModel');
			$info['username'] = $userName;
			if($userName)
			{
				
				$this->view('adduser/patient' , ['patientType' => $adduser->userType]);
			}
			
		}

	}

?>