  <?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
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
         <label class="form-label" for="accountFirstName">Upload your Logo</label><br>
          
              <!-- <br> -->
        <div class="d-flex">
   <?php        $getPhoto = $this->gfa_model->getPhotoUploaded($email);
            if(empty($getPhoto)){
          $showPhoto = "public/assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }

      ?>
          <a href="#" class="me-25">
              
            <img
              src="<?php echo base_url($showPhoto); ?>"
              id="frame"
              class="uploadedAvatar rounded me-50"
              alt="profile image"
              height="100"
              width="100"
            />
          </a>
          <!-- upload and reset button -->
          <form class="fileInfox" method="post" action="#" enctype="multipart/form-data">
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
          </form>
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
        <?php
     
          if($account_type=='startup'){
            $nameArray = explode(" ", $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']);
            $firsname = $nameArray[0];
            $lastname = (!empty($nameArray[1]))? $nameArray[1] : '';
            $phone = $this->gfa_model->getStartUpDetails($email)[0]['Phones'];
            $country = $this->gfa_model->getStartUpDetails($email)[0]['CountryHQ'];
            $industry = $this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry'];
          }
        ?>  
        <!-- form -->
        <form class="validate-form mt-2 pt-50 startUpForm" method="post" action="" enctype="multipart/form-data">
            <div class="row">
              
                 
            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountFirstName">First Name</label>
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="firstName"
                placeholder="First Name"
                value="<?php echo $firsname ?>"
                data-msg="Please enter first name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountLastName">Last Name</label>
              <input
                type="text"
                class="form-control"
                id="accountLastName"
                name="lastName"
                placeholder="Last Name"
                value="<?php echo $lastname ?>"
                data-msg="Please enter last name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountGender">Gender</label>
              
              <select name="gender" class="form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Gender'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Gender'];  ?></option>
                  <option value="Male">Male</option>
                       <option value="Female">Female</option>
                       
               </select>  
                 </div>
            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountEmail">Email</label>
              
              <input
                type="email"
                class="form-control"
                id="accountEmail"
                disabled
                placeholder="Email"
                value="<?php echo $email ; ?>"
              />
            </div>
            
            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountPhoneNumber">Phone Number</label>
              <input
                type="text"
                class="form-control account-number-mask"
                id="accountPhoneNumber"
                name="phoneNumber"
                placeholder="Phone Number"
                value="<?php echo $phone ; ?>"
              />
            </div>
              <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="country">Your Country</label>
              <select id="country" name="country" class="select2 form-select">
                <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Country'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Country'];  ?></option>
                    <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antartica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo">Congo, the Democratic Republic of the</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                <option value="Croatia">Croatia (Hrvatska)</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="France Metropolitan">France, Metropolitan</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                <option value="Holy See">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran (Islamic Republic of)</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia, Federated States of</option>
                <option value="Moldova">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria" selected>Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                <option value="Saint LUCIA">Saint LUCIA</option>
                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                <option value="Span">Spain</option>
                <option value="SriLanka">Sri Lanka</option>
                <option value="St. Helena">St. Helena</option>
                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Viet Nam</option>
                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Serbia">Serbia</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option> 
              </select>
            </div>
            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountState">State</label>
              <input type="text" class="form-control" id="accountState" name="state" placeholder="State" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['State'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountAddress">Address</label>
              <input type="text" class="form-control" id="accountAddress" name="personal_address" placeholder="Your Address" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Personal_Address'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-2" style="display: none;">
              <label class="form-label" for="account_Implementation_Stage">Skills to develop</label>
              <input type="text" class="form-control" id="accountImplementation_Stage" disabled name="Startup_Implementation_Stage" placeholder="Skills to develop" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage'];  ?>" />
            </div>
            
            <?php if ($this->gfa_model->getStartUpDetails($email)[0]['Interest_Fund_Raise'] != 'professional' && $this->gfa_model->getStartUpDetails($email)[0]['Interest_Fund_Raise'] != 'jobseeker') { ?>
            <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="normalMultiSelect">Industry</label>
              <select id="PrimaryBusinessIndustry" name="PrimaryBusinessIndustry" class="select2 form-select">
                <?php  $IndustryArray = $this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry']; ?>
                  <option value="<?= $IndustryArray?>"><?= $IndustryArray?></option>
                  <option value="Advertising">Advertising</option>
                  <option value="Agribusiness">Agribusiness</option>
                  <option value="Agriculture">Agriculture</option>
                  <option value="Agriculture and Farming">Agriculture and Farming</option>
                  <option value="Apps">Apps</option>
                  <option value="Art">Art</option>
                  <option value="Artificial Intelligence">Artificial Intelligence</option>
                  <option value="Automotive">Automotive</option>
                  <option value="Beauty &amp; Fashion">Beauty &amp; Fashion</option>
                  <option value="Biotechnology">Biotechnology</option>
                  <option value="Banners">Banners</option>
                  <option value="Business">Business</option>
                  <option value="Business cards">Business cards</option>
                  <option value="Business planning">Business planning</option>
                  <option value="Caricatures">Caricatures</option>
                  <option value="Commerce and Shopping">Commerce and Shopping</option>
                  <option value="Community and Lifestyle">Community and Lifestyle</option>
                  <option value="Consumer Electronics">Consumer Electronics</option>
                  <option value="Consumer Goods">Consumer Goods</option>
                  <option value="Copywriting">Copywriting</option>
                  <option value="Data and Analytics">Data and Analytics</option>
                  <option value="Digital Health">Digital Health</option>
                  <option value="Education">Education</option>
                  <option value="Energy">Energy</option>
                  <option value="Entertainment">Entertainment</option>
                  <option value="Fashion">Fashion</option>
                  <option value="Finance">Finance</option>
                  <option value="Finance (FinTech, InsureTech, etc)">Finance (FinTech, InsureTech, etc)</option>
                  <option value="Financial Services">Financial Services</option>
                  <option value="Food">Food</option>
                  <option value="Food and Beverage">Food and Beverage</option>
                  <option value="Flyers &amp; Posters">Flyers &amp; Posters</option>
                  <option value="Gaming">Gaming</option>
                  <option value="Graphics &amp; Design">Graphics &amp; Design</option>
                  <option value="Green Technologies">Green Technologies</option>
                  <option value="Hardware">Hardware</option>
                  <option value="Health Care">Health Care</option>
                  <option value="Healthcare">Healthcare</option>
                  <option value="Health &amp; Fitness">Health &amp; Fitness</option>
                  <option value="Horoscope &amp; Tarot">Horoscope &amp; Tarot</option>
                  <option value="HTML &amp; CSS">HTML &amp; CSS</option>
                  <option value="Illustrations">Illustrations</option>
                  <option value="Impact Investing">Impact Investing</option>
                  <option value="Infrastructure development (affordable housing and sanitation)">Infrastructure development (affordable housing and sanitation)</option>
                  <option value="Information Technology">Information Technology</option>
                  <option value="Insurance">Insurance</option>
                  <option value="Internet Services">Internet Services</option>
                  <option value="Languages">Languages</option>
                  <option value="Lending and Investments">Lending and Investments</option>
                  <option value="Lifestyle">Lifestyle</option>
                  <option value="Logo design">Logo design</option>
                  <option value="Manufacturing and raw material processing">Manufacturing and raw material processing</option>
                  <option value="Marketing">Marketing</option>
                  <option value="Media and Communications">Media and Communications</option>
                  <option value="Media and Entertainment">Media and Entertainment</option>
                  <option value="Mobile">Mobile</option>
                  <option value="Music and Audio">Music and Audio</option>
                  <option value="Oil and Gas">Oil and Gas</option>
                  <option value="Online classes &amp; Teaching">Online classes &amp; Teaching</option>
                  <option value="Payments">Payments</option>
                  <option value="Photo models">Photo models</option>
                  <option value="Photography">Photography</option>
                  <option value="Photoshop">Photoshop</option>
                  <option value="Postproduction">Postproduction</option>
                  <option value="Press release">Press release</option>
                  <option value="Presentations">Presentations</option>
                  <option value="Privacy and Security">Privacy and Security</option>
                  <option value="Professional Services">Professional Services</option>
                  <option value="Programming &amp; IT">Programming &amp; IT</option>
                  <option value="Proofreading &amp; Editing">Proofreading &amp; Editing</option>
                  <option value="Psychotherapy">Psychotherapy</option>
                  <option value="Real Estate">Real Estate</option>
                  <option value="Resumes">Resumes</option>
                  <option value="Retail/e-Commerce">Retail/e-Commerce</option>
                  <option value="Sales and Marketing">Sales and Marketing</option>
                  <option value="Science">Science</option>
                  <option value="Science and Engineering">Science and Engineering</option>
                  <option value="Sector Agnostic">Sector Agnostic</option>
                  <option value="Shipping industries">Shipping industries</option>
                  <option value="Social Impact">Social Impact</option>
                  <option value="Social-impact technology">Social-impact technology</option>
                  <option value="Software">Software</option>
                  <option value="Software (B2B, Enterprise SaaS)">Software (B2B, Enterprise SaaS)</option>
                  <option value="Sound effects">Sound effects</option>
                  <option value="Sports">Sports</option>
                  <option value="Sustainability">Sustainability</option>
                  <option value="Technology">Technology</option>
                  <option value="Transportation">Transportation</option>
                  <option value="Travel">Travel</option>
                  <option value="Video &amp; Audio">Video &amp; Audio</option>
                  <option value="Video spokesperson">Video spokesperson</option>
                  <option value="Voice-over">Voice-over</option>
                  <option value="Warehousing">Warehousing</option>
                  <option value="Web content">Web content</option>
                  <option value="Web design">Web design</option>
                  <option value="Wellness &amp; Beauty">Wellness &amp; Beauty</option>
                  <option value="Writing &amp; Translation">Writing &amp; Translation</option>
                  <option value="Others">Others</option>
                </select>
              </div>
              
              <?php }  ?>

              <div class="col-12 col-sm-6 mb-2">
              <label class="form-label" for="accountLevel_Edu">Highest Level of Education</label>
              <select name="Level_Edu" class="form-control form-select" id="Level_Edu">
                <option value="<?= $this->gfa_model->getStartUpDetails($email)[0]['Level_Edu'];  ?>"><?= $this->gfa_model->getStartUpDetails($email)[0]['Level_Edu'];  ?></option>
                <option value="No Formal Education">No Formal Education</option>
                <option value="Primary School Completed">
                    Primary School Completed
                </option>
                <option value="Secondary School Completed">
                    Secondary School Completed
                </option>
                <option value="Vocational/Technical Diploma">
                    Vocational/Technical Diploma
                </option>
                <option value="OND">OND</option>
                <option value="HND">HND</option>
                <option value="Bachelor's Degree">Bachelor's Degree</option>
                <option value="Postgraduate Diploma">Postgraduate Diploma</option>
                <option value="Master's Degree">Master's Degree</option>
                <option value="Doctorate (Ph.D.)">Doctorate (Ph.D.)</option>
                <option value="Professional Qualification">
                    Professional Qualification
                </option>
              </select>
            </div>
            
            <div class="col-12 mt-2">
              <a href="javascript:history.back()" class="btn btn-dark mt-1 me-1">Back</a>
               <button type="submit" class="btn btn-primary mt-1 me-1 saveBtn">Save Personal Profile</button>
              <span class="displayAction"></span>

            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>
    
    <script>
      $(function(){
          
          
          	$(".saveBtn").click(function(e) {
    //---------------^---------------
    e.preventDefault();
    
	 var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url('gfa/profilestartuppro'); ?>",
     error:function() {$(".displayAction").html('Error saving data');},
	 beforeSend:function() {$(".saveBtn").html('Saving Profile...');},
      success: function(data) {
		  $(".displayAction").html("Successfully Saved!");  
	    $(".saveBtn").html('Saved');  
      // location.reload();
       }
      
    });
	 
  
  });
          
      });  
    </script>

  </div>
</div>
</div>
    <!-- END: Content-->

  