<?php
	class Doctor extends Controller
	{

		public function index($doctorUserName = '')
		{
			
			$doctor = $this->model('DoctorModel');

			if($doctorUserName)
            {
				$doctor_exist = $doctor->isDefined($doctorUserName);

				if ($doctor_exist)
				{
					$this->view('doctor/index',  ['username' => $doctorUserName]);
					// $result = $cabinet->getData($cabinetId);
				}
				else
				{
					// $this->view('errors/404',  ['username' => $doctorUserName]);
					header('Location: ' . URL . 'errors/error404' , "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
				}
            }
            else
            {
                // $this->view('errors/403',  ['username' => $doctorUserName]);
				header('Location: ' . URL . 'errors/error403' , "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
            }

		}
		
	}

?>