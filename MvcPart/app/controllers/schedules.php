<?php
	class Schedules extends Controller
	{

		public function index($userId = '')
		{
			
			$user = $this->model('userModel');
            $this->view('schedules/index' , ['id' => $user]);


		}
	}

?>