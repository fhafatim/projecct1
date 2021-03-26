<div class="container-fluid">
<div style="padding-bottom: 10px; margin-left: 10px">
    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Bidang
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <?php foreach ($bidang as $t) : ?>
        <a class="dropdown-item" href="<?= base_url('admin/laporan_sudah_legal/filter2/' . $t->id_bidang); ?>"><?= $t->bidang?></a>
      <?php endforeach; ?>
    </div>
<table>
	
<table class="table table-bordered">
<tr>
        <th>NO</th>
        <th>Nama UMKM</th>
        <th>Lokasi</th>
        <th>File Laporan</th>
        <th colspan="3">AKSI</th>

        <?php 
         $no=1;
         foreach($laporan as $lpr) : ?>

        	<tr>
        		<td><?php echo $no++?></td>
                <td><?php echo $lpr->nama_umkm?></td>
                <td><?php echo $lpr->lokasi?></td>
                <td><?php echo $lpr->file?></td>
        		<td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
        		<td><?php echo anchor('admin/data_barang/edit/', '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
        		 <td onclick="javascript: return confirm('Anda Yakin Hapus?')">
        <?php echo anchor('admin/data_barang/hapus/', '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> </td>
        	</tr>
        </tr>
    <?php endforeach; ?>
</table>
<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_data"><i class="fas fa-plus fa-sm"></i>TAMBAH DATA </button>
</div>


<!-- Modal -->

<div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'admin/laporan_sudah_legal/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" >
      		<div class="form-group">
      			<label>NAMA UMKM</label>
      			<input type="text" name="nama_umkm" class="form-control">
      		</div>


      		<div class="form-group">
      			<label>LOKASI</label>
      			<input type="text" name="lokasi" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>FILE LAPORAN</label><br>
      			<input type="file" name="file_laporan" class="form-control">
      		</div>

          <div class="form-group">
      			<label>BIDANG</label>
            <select class="form-control" name="bidang">
            <?php foreach ($bidang as $t) : ?>
            <option value="<?php echo $t->id_bidang ?>"><?php echo $t->bidang ?></option>
      <?php endforeach; ?>
              
                
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