<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function simpan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[5]' , [
            'required'       => '{field} harus diisi',
            'min_length'     => 'Minimum karakter untuk field {field} adalah 5 karakter'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]', [
            'required'       => '{field} harus diisi',
            'min_length[5]'  => 'Minimum karakter untuk field {field} adalah 5 karakter',
            'valid_email'    => 'Email yang kamu masukan tidak valid'
        ]);

   
      
        if ($this->form_validation->run()){

            $nama = $this->input->post('nama');
            $nip = $this->input->post('nip');
            $tgllahir = $this->input->post('tgllahir');
            $email = $this->input->post('email');
            $ket = $this->input->post('ket');

            
        $hasil['sukses'] = "Berhasil menambahkan data";
        $hasil['error'] = true;
        $hasil['email'] = $this->input->post('email');
        } else{
            $hasil['sukses'] = false;
            $hasil['error'] = validation_errors();
        }


        echo json_encode($hasil);
    }
        
    
    public function index()
    {
        $data['title'] = 'Data Pegawai';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');

       
    }

    
}