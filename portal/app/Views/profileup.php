<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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

            <div class="misc-inner p-1 p-sm-3">
                <section id="basic-horizontal-layouts">

                  <?php 
                    // Get learner's details 
                    $learnerDetails = $this->gfa_model->CheckMissingFieldsByWemaUid($email);
                    // var_dump($learnerDetails);
                  ?>
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-12">

                        <!-- Logo -->
                        <div class="text-center mb-1">
                            <img 
                                src="<?= base_url('public/assets/images/smedan_logo.png') ?>" 
                                alt="SMEDAN Logo"
                                class="corporate-logo"
                            >
                        </div>

                        <!-- Welcome Card -->
                        <div class="card shadow-sm border-0 rounded-4 mb-2 display_1 corporate-card">
                            <div class="card-header bg-white border-0 text-center pt-1">
                                <h2 class="fw-bold text-dark mb-0">
                                    Welcome 
                                    <?= ucwords($learnerDetails[0]['first_name']) ?> 
                                    <?= ucwords($learnerDetails[0]['last_name']) ?>!
                                </h2>
                            </div>
                            <div class="card-body text-center pb-1">
                                <p class="text-muted mb-0 fs-6">
                                    Please choose the course you want to take.
                                </p>
                            </div>
                        </div>

                        <!-- Selection Form -->
                        <form class="form-horizontal submitForm" action="#" enctype="multipart/form-data">

                            <div class="card shadow-sm border-0 rounded-4 display_2 corporate-card">
                                <div class="card-body">

                                    <div class="mb-1">
                                        <label class="form-label fw-semibold text-dark">Select your most preferred course</label>
                                        <div class="input-group input-group-merge">
                                            <select name="course" class="form-select corporate-select" required>
                                                <option value="DIMP Skill">SME courses</option>
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
                                        <button type="button" class="btn btn-primary px-2 py-1 rounded-3 prev_1">
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

    <!-- Floating Left YouTube Video -->
<div id="floatingVideo" class="floating-video">
    <div class="video-header">
        <button id="closeVideoBtn" class="close-btn">×</button>
    </div>
    <iframe id="ytFrame"
        width="100%" height="100%"
        src="https://www.youtube.com/embed/oXv4Gn8r_e8?autoplay=1&mute=1&loop=1&playlist=oXv4Gn8r_e8&controls=1&playsinline=1"
        frameborder="0"
        allow="autoplay; encrypted-media"
        allowfullscreen>
    </iframe>
</div>


<!-- Info Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Welcome</h5>
        <button type="button" class="btn-close closeModal"></button>
      </div>

      <div class="modal-body">
        <p><strong>Welcome to your learning dashboard</strong></p>

        <p>Your access is now active. You have <strong>30 days</strong> to complete your course and download your certificate.</p>

        <p>Please note: You will be required to <strong>select your preferred course</strong>. This will be the only course you can access and the one your certificate will be issued for.</p>

        <ul>
          <li>Track your progress from your dashboard</li>
          <li>Learning is flexible - set daily reminders to stay on track</li>
          <li>Minimum <strong>80% score</strong> and <strong>80% completion</strong> required</li>
        </ul>

        <p>We wish you a successful learning experience.</p>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary closeModal w-100">Continue</button>
      </div>

    </div>
  </div>
</div>


<style>
    /* .modal-open .floating-video {
        pointer-events: none;
    } */

    .floating-video {
        position: fixed;
        bottom: 20px;
        left: 20px; /* LEFT side */
        width: 300px;
        height: 170px;
        background: #000;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(0,0,0,0.35);
        z-index: 1020;
        cursor: grab;
    }

    .floating-video iframe {
        border-radius: 0 0 12px 12px;
    }

    .video-header {
        width: 100%;
        height: 25px;
        background: rgba(0,0,0,0.4);
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding-right: 5px;
        cursor: grab;
    }

    .close-btn {
        background: #ff4d4d;
        border: none;
        width: 22px;
        height: 22px;
        border-radius: 4px;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        line-height: 22px;
        text-align: center;
    }
    .close-btn:hover {
        background: #ff1a1a;
    }

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
  $(document).ready(function () {
    var modalEl = document.getElementById('infoModal');
    var modal = new bootstrap.Modal(modalEl);

    modal.show();

    // Both X and Continue use same class
    $('.closeModal').on('click', function () {
      modal.hide();
    });
  });
</script>

<script>
// ---------- DRAGGABLE VIDEO ----------
const video = document.getElementById("floatingVideo");
let offsetX, offsetY, isDown = false;

video.addEventListener("mousedown", function(e) {
    isDown = true;
    offsetX = e.clientX - video.offsetLeft;
    offsetY = e.clientY - video.offsetTop;
    video.style.cursor = "grabbing";
});

document.addEventListener("mouseup", function() {
    isDown = false;
    video.style.cursor = "grab";
});

document.addEventListener("mousemove", function(e) {
    if (!isDown) return;
    video.style.left = (e.clientX - offsetX) + "px";
    video.style.top = (e.clientY - offsetY) + "px";
});

// ---------- CLOSE BUTTON ----------
document.getElementById("closeVideoBtn").onclick = () => {
    video.style.display = "none";
};
</script>

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
                    $('.errorTest').html('<span class="text-success">Successful!</span>');
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
