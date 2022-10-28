<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Form Nomor Induk Koperasi';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('form/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('identity_koperasi', ['form' => $this->input->post('form')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('form');
        }
    }
    public function insert()
    {
        var_dump($_POST);
        
       if($this->input->post('nik')){
            $this->db->insert('identity_koperasi', $this->input->post());

        } 
        redirect('menu/form');
    }
}