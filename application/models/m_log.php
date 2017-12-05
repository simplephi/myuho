<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_log extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

        public function input($data) {
            //insert data
            $this->db->insert('t_receiver', $data);
        }

    	public function tampil_data_penerima() {
            $query  = $this->db->query("select * from t_receiver");
            return $query->result();
        }

    	public function edit($data) {
            $this->db->update('t_receiver', $data, array('id_receiver'=>$data['id_receiver']));
        }

        public function delete($id) {
            $this->db->delete('t_receiver', array('id_receiver' => $id));
        }


}
?>
