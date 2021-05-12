<?php
	class Files extends Controller
	{

		public function index($userId = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$user = $this->model('userModel');
			$this->view('files/index' , ['id' => $user]);


		}
	}

?>