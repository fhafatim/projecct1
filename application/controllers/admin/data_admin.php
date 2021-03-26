    <?php

class data_admin extends CI_Controller{

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
	
	$this->load->model('model_admin');
}
	public function index()
	{
			
		$data['barang'] = $this->model_admin->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_admin', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_admin()
	{
		$data['barang'] = $this->model_admin->tampil_data()->result();
		$this->model_admin->tambah_admin($data, 'user');
            $email   = $this->input->post('email');
            $name = $this->input->post('name');
            $password   = $this->input->post('password');

		$data = array (
			'email'      => $email,
			'name'      => $name,
			'password'       => $password
            
	);

	$this->model_admin->tambah_admin($data, 'user');
		redirect('admin/data_admin');

        }



    public function edit($id)
    {
   	$where = array('id_user' =>$id);
    $data['barang'] = $this->model_admin->edit_admin($where,'
    	user')->result();
  
  $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_admin', $data);
		$this->load->view('templates_admin/footer');
     }   

     	public function update(){
			$id = $this->input->post('id');
			$email   = $this->input->post('email');
            $name = $this->input->post('name');
            $password   = $this->input->post('password');
			$password_baru   = $this->input->post('password_baru');
			$konfirmasi  = $this->input->post('konfirmasi');

			if ($password_baru==$konfirmasi){
				$data = array(
					'email'      => $email,
					'name'      => $name,
					'password'      => md5($konfirmasi)
			   
	);
				$where = array(
					'id_user' =>$id
				);
				$this->model_admin->update_data($where,$data, 'user');
				redirect('admin/data_admin/index');
			}
			else{
				redirect('admin/data_admin/edit');
			}
           

    }  
    	public function hapus ($id)
{
	$whare = array ('id_user' => $id);
	$this->model_admin->hapus_data($whare, 'user');
	redirect('admin/data_admin/index');

}


}

