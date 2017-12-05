<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class agenda extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("m_agenda");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
        if(empty($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{
            $data['agenda']=$this->m_agenda->tampil_data_agenda();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("agenda",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {
       $this->load->library('upload');

       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/agenda/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '10240'; //maksimum besar file 2M
       $config['max_width']  = '2048'; //lebar maksimum 1288 px
       $config['max_height']  = '2048'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'gambar' =>$gbr['file_name'],
                  'judul' =>$this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
                );

                $this->m_agenda->input($data);

            }
        }

        else
        {
        $data['judul'] = $this->input->post('judul');
        $data['isi'] = $this->input->post('isi');
        $data['gambar'] = $this->input->post('gambar');
        //call function
        $this->m_agenda->input($data);
        //redirect to page

      }
          redirect('agenda'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      $this->load->library('upload');

      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/agenda/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '2048'; //maksimum besar file 2M
      $config['max_width']  = '1288'; //lebar maksimum 1288 px
      $config['max_height']  = '768'; //tinggi maksimu 768 px
      $config['file_name'] = $nmfile; //nama yang terupload nantinya

      $this->upload->initialize($config);

      if($_FILES['gambar']['name'])
       {
           if ($this->upload->do_upload('gambar'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'id_agenda' =>$this->input->post('id_agenda'),
                 'gambar' =>$gbr['file_name'],
                 'judul' =>$this->input->post('judul'),
                 'isi' =>$this->input->post('isi'),
               );
               $this->m_agenda->edit($data);
           }
       }

       else
       {

       $data['id_agenda'] =$this->input->post('id_agenda');
       $$data['judul'] = $this->input->post('judul');
       $data['isi'] = $this->input->post('isi');
       $data['gambar'] = $this->input->post('gambar');
        //call function
       $this->m_agenda->edit($data);
       //redirect to page

     }
         redirect('agenda'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('id_agenda')!="") {
            $this->m_agenda->delete($this->input->post('id_agenda'));
        }
        redirect('agenda');
    }
}
?>
