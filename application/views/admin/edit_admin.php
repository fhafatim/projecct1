<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT ADMIN</h3>

    	<?php foreach($barang as $brg) : ?>

<form  method="post" action="<?php echo base_url().'admin/data_admin/update'; ?>"
	method="post">

	<div class="for-group">
		<label>EMAIL</label>
		<input Disabled type="emailtxt" name="emailtxt" class="form-control"
		value="<?php echo $brg->email ?>">

		<input type="hidden" name="email" class="form-control"
		value="<?php echo $brg->email ?>">
		<input type="hidden" name="id" class="form-control"
		value="<?php echo $brg->id_user ?>">
	</div>

	<div class="for-group">
		<label>NAMA</label>
		<input type="text" name="name" class="form-control"
		value="<?php echo $brg->name?>">
	</div>

	<div class="for-group">
		<label>PASSWORD LAMA</label>
		<input type="password" name="password_lama" class="form-control"
		value="<?php echo md5($brg->password) ?>">
	</div>
	<div class="for-group">
		<label>PASSWORD BARU</label>
		<input type="password" name="password_baru" class="form-control">
	</div>
	<div class="for-group">
		<label>KONFIRMASI PASSWORD</label>
		<input type="password" name="konfirmasi" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>
</button>
	</form>
	<?php endforeach; ?>

</div>

