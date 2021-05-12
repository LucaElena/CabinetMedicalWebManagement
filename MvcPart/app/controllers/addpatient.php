<?php
	class AddPatient extends Controller
	{

		public function client($patientType= '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$addpatient = $this->model('AddPatientModel');
			$addpatient->userType = $patientType; 

			$this->view('addpatient/client' , ['patientType' => $addpatient->patientType]);
            
		}
		public function doctor($patientType= '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$addpatient = $this->model('AddPatientModel');
			$addpatient->userType = $patientType; 

			
            $this->view('addpatient/doctor' , ['patientType' => $addpatient->patientType]);
            

		}
		

	}

?>