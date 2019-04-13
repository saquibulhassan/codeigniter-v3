<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['students'] = $this->db->get('student')->result();
        $this->load->view('student/list', $data);
    }

    public function create()
    {
        $std = ['id' => '', 'name' => '', 'father_name' => '', 'mother_name' => '', 'email' => '', 'phone' => '', 'address' => '', 'class' => '', 'roll' => ''];

        $data['std'] = (object) $std;

        $this->load->view('student/form', $data);
    }

    public function save()
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('father_name', 'father name', 'required');
        $this->form_validation->set_rules('mother_name', 'mother name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('class', 'class', 'required|integer');
        $this->form_validation->set_rules('roll', 'roll', 'required|integer');

        if ($this->form_validation->run() == false) {
            $this->create();
        } else {
            $data['name']        = $this->input->post('name');
            $data['father_name'] = $this->input->post('father_name');
            $data['mother_name'] = $this->input->post('mother_name');
            $data['email']       = $this->input->post('email');
            $data['phone']       = $this->input->post('phone');
            $data['address']     = $this->input->post('address');
            $data['class']       = $this->input->post('class');
            $data['roll']        = $this->input->post('roll');

            $id = $this->input->post('id');

            if(empty($id)) {
                $this->db->insert('student', $data);
                redirect('student/create?status=success');
            } else {
                $this->db->update('student', $data, ['id' => $id]);
                redirect('student?status=update_success');
            }
        }
    }

    public function edit($id)
    {
        $data['std'] = $this->db->where('id', $id)->get('student')->row();

        $this->load->view('student/form', $data);
    }

    public function delete($id)
    {
        $this->db->delete('student', ['id' => $id]);

        redirect('student?status=delete_success');
    }
}
