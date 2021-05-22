<?php
	class Cabinet extends Controller
	{

		public function index($cabinetId = '')
		{
			
			$cabinet = $this->model('CabinetModel');

			if($cabinetId)
            {
				$cabinet_exist = $cabinet->isDefined($cabinetId);
				if ($cabinet_exist)
				{
					$this->view('cabinet/index',  ['id' => $cabinetId]);
					// $result = $cabinet->getData($cabinetId);
				}
				else
				{
					$this->view('errors/404',  ['id' => $cabinetId]);
				}
            }
            else
            {
                $this->view('errors/403',  ['id' => $cabinetId]);
            }

		}
		

	}

?>
