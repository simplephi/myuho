<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class notifikasi extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("m_notif");
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        if(empty($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{
            $data['berita']=$this->m_notif->tampil_data_penerima();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("notifikasi_receiver",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {
       $this->load->library('upload');

       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/image/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docx|doc|xls|xlsx|pdf'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '10240'; //maksimum besar file 2M
       $config['max_width']  = '3000'; //lebar maksimum 1288 px
       $config['max_height']  = '3000'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'gambar_berita' =>$gbr['file_name'],
                  'nama_berita' =>$this->input->post('nama_berita'),
                  'ket_berita' =>$this->input->post('ket_berita'),
                  'prioritas' =>$this->input->post('prioritas')
                );
                $this->m_notif->input($data);
            }
        }
        else
        {
        $data['nama_berita'] = $this->input->post('nama_berita');
        $data['ket_berita'] = $this->input->post('ket_berita');
        $data['gambar_berita'] = $this->input->post('gambar');
        $data['prioritas'] = $this->input->post('prioritas');
        //call function
        $this->m_notif->input($data);
        //redirect to page

      }
          redirect('notifikasi'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      $this->load->library('upload');

      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/image/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docx|doc|xls|xlsx|pdf'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '10240'; //maksimum besar file 2M
      $config['max_width']  = '3000'; //lebar maksimum 1288 px
      $config['max_height']  = '3000'; //tinggi maksimu 768 px
      $config['file_name'] = $nmfile; //nama yang terupload nantinya

      $this->upload->initialize($config);

      if($_FILES['gambar']['name'])
       {
           if ($this->upload->do_upload('gambar'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'id_berita' =>$this->input->post('id_berita'),
                 'gambar_berita' =>$gbr['file_name'],
                 'nama_berita' =>$this->input->post('nama_berita'),
                 'ket_berita' =>$this->input->post('ket_berita'),
                 'prioritas' =>$this->input->post('prioritas')

               );
               $this->m_notif->edit($data);
           }
       }

       else
       {

       $data['id_berita'] =$this->input->post('id_berita');
       $data['nama_berita'] = $this->input->post('nama_berita');
       $data['ket_berita'] = $this->input->post('ket_berita');
       $data['gambar_berita'] = $this->input->post('gambar');
       $data['prioritas'] = $this->input->post('prioritas');
       //call function
       $this->m_notif->edit($data);
       //redirect to page

     }
         redirect('notifikasi'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('id_berita')!="") {
            $this->m_notif->delete($this->input->post('id_berita'));
        }
        redirect('notifikasi');

    }

}
?>
