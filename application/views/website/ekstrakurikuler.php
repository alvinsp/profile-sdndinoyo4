<div class="untree_co-hero overlay" style="background-image: url('<?php echo base_url('assets/database/img/background/bg-1.jpg') ?>');">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-12">
				<div class="row justify-content-center ">
					<div class="col-lg-6 text-center ">
						<h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Ekstrakulikuler</h1>
						<div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
							<p>kegiatan yang dilakukan di luar jam pelajaran yang dilakukan di sekolah untuk menambah keterampilan siswa</p>
						</div>
					</div>
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.untree_co-hero -->
</div>


<div class="untree_co-section">
	<div class="container">
		<div class="row">
			<?php foreach ($eskul_model as $sem) : ?>
				<div class="col-lg-4 col-md-6 col-sm-6 p-3">
					<!-- class="category d-flex justify-content-center h-100" -->
					<a class="category d-flex justify-content-center h-100" href="<?php echo base_url('ekstrakurikuler/detail/' . $sem->id_eskul, '') ?>">
						<div class="text-center">
							<img src="<?php echo base_url('assets/database/img/icon_eskul/' . $sem->icon_eskul) ?>" alt="futsal" width="50" height="50">
							<h3 class="mt-3"><?php echo $sem->nama_eskul ?></h3>
						</div>
					</a>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>
