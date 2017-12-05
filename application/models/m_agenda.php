<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_agenda extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('agenda', $data);
    }

	public function tampil_data_agenda() {
        $query  = $this->db->query("select * from agenda ");
        return $query->result();
    }

  public function tampil_data_agenda1($id) {

          $query  = $this->db->query("select * from agenda where id_agenda='$id'");
          return $query->result();
      }


	public function edit($data) {
        $this->db->update('agenda', $data, array('id_agenda'=>$data['id_agenda']));
    }

    public function delete($id) {
        $this->db->delete('agenda', array('id_agenda' => $id));
    }

}
?>
