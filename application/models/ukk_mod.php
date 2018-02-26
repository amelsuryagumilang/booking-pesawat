<?php
class Ukk_mod extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function gets_by_conditions($table, $where){
		$this->db->where($where);
		return $this->db->get($table);
	}

	public function search($key){
		$this->db->like($key);
		return $this->db->get('rute');
	}

	public function tot_kursi($where=" "){
		return $this->db->query("select count(*) as tot_kursi from pemesanan ".$where);
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

	public function saveTipe($dataTipe){
		$query= $this->db->insert('tipe_trans',$dataTipe);
		return $query;
	}

	public function saveRute($dataRute){
		$query= $this->db->insert('rute',$dataRute);
		return $query;
	}

	public function saveTrans($dataTrans){
		$query= $this->db->insert('transport',$dataTrans);
		return $query;
	}

	public function saveUser($dataUser){
		$query= $this->db->insert('user',$dataUser);
		return $query;
	}

	public function savepemesan($datapemesan){
		$query= $this->db->insert('pemesan',$datapemesan);
		return $query;
	}

	public function savepemesanan($datapemesanan){
		$query= $this->db->insert('pemesanan',$datapemesanan);
		return $query;
	}

	public function getUserAll(){
		$query = $this->db->get('user');
		$result = $query->result();

		return $result;
	}

	public function getKotaAll(){
		$this->db->order_by('nama_kota', 'ASC');
		$query = $this->db->get('kota');
		$result = $query->result();

		return $result;
	}

	public function getTipeAll(){
		$query = $this->db->get('tipe_trans');
		$result = $query->result();

		return $result;
	}

	public function getTransAll(){
		$query = $this->db->get('transport');
		$result = $query->result();

		return $result;
	}

	public function hapusUser($idUser){
		$this->db->where($idUser);
		$query = $this->db->delete('pemesan',$idUser);

		return $query;
	}

	public function hapusUserSatunya($idUserSatunya){
		$this->db->where($idUserSatunya);
		$query = $this->db->delete('user',$idUserSatunya);

		return $query;
	}

	public function getuserbuatedit($where2,$user){		
		return $this->db->get_where($user,$where2);
	}

	public function getrutebuatpesen($where,$rute){		
		return $this->db->get_where($rute,$where);
	}

	public function getruterute($where){
		$this->db->from('rute');
		$this->db->where($where);
		$this->db->join('transport', 'transport.id_trans = rute.id_trans');
		return $this->db->get();
	}

	public function getpesawat($where){
		$this->db->select('transport.jml');
		$this->db->from('rute');
		$this->db->where($where);
		$this->db->join('transport', 'transport.id_trans = rute.id_trans');
		return $this->db->get();
	}

	public function getres($where){
		$this->db->from('pemesanan');
		$this->db->where($where);
		return $this->db->get();
	}

	public function updateUsers($where,$dataUser,$user){
		$this->db->where($where);
		$query = $this->db->update($user,$dataUser);
		return $query;
	}

	public function getpemesan($id_card, $reservation_code)
	{
		$qry = $this->db->query("select id_pemesan from pemesan where id_card ='$id_card' AND kode_pesan = '$reservation_code'");
		return $qry->row();
	}

	public function gethargasatuan($where)
	{
		$this->db->select("harga");
		$this->db->from('rute');
		$this->db->where('id_rute', $where);
		return $this->db->get();
	}

	public function seat($id){
 		$this->db->select('transport.jml');
 		$this->db->from('rute,transport');
 		$this->db->where('rute.id_trans = transport.id_trans');
 		$this->db->where('rute.id_rute', $id);
 		return $this->db->get();
 	}

	public function join_clientreserve($where){
		$this->db->select("rute.*,transport.*");
  		$this->db->from('rute');
  		$this->db->join('transport', 'transport.id_trans = rute.id_trans');
  		$this->db->where('rute.id_rute', $where);
  		$query = $this->db->get();
  		return $query->result();
	}

	public function filterseat($id){
 		$this->db->select('kode_kursi');
 		$this->db->where('pemesanan.id_rute',$id);
 		return $this->db->get('pemesanan');
 	}
	
}

?>