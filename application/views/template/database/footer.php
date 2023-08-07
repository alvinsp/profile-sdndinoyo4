<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/database') ?> /vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/database') ?> /vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/database') ?> /vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/database') ?> /js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/database') ?> /vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/database') ?> /js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url('assets/database') ?> /js/demo/chart-pie-demo.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Get the current URL
        var currentUrl = window.location.href;

        // Loop through each nav-item and check the link's href
        $(".nav-item").each(function() {
            var linkUrl = $(this).find(".nav-link").attr("href");

            // Check if the current URL matches the link's href
            if (currentUrl.indexOf(linkUrl) !== -1) {
                // If it matches, add the 'active' class to the parent li element
                $(this).addClass("active");
            }
        });
    });
</script>


</body>

</html>