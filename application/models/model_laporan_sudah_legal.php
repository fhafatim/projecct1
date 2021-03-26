<?php
class model_laporan_sudah_legal extends CI_Model
{
    function TampilData()
    {
        $status="1";
        $this->db->select('*');
        $this->db->from('tb_pengajuan');
        $this->db->join('tb_bidang', 'tb_pengajuan.id_bidang=tb_bidang.id_bidang');
        $this->db->where('tb_pengajuan.status',$status);
        $query = $this->db->get();
        return $query;
    }
    function TampilDataBelum()
    {
        $status="2";
        $this->db->select('*');
        $this->db->from('tb_pengajuan');
        $this->db->join('tb_bidang', 'tb_pengajuan.id_bidang=tb_bidang.id_bidang');
        $this->db->where('tb_pengajuan.status',$status);
        $query = $this->db->get();
        return $query;
    }
    function TampilDataProses()
    {
        $status="3";
        $this->db->select('*');
        $this->db->from('tb_pengajuan');
        $this->db->join('tb_bidang', 'tb_pengajuan.id_bidang=tb_bidang.id_bidang');
        $this->db->where('tb_pengajuan.status',$status);
        $query = $this->db->get();
        return $query;
    }


    public function TampilDataBidang()
    {
        $this->db->select('*');
        $this->db->from('tb_bidang');
        $query = $this->db->get();
        return $query;
    }

    function FilterBidang($id)
    {
        $this->db->select('*');
        $this->db->from('tb_pengajuan');
        
        $this->db->join('tb_bidang', 'tb_pengajuan.id_bidang=tb_bidang.id_bidang');
        $this->db->where('tb_pengajuan.id_bidang',$id);

        $query = $this->db->get();
        return $query;
    }
    function FilterFinal1($id)
    {
        $this->db->select('*');
        $this->db->from('tb_pengajuan');
        
        $this->db->join('tb_bidang', 'tb_pengajuan.id_bidang=tb_bidang.id_bidang');
        $this->db->where('tb_pengajuan.id_bidang',$id);
        $this->db->where('tb_pengajuan.status',"1");

        $query = $this->db->get();
        return $query;
    }
    function FilterFinal2($id)
    {
        $this->db->select('*');
        $this->db->from('tb_pengajuan');
        
        $this->db->join('tb_bidang', 'tb_pengajuan.id_bidang=tb_bidang.id_bidang');
        $this->db->where('tb_pengajuan.id_bidang',$id);
        $this->db->where('tb_pengajuan.status',"2");

        $query = $this->db->get();
        return $query;
    }
    function FilterFinal3($id)
    {
        $this->db->select('*');
        $this->db->from('tb_pengajuan');
        
        $this->db->join('tb_bidang', 'tb_pengajuan.id_bidang=tb_bidang.id_bidang');
        $this->db->where('tb_pengajuan.id_bidang',$id);
        $this->db->where('tb_pengajuan.status',"3");

        $query = $this->db->get();
        return $query;
    }


    public function tambah_data($data,$table){
        $this->db->insert($table,$data);
        }
    
    public function edit_barang($where,$table){
    
        return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
    
        }
    
    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find ($id)
    {
        $result = $this->db->where('id_brg', $id)
                          ->limit(1)
                          ->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }                  
     }
    
      
    
    public function detail_barang($id_brg)
             {
                 $result = $this->db->where('id_brg', $id_brg)->get('tb_barang');
                 if($result->num_rows() >0){
                     return $result->result();
                 }else{
                     return false;
                 }
             }
}