<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller
{

    public function index()
    {
        $this->load->view('student/list');
    }

    public function create()
    {
        $this->load->library('form_validation');

        $this->load->view('student/form');
    }

    public function save()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('father_name', 'father name', 'required');
        $this->form_validation->set_rules('mother_name', 'mother name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('class', 'class', 'required|integer');
        $this->form_validation->set_rules('roll', 'roll', 'required|integer');

        if ($this->form_validation->run() == false) {
            $this->load->view('student/form');
        } else {
            $data['name']        = $this->input->post('name');
            $data['father_name'] = $this->input->post('father_name');
            $data['mother_name'] = $this->input->post('mother_name');
            $data['email']       = $this->input->post('email');
            $data['phone']       = $this->input->post('phone');
            $data['address']     = $this->input->post('address');
            $data['class']       = $this->input->post('class');
            $data['roll']        = $this->input->post('roll');

            $this->load->database();
            $this->db->insert('student', $data);

            redirect('student/create?status=success');
        }

    }
}
