<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        //Load database
        $this->load->database();

        echo "<pre>";
        print_r($this->db);
        echo "</pre>";

        exit();
    }
	
    public function index()
	{
		// $this->load->view('welcome_message');
        echo "Hello CodeIgniter";
	}

    public function About()
	{
		// $this->load->view('welcome_message');
        echo "This is an about page";
	}
}


