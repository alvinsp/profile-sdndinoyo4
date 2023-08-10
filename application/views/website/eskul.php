<div class="untree_co-hero overlay" style="background-image: url('<?php echo base_url('assets/database/img/background/bg-1.jpg') ?>');">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-12">
				<div class="row justify-content-center ">
					<div class="col-lg-6 text-center ">
						<h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100"><?php echo $detail->nama_eskul ?></h1>
						<div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
							<p><?php echo $detail->deskripsi_eskul ?></p>
						</div>
					</div>
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.untree_co-hero -->
</div>

<div class="untree_co-hero">
	<div class="container">
		<h1 class="my-5 text-center">Gallery Kegiatan</h1>
		<div class="row">
			<div class="col-md-4 mb-4 image-card">
				<img src="<?php echo base_url('assets/database/img/foto_kegiatan_eskul/' . $detail->foto_kegiatan) ?>" alt="Image 1" class="img-fluid">
			</div>
			<div class="col-md-4 mb-4 image-card">
				<img src="<?php echo base_url('assets/database/img/foto_kegiatan_eskul/' . $detail->foto_kegiatan) ?>" alt="Image 1" class="img-fluid">
			</div>
			<div class="col-md-4 mb-4 image-card">
				<img src="<?php echo base_url('assets/database/img/foto_kegiatan_eskul/' . $detail->foto_kegiatan) ?>" alt="Image 1" class="img-fluid">
			</div>
		</div>
	</div>
</div>
