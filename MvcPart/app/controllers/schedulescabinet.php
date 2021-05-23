<?php
	class SchedulesCabinet extends Controller
	{

		public function index()
		{
			
			$cabinet = $this->model('cabinetModel');
			print_r($cabinet->user_name . $cabinet->$type);
			if($cabinet->user_name && $cabinet->$type)
			{

				$this->view('schedules/index' , ['id' => $cabinet->user_nam]);

			}
		}
	}

?>