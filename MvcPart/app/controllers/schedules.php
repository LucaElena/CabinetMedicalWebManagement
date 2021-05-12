<?php
	class Schedules extends Controller
	{

		public function index($userId = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$user = $this->model('userModel');
			$user->id = $userId; 

			if(!$user->id)
            {
			    $this->view('cabinet/not-found' , ['id' => null]);
            }
            else
            {
                $this->view('cabinet/index' , ['id' => $user->id]);
            }

		}
	}

?>