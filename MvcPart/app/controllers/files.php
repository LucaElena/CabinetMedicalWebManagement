<?php
	class Files extends Controller
	{

		public function index($userName = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$user = $this->model('userModel');
			$info['username'] =  $userName;
			$usertype = $user->getUserType($userName);

			switch($usertype)
			{
				case('cabinet'):
				{
					$info['type'] = 'cabinet';
					$info['generalbar'] = str_replace("GENERIC_USERNAME",$userName, GENERAL_CABINET_BAR);
					break;
					
				}
				case('doctor'):
				{
					$info['type'] = 'doctor';
					$info['generalbar'] = str_replace("GENERIC_USERNAME",$userName, GENERAL_DOCTOR_BAR);
					break;
					
				}
				case('patient'):
				{
					$info['type'] = 'patient';
					$info['generalbar'] = str_replace("GENERIC_USERNAME",$userName, GENERAL_PATIENT_BAR);
					break;
					
				}
			}


			$this->view('files/index' , $info);


		}
	}

?>