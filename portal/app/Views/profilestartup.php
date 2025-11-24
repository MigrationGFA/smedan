<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
$cohort = $this->gfa_model->getCohortDetails($email);
   ?>
      <!-- BEGIN: Content-->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Profile Details</span>
  </h4>
<div class="row">
  <div class="col-12">
<?php // print_r($this->gfa_model->getStartUpDetails($email));?>
    <!-- profile -->
    <div class="card">
      <!-- <div class="card-header border-bottom">
        <h4 class="card-title"></h4><br>       
      </div> -->
           
      <?php      
      	$getPhoto =  $this->gfa_model->getPhotoUploaded($email);  
      	if(empty($getPhoto)){
      	$showPhoto = "public/assets/images/uploads/default-avatar.jpg";
      	}else{         
      	$showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name'];           
      	}      
      ?>
      <div class="card-body py-2 my-25">
         <br>
        <!-- header section -->
         <!-- <label class="form-label" for="accountFirstName">Upload your Logo</label><br> -->
          
              <!-- <br> -->
        <div class="d-flex">
          <!-- <a href="#" class="me-25">              
            <img
              src="<?php echo base_url($showPhoto); ?>"
              id="frame"
              class="uploadedAvatar rounded me-50"
              alt="profile image"
              height="100"
              width="100"
            />
          </a> -->
          <!-- upload and reset button -->
          <!-- <form class="fileInfox" method="post" action="#" enctype="multipart/form-data">
          <div class="d-flex align-items-end mt-75 ms-1">
            <div>
              <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75 uploadBtn">Upload</label>
              <input type="file" name="file[]" id="account-upload" hidden accept="image/*"  onchange="preview()" />
              <input type="hidden" name='upload_type' value='photo' />
              <button type="submit" id="account-reset" class="btn btn-sm btn-secondary mb-75 savePhotox">Save Upload</button>
              <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
              <span class="savePhoto"></span>
            </div>
          </div>
          </form> -->
          <!--/ upload and reset button -->
        </div>
        <!--/ header section -->
        
        <script>
            function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
    
      
}
$(function(){
    
$(".fileInfox").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url('gfa/profile_photo'); ?>",
	 error:function() {$(".savePhoto").html('Error')},
	 beforeSend:function() {$(".savePhoto").html('Saving Photo...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".savePhoto").html(data);
		
	
		//}
      }
    });
    return false;

 });
});    
        </script>
       
        <!-- form -->
        <form class="validate-form mt-2 pt-50 startUpForm" method="post" action="" enctype="multipart/form-data">
            <div class="row">
              
                <h4 class="my-2 px-2 border-bottom">Personal Details</h4>
            <div class="col-12 col-md-6 mb-2">
              <label class="form-label" for="accountFirstName">First Name</label>
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="firstName"
                placeholder="First Name"
                value="<?php echo $first_name ?>"
                readonly
              />
            </div>
            <div class="col-12 col-md-6 mb-2">
              <label class="form-label" for="accountLastName">Last Name</label>
              <input
                type="text"
                class="form-control"
                id="accountLastName"
                name="lastName"
                placeholder="Last Name"
                value="<?php echo $last_name ?>"
                readonly
              />
            </div>

            <!-- <h4 class="my-2 px-2 border-bottom">Course Details</h4>
            <h6 class="my-2 p-2 text-danger">To update your course, first select the profile that best describes you out of the last 4 options, then select skill you want, finally the course you desire</h6>
            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountInterest_Fund_Raise"><b>Select the profile that best describes you.</b></label>
              <select class="form-control form-select" id="Interest_Fund_Raise" name="Interest_Fund_Raise" required>
                <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Interest_Fund_Raise'];  ?>">
                  <?php echo $this->gfa_model->getStartUpDetails($email)[0]['Interest_Fund_Raise'];  ?></option>
                <option value="professional">Working Class Professional</option>
                <option value="jobseeker">Jobseeker</option>
                <option value="Business Owner">Business Owner</option>
                <option value="Aspiring Business Owner">Aspiring Business Owner</option>
              </select>
            </div>

            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountStartup_Implementation_Stage"><b>What kind of skills do you want to acquire?</b></label>
              <select name="Startup_Implementation_Stage" class="form-select" id="Startup_Implementation_Stage" required>
                <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage'];  ?>">
                  <?php echo $this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage'];  ?>
                </option>
              </select>
            </div>

            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountprofile_extra"><b>Select your preferred technology skill</b></label>
              <select name="profile_extra" class="form-select" id="profile_extra" required>
              	<option value="<?= $prof_extra;?>" > <?= $prof_extra;?> </option>
              </select>
            </div>
            
            <div class="col-12 mt-2">
              <button type="submit" class="btn btn-primary mt-1 me-1 saveBtn">Save Personal Profile</button>
              <span class="displayAction"></span>

            </div> -->
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>
<script>
//   const profileList = {
//         "professional" : [
//             "Technology Enabled Skill",
//             "Technology Adjacent Skill",
//             "Core Technology Skill",
//             "Advance Technology Skill"
//         ],
//         "jobseeker" : [
//             "Technology Enabled Skill",
//             "Technology Adjacent Skill",
//             "Core Technology Skill",
//             "Advance Technology Skill"            
//         ],
//         "Business Owner" : [
//             "Development",
//             "Growth",
//             "Funding"
//         ],
//         "Aspiring Business Owner" : [
//             "Development",
//             "Growth",
//             "Funding"
//         ]
//     }

//   const skillList = {
// "Technology Enabled Skill": [
//         "Digital Marketing",
//         "Cloud Platforms Navigation",
//         "CRM Management",
//         "Accounting Software",
//       ],
//       "Technology Adjacent Skill": [
//         "Quality Assurance",
//         "Technology Community Management",
//         "Infrastructure Management",
//         "System Analysis",
//         "Technical Writing",
//         "Technical Support & Troubleshooting",
//         "Hardware Assembly",
//       ],
//       "Core Technology Skill": [
//         "Full-stack Software Development",
//         "Cloud Computing",
//         "Front-end Development",
//         "Database Management",
//         "Network Administration",
//         "Firmware Development",
//         "Embedded Systems",
//         "Hardware components Engineering",
//         "Mobile App Development",
//         "Web Design",
//         "Animation",
//       ],
//       "Advance Technology Skill": [
//         "Machine Learning and AI",
//         "Bioinformatics",
//         "Cybersecurity",
//         "Blockchain Development",
//         "Quantum Computing",
//         "Robotics and Automation",
//         "Virtual and Augmented Reality Development",
//         "Advanced Hardware",
//         "DevOps",
//         "Internet of Things (IoT)",
//       ],
      
//     "Development": [
//         "Building Rapport",
// "Business Model Plan",
// "Business Valuation",
// "Customer Experience Mgt",
// "Design Thinking",
// "Financial Modelling in Decision-Making &amp; Business Planning",
// "Functional Accountability Chart",
// "Pitch Deck Structuring",
// "Product Development Cycle",
// "SWOT/PESTLE",
// "Understanding Product Management",
// "Website &amp; Apps"
//       ],
//       "Growth": [
//         "Building Rapport",
// "Business Model Plan",
// "Business Valuation",
// "Customer Experience Mgt",
// "Design Thinking",
// "Financial Modelling in Decision-Making &amp; Business Planning",
// "Functional Accountability Chart",
// "Pitch Deck Structuring",
// "Product Development Cycle",
// "SWOT/PESTLE",
// "Understanding Product Management",
// "Website &amp; Apps"
//       ],
//       "Funding": [
//         "Building Rapport",
// "Business Model Plan",
// "Business Valuation",
// "Customer Experience Mgt",
// "Design Thinking",
// "Financial Modelling in Decision-Making &amp; Business Planning",
// "Functional Accountability Chart",
// "Pitch Deck Structuring",
// "Product Development Cycle",
// "SWOT/PESTLE",
// "Understanding Product Management",
// "Website &amp; Apps"
//       ],
//   };

//   document.getElementById('Interest_Fund_Raise').addEventListener('change', function() {
//     const selectedProfile = this.value;
//     const startupStage = document.getElementById('Startup_Implementation_Stage');
//     const profileExtra = document.getElementById('profile_extra');

//     // Clear existing options
//     startupStage.innerHTML = '<option disabled="disabled" selected="selected">-- Select --</option>';
//     profileExtra.innerHTML = '<option disabled="disabled" selected="selected">-- Select --</option>';

//     // Load new options based on selected profile
//     if (profileList[selectedProfile]) {
//       profileList[selectedProfile].forEach(stage => {
//         const option = document.createElement('option');
//         option.value = stage;
//         option.textContent = stage;
//         startupStage.appendChild(option);
//       });
//     }
//   });

//   document.getElementById('Startup_Implementation_Stage').addEventListener('change', function() {
//     const selectedStage = this.value;
//     const profileExtra = document.getElementById('profile_extra');

//     // Clear existing options
//     profileExtra.innerHTML = '<option disabled="disabled" selected="selected">-- Select --</option>';

//     // Load new options based on selected stage
//     if (skillList[selectedStage]) {
//       skillList[selectedStage].forEach(skill => {
//         const option = document.createElement('option');
//         option.value = skill;
//         option.textContent = skill;
//         profileExtra.appendChild(option);
//       });
//     }
//   });
</script>
<script>
//       $(function(){
          
//         $(".saveBtn").click(function(e) {
//           e.preventDefault();
          
//           var startupInfo = $('.startUpForm').serialize();
//           $.ajax({
//             data:startupInfo,
//             type: "POST",
//             url: "<?php echo base_url('gfa/profilestartuppro'); ?>",
//             error:function(e) {$(".displayAction").html('Error saving data');},
//             beforeSend:function() {$(".saveBtn").html('Saving Profile...');},
//               success: function(data) {           
//               if (data == 'All fields are required, please fill all fields') {
//                $(".displayAction").html('<b class="text-danger">' + data + '</b>');
//               $(".saveBtn").html('Save Personal Profile');  
//               // location.reload();              
//               }else{
//               $(".displayAction").html("Successfully Saved!");  
//               $(".saveBtn").html('Saved');  
//               }
              
//               }
              
//           });
// 	      });
          
//       });  
    </script>

  </div>
</div>
</div>
<!-- END: Content-->

  