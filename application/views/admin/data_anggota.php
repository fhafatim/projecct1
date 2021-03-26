<div class="container-fluid">
<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_data"><i class="fas fa-plus fa-sm"></i>TAMBAH DATA </button>
<table>
	
<table class="table table-bordered">
<tr>
        <th>NO</th>
        <th>NIK</th>
        <th>Nama Anggota</th>
        <th>L/P</th>
        <th>tempat/tgl lahir</th>
        <th>Alamat</th>
        <th>Bidang</th>
        <th>Nama Usaha/CV/UD</th>
        <th>Merk Dagang</th>
        <th>PIRT</th>
        <th>Halal</th>
        <th>BPOM</th>
        
        
        
        
        
        <th colspan="3">AKSI</th>

        <?php 
         $no=1;
         foreach($barang as $brg) : ?>

        	<tr>
        		<td><?php echo $no++?></td>
                <td><?php echo $brg->nik?></td>
                <td><?php echo $brg->nama_anggota?></td>
                <td><?php echo $brg->jenis_kelamin?></td>
                <td><?php echo $brg->ttl?></td>
                <td><?php echo $brg->alamat?></td>
                <td><?php echo $brg->bidang?></td>
                <td><?php echo $brg->nama_usaha?></td>
                <td><?php echo $brg->merk_dagang?></td>
                <td><?php if($brg->pirt==1){
                    echo "Ya";
                }
                else{
                echo "Tidak";
                }?></td>
                 <td><?php if($brg->halal==1){
                    echo "Ya";
                }
              else{
              echo "Tidak";
              }?></td> <td><?php if($brg->bpom==1){
                echo "Ya";
            }
            else{
            echo "Tidak";
            }?></td>

        		<td><?php echo anchor('admin/data_anggota/edit/' .$brg->nik.'', '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
        		 <td onclick="javascript: return confirm('Anda Yakin Hapus?')">
        <?php echo anchor('admin/data_anggota/hapus/'.$brg->nik.'', '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> </td>
        	</tr>
        </tr>
    <?php endforeach; ?>
</table>
</div>


<!-- Modal -->

<div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM DAFTAR ANGGOTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'admin/data_anggota/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" >
      		<div class="form-group">
      			<label>NIK</label>
      			<input type="text" name="nik" class="form-control">
      		</div>


      		<div class="form-group">
      			<label>NAMA ANGGOTA</label>
      			<input type="text" name="nama_anggota" class="form-control">
      		</div>

          <div class="form-group">
      			<label>JENIS KELAMIN</label>
      			<input type="text" name="jenis_kelamin" class="form-control">
      		</div>
          <div class="form-group">
      			<label>TEMPAT TGL LAHIR</label>
      			<input type="text" name="ttl" class="form-control">
      		</div>
          <div class="form-group">
      			<label>ALAMAT</label>
      			<input type="text" name="alamat" class="form-control">
      		</div>
          <div class="form-group">
      			<label>BIDANG</label>
      			<input type="text" name="bidang" class="form-control">
      		</div>
          <div class="form-group">
      			<label>NAMA USAHA</label>
      			<input type="text" name="nama_usaha" class="form-control">
      		</div>
          <div class="form-group">
      			<label>MERK DAGANG</label>
      			<input type="text" name="merk_dagang" class="form-control">
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

      
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      	</form>
    </div>
  </div>
</div>