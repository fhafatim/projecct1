<?php

class data_anggota extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id')  != '1'){
            
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
               </div>');
			redirect('Auth');
	}
}

	public function index()
	{
        $this->load->model('model_anggota','mlap');
		$data['barang'] = $this->mlap->TampilData()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_anggota', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$this->load->model('model_anggota','mlap');
		$nik      = $this->input->post('nik');
		$nama_anggota     = $this->input->post('nama_anggota');
		$jenis_kelamin    = $this->input->post('jenis_kelamin');
		$ttl    		 = $this->input->post('ttl');
		$alamat     = $this->input->post('alamat');
		$bidang     = $this->input->post('bidang');
		$nama_usaha     = $this->input->post('nama_usaha');
		$merk_dagang     = $this->input->post('merk_dagang');
		$pirt     = $this->input->post('pirt');
		$halal     = $this->input->post('halal');
		$bpom     = $this->input->post('bpom');

		$data = array (
			'nik'     				 => $nik,
			'nama_anggota'    		=> $nama_anggota,
			'jenis_kelamin'      	=> $jenis_kelamin,
			'ttl'     				 => $ttl,
			'alamat'     				 => $alamat,
			'bidang'     				 => $bidang,
			'nama_usaha'     				 => $nama_usaha,
			'merk_dagang'     				 => $merk_dagang,
			'pirt'     				 => $pirt,
			'halal'     				 => $halal,
			'bpom'     				 => $bpom
			
	);

	$this->mlap->tambah_data($data, 'tb_anggota');
		redirect('admin/data_anggota');

        }



    public function edit($nik)
    {
		$this->load->model('model_anggota','mlap');
   	$where = array('nik' =>$nik);
    $data['barang'] = $this->mlap->edit_anggota($where,'tb_anggota')->result();
  
  $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_anggota', $data);
		$this->load->view('templates_admin/footer');
     }   

     	public function update(){
			$this->load->model('model_anggota','mlap');
			$nik      = $this->input->post('nik');
			$nama_anggota     = $this->input->post('nama_anggota');
			$jenis_kelamin    = $this->input->post('jenis_kelamin');
			$ttl    		 = $this->input->post('ttl');
			$alamat     = $this->input->post('alamat');
			$bidang     = $this->input->post('bidang');
			$nama_usaha     = $this->input->post('nama_usaha');
			$merk_dagang     = $this->input->post('merk_dagang');
			$pirt     = $this->input->post('pirt');
			$halal     = $this->input->post('halal');
			$bpom     = $this->input->post('bpom');

		$data = array (
			'nik'     				 => $nik,
			'nama_anggota'    		=> $nama_anggota,
			'jenis_kelamin'      	=> $jenis_kelamin,
			'ttl'     				 => $ttl,
			'alamat'     				 => $alamat,
			'bidang'     				 => $bidang,
			'nama_usaha'     				 => $nama_usaha,
			'merk_dagang'     				 => $merk_dagang,
			'pirt'     				 => $pirt,
			'halal'     				 => $halal,
			'bpom'     				 => $bpom
			
	);
            $where = array(
            	'nik' =>$nik
            );
            $this->mlap->update_data($where,$data, 'tb_anggota');
            redirect('admin/data_anggota');

    }  
    	public function hapus ($nik)
{
	$this->load->model('model_anggota','mlap');
	$whare = array ('nik' => $nik);
	$this->mlap->hapus_data($whare, 'tb_anggota');
	redirect('admin/data_anggota');

}


}

