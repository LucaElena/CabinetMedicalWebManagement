<?php
	class Cabinet extends Controller
	{

		public function index($cabinetUserName = '')
		{
			
			$user = $this->model('userModel');
			$info['username'] =  $cabinetUserName;
			$info['type'] = 'cabinet';
			//TO DO : diferent general bar for different users types:
			$info['generalbar'] = '
				<li>
				<a href="/cabinet/' . $cabinetUserName . '"><img class="logo" src="/images/CMED.jpg" alt="Cmed logo"></a>
				</li>
				<li>
					<a class="header_button" href="/schedules/' . $cabinetUserName . '">Schedules</a>
				</li>
				<li>
					<a class="header_button" href="/files/' . $cabinetUserName . '">Patients Files</a>
				</li>
				<li>
					<a class="header_button" href="/adduser/patient/' . $cabinetUserName . '">Invite Patient</a>
				</li>
				<li>
					<a class="header_button" href="/adduser/doctor/' . $cabinetUserName . '">Invite Doctor</a>
				</li>
				<li>
					<a class="header_button" href="/chat/' . $cabinetUserName . '">Chat</a>
				</li>
				<li class="login">
					<a href="/login">Log In</a>
				</li>
				';



 			if($cabinetUserName)
            {
				$user_exist = $user->isDefined($cabinetUserName);
				if ($user_exist)
				{
					$cabinet_exist = $user->isCabinet($cabinetUserName);
					if ($cabinet_exist)
					{
						$this->view('user/index', $info);
					}
					else
					{
						header('Location: ' . URL . 'errors/error403' , $_SERVER['REQUEST_URI']);
					}
				}
				else
				{
					header('Location: ' . URL . 'errors/error403' , $_SERVER['REQUEST_URI']);
				}
            }
			else
			{
				header('Location: ' . URL . 'errors/error403' , $_SERVER['REQUEST_URI']);
			}

		}
		

	}

?>
