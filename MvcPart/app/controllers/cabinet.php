<?php
	class Cabinet extends Controller
	{

		public function index($cabinetId = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$cabinet = $this->model('CabinetModel');
			$cabinet->id = $cabinetId; 

			if(!$cabinet->id)
            {
			    $this->view('cabinet/not-found' , ['id' => null]);
            }
            else
            {
                $this->view('cabinet/index' , ['id' => $cabinet->id]);
            }
            

		}
		

	}

?>