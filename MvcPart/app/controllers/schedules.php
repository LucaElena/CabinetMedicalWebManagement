<?php
	class Schedules extends Controller
	{


		public function index($userName = '')
		{
			
			$user = $this->model('userModel');
			$info['username'] = $userName;
			$info['departments'] = '';
			$info['doctors'] = '';
			if($userName)
			{
				$user_exist = $user->isDefined($userName);
				if ($user_exist)
				{
					$user_type = $user->getUserType($userName);
					
					switch ($user_type) 
					{
						  case "cabinet":
								$cabinet_departments = $user->getDepartments($userName);
								$cabinet_doctors = $user->getDoctors($userName);
								foreach($cabinet_departments as $department)
								{
									$info['departments'] = $info['departments'] . '<option value ="' . $department . '"> ' . $department . ' </option>';
								}
								foreach($cabinet_doctors as $doctor)
								{
									$info['doctors'] = $info['doctors'] . '<option value ="' . $doctor['department'] . '_' . $doctor['first_name'] . '_' . $doctor['last_name'] . '"> ' . $doctor['department'] . ' ' . $doctor['first_name'] . ' ' . $doctor['last_name'] . ' </option>';
								}
								$this->view('schedules/index' , $info);
								break;
						  case "doctor":
								
								$this->view('schedules/index' , $info);
								break;
						  case "patient":
							
								$this->view('schedules/index' , $info);
								break;
					}
				}
				else
				{	
					header('Location: ' . URL . 'errors/error404' . $_SERVER['REQUEST_URI']);
				}
			}
			{	
				header('Location: ' . URL . 'errors/error403' . $_SERVER['REQUEST_URI']);
			}
		}
	}

?>