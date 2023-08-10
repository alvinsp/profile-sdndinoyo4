<div class="container-fluid">
	<h4><b>SETTING ESKUL</b></h4>
	<button class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Ekstrakulikuler</button>
	<table class="table table-bordered">
		<tr>
			<th>Nama Eskul</th>
			<th>Icon Eskul</th>
			<th>Deskripsi Eskul</th>
			<th>Foto Kegiatan</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php foreach ($set_eskul_model as $sem) : ?>
			<tr>
				<td><?php echo $sem->nama_eskul ?></td>
				<td><img src="<?php echo base_url('assets/database/img/icon_eskul/' . $sem->icon_eskul) ?>" alt="<?php echo $sem->nama_eskul ?>" width="20" height="20"></td>
				<td><?php echo $sem->deskripsi_eskul ?></td>
				<td><img src="<?php echo base_url('assets/database/img/foto_kegiatan_eskul/' . $sem->foto_kegiatan) ?>" alt="<?php echo $sem->nama_eskul ?>" width="80" height="80"></td>
				<td>
					<?php echo anchor('database/set_eskul/edit/' . $sem->id_eskul, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
				</td>
			<?php endforeach; ?>
			</tr>

	</table>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA EKSTRAKURIKULER</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('database/set_eskul/tambah_aksi'); ?>
				<div class="form-group">
					<label>Nama Eskul</label>
					<input type="text" name="nama_eskul" class="form-control">
				</div>
				<div class="form-group">
					<label>Icon Eskul</label>
					<input type="file" name="icon_eskul" class="form-control">
				</div>
				<div class="form-group">
					<label>Deskripsi Eskul</label>
					<input type="text" name="deskripsi_eskul" class="form-control">
				</div>
				<div class="form-group">
					<label>Foto Kegiatan</label>
					<input type="file" name="foto_kegiatan" class="form-control">
				</div>

				<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div> -->
