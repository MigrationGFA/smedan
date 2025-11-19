<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $email = session()->get('email');

  if($getStartUpDetails[0]["Interest_Fund_Raise"]=="Business Owner" || $getStartUpDetails[0]["Interest_Fund_Raise"]=="Aspiring Business Owner"){ 
       $courseCat = "Technical Course";
       }else{
          $courseCat = "Technology Course";
           } 
  
 
?>
   <!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row mb-4 g-4">
  
    
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Certificate Center</span>
</h4>

 
<div class="col-sm-6 col-xl-6">
  <?php $cert_course_ref  = session()->get('cert_course_ref') ; if(!empty($cert_course_ref)){ ?>
          <a href="<?php echo base_url("gfa/certificate/{$cert_course_ref}"); ?>">
          <?php }else{  ?>
            <a href="<?php echo base_url("gfa/certificate_gen_course/"); ?>">
            <?php }  ?>
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h4 class="mb-0"><?php echo $courseCat ?></h4>
            <small style="font-weight: lighter; color: #5c5470;">Download your <?php echo $courseCat ?> Certificate</small>
          </div>
          <button class="btn bg-label-danger">
          <i class="ti ti-link ti-md"></i>
          </button>
          
        </div>
      </div>
    </div>
    </a>
  </div>
  
  

  
  <div class="col-sm-6 col-xl-6">
    <?php $cert_soft_ref  = session()->get('cert_soft_ref') ; if(!empty($cert_soft_ref)){ ?>
          <a href="<?php echo base_url("gfa/certificate_soft_skills/{$cert_soft_ref}"); ?>" >
          <?php }else{  ?>
            <a href="<?php echo base_url("gfa/certificate_gen/"); ?>" > 
            <?php }  ?> 
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h4 class="mb-0">Soft Skills</h4>
            <small style="font-weight: lighter; color: #5c5470;">Download your Soft Skill Course Certificate </small>
          </div>
          <button class="btn bg-label-success">
          <i class="ti ti-link ti-md"></i>
        </button>
          
        </div>
      </div>
    </div>
    </a>
  </div>

		
      <!--<input type="text" class="getValue" value="" />-->
		<span class="loadModule1 loadingPage1"></span>
      </div>
      
      <!--<nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">-->
      <!--  <ul class="pagination">-->
      <!--    <li class="page-item prev">-->
      <!--      <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs scaleX-n1-rtl"></i></a>-->
      <!--    </li>-->
      <!--    <li class="page-item active">-->
      <!--      <a class="page-link" href="javascript:void(0);">1</a>-->
      <!--    </li>-->
      <!--    <li class="page-item">-->
      <!--      <a class="page-link" href="javascript:void(0);">2</a>-->
      <!--    </li>-->
      <!--    <li class="page-item">-->
      <!--      <a class="page-link" href="javascript:void(0);">3</a>-->
      <!--    </li>-->
      <!--    <li class="page-item">-->
      <!--      <a class="page-link" href="javascript:void(0);">4</a>-->
      <!--    </li>-->
      <!--    <li class="page-item">-->
      <!--      <a class="page-link" href="javascript:void(0);">5</a>-->
      <!--    </li>-->
      <!--    <li class="page-item next">-->
      <!--      <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs scaleX-n1-rtl"></i></a>-->
      <!--    </li>-->
      <!--  </ul>-->
      <!--</nav>-->
      </div>    
    </div>
  </div>
  <!-- <div class="modal fade" id="agreeGrp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
      <div class="modal-content">
        <div class="modal-header bg-transparent">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button><span class="displayError"></span>
        </div>
        <div class="modal-body pb-5 px-sm-5 pt-50">
          <div class="text-center mb-2">
            <h4 class="mb-2">Get Exclusive 50% Off Company Registration for FGN-ALAT Participants - Limited Time Offer!</h4>
             <h1 class="mb-1">Next Stage of FGN-ALAT Digital Skillnovation Program</h1> 
            <p>Read carefully</p>
          </div>
             <p>You Are One Step Closer to the Next Stage of FGN-ALAT Digital Skillnovation Program!</p>
          
          <p>We trust your journey with the FGN-ALAT Digital Skillnovation Program has been nothing short of amazing! We're thrilled to share that the next stage of the program is about to commence.</p>
          
          <p>Get ready to join live online classes hosted on Zoom, YouTube Live, and other platforms, alongside learners from across the country. This would provide you with the opportunity to engage with expert instructors and fellow participants, ask questions, receive immediate feedback, and collaborate on exciting projects.</p>
          
          <p>The courses to be covered will range from business management essentials like strategic planning and sales, as well as tech skills like data analytics, UI/UX design, and product management, based on your chosen track.</p>
          
          <p>To access this next stage, ensure completion of all assigned eLearning courses or stay on track to complete them. Only those invited to participate in the live online classes can progress to subsequent stages of the program, which include mentorship, access to grants, and other funding opportunities.</p>
          
          <p>Don't forget to log in to the platform at <a href="https://fgn-alat.dimpified.com/portal/gfa/login">https://fgn-alat.dimpified.com/portal/gfa/login</a> and ensure that you complete all your assigned courses and assessments by the deadline, which is set for March 29, 2024.</p>
          
          <p>Encountering technical hurdles while accessing the platform? Kindly fill out the form <a href="link-to-form">here</a> to seek assistance.</p>
          
          <p>For further inquiries or assistance, please send us an email at <a href="mailto:purpleconnect@wemabank.com">purpleconnect@wemabank.com</a>.</p> 

  
          <p>
          As a participant of the FGN-ALAT program, a 3rd party partner is offering 50% off company formation from now until May 31st, 2024.</p>
          <p>You can register your business name, company or NG0 at 50% off.</p>
          <p>This incredible offer comes with a host of additional benefits designed to set your business up for success:</p>
          <br>

          <ul>
            <li>A free .com.ng domain</li>
            <li>50% discount on a domain hosting plan</li>
            <li>Business listing on a Marketplacee</li>
            <li>to sell your services to 30+ countries</li>
          </ul><br>

          <p>The lawyers will guide you through the entire process, ensuring a smooth and hassle-free experience. Don't miss out on this limited-time opportunity to elevate your business at half the cost.</p><br>
          
          <p>Click <a href="https://gfa-tech.com/gfa-os/auth/sign-up">here</a> to get started!</p>
            
        </div>
      </div>
    </div>
  </div> -->

</div>

          </div>
          <!-- / Content -->