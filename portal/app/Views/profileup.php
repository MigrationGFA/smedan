<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
?>
      <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <!-- Coming soon page-->
          <div class="misc-wrapper">

            <div class="misc-inner p-2 p-sm-3">
                <section id="basic-horizontal-layouts">

                  <?php 
                    // Get learner's details 
                    $learnerDetails = $this->gfa_model->CheckMissingFieldsByWemaUid($email);
                    // var_dump($learnerDetails);
                  ?>
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-12">

                        <!-- Logo -->
                        <div class="text-center mb-4">
                            <img 
                                src="<?= base_url('public/assets/images/smedan_logo.jpeg') ?>" 
                                alt="SMEDAN Logo"
                                class="corporate-logo"
                            >
                        </div>

                        <!-- Welcome Card -->
                        <div class="card shadow-sm border-0 rounded-4 mb-4 display_1 corporate-card">
                            <div class="card-header bg-white border-0 text-center pt-4">
                                <h2 class="fw-bold text-dark mb-0">
                                    Welcome 
                                    <?= ucwords($learnerDetails[0]['first_name']) ?> 
                                    <?= ucwords($learnerDetails[0]['last_name']) ?>!
                                </h2>
                            </div>
                            <div class="card-body text-center pb-4">
                                <p class="text-muted mb-0 fs-6">
                                    Please choose the course you want to take.
                                </p>
                            </div>
                        </div>

                        <!-- Selection Form -->
                        <form class="form-horizontal submitForm" action="#" enctype="multipart/form-data">

                            <div class="card shadow-sm border-0 rounded-4 display_2 corporate-card">
                                <div class="card-body">

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold text-dark">Select your most preferred course</label>
                                        <div class="input-group input-group-merge">
                                            <select name="course" class="form-select corporate-select" required>
                                                <option value="DIMP Skill">Yes, Business courses</option>
                                                <option value="CRM Management">CRM Management</option>
                                                <option value="Accounting Software">Accounting Software</option>
                                                <option value="Career Advancement">Career Advancement</option>
                                                <option value="System Analysis">System Analysis</option>
                                                <option value="Technical Writing">Technical Writing</option>
                                                <option value="Cloud Computing">Cloud Computing</option>
                                                <option value="Web Design">Web Design</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="button" class="btn btn-primary px-4 py-2 rounded-3 prev_1">
                                            Submit
                                        </button>
                                        <span class="errorTest text-danger ms-2"></span>
                                    </div>

                                </div>
                            </div>

                        </form>

                    </div>
                </div>
    
  </div>
</section>
            
            </div>
          </div>
          <!-- / Coming soon page-->

        </div>
      </div>

    </div>
    <!-- END: Content-->
   
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<style>
.corporate-logo {
    width: 220px;
    height: 80px;
    object-fit: contain;
}

.corporate-card {
    background: #ffffff;
    border-radius: 14px !important;
    transition: 0.25s ease;
}

.corporate-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.07) !important;
}

.corporate-select {
    border-radius: 10px;
    padding: 10px;
}

.btn-primary {
    background-color: #0d6efd;
    border: none;
    font-weight: 600;
}

.btn-primary:hover {
    background-color: #0b5ed7;
}

.form-label {
    font-size: 0.92rem;
}

</style>

<script>
$(document).ready(function() {
    $('.prev_1').on('click', function(e) {
        e.preventDefault();
        var form = $('.submitForm')[0];
        var formData = new FormData(form);

        $.ajax({
            url: '<?= base_url("gfa/submitNewUpdate"); ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            // dataType: 'json',
            beforeSend: function() {
                $(".prev_1").html('Loading...');
                $(".prev_1").prop('disabled', true);
            },
            success: function(response) {
                if (response != 'All fields are required!') {
                    $('.errorTest').html('<span class="text-success">Update successful!</span>');
                    window.location.href = '<?= base_url("gfa/dashboard"); ?>';
                } else {
                    $('.errorTest').html('<span class="text-danger">Please choose a course!</span>');
                    $(".prev_1").html('Update');  
                    $(".prev_1").prop('disabled', false);
                }
            },
            error: function(xhr, status, error) {
                $('.errorTest').html('<span class="text-danger">Error: ' + error + '</span>');
                    $(".prev_1").html('Update');  
            }
        });
    });
});

</script>
