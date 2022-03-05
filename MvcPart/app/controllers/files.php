<?php
	class Files extends Controller
	{

		public function index($userName = '')
		{
			// echo 'home/index: ' . $param . ' ' . $other_param;
			$user = $this->model('userModel');
			$info['username'] =  $userName;
			$info['type'] = 'cabinet';
			//TO DO : diferent general bar for different users types:
			$info['generalbar'] = str_replace("GENERIC_USERNAME",$userName,GENERAL_CABINET_BAR);


			$this->view('files/index' , $info);


		}
	}

?>