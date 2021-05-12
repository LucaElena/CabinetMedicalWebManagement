<?php
	class Doctor extends Controller
	{

		public function index($doctorId = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$doctor = $this->model('DoctorModel');
			$doctor->id = $doctorId; 

			if(!$doctor->id)
            {
			    $this->view('doctor/not-found' , ['id' => null]);
            }
            else
            {
                $this->view('doctor/index' , ['id' => $doctor->id]);
            }
            

		}
		

	}

?>