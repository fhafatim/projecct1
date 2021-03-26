<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url', 'form'); 
        $this->load->library('form_validation');
        $this->load->view('_partials/navbar.php');
        is_logged_in();
    }
    public function index()
    {
        $this->load->view('pengajuan');
        
    }
    public function simpan(){
        $d = $_POST;
        $f = $_FILES;
        $arr = [
            'nama_usaha' => $d['nama_usaha'],
            'alamat_usaha' => $d['alamat_usaha'],
            'nama_pemilik' => $d['nama_pemilik'],
            'nik' => $d['nik'],
            'alamat_rumah' => $d['alamat_rumah'],
            'no_hp' => $d['no_hp'],
            'jenis_usaha' => $d['jenis_usaha'],
            'modal' => $d['modal'],
            'aset' => $d['aset'],
            'omset' => $d['omset'],
            'laba' => $d['laba'],
            'tenaga_kerja' => $d['tenaga_kerja'],
            'pinjaman_dana'=> $d['pinjaman_dana'],
            'pembinaan_usaha'=> $d['pembinaan_usaha'],
            'tahun_usaha' => $d['tahun_usaha']
        ];
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
 
 
        $this->load->library('upload', $config);
        $ktp = "";
        $foto_pemilik = "";
        $foto_produk = "";
        $pernyataan = "";
        if ($this->upload->do_upload('ktp')) 
        {
            $ktp = $this->upload->data("file_name");
            if ($this->upload->do_upload('foto_pemilik')) 
            {
                $foto_pemilik = $this->upload->data("file_name");
                if ($this->upload->do_upload('foto_produk')) 
                {
                    $foto_produk = $this->upload->data("file_name");
                    if ($this->upload->do_upload('pernyataan')) 
                    {
                        $pernyataan = $this->upload->data("file_name");
                        $arr['ktp'] = $ktp;
                        $arr['foto_pemilik'] = $foto_pemilik;
                        $arr['foto_produk'] = $foto_produk;
                        $arr['pernyataan'] = $pernyataan;
                        $q = $this->db->insert("pengajuan", $arr);
                        if($q){
                            echo "<script>alert('data sudah terkirimkan, data masih di proses dibagian admin');window.location.href='". base_url('') ."'</script>";
                        }
                    }
                }
            }
            
        }else{
            $error = array('error' => $this->upload->display_errors());
            echo"<script>alert('$error');window.location.href='../pengajuan'</script>";
            // echo "<script>alert('gagal');</script>";
        }
    }

}

/* End of file Controllername.php */
