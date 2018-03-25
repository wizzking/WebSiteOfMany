<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');
require_once APPPATH.'controllers/Restaurant/Generales.php';
class Events extends Generales {
	
		public function __construct()
		{	parent::__construct();
			$this->load->model("Restaurant/EventsModel");
		}

		public function index()
		{	$data['events']	= 	$this->EventsModel->GetAllEvents();
			$data['pager'] 	=	array('uno' => "1 - 3",'dos' => '4 - 6', 'tres' => '7 - 9');
			$data['time']	=	$this->GetHora();
			$this->load->view('FrontEnd/Event',$data);
		}

		public function changePage(){
			$fromPage 		=	$this->input->post('dataPageF');
			$fromPage = json_decode($fromPage,true);
			$data['pager'] 	=	array('uno' => $fromPage['uno']." - ".((int)$fromPage['uno']+2),
				'dos' => $fromPage['dos']." - ".((int)$fromPage['dos']+2), 
				'tres' => $fromPage['tres']." - ".((int)$fromPage['tres']+2));
			$data['events']	= 	$this->EventsModel->GetEventsAfter($fromPage['uno']);
			$data['time']	=	$this->GetHora();
			$this->load->view('FrontEnd/Event',$data);

		}
}