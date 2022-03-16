<?php
	class Chat extends Controller
	{

		public function index($userName = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$user = $this->model('userModel');
			$info['username'] =  $userName;
			$info['generalbar'] = '';
			$info['type'] = '';
			
			if($userName)
			{
				$user_exist = $user->isDefined($userName);
				if ($user_exist)
				{
					$user_type = $user->getUserType($userName);
					switch($user_type)
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
				}
			}
			$this->view('chat/index' , $info);
            
        

		}
	}

?>