<?php
	class Pages extends CI_Controller {
		public function __construct()
        {
                parent::__construct();
                $this->load->model('database');
        }
		public function view($page = 'home'){
				if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
						show_404();
				}
				$data['title'] = ucfirst($page);
				$data['housesale'] = $this->database->get_news();
				$data['assets'] = base_url().'/application/assets/';
				$this->load->view('templates/header.php', $data);
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer.php', $data);
		}
		public function insert($obj){
			
		}
	}
