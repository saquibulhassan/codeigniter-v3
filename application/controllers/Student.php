<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function index()
    {
        $this->load->view('student/list.php');
	}

    public function create()
    {
        $this->load->view('student/form.php');
    }
}
