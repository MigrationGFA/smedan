<div
class="modal fade"
id="privacyModal"
tabindex="-1"
aria-labelledby="privacyModalLabel"
aria-hidden="true"
data-bs-backdrop="static"
data-bs-keyboard="false"
>
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title text-black" id="privacyModalLabel">
        Please fill the form accurately
      </h5>
    </div>
    <div class="modal-body text-black">      
      <form class="form form-horizontal submitForm" action="#" enctype="multipart/form-data" method="post">
        
        <div class="row">
          <div class="col-12 my-2">

            <div class="input-text">
              <div class="input-div mb-1">
                <label class="form-label" for="email-id-icon"
                  >What skills do you have or what type of business service do you offer?</label
                >
                <div class="input-group input-group-merge">
                  <span class="input-group-text"></span>
                  <select
                    name="growth_skill_type"
                    class="form-select"
                    id="level2"
                    required=""
                    onchange="toggleSkills(this);"
                  >
                    <option value="" selected="selected" disabled>
                      - Select -
                    </option>
                    <!-- <option value="Not Specified">Not Specified</option> -->
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
            
            <div class="input-text" id="otherBusinessDiv" style="display: none;">
              <div class="input-div mb-1">
                <label class="form-label" for="contact-info-icon"
                  >Other Skills/Business</label
                >
                <div class="input-group input-group-merge">
                  <input
                    type="text"
                    id="growth_skill_other"
                    class="form-control"
                    name="growth_skill_other"                         
                  />
                </div>
              </div>
            </div>
    
            <div class="input-text">
              <div class="input-div mb-1">
                <label class="form-label" for="contact-info-icon"
                  >How do you hear about us?</label
                >
                <div class="input-group input-group-merge">
                  <span class="input-group-text"></span>
                  <select
                    name="hear_about"
                    class="form-select"
                    required=""
                  >
                    <option value="" selected="selected" disabled>
                      - Select -
                    </option>
                    <option
                      value="Print Ads (Newspapers, Magazines, Flyers, etc.)"
                    >
                      Print Ads (Newspapers, Magazines, Flyers, etc.)
                    </option>
                    <option value="Radio Ads">Radio Ads</option>
                    <option value="Influencer">Influencer</option>
                    <option
                      value="Online Ads (Google Ads, Facebook Ads, Instagram Ads, etc.)"
                    >
                      Online Ads (Google Ads, Facebook Ads, Instagram Ads,
                      etc.)
                    </option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="Tiktok">Tiktok</option>
                    <option value="Twitter">Twitter</option>
                    <option value="Whatsapp">Whatsapp</option>
                    <option value="Youtube">Youtube</option>
                    <option value="Podcasts">Podcasts</option>
                    <option value="Email Campaigns">
                      Email Campaigns
                    </option>
                    <option value="Billboards and Outdoor Advertising">
                      Billboards and Outdoor Advertising
                    </option>
                    <option value="Events and Trade Shows">
                      Events and Trade Shows
                    </option>
                    <option value="Friends and family">
                      Friends and family
                    </option>
                    <option value="Networking Groups">
                      Networking Groups
                    </option>
                    <option value="Online Blogs/Articles">
                      Online Blogs/Articles
                    </option>
                    <option value="Online Forums and Communities">
                      Online Forums and Communities
                    </option>
                    <option value="Online Reviews (Google Reviews, etc.)">
                      Online Reviews (Google Reviews, etc.)
                    </option>
                    <option value="Referral Programs">
                      Referral Programs
                    </option>
                    <option value="SEO/Search Engine">
                      SEO/Search Engine
                    </option>
                    <option value="Sponsored Content">
                      Sponsored Content
                    </option>
                    <option value="TV Commercials">TV Commercials</option>
                    <option value="University road show">
                      University road show
                    </option>
                    <option value="Webinars">Webinars</option>
                    <option value="Word of Mouth">Word of Mouth</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 mt-2">
            <button type="submit" class="btn btn-primary mt-1 me-1 saveBtn">Update</button>
            <span class="displayAction"></span>  
          </div>
        </div>

      </form>
    </div>
    
  </div>
</div>
</div>

<script>
  const toggleSkills = (target) => {
    const selectElement = document.getElementById("level2");
    const otherBusinessDiv = document.getElementById("otherBusinessDiv");
    if (selectElement.value === "Other Business") {
      otherBusinessDiv.style.display = "block";
    } else {
      otherBusinessDiv.style.display = "none";
    }
  }

  
  $(function(){
    $(".saveBtn").click(function(e) {
      e.preventDefault();
      
      var startupInfo = $('.submitForm').serialize();
      $.ajax({
        data:startupInfo,
        type: "POST",
        url: "<?php echo base_url('gfa/updateCategory'); ?>",
        error:function(e) {$(".displayAction").html('Error saving data');},
        beforeSend:function() {$(".saveBtn").html('Saving Profile...');},
        success: function(data) {
          if (data == 'All fields are required!') {
            $(".displayAction").html('<b class="text-danger">' + data + '</b>');
            $(".saveBtn").html('Update');  
            // location.reload();              
          }else{
            $(".displayAction").html("Successfully Updated!");  
            $(".saveBtn").html('Saved');
            // Hide the modal
            var privacyModal = bootstrap.Modal.getInstance(
              document.getElementById("privacyModal")
            );
            privacyModal.hide();

            // Display the main content
            document.querySelector(".mContent").style.display = "block";
          }      
        }      
      });
    });
          
  });  
  
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php
$checkUserCategory = $this->gfa_model->checkUserCategory($email);
if($checkUserCategory[0]['val'] != 1){
    echo '<script>
        // Show the modal on page load
        window.onload = function () {
            var privacyModal = new bootstrap.Modal(
                document.getElementById("privacyModal")
            );
            privacyModal.show();
        };
    </script>';
}
?>
