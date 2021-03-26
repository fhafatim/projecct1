    <?php 

class Model_user extends CI_Model{
	public function tampil_data(){
		return $this->db->get('user');
	}

	public function tambah_user($data,$table){
	$this->db->insert($table,$data);
	}

public function edit_user($where,$table){

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
	$result = $this->db->where('id_user', $id)
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
         	$result = $this->db->where('id_user', $id_brg)->get('user');
         	if($result->num_rows() >0){
         		return $result->result();
         	}else{
         		return false;
         	}
         }
}