<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_notif extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        //insert data
        $this->db->insert('berita', $data);
    }

	public function tampil_data_penerima() {

        $query  = $this->db->query("select * from berita");
        return $query->result();
    }

	public function tampil_data_penerima1($id) {

        $query  = $this->db->query("select * from berita where id_berita='$id'");
        return $query->result();
    }


	public function edit($data) {
        $this->db->update('berita', $data, array('id_berita'=>$data['id_berita']));
    }

    public function delete($id) {
        $this->db->delete('berita', array('id_berita' => $id));
    }


}
?>
