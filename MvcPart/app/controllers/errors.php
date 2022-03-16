<?php
	class Errors extends Controller
	{
		public function error403(  $curenturl = "")
		{
			#print_r("Error on url:");
			#print_r($_SERVER['HTTP_REFERER']);
			$info['curent_url'] = $curenturl;
			if(isset($_SERVER['HTTP_REFERER']))
			{
				$info['referer_url'] = $_SERVER['HTTP_REFERER'];
			}
			else
			{
				$info['referer_url'] = "";
			}
			$this->view('errors/403' , $info);
			#http_response_code(403);# nu stiu daca merge
            
		}
		public function error404(  $curenturl = "")
		{
			#print_r("Error on url:");
			#print_r($_SERVER['REQUEST_URI']);
			$info['curent_url'] = $curenturl;
			if(isset($_SERVER['HTTP_REFERER']))
			{
				$info['referer_url'] = $_SERVER['HTTP_REFERER'];
			}
			else
			{
				$info['referer_url'] = "";
			}
			$this->view('errors/404' , $info);
			#http_response_code(404);
            
		}
	}

?>