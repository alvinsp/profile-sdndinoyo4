<?php foreach ($ekstrakurikuler as $eskul) : ?>
	<div class="container-fluid">
		<h3><i class="fa fa-desktop"></i>Edit Setting ekstrakurikuler</h3>
		<?php echo form_open_multipart('database/set_eskul/update') ?>
		<div class="form-group">
			<label>Nama ekstrakurikuler</label>
			<input type="hidden" name="id_eskul" value="<?php echo $eskul->id_eskul ?>">
			<input type="text" name="nama_eskul" class="form-control" value="<?php echo $eskul->nama_eskul ?>">
		</div>

		<div class="form-group">
			<label>Icon ekstrakurikuler</label>
			<input type="file" name="icon_eskul" class="form-control" value="<?php echo $eskul->icon_eskul ?>">
		</div>
		<div class="form-group">
			<label>Deskripsi ekstrakurikuler</label>
			<input type="text" name="deskripsi_eskul" class="form-control" value="<?php echo $eskul->deskripsi_eskul ?>">
		</div>
		<div class="form-group">
			<label>Foto Kegiatan</label>
			<input type="file" name="foto_kegiatan" class="form-control" multiple>
		</div>

		<button type="submit" class="btn btn-primary">Update</button>
		<a href="<?php echo base_url() . 'database/set_eskul' ?>" class="btn btn-warning">Kembali</a>
		<?php echo form_close(); ?>
	</div>
<?php endforeach; ?>
