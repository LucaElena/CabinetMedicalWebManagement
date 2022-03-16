<?php


	#Core mvc:
	#Sparge url-ul pentru a extrage ce controller trebuie sa folosim , cu ce metoda si cu ce parametrii
	#default controle home cu metoda index
	# insipiratie core: https://www.youtube.com/watch?v=n2yeK6LwSII&ab_channel=CodeWithDary
	class App
	{

		#protected $controller = 'login';
		protected $controller = 'home'; # temporar nu punem partea de logare. Facem intai functionalitatile
		protected $method = 'index';
		protected $params = [];
		
		public function __construct()
		{
			$url =  $this->parseURL();

			
			#Extragem controllerul din prima parte a url-ului
			// print_r( $url);
			if(isset($url[0]) && file_exists(__DIR__ . '/../controllers/' . strtolower($url[0]) . '.php'))
			{
				$this->controller = strtolower($url[0]);
				unset($url[0]);
			}
			#Construim un obiect de tip controller
			require_once __DIR__ . '/../controllers/' . $this->controller . '.php';
			$this->controller = new $this->controller;
			
			#Extragem metoda din a doua parte a url-ului
			if(isset($url[1]) && method_exists($this->controller, $url[1]))
			{
				$this->method = strtolower($url[1]);
				unset($url[1]);
			}

			#Apelam metoda din controller
			$this->params = $url ? array_values($url) : [];
			unset($url);
			
			#echo("2:Controler = " );
			#var_dump( $this->controller);
			#echo("<br>2:Method = " );
			#var_dump($this->method);
			print_r("<br>2:Params = " );
			print_r($this->params);
			#print_r($url);
			
			call_user_func_array(array($this->controller , $this->method) , $this->params );
		}

		public function parseURL()
		{
			if(isset($_GET['url']))
			{
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				#return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)); 
				return $url; 
			}
		}
	}
 
?>