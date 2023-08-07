<!-- Begin Page Content -->
<div class="container-fluid">
    <?php foreach ($set_hero_db as $sh) : ?>
        <div class="hero-overlay hero" style="background-image: url('<?php echo base_url('assets/database/img/' . $sh->gambar) ?>');">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <img src="<?php echo base_url('assets/database/img/' . $sh->logo) ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Designed with love
                by PMM 19 </span>
        </div>
    </div>
</footer>
<!-- End of Footer -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>