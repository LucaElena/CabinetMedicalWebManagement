<?php
	class Schedules extends Controller
	{


		public function index($userName = '' , $departmentSelected = '' , $doctorSelected = '')
		{

			//print_r("Current day " . date("Y-m-d D w H:i:s"));
			$current_time = time(); //salvam timestamp-ul curent
			$book_start_time = $current_time;
			
			if ( date("w", $current_time) > 1 ) // numarul zile din saptamana > 1. De ex miercuri = 3 -> din timpul curent scadem 2 zile si aflam ziua de luni
			{	//calculam timestamp-ul zilei de luni
				$no_days_to_subtract = intval(date("w", $current_time)) - 1; // cate zile trebuie sa scadem
				$book_start_time = strtotime(date('Y-m-d', (strtotime ( '-' . $no_days_to_subtract . ' day' , $current_time ) ) ) );
				//print_r("<br>Calculam Luni = " . date("Y-m-d" , $book_start_time));
			}
			

			$user = $this->model('userModel');
			
			$info['username'] = $userName;
			$info['departments'] = '';
			$info['doctors'] = '';
			$info['generalbar'] = '';
			$info['schedule_forms'] = '';
			$info['type'] = '';
			$info['departament_option_value'] = '<option value="Department"> Department </option>';
			$info['doctor_option_value'] = '<option value="Doctor"> Doctor </option>';
			$info['schedule_calendar_bar_week']  = '';
			$info['schedule_calendar_bar_month']  = '<div class="schedule__calendar__month" id="selected_month">'.strtoupper(date("F Y", $book_start_time)).'</div>';
			$info['schedule_calendar_inside']  = '';
			
			for ($i = 0; $i <= 6; $i++)
			{
				$info['schedule_calendar_bar_week'] .= 
					'<div class="schedule__calendar__inside__head">
					<div class="schedule__calendar__inside__day" id="day_'.$i.'_schedule">'. strtoupper(date("D d/m",  (strtotime ( '+' . $i . ' day' , $book_start_time )))).'</div>
					</div>';
			}
			for ($col = 1; $col <= 5; $col++)
			{
				for ($row = 1; $row <= 7; $row++)
				{
					#echo('<br>calendar_row'.$row.'_col'.$col);
					$staus_programare = "open";
					$curent_hour = 7+$col;
					if($curent_hour < 10)
					{
						$curent_hour = "0" . $curent_hour;
					}
					if($row > 5 or $curent_hour > 18)
					{
						$staus_programare = "closed";
					}
					
					

					$info['schedule_calendar_inside'] .= '<div class="schedule__calendar__inside__hours_btn">';
					$info['schedule_calendar_inside'] .= '<button type="button" class="schedule__calendar__inside__hours_btn__'.$staus_programare.'" value="' . $curent_hour. ':00"';
					$info['schedule_calendar_inside'] .= 'id="calendar_row'.$row.'_col'.$col.'">' . $curent_hour. ':00</button></div>';

				}
			}
		


		

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
									if($departmentSelected)
									{# only selected department - trim spaces and lower cases to be able to compare the strings 
										if( strtolower(trim($department)) == strtolower(trim($departmentSelected)) )
										{
											$info['departament_option_value'] = '<option value="' . ucwords($department) . '"> ' . ucwords($department) . ' </option>';
										}
										else
										{# all departments
											$info['departments'] = $info['departments'] . '<option value ="' . $department . '"> ' . $department . ' </option>';
										}
									}
									else
									{# all departments
										$info['departments'] = $info['departments'] . '<option value ="' . $department . '"> ' . $department . ' </option>';
									}
									
								}
								foreach($cabinet_doctors as $doctor)
								{
									if($doctorSelected)
									{# only selected doctor -  trim spaces and lower cases to be able to compare the strings 
										if( strtolower($doctor['first_name'] . $doctor['last_name']) == strtolower(trim($doctorSelected)))
										{
											$info['doctor_option_value'] = '<option value="' . $doctor['department'] . '_' . $doctor['first_name'] . '_' . $doctor['last_name'] . '"> ' . $doctor['department'] . ' ' . $doctor['first_name'] . ' ' . $doctor['last_name'] . ' </option>';
										}
										else
										{
											$info['doctors'] = $info['doctors'] . '<option value ="' . $doctor['department'] . '_' . $doctor['first_name'] . '_' . $doctor['last_name'] . '"> ' . $doctor['department'] . ' ' . $doctor['first_name'] . ' ' . $doctor['last_name'] . ' </option>';
										}
									}
									else
									{
										$info['doctors'] = $info['doctors'] . '<option value ="' . $doctor['department'] . '_' . $doctor['first_name'] . '_' . $doctor['last_name'] . '"> ' . $doctor['department'] . ' ' . $doctor['first_name'] . ' ' . $doctor['last_name'] . ' </option>';
									}
								}
								$info['generalbar'] = str_replace("GENERIC_USERNAME",$userName,GENERAL_CABINET_BAR);
								break;

						  case "doctor":
								$info['generalbar'] = str_replace("GENERIC_USERNAME",$userName,GENERAL_DOCTOR_BAR);
								break;
						  case "patient":
								
								$info['generalbar'] = str_replace("GENERIC_USERNAME",$userName,GENERAL_PATIENT_BAR);
								break;
					}
					$this->view('schedules/index' , $info);
				}
				else
				{	
					header('Location: ' . URL . 'errors/error404' . $_SERVER['REQUEST_URI']);
				}
			}
			else
			{	
				header('Location: ' . URL . 'errors/error403' . $_SERVER['REQUEST_URI']);
			}
			
		}
	}

?>
