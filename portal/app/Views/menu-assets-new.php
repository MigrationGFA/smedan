<body>
<?php 
  $this->gfa_model = model('App\Models\GfaModel');
   ?>
  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo ">
      <a href="gfa/" class="app-brand-link">      
     <img src="<?php echo base_url('public/assets/images/logo.webp'); ?>" width="100%">
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">
    
    <!-- Apps & Pages -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
    </li>
    <li class="menu-item">
      <a href="<?php echo base_url("gfa/learning_path") ?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>

     <li class="menu-item">
      <a href="<?php echo base_url('gfa/soft_skills'); ?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-user"></i>
        <div data-i18n="Soft Skills">Soft Skills </div>
      </a>
    </li>
    
    
     <!--Group Members -->
     <?php
        $stateRd = $StartupArray[0]['State'];
        $thisSkill = $skillArray[0]['profile_extra'];
        // echo $this->gfa_model->displayTotalCourseMember($thisSkill,$stateRd);
        //$EmailByCourse = $this->gfa_model->getEmailByCourse($thisSkill);
        $sumMembers = 0;
        // foreach($EmailByCourse as $courseArray){
        //  $sumMembers += $this->gfa_model->displayTotalCourseMember($courseArray['email'],$stateRd);   
        // }
      
     ?>
    
    <!-- <li class="menu-item">
      <a href="<?php echo base_url('gfa/referral'); ?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div data-i18n="Referral">Referral</div>
      </a>
    </li> -->
    <!-- <li class="menu-item">
      <a href="<?php echo base_url('gfa/updateCertificateNameView'); ?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div data-i18n="Update_Certificate_Name">Update Certificate Name</div>
      </a>
    </li> -->
    
    
    <?php 
    
    $cert_course_ref  = session()->get('cert_course_ref') ; 
     $cer_soft_ref  = session()->get('cert_soft_ref') ; 
    
    
    ?>
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-book"></i>
        <div data-i18n="Certificate">Certificate</div>
        <div class="badge bg-primary rounded-pill ms-auto"></div>
      </a>
      <ul class="menu-sub">
        <?php if(!empty($cert_course_ref)){  ?>
     <li class="menu-item">
          <a href="<?php echo base_url("gfa/certificate/{$cert_course_ref}"); ?>" class="menu-link">
            <div data-i18n="Course">Course</div>
          </a>
        </li>
    <?php }else{  ?>
      <li class="menu-item">
          <a href="<?php echo base_url("gfa/certificate_gen_course"); ?>" class="menu-link">
            <div data-i18n="Course">Course</div> 
          </a>
        </li>

      <?php }  ?>
    <?php if(!empty( $cer_soft_ref )){  ?>
        <li class="menu-item">
          <a href="<?php echo base_url("gfa/certificate_soft_skills/{$cer_soft_ref}"); ?>" class="menu-link">
            <div data-i18n="Soft Skills">Soft Skills</div> 
          </a>
        </li>
     <?php }else{  ?>

      <li class="menu-item">
          <a href="<?php echo base_url("gfa/certificate_gen"); ?>" class="menu-link">
            <div data-i18n="Soft Skills">Soft Skills</div> 
          </a>
        </li>
  <?php }  ?>
        
        
      </ul>
    </li> -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div data-i18n="Contact Admin">Contact Admin</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?php echo base_url("gfa/support_ticket") ?>" class="menu-link">
            <div data-i18n="Open Ticket">Open Ticket</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?php echo base_url("gfa/all_tickets") ?>" class="menu-link">
            <div data-i18n="All Tickets">All Tickets</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="<?php echo base_url('gfa/signoutAction'); ?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-logout"></i>
        <div data-i18n="Logout">Logout</div>
      </a>
    </li>
    

   
  </ul>
  
  

</aside>
<!-- / Menu -->



    <!-- Layout container -->
    <div class="layout-page">