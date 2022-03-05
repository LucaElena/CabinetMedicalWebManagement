<?php
	class ResetPass extends Controller
	{
		
		
		public function index($userName = "")
		{


            $user = $this->model('userModel');
			$info['username'] =  $userName;
			$info['type'] = 'cabinet';
			//TO DO : diferent general bar for different users types:
			$info['generalbar'] = str_replace("GENERIC_USERNAME",$userName,GENERAL_CABINET_BAR);


			$this->view('resetpass/index' , $info);

		}

		public function singUp()
        {
            echo 'TO DO : signup based on Oauth';
            # we could start for now with sessions
        }

        public function logIn()
        {
            echo 'TO DO : logIn based on Oauth';
        }
        public function logOut()
        {
            echo 'TO DO : logOut based on Oauth';
        }

	}

?>