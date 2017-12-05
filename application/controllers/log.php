<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class log extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("m_log");

    }
    public function index(){
        if(empty($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{
            $data['penerima']=$this->m_log->tampil_data_penerima();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("notifikasi_receiver",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {
        //get data
        $data['id_receiver'] = "";
        $data['nama_penerima'] = $this->input->post('nama_penerima');
        $data['no_hp'] = $this->input->post('no_hp');
        //call function
        $this->m_log->input($data);
        //redirect to page
        redirect('notifikasi');
    }

    public function edit() {
        //get data
        $data['id_receiver'] = $this->input->post('id_receiver');
        $data['nama_penerima'] = $this->input->post('nama_penerima');
        $data['no_hp'] = $this->input->post('no_hp');
        //call function
        $this->m_log->edit($data);
        //redirect to page
        redirect('notifikasi');
    }

    public function delete() {

        if($this->input->post('id_receiver')!="") {
            $this->m_log->delete($this->input->post('id_receiver'));
        }
        redirect('notifikasi');

    }
}
?>
