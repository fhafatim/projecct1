    <?php 

class model_admin extends CI_Model{
	public function tampil_data(){
		return $this->db->get('user');
	}

	public function tambah_admin($data,$table){
	$this->db->insert($table,$data);
	}

public function edit_admin($where,$table){

	return $this->db->get_where($table,$where);
}
public function update_data($where,$data,$table){
$this->db->where($where);
$this->db->update($table,$data);

	}

public function hapus_data($whare,$table){
	$this->db->where($whare);
	$this->db->delete($table);
}
public function find ($id)
{
	$result = $this->db->where('id', $id)
	                  ->limit(1)
	                  ->get('user');
	if($result->num_rows() > 0){
		return $result->row();
	}else{
		return array();
	}                  
 }

  

public function detail_user($id_brg)
         {
         	$result = $this->db->where('id', $id_brg)->get('user');
         	if($result->num_rows() >0){
         		return $result->result();
         	}else{
         		return false;
         	}
         }
}