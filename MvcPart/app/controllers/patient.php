<?php
	class Patient extends Controller
	{

		public function index($patientId = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$patient = $this->model('patientModel');
			$patient->id = $patientId; 

			if(!$patient->id)
            {
			    $this->view('patient/not-found' , ['id' => null]);
            }
            else
            {
                $this->view('patient/index' , ['id' => $patient->id]);
            }

		}
	}

?>