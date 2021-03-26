<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT ANGGOTA</h3>

    	<?php foreach($barang as $brg) : ?>

<form  method="post" action="<?php echo base_url().'admin/data_anggota/update'; ?>"
	method="post">

	<div class="for-group">
		
		<label>NIK</label>
		<input type="text" name="nik" class="form-control"
		value="<?php echo $brg->nik ?>">
	</div>

	<div class="for-group">
		<label>NAMA ANGGOTA</label>
		<input type="text" name="nama_anggota" class="form-control"
		value="<?php echo $brg->nama_anggota ?>">
	</div>

	<div class="for-group">
		<label>L/P</label>
		<input type="text" name="jenis_kelamin" class="form-control"
		value="<?php echo $brg->jenis_kelamin ?>">
	</div>

<div class="for-group">
		<label>TEMPAT TGL LAHIR</label>
		<input type="text" name="ttl" class="form-control"
		value="<?php echo $brg->ttl ?>">
	</div>
    <div class="for-group">
		<label>ALAMAT</label>
		<input type="text" name="alamat" class="form-control"
		value="<?php echo $brg->alamat ?>">
	</div>
    <div class="for-group">
		<label>BIDANG</label>
		<input type="text" name="bidang" class="form-control"
		value="<?php echo $brg->bidang ?>">
	</div>
    <div class="for-group">
		<label>NAMA USAHA/CV/UD</label>
		<input type="text" name="nama_usaha" class="form-control"
		value="<?php echo $brg->nama_usaha ?>">
	</div>
	<div class="for-group">
		<label>MERK DAGANG</label>
		<input type="text" name="merk_dagang" class="form-control"
		value="<?php echo $brg->merk_dagang ?>">
	</div>
    <label>LEGALITAS USAHA</label>
      		<div class="form-group">
      			<label>PIRT</label>
            <select class="form-control" name="pirt">
              <option value="1">Memiliki</option>
                <option value="0">Tidak Memiliki</option>
                  
                    </select>
      		</div>
          <div class="form-group">
      			<label>HALAL</label>
            <select class="form-control" name="halal">
              <option value="1">Memiliki</option>
                <option value="0">Tidak Memiliki</option>
                  
                    </select>
      		</div>
          <div class="form-group">
      			<label>BPOM</label>
            <select class="form-control" name="bpom">
              <option value="1">Memiliki</option>
                <option value="0">Tidak Memiliki</option>
                  
                    </select>
      		</div>


<button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>
</button>
	</form>
	<?php endforeach; ?>
</div>

