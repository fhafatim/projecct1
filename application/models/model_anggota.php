<?php
class model_anggota extends CI_Model
{
    function TampilData()
    {
        
        $this->db->select('*');
        $this->db->from('tb_anggota');
        $query = $this->db->get();
        return $query;
    }

    public function tambah_data($data,$table){
        $this->db->insert($table,$data);
        }
    
    public function edit_anggota($where,$table){
    
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
    public function find ($nik)
    {
        $result = $this->db->where('nik', $nik)
                          ->limit(1)
                          ->get('tb_anggota');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }                  
     }
    
      
    
    public function detail_anggota($nik)
             {
                 $result = $this->db->where('nik', $nik)->get('tb_anggota');
                 if($result->num_rows() >0){
                     return $result->result();
                 }else{
                     return false;
                 }
             }
}