<?php
class Ukk_mod extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function getDataAdminByEmailPass($where,$table){
		return $this->db->get_where($table,$where);
		// $result = $query->result();

		// return $result;
	}

	public function getAdminByUsername($where,$dataadmin){
		$query = $this->db->get_where($dataadmin,$where);
		$result = $query->result();

		return $result;
	}

	public function cek_user($uname, $pass)
	{
		$qry = $this->db->query("select * from user where username='$uname' and password='$pass' limit 1");
		return $qry;
	}

	public function saveUser($dataUser){
		$query= $this->db->insert('pemesan',$dataUser);
		return $query;
	}

	public function saveUserSatunya($dataUserSatunya){
		$query= $this->db->insert('user',$dataUserSatunya);
		return $query;
	}

	public function getUserAll(){
		$query = $this->db->get('pemesan');
		$result = $query->result();

		return $result;
	}
}

?>