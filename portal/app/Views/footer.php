 <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2021<a class="ms-25" href="" target="_blank">GetFunded Africa</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block"><i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/wNumb.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/toastr.min.js"></script>-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
     
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/app-ecommerce.min.js"></script>
   
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>


<script>
  //Check if user close tab or browser so as to update is_online field
  var isPageHidden = false;

document.addEventListener('visibilitychange', function() {
    if (document.visibilityState === 'hidden') {
        isPageHidden = true;
    } else {
        isPageHidden = false;
    }
});
  $(window).on('unload', function() {
    let currentUrl = window.location.href;
      var targetUrl = 'http://localhost/fgn-alat';
      if (isPageHidden || currentUrl === targetUrl) {
      $.ajax({
        url: '<?= base_url('gfa/signoutAction') ?>',
        type: 'POST',
        async: false,
        success: function(response) {
          console.log('User logged out successfully');
        },
        error: function(xhr, status, error) {
            // console.error('Error logging out:', error);
        }
    });
  }
  });
</script>

</body>
</html>