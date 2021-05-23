<?php
	class Patient extends Controller
	{

		public function index($patientUserName = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$patient = $this->model('patientModel');

			if(!$patientUserName)
            {
			    header('Location: ' . URL . 'errors/error403' . "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
            }
            else
            {
                $this->view('patient/index' , ['username' => $patientUserName]);
            }

		}
	}

?>