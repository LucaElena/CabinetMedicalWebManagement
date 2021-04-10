<?php
	class Home extends Controller
	{
		
		public function index($param = '')
		{
			//echo 'home/index: ' . $param . ' ' . $other_param;
			$user = $this->model('User');
			$user->name = $param; 

			
			$this->view('home/index' , ['name' => $user->name]);

		}
		

	}

?>