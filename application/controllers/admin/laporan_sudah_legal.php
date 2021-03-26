<?php

class laporan_sudah_legal extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'download'));
       

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
public function filter($id)
{
    $this->load->model('model_laporan_sudah_legal','mlap');
  $data['barang'] = $this->mlap->FilterBidang($id)->result();
  $data['bidang'] = $this->mlap->TampilDataBidang()->result();

  $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan_sudah_legal', $data);
		$this->load->view('templates_admin/footer');
}
public function filter1($id)
{
    $this->load->model('model_laporan_sudah_legal','mlap');
  $data['barang'] = $this->mlap->FilterFinal1($id)->result();
  $data['bidang'] = $this->mlap->TampilDataBidang()->result();

  $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan_sudah_legal', $data);
		$this->load->view('templates_admin/footer');
}
public function filter2($id)
{
    $this->load->model('model_laporan_sudah_legal','mlap');
  $data['barang'] = $this->mlap->FilterFinal2($id)->result();
  $data['bidang'] = $this->mlap->TampilDataBidang()->result();

  $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan_belum_legal', $data);
		$this->load->view('templates_admin/footer');
}
public function filter3($id)
{
    $this->load->model('model_laporan_sudah_legal','mlap');
  $data['barang'] = $this->mlap->FilterFinal3($id)->result();
  $data['bidang'] = $this->mlap->TampilDataBidang()->result();

  $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan_proses_legal', $data);
		$this->load->view('templates_admin/footer');
}
	public function index()
	{
		$this->load->model('model_laporan_sudah_legal','mlap');
        $data['barang'] = $this->mlap->TampilData()->result();
        $data['bidang'] = $this->mlap->TampilDataBidang()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan_sudah_legal', $data);
		$this->load->view('templates_admin/footer');
    }
    public function indexbelum()
	{
        $this->load->model('model_laporan_sudah_legal','mlap');
        $data['barang'] = $this->mlap->TampilDataBelum()->result();
        $data['bidang'] = $this->mlap->TampilDataBidang()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan_sudah_legal', $data);
		$this->load->view('templates_admin/footer');
    }
    public function indexproses()
	{
        $this->load->model('model_laporan_sudah_legal','mlap');
        $data['barang'] = $this->mlap->TampilDataProses()->result();
        $data['bidang'] = $this->mlap->TampilDataBidang()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan_proses_legal', $data);
		$this->load->view('templates_admin/footer');
    }


	public function tambah_aksi()
	{
        $this->load->model('model_laporan_sudah_legal','mlap');
		$nama_umkm       = $this->input->post('nama_umkm');
        $lokasi     = $this->input->post('lokasi');
        $bidang     = $this->input->post('bidang');
	    $file_laporan         = $_FILES['file_laporan']['name'];
			if ($file_laporan =''){}else{
			$config['upload_path']  ='./uploads';
			$config['allowed_types'] ='jpg|png|gif';
             
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('file_laporan')){
            	echo "upload Gagal"; die();
            }else{
            	$file_laporan=$this->upload->data('file_name');
            }
		}

		$data = array (
			'nama_umkm'      => $nama_umkm,
			'lokasi'    => $lokasi,
			'file'      => $file_laporan,
			'id_bidang'      => $bidang
	);

	$this->mlap->tambah_data($data, 'tb_pengajuan');
		redirect('admin/laporan_sudah_legal/index');

        }



    public function edit($nama_usaha)
    {
        $this->load->model('model_laporan_sudah_legal','mlap');
   	$where = array('nama_usaha' =>$nama_usaha);
    $data['barang'] = $this->mlap->edit_laporan($where,'
    	tb_pengajuan')->result();
  
  $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan_sudah_legal', $data);
		$this->load->view('templates_admin/footer');
     }   

     	public function update(){
            $this->load->model('model_laporan_sudah_legal','mlap');
			$nama_usaha     = $this->input->post('nama_usaha');
            $merk_dagang   = $this->input->post('merk_dagang');
            $alamat = $this->input->post('alamat');
            $file   = $this->input->post('file_laporan');
           

             $data = array(
            'nama_usaha'      => $nama_usaha,
            'merk_dagang'       => $merk_dagang,
            'alamat' => $alamat,
            'file_laporan'   => $file
           
);
            $where = array(
            	'nama_usaha' =>$nama_usaha
            );
            $this->model_laporan_sudah_legal->update_data($where,$data, 'tb_pengajuan');
            redirect('admin/laporan_sudah_legal');

    }  
    public function hapus ($nama_usaha)
    {
        $this->load->model('model_laporan_sudah_legal','mlap');
        $where = array ('id_pengajuan' => $nama_usaha);
        $this->mlap->hapus_data($where, 'tb_pengajuan');
        redirect('admin/laporan_sudah_legal/index');
    
    }
    public function hapus2 ($nama_usaha)
    {
        $this->load->model('model_laporan_sudah_legal','mlap');
        $where = array ('id_pengajuan' => $nama_usaha);
        $this->mlap->hapus_data($where, 'tb_pengajuan');
        redirect('admin/laporan_sudah_legal/indexbelum');
    
    }
    public function hapus3 ($nama_usaha)
    {
        $this->load->model('model_laporan_sudah_legal','mlap');
        $where = array ('id_pengajuan' => $nama_usaha);
        $this->mlap->hapus_data($where, 'tb_pengajuan');
        redirect('admin/laporan_sudah_legal/indexproses');
    
    }
    public function terima($id){
        $this->load->model('model_laporan_sudah_legal','mlap');
         $data = array(
        'status'      => "1"  
);
        $where = array(
       'id_pengajuan' =>$id
        );
        $this->mlap->update_data($where,$data, 'tb_pengajuan');
        redirect('admin/laporan_sudah_legal/index/');
}
public function tolak($id){
    $this->load->model('model_laporan_sudah_legal','mlap');
     $data = array(
    'status'      => "2"  
);
    $where = array(
        'id_pengajuan' =>$id
    );
    $this->mlap->update_data($where,$data, 'tb_pengajuan');
    redirect('admin/laporan_sudah_legal/indexbelum/');
}

public function downloads($id)
  {
    force_download('uploads/' . $id, NULL);
  }

}


