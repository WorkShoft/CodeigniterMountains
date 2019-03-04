<?php
class Mountains extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
	$this->load->model('mountain_model');
        $this->load->helper('url_helper');
    }

    public function view($slug = NULL)
    {
        $data['mountains_item'] = $this->mountain_model->get_mountains($slug);
    }

    public function index()
    {
	$data['mountains'] = $this->mountain_model->get_mountains();
        $data['title'] = 'Mountains archive';

        $this->load->view('templates/header', $data);
        $this->load->view('mountains/index', $data);
        $this->load->view('templates/footer');
    }
}
