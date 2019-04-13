<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

    public function index()
    {
        echo 'Hi! i am index method';
	}

	public function world()
	{
		echo 'Welcome sadi! ';
	}

    public function view()
    {
        $this->load->view('welcome_sadi');
    }
}
