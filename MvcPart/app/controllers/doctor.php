<?php
	class Doctor extends Controller
	{

		public function index($doctorUserName = '')
		{
			
			$user = $this->model('userModel');
			$info['username'] =  $doctorUserName;
			$info['type'] = 'doctor';

			$user = $this->model('userModel');
			$info['username'] =  $doctorUserName;
			$info['type'] = 'doctor';
			//TO DO : diferent general bar for different users types:
			$info['generalbar'] = str_replace("GENERIC_USERNAME",$doctorUserName, GENERAL_DOCTOR_BAR);


			//TO DO : diferent general bar for different users types:
			


			if($doctorUserName)
            {
				$doctor_exist = $user->isDefined($doctorUserName);

				if ($doctor_exist)
				{
					$this->view('user/index',  $info);
					// $result = $cabinet->getData($cabinetId);
				}
				else
				{
					header('Location: ' . URL . 'errors/error403' , $_SERVER['REQUEST_URI']);
				}
            }
            else
			{
				header('Location: ' . URL . 'errors/error403' , $_SERVER['REQUEST_URI']);
			}

		}
		
	}

?>