<?php
	class Cabinet extends Controller
	{

		public function index($cabinetUserName = '')
		{
			
			$cabinet = $this->model('CabinetModel');

			if($cabinetUserName)
            {
				$user_exist = $cabinet->isDefined($cabinetUserName);
				if ($user_exist)
				{
					$cabinet_exist = $cabinet->isCabinet($cabinetUserName);
					if ($cabinet_exist)
					{
						$this->view('cabinet/index',  ['username' => $cabinetUserName]);
					}
					else
					{
						header('Location: ' . URL . 'errors/error403' , $_SERVER['HTTP_REFERER']);
					}
				}
				else
				{
					header('Location: ' . URL . 'errors/error403' , $_SERVER['HTTP_REFERER']);
				}
            }
			else
			{
				header('Location: ' . URL . 'errors/error403' , $_SERVER['HTTP_REFERER']);
			}

		}
		

	}

?>
