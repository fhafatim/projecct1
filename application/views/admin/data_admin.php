<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_admin"><i class="fas fa-plus fa-sm"></i>TAMBAH ADMIN </button>
<table>
	
<table class="table table-bordered">
<tr>
        <th>NO</th>
        <th>EMAIL</th>
        <th>NAMA</th>
        <th>PASSWORD</th>
        
        <th colspan="3">AKSI</th>
        <?php 
        $no=1;
        foreach($barang as $brg) : ?>

        	<tr>
        		<td><?php echo $no++ ?></td>
        		<td><?php echo $brg->email ?></td>
                <td><?php echo $brg->name ?></td>
                <td><?php echo $brg->password ?></td>
            
        		<td><?php echo anchor('admin/data_admin/edit/'.$brg->id_user, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
        		 <td onclick="javascript: return confirm('Anda Yakin Hapus?')">
        <?php echo anchor('admin/data_admin/hapus/'.$brg->id_user, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> </td>
        	</tr>
        </tr>
    <?php endforeach; ?>
</table>
</div>
<div class="modal fade" id="tambah_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM DAFTAR ADMIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'admin/data_admin/tambah_admin'; ?>" method="post" enctype="multipart/form-data" >
      		<div class="form-group">
      			<label>EMAIL</label>
      			<input type="text" name="email" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>NAMA</label>
      			<input type="text" name="name" class="form-control">
      		</div>
          <div class="form-group">
      			<label>PASSWORD</label>
      			<input type="password" name="password" class="form-control">
      		</div>
         
      	</div>

        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
     
      </div>
      
      	</form>
    </div>
  </div>