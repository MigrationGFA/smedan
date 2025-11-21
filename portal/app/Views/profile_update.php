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
              <!--<div class="w-100 text-center">-->
                <section id="basic-horizontal-layouts">

                  <?php 
                    // Get learner's details 
                    $learnerDetails = $this->admin_model->getAllStartUpNByEmail($email);
                    $learnerExtInfo = $this->gfa_model->getUserAccountExt($email); 
                    $getLGAResidenceData = $this->gfa_model->getLGAResidence('Kaduna');
                  ?>
  <div class="row">
    <div class="col-md-10 col-12">
        <center>
         <img src="https://kaduna-digital.dimpified.com/images/gfa_kaduna.png" style="width:220px; height: 80px;">
         </center>
        <!-- Welcome Form   -->
      <div class="card display_1">
         
        <div class="card-header">
          <p></p><h2 class="mb-1 text-center">Welcome <?= ucwords($learnerDetails[0]['Primary_Contact_Name']) ?>!</h2></p>
        <p class="mb-2 text-center">Important Information for Profile Update</p>
        </div>
        <div class="card-body">
          <form class="form form-horizontal submitForm" action="#" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
            <div class="row custom-options-checkable mb-1">
              <div class="col-md-12 mb-md-0 mb-2">
                <input
                  class="custom-option-item-check"
                  id="homeAddressRadio"
                  type="radio"
                  name="newAddress"
                  value="HomeAddress"
                  checked
                  disabled
                />
                <label for="homeAddressRadio" class="custom-option-item px-2 py-1">
                  <span class="d-flex align-items-center mb-50">
                    <i data-feather="home" class="font-medium-4 me-50"></i>
                    <span class="custom-option-item-title h4 fw-bolder mb-0"></span>
                  </span>
                  <h4>Skills/Business Service</h4>
    <p>Please select your specific skill or service from the dropdown list. If not applicable, choose <strong>"Not Specified"</strong> or <strong>"Other"</strong> (listed alphabetically).</p>

    
    <p>To get started, we just need a few more details to set up your account. This program will provide you with course on essential skills, a certificate upon completion and a website to promote your business or skills. We look forward to supporting your growth!</p>

                </label>
              </div>
              
            </div>
          </div>
          
          <div class="col-12">
                <div class="mb-1">
                  
                  <div class="col-sm-9">
                        
              
            <!--</select>-->
                  </div>
                </div>
              </div>
              
              
              <div class="col-sm-9 offset-sm-3">
                <button type="button" class="btn btn-primary me-1 next_1">Next</button>
                <!--<button type="button" class="btn btn-outline-secondary">Reset</button>--> 
              </div>
            </div>
         
        </div>
      </div>
      <!-- End Welcome Form --->
      
      <!-- Verification of BVN/NIN  -->

  <div class="card display_2" style="display:none">
        <div class="card-header text-center">
          <p></p><h2 class="mb-1">Verify and Update your Information</h2></p>
        <!--<p class="mb-2">Kindly verify your BVN/NIN</p>-->
        </div>
        <div class="card-body">
          
            <div class="row">
             
                 <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><h5>Full
                                Name<span style="color:red">*</span></h5> </label> 
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control form-control-lg" name="fname"
                                    placeholder="First Name" minlength="3" value="<?= explode(" ",$learnerDetails[0]['Primary_Contact_Name'])[0] ?>"  />
                                    
                                    <input type="text" id="first-name-icon" class="form-control form-control-lg" name="mname"
                                    placeholder="Middle Name" value="<?= $learnerExtInfo[0]['middlename'] ?>" />

                                <input type="text" id="last-name-icon" class="form-control form-control-lg" name="lname"
                                    placeholder="Last Name" minlength="3"  value="<?= explode(" ",$learnerDetails[0]['Primary_Contact_Name'])[1] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                      <div class="input-div mb-1">
                        <label class="form-label" for="email-id-icon"
                          ><h5>Gender</h5></label
                        >
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"></span>
                          <select
                            name="gender"
                            class="form-select"
                            id="genderSelect"
                            required=""
                          >
                            <option value="<?= $learnerDetails[0]['Gender'] ?>"><?= $learnerDetails[0]['Gender'] ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="input-div mb-1">
                        <label class="form-label" for="contact-info-icon"
                          ><h5>Date of Birth</h5>
                        </label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"></span>
                          <input
                            type="date"
                            id="dob"
                            class="form-control"
                            name="dob"
                            placeholder="YYYY-MM-DD"
                            required=""
                            value="<?= $learnerExtInfo[0]['dob'] ?>"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div mb-1">
                        <label class="form-label" for="email-id-icon"
                          ><h5>LGA of residence</h5></label
                        >
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"></span>
                          <select
                            name="lga_of_residence"
                            class="form-select"
                            id="level2"
                            required
                          >
                             <option value="<?= $learnerExtInfo[0]['lga_of_residence'] ?>"><?= $learnerExtInfo[0]['lga_of_residence'] ?></option>
                            <?php foreach($getLGAResidenceData as $getLGAResidence){ ?>
                            <option value="<?= $getLGAResidence['lga'] ?>"><?= $getLGAResidence['lga'] ?></option>
                           <?php }  ?>
                            
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="input-text">
                      <div class="input-div mb-1">
                        <label class="form-label" for="email-id-icon"
                          ><h5>What skills do you have or what type of business service do you offer?</h5></label
                        >
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"></span>
                      <select
                            name="growth_skill_type"
                            class="form-select"
                            id="level2"
                            required
                        >
                        
                            <option value="<?= $learnerExtInfo[0]['growth_skill_type'] ?>"><?= $learnerExtInfo[0]['growth_skill_type'] ?></option>
                            <option value="Advertising Design">Advertising Design</option>
                            <option value="AI and Machine Learning Development">AI and Machine Learning Development</option>
                            <option value="Animation & Illustration">Animation & Illustration</option>
                            <option value="Appliance Repair Services">Appliance Repair Services</option>
                            <option value="Aromatherapy Services">Aromatherapy Services</option>
                            <option value="Art Direction">Art Direction</option>
                            <option value="Art Lessons">Art Lessons</option>
                            <option value="Auto Repair and Maintenance">Auto Repair and Maintenance</option>
                            <option value="Barber Shop">Barber Shop</option>
                            <option value="Bartending Services">Bartending Services</option>
                            <option value="Blockchain Development">Blockchain Development</option>
                            <option value="Branding Services">Branding Services</option>
                            <option value="Carpentry Services">Carpentry Services</option>
                            <option value="Career Coaching">Career Coaching</option>
                            <option value="Catering Services">Catering Services</option>
                            <option value="Childcare Services">Childcare Services</option>
                            <option value="Chiropractic Services">Chiropractic Services</option>
                            <option value="Cleaning and Janitorial Services">Cleaning and Janitorial Services</option>
                            <option value="Cloud Computing Services">Cloud Computing Services</option>
                            <option value="Coding Bootcamps">Coding Bootcamps</option>
                            <option value="College Admissions Counseling">College Admissions Counseling</option>
                            <option value="Content Creation">Content Creation</option>
                            <option value="Copywriting">Copywriting</option>
                            <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                            <option value="Corporate Training">Corporate Training</option>
                            <option value="Cybersecurity Services">Cybersecurity Services</option>
                            <option value="Dance Lessons">Dance Lessons</option>
                            <option value="Data Analytics and Business Intelligence">Data Analytics and Business Intelligence</option>
                            <option value="Database Management">Database Management</option>
                            <option value="Decoration Services">Decoration Services</option>
                            <option value="Dental Hygiene Services">Dental Hygiene Services</option>
                            <option value="DJ Services">DJ Services</option>
                            <option value="Early Childhood Education">Early Childhood Education</option>
                            <option value="Electrical Services">Electrical Services</option>
                            <option value="Entertainment Booking">Entertainment Booking</option>
                            <option value="ERP Implementation">ERP Implementation</option>
                            <option value="Event Coordination">Event Coordination</option>
                            <option value="Event Planning">Event Planning</option>
                            <option value="Event Rentals">Event Rentals</option>
                            <option value="Event Staffing">Event Staffing</option>
                            <option value="Eyelash Extension Services">Eyelash Extension Services</option>
                            <option value="Fashion Design">Fashion Design</option>
                            <option value="Flooring Installation and Repair">Flooring Installation and Repair</option>
                            <option value="Florist Services">Florist Services</option>
                            <option value="Glass and Window Repair Services">Glass and Window Repair Services</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Hair Salon">Hair Salon</option>
                            <option value="Handyman Services">Handyman Services</option>
                            <option value="Hardware Repair">Hardware Repair</option>
                            <option value="HVAC (Heating, Ventilation, and Air Conditioning) Services">HVAC (Heating, Ventilation, and Air Conditioning) Services</option>
                            <option value="Interior Design">Interior Design</option>
                            <option value="IT Consulting">IT Consulting</option>
                            <option value="IT Staffing and Recruitment">IT Staffing and Recruitment</option>
                            <option value="IT Support">IT Support</option>
                            <option value="Invitation Design">Invitation Design</option>
                            <option value="IoT Solutions">IoT Solutions</option>
                            <option value="Language Lessons">Language Lessons</option>
                            <option value="Landscaping and Lawn Care">Landscaping and Lawn Care</option>
                            <option value="Life Coaching">Life Coaching</option>
                            <option value="Lighting and Sound Services">Lighting and Sound Services</option>
                            <option value="Live Band Services">Live Band Services</option>
                            <option value="Locksmith & Home Security Services">Locksmith & Home Security Services</option>
                            <option value="Logo Design">Logo Design</option>
                            <option value="Makeup Artist Services">Makeup Artist Services</option>
                            <option value="Masonry Services">Masonry Services</option>
                            <option value="Massage Therapy">Massage Therapy</option>
                            <option value="Mental Health Counseling">Mental Health Counseling</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="Moving Services">Moving Services</option>
                            <option value="Music Lessons">Music Lessons</option>
                            <option value="Music Production">Music Production</option>
                            <option value="Nail Salon">Nail Salon</option>
                            <option value="Network Setup and Maintenance">Network Setup and Maintenance</option>
                            <option value="Online Courses">Online Courses</option>
                            <option value="Painting Services">Painting Services</option>
                            <option value="Personal Stylist and Image Consulting">Personal Stylist and Image Consulting</option>
                            <option value="Personal Training and Fitness Coaching">Personal Training and Fitness Coaching</option>
                            <option value="Pest Control Services">Pest Control Services</option>
                            <option value="Photography">Photography</option>
                            <option value="Photography Services">Photography Services</option>
                            <option value="Plumbing Services">Plumbing Services</option>
                            <option value="Podcast Production">Podcast Production</option>
                            <option value="Print Design">Print Design</option>
                            <option value="Professional Development Workshops">Professional Development Workshops</option>
                            <option value="Public Speaking Coaching">Public Speaking Coaching</option>
                            <option value="Reflexology Services">Reflexology Services</option>
                            <option value="Removal & Waste Management">Removal & Waste Management</option>
                            <option value="Roofing Services">Roofing Services</option>
                            <option value="Security Services">Security Services</option>
                            <option value="SEO and Digital Marketing Consulting">SEO and Digital Marketing Consulting</option>
                            <option value="Skincare Clinic">Skincare Clinic</option>
                            <option value="Social Media Management">Social Media Management</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Spa and Wellness Center">Spa and Wellness Center</option>
                            <option value="Special Education Services">Special Education Services</option>
                            <option value="STEM Education">STEM Education</option>
                            <option value="Study Skills Coaching">Study Skills Coaching</option>
                            <option value="Tattoo and Piercing Studio">Tattoo and Piercing Studio</option>
                            <option value="Tech Support Call Centers">Tech Support Call Centers</option>
                            <option value="Tech Training and Certification">Tech Training and Certification</option>
                            <option value="Technical Writing">Technical Writing</option>
                            <option value="Test Preparation">Test Preparation</option>
                            <option value="Tile, Drywall, Plaster Services">Tile, Drywall, Plaster Services</option>
                            <option value="Transportation Services">Transportation Services</option>
                            <option value="Tutoring">Tutoring</option>
                            <option value="UX/UI Design">UX/UI Design</option>
                            <option value="Venue Booking">Venue Booking</option>
                            <option value="Videography">Videography</option>
                            <option value="Videography Services">Videography Services</option>
                            <option value="Voiceover Services">Voiceover Services</option>
                            <option value="Web Design">Web Design</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Website Hosting and Domain Services">Website Hosting and Domain Services</option>
                            <option value="Weight Loss and Nutrition Counseling">Weight Loss and Nutrition Counseling</option>
                            <option value="Wedding Planning">Wedding Planning</option>
                            <option value="Welding and Metal Fabrication">Welding and Metal Fabrication</option>
                            <option value="Writing Workshops">Writing Workshops</option>
                            <option value="Yoga and Pilates Studio">Yoga and Pilates Studio</option>                         
                            <option value="Other Business">Other Skills/Business</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <!-- Other input --------------------->
                    <input type="hidden"  class="form-control form-control-lg"  name="marital_status" value="<?= $learnerExtInfo[0]['marital_status'] ?>" />
                    <input type="hidden"  class="form-control form-control-lg"  name="state_of_origin" value="<?= $learnerExtInfo[0]['state_of_origin'] ?>" />
                    <input type="hidden"  class="form-control form-control-lg"  name="lga_of_origin" value="<?= $learnerExtInfo[0]['lga_of_origin'] ?>" />
                    <input type="hidden"  class="form-control form-control-lg"  name="level_Edu" value="<?= $learnerDetails[0]['Level_Edu'] ?>" />
                    <input type="hidden"  class="form-control form-control-lg"  name="state_residence" value="<?= $learnerDetails[0]['State'] ?>" />
                    

                    <div class="input-text" id="wemaAcctDiv" >
                      <div class="input-div mb-1">
                        <label class="form-label" for="email-id-icon"
                          ><h5>Do you have Wema Bank Account?</h5></label>
                        <div class="input-group input-group-merge">
                          <select
                            name="wema_acct"
                            class="form-select"
                            id="basicSelect"
                            onchange="toggleBankInfo(this);"
                            required
                          >
                          <option value="">- Select -</option>
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                <div class="mb-1">
                 
                    <label class="form-label" for="email-id"><h5>Phone No</h5> <small style="color: red;"> **Kindly make sure your phone numer is linked to your NIN.</small></label>
                  
                  <div class="">
                    <input type="text" id="email-id" class="form-control form-control-lg"  name="phone" placeholder="Phone No" value="<?= $learnerDetails[0]['Phones'] ?>" />
                  </div>
                </div>
              </div>
                    
              <div class="col-12">
                <div class="mb-1">
                 
                    <label class="form-label" for="email-id"><h5>BVN</h5> </label>
                  
                  <div class="">
                    <input type="number" id="email-id" class="form-control form-control-lg phone" name="bvn" placeholder="BVN" value="<?= $learnerExtInfo[0]['bvn'] ?>" />
                  </div>
                </div>
              </div>
              
              <div class="col-12 mb-1">
                <div class="">
                 
                    <label class="col-form-label" for="password"><h5>NIN</h5></label>
                  </div>
                  <div class="">
                    <input type="number" id="password" class="form-control form-control-lg nin" name="nin" placeholder="NIN" value="<?= $learnerExtInfo[0]['nin'] ?>" />
                  </div>
                </div>

                <div class="input-text" id="bank-info-4">
            <div class="input-div mb-1">
              <div class="input-group input-group-merge">
                <input
                  class="form-check"
                  type="checkbox"
                  id="assist-wema"
                  name="assist_wema"
                  value="1"
                  checked
                />
      <label class="form-label" for="assist-wema">
        Unlock exclusive opportunities with Wema Bank! Get access to funding, career growth, and business support. To get started, check the box to consent to account opening.
      </label>
    </div>
     </div>
     </div>
              </div>
              <!--<div class="col-sm-9 offset-sm-3">-->
              <!--  <div class="mb-1">-->
              <!--    <div class="form-check">-->
              <!--      <input type="checkbox" class="form-check-input" id="customCheck1" />-->
              <!--      <label class="form-check-label" for="customCheck1">Remember me</label>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <div class="col-sm-9 offset-sm-3 mb-1">
                <button type="button" class="btn btn-primary me-1 prev_1">Previous</button>
                <button type="button" class="btn btn-secondary next_2">Next</button><span class="errorTest"></span>
              </div>
            </div>
          
        </div>
  </div>
      <!-- End Verification of BVN/NIN  -->
      
      <!-- Final Form  -->
  <div class="card display_3" style="display:none">
    <div class="card-header text-center">
        <h2 class="mb-1">Verify OTP</h2>
        <!-- <p class="mb-2">Take your course </p> -->
    </div>
    <div class="card-body">
        <div class="row">
            <div class="text">
                <h2>Let's verify your phone number</h2>
               <p id="responseMessage" class="verifyResponseMessage"></p>
                <span class="input-group-text" style="color: red; display: none;" id="errorOTP"></span>
            </div>

            <div class="input-text mb-1">
                
                 <div class="input-group">
          <input type="text" class="form-control otp"  aria-describedby="button-addon2" id="oneTimePassword"
                        maxlength="6"
                        autofocus=""
                        aria-label="One-Time Password"
                        placeholder="Enter your OTP">
          <button class="btn btn-outline-primary resendOTP" type="button" id="button-addon2">Resend OTP</button>
        </div>
            </div>
            <div class="buttons button_space me-1"
                    style="justify-content: center; align-items: center; display: flex;"
                  >
                    <button
                      class="btn validateOTP"
                      style="background-color: #02913f; color: white"
                      id="validateOTP"
                    >
                      Validate
                    </button>

                    
                  </div>

            <div class="col-sm-9 offset-sm-3 mt-3">
                <button type="button" class="btn btn-primary me-1 prev_2">Previous</button>
                <button type="button" class="btn btn-warning next_3">Next</button>
            </div>
        </div>
        
    </div>
</div>

      
      <div class="card display_4" style="display:none">
         
        <div class="card-header">
          <p></p><h2 class="mb-1 text-center">Completion is Key</h2></p>
<p>You have been assigned a total of 22 compulsory courses for the next three months. These courses will be available to you daily until the end of the three-month period. </p>
 
  <p>To progress through these courses, be sure to access each lesson daily. Each lesson will remain available until its specified deadline. It’s important to log in to your dashboard every day and complete the course for that day. If you miss a day, you’ll still have access to previous lessons to catch up. Once all course lessons are completed, you’ll be able to download your certificate.</p>
 
  <p>Take advantage of the opportunity to enhance your skills, and ensure that you manage your time effectively to complete all the assigned courses within the given timeframe. Also, make use of your referral link and share with friends, colleagues, family and stand a chance to win exciting cash prizes, devices, and gifts every week and month! </p>
 
<p>If you have any questions or concerns, feel free to reach out to <a href="mailto:info@gfa-tech.com">info@gfa-tech.com</a>. Good luck with your studies!</p>

        </div>
        <div class="col-sm-9 offset-sm-3">
                <button type="button" class="btn btn-primary me-1 prev_3">Previous</button>
                <button type="submit" class="btn btn-warning submitInfo">Continue learning</button>
              </div>
      </div>
      <!-- End Final Form  -->
       </form>
    </div>
    
  </div>
</section>
              <!--</div>-->
            </div>
          </div>
          <!-- / Coming soon page-->

        </div>
      </div>

  
    </div>
    <!-- END: Content-->
   
    

<script> 
    $(function(){

      //========================Validate OTP=============

      $('.validateOTP').click(function(event) {
            event.preventDefault(); // Prevent the form from submitting via the browser

            
            
            // Get form data
            var phone = $('.phone').val();
            var otp = $('.otp').val();

            $.ajax({
                url: '<?php echo base_url("gfa/verify_otp"); ?>',  // Adjust this URL based on your CodeIgniter route
                method: 'POST',
                data: { 
                    phone: phone, 
                    otp: otp 
                },
                beforeSend: function() {
                $('.validateOTP').html('Sending...');
                $('.validateOTP').prop('disabled', true);
            },
                success: function(response) {
                    if (response.status == '200') {
                        $('.verifyResponseMessage').html('<p style="color: green;">' + response.data.message + '</p>');
                    } else {
                        $('.verifyResponseMessage').html('<p style="color: red;">' + response.data.message + '</p>');
                    }
                    $('.validateOTP').html('Validate');
                    $('.validateOTP').prop('disabled', false);
                },
                error: function(xhr, status, error) {
                    $('.verifyResponseMessage').html('<p style="color: red;">An error occurred: ' + error + '</p>');
                }
            });
        });

      //================Re-Send OTP======================

       let resendClickCount = 0;
    let resendDisabled = false;
    let countdown = null;

    $('.resendOTP').click(function(event) {
        event.preventDefault(); // Prevent the form from submitting via the browser

        // Check if the button is disabled
        if (resendDisabled) {
            $('#responseMessage').html('<p style="color: red;">Please wait before resending OTP.</p>');
            return;
        }

        // Increment the resend counter
        resendClickCount++;

        // Disable button after two clicks
        if (resendClickCount >= 2) {
            disableResendButton();
        }

        // Get form data
        var phone = $('.phone').val();
        var nin = $('.nin').val();

        // Make AJAX call to the sendOTP method
        $.ajax({
            url: '<?php echo base_url("gfa/sendOTP"); ?>', // Adjust the URL to your CodeIgniter controller route
            type: 'POST',
            data: { 
                phone: phone, 
                nin: nin 
            },
            beforeSend: function() {
                $('.resendOTP').html('Sending...');
                $('.resendOTP').prop('disabled', true);
            },
            success: function(response) {
                // Handle the JSON response and update the HTML field
                if (response.status === '200') {
                    $('#responseMessage').html('<p style="color: green;">' + response.data.message + '</p>');
                } else {
                    $('#responseMessage').html('<p style="color: red;">' + response.data.message + '</p>');
                }

                $('.resendOTP').html('Resend OTP');
                $('.resendOTP').prop('disabled', false);
            },
            error: function(xhr, status, error) {
                $('#responseMessage').html('<p style="color: red;">Error: ' + error + '</p>');
            }
        });
    });

    function disableResendButton() {
        resendDisabled = true;
        $('.resendOTP').html('Wait 60s');
        $('.resendOTP').prop('disabled', true);

        let timer = 60;
        countdown = setInterval(function() {
            timer--;
            $('.resendOTP').html('Wait ' + timer + 's');

            if (timer <= 0) {
                clearInterval(countdown);
                $('.resendOTP').html('Resend OTP');
                $('.resendOTP').prop('disabled', false);
                resendDisabled = false;
                resendClickCount = 0; // Reset the counter after waiting
            }
        }, 1000);
    }
        
        $(".submitForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
    //     
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/submitLoginVerify"); ?>",
     error:function() {$(".displayError").html('Error')},
	 beforeSend:function() {$(".submitInfo").html('Loading...'); $(".submitInfo").prop('disabled', true);},
	  processData: false,
        contentType: false,
     success: function(data) {
     
      $(".submitInfo").html('Continue to get started');
		 $(".displayError").html('');
		 $(".submitInfo").prop('disabled', false);
		window.open("<?php echo base_url("gfa/dashboard"); ?>", "_self");
      }
    });
    return false;

  });
        
        $(".selectSkill").change(function(){
        
        var thisSkill = $(this).val();
        var stateRd = $(".stateRd").val();
        $(".displaySkill").html(thisSkill);
        
        $.ajax({
     data:{thisSkill:thisSkill,stateRd:stateRd},
     type: "POST",
     url: "<?php echo base_url("gfa/displayTotalCourseMember"); ?>",
     error:function() {$(".displayCourseMember").html('Error')},
	 beforeSend:function() {$(".displayCourseMember").html('loading...'); },
     success: function(data) {
	 $(".displayCourseMember").html(data);	
     }
    });
        
    }).change();
        
    $(".groupLeader").change(function(){
        
        var thisVal = $(this).val();
        if(thisVal == "Yes"){
            
        $(".leaderAgreement").show();    
            
        }else{
           $(".leaderAgreement").hide();    
            
        }
        
    });
        
        $(".next_1").click(function(){
            $(".display_1").hide();
            $(".display_2").show();
            $(".display_3").hide();
            $(".display_4").hide();
        });

$(".next_2").click(function() {
    // Validate current form fields before moving to the next section
    var isValid = true;
    var errorMessage = ""; // Variable to store error message

    $(".display_2 input, .display_2 select").each(function() {
        var inputVal = $(this).val();
        var inputName = $(this).attr('name');

        // Check for required fields, excluding BVN
        if (inputName !== "bvn" && $(this).prop('required') && inputVal === "") {
            isValid = false;
            $(this).addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid');
        }

        // Additional validation for Phone, NIN, and BVN fields to ensure they are exactly 11 digits
        if ((inputName === "phone" || inputName === "nin") && inputVal.length !== 11) {
            isValid = false;
            $(this).addClass('is-invalid'); // Add visual feedback for invalid fields
            errorMessage = "Phone, NIN must be exactly 11 digits.";
        }
    });

    if (isValid) {
        $(".display_1").hide();
        $(".display_2").hide();
        $(".display_3").show();
        $(".display_4").hide();
        $(".errorTest").html(""); // Clear error message if valid

        // Send OTP
        var phone = $('.phone').val();
        var nin = $('.nin').val();

        // Make AJAX call to the sendOTP method
        $.ajax({
            url: '<?php echo base_url("gfa/sendOTP"); ?>', // Adjust the URL to your CodeIgniter controller route
            type: 'POST',
            data: { 
                phone: phone, 
                nin: nin 
            },
            success: function(response) {
                // Handle the JSON response and update the HTML field
                if (response.status === '200') {
                    $('#responseMessage').html('<p style="color: green;">' + response.data.message + '</p>');
                } else {
                    $('#responseMessage').html('<p style="color: red;">' + response.data.message + '</p>');
                }
            },
            error: function(xhr, status, error) {
                $('#responseMessage').html('<p style="color: red;">Error: ' + error + '</p>');
            }
        });
    } else {
        $(".errorTest").html(errorMessage || "Please fill all required fields before proceeding."); // Display appropriate error
    }
});


        $(".next_3").click(function(){
             $(".display_1").hide();
            $(".display_2").hide();
            $(".display_3").hide();
            $(".display_4").show();
        });
        
        $(".prev_1").click(function(){
             $(".display_1").show();
            $(".display_2").hide();
            $(".display_3").hide();
             $(".display_4").hide();
        });
        $(".prev_2").click(function(){
             $(".display_1").hide();
            $(".display_2").show();
            $(".display_3").hide();
             $(".display_4").hide();
        });
        
        $(".prev_3").click(function(){
             $(".display_1").hide();
            $(".display_2").hide();
            $(".display_3").show();
             $(".display_4").hide();
        });
    });
</script>

   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   