<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pengumuman extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('pengumuman', $data);
    }

	public function tampil_data_pengumuman() {
        $query  = $this->db->query("select * from pengumuman ");
        return $query->result();
    }

  public function tampil_data_pengumuman1($id) {

          $query  = $this->db->query("select * from pengumuman where id_pengumuman='$id'");
          return $query->result();
      }


	public function edit($data) {
        $this->db->update('pengumuman', $data, array('id_pengumuman'=>$data['id_pengumuman']));
    }

    public function delete($id) {
        $this->db->delete('pengumuman', array('id_pengumuman' => $id));
    }

}
?>
