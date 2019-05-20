<?php
class CDatabase extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('database');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['work'] = $this->database->get_news();
        }

        public function view($slug = NULL)
        {
                $data['work_item'] = $this->database->get_news($slug);
        }
}
