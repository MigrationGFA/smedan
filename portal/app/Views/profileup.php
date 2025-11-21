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
  <div class="row">
    <div class="col-md-10 col-12">
        <center>
        <img src="<?=base_url('public/assets/images/smedan_logo.jpeg')?>" style="width:220px; height: 80px;">
        </center>
        <!-- Welcome Form   -->
        <div class="card display_1">
         
            <div class="card-header">
                <p></p><h2 class="mb-1 text-center">Welcome <?= ucwords($learnerDetails[0]['first_name']) ?> <?= ucwords($learnerDetails[0]['last_name']) ?>!</h2></p>
            </div>
            <div class="card-body">
                <p class="mb-2 text-center">Please choose the course you want to take</p>
                
            </div>
        </div>

        <form class="form form-horizontal submitForm" action="#" enctype="multipart/form-data">
        
            <div class="card display_2">
            
                <div class="card-body">
            
                    <div class="row">
                    
                        
                        

                        <div class="col-12">
                        <div class="input-div mb-1">
                            <label class="form-label" for="contact-info-icon"
                            >Do you want a business or technology course?</label
                            >
                            <div class="input-group input-group-merge">
                            <select
                                name="course_type"
                                class="form-select"
                                id="categorySelect"
                            required=""
                            >
                                <option value="DIMP Skill">Yes, Business courses</option>
                                <option value="Core Technology Skill">No, I will take core technology course</option>
                                <option value="Technology Enabled Skill">No, I will take technology enabled course</option>
                                <option value="Technology Adjacent Skill">No, I will take technology adjacent course</option>
                                <!-- <option value="Advance Technology Skill">No, I will take advance technology course</option> -->
                            </select>
                            </div>
                        </div>
                        </div>

                        <div class="col-12" id="courseSection" style="display: none;">
                        <div class="input-div mb-1">
                            <label class="form-label" for="contact-info-icon"
                            >Select your preferred technology skill</label
                            >
                            <div class="input-group input-group-merge">
                            <select
                                name="course"
                                class="form-select"
                                id="courseSelect"
                            >                            
                                <option selected value="<?= $learnerDetails[0]['course'] ?? '' ?>"><?= $learnerDetails[0]['course'] ?? '' ?></option>                                
                            </select>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                    <div class="col-sm-9 offset-sm-3 mb-1">
                        <button type="button" class="btn btn-primary me-1 prev_1">Submit</button><span class="errorTest"></span>
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


<script src="<?php echo base_url('public/assets-new/js/select-stage.js'); ?>"></script>
<script src="<?php echo base_url('public/assets-new/js/jquery.stateLga.js'); ?>"></script>
<script>
    const skillList = {
      "Technology Enabled Skill": [
        "CRM Management",
        "Accounting Software",
        "Career Advancement",
      ],
      "Technology Adjacent Skill": [
        "Technology Community Management",
        "System Analysis",
        "Technical Writing",
      ],
      "Core Technology Skill": [
        "Cloud Computing",
        "Database Management",
        "Web Design",
      ],
    //   "Advance Technology Skill": [
    //     "Machine Learning and AI",
    //     "Bioinformatics",
    //     "Cybersecurity",
    //     "Blockchain Development",
    //     "Quantum Computing",
    //     "Robotics and Automation",
    //     "Virtual and Augmented Reality Development",
    //     "Advanced Hardware",
    //     "DevOps",
    //     "Internet of Things (IoT)",
    //   ]
    };

    const categorySelect = document.getElementById("categorySelect");
    const courseSection = document.getElementById("courseSection");
    const courseSelect = document.getElementById("courseSelect");

    categorySelect.addEventListener("change", function () {
    const selectedValue = categorySelect.value;

    // Hide the entire section if "Yes" (DIMP Skill) is selected
    if (selectedValue === "DIMP Skill") {
      courseSection.style.display = "none";
 courseSelect.removeAttribute("required");
      courseSelect.innerHTML = ""; // Clear options
    } else {
      courseSection.style.display = "block";
       courseSelect.setAttribute("required", "required");
      courseSelect.innerHTML = '<option value="" disabled selected>- Select -</option>';

      if (skillList[selectedValue]) {
        skillList[selectedValue].forEach((skill) => {
          const option = document.createElement("option");
          option.value = skill;
          option.textContent = skill;
          courseSelect.appendChild(option);
        });
      }
    }
  });
</script>
<script>
$(document).ready(function() {
    $('.prev_1').on('click', function(e) {
        e.preventDefault();

        // var isValid = true;
        // var errorMessages = [];

        // // Clear previous error messages
        // $('.errorTest').html('');

        // // Iterate over each required input, select within the form
        // $('.submitForm').find('input[required], select[required]').each(function() {
        //     var $this = $(this);
        //     if (!$this.val()) {
        //         isValid = false;
        //         // var fieldLabel = $("label[for='" + $this.attr('id') + "']").text();
        //         errorMessages.push('All fields are required except middle name!');
        //     }
        // });

        // if (!isValid) {
        //     // Display error messages
        //     $(".errorTest").html('<div class="text-danger">' + errorMessages.join('<br>') + '</div>');
        //     return;
        // }

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
