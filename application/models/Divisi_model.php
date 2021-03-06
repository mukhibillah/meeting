<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Divisi_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_divisi(){
		return $this->db->get('divisi')->result_array();
	}

	public function get_divisi_login($username,$password){
		$this->db->where('username_divisi',$username);
		$result = $this->getDivisi($password);
		if(!empty($result)){
			return $result;
		}else{
			return FALSE;
		}
	}

	public function getDivisi($password){
		$query = $this->db->get('divisi');
		if($query->num_rows()>0){
			$result = $query->row_array();
			if ($this->bcrypt->check_password($password,$result['password_divisi'])){
				return $result;
			}else{
				return array();
			}
		}else{
			return array();
		}
	}

	public function insert($data){
		$this->db->insert('divisi',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function delete($id_ruangan){
		$this->db->where('id_divisi',$id_ruangan);
		$this->db->delete('divisi');
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function getonedivisi($id_divisi){	
		$this->db->where('id_divisi',$id_divisi);
		return $this->db->get('divisi')->result_array();
	}

	public function updatedivisi($id_divisi, $data) {
        $this->db->set($data);
        $this->db->where('id_divisi',$id_divisi);
        $this->db->update('divisi');
        return ($this->db->affected_rows() != 1) ? false : true;
    }



}
