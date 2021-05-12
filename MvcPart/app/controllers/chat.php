<?php
	class Chat extends Controller
	{

		public function index()
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$user = $this->model('userModel');
            $this->view('chat/index' , ['id' => $user]);
        

		}
	}

?>