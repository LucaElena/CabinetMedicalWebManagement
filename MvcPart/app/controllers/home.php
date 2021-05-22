
<?php
	class Home extends Controller
	{

		public function index($userId = "")
		{

                  //TO DO: 
                  //aici ar trebuii sa avem 
                  //          daca nu suntem logati o pagina cu select login(as cabinet/doctor/patient)
                  //          daca suntem logati -> verficam ce timp de user avem incarcat -> redirect la pagina lui home (cabinet/index sau doctor/index sau patient/index) 
                  // temporar punem un cabine din db :
                  // $userId = "cabinet_ana";

                  $user = $this->model('UserModel');
                  print_r("Home index ", $userId);
                  if($userId)
                  {
                        $user_exist = $user->isDefined($userId);
                        if ($user_exist)
                        {
                              $user_type = $user->getUserType($userId);
                              switch ($user_type) 
                              {
                                    case "cabinet":
                                          $this->view('cabinet/index' ,  ['id' => $userId]);
                                          break;
                                    case "doctor":
                                          $this->view('doctor/index' ,  ['id' => $userId]);
                                          break;
                                    case "patient":
                                          $this->view('patient/index' ,  ['id' => $userId]);
                                          break;
                                    }
                        }
                        else
                        {
                              $this->view('errors/404',  ['id' => $userId]);
                        }
                  }
                  else
                  {
                        $this->view('errors/403',  ['id' => $userId]);
                  }
            }
      }


	

?>