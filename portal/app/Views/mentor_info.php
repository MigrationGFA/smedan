 <?php 
  $this->gfa_model = model('App\Models\GfaModel');
   ?>
 <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Mentor Profile </span> 
</h4>


<!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-4"> 
      
      <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
   <?php  
     
        $getPhoto = $this->gfa_model->getPhotoUploaded($mentorInfo[0]['Email']);
      if(empty($getPhoto)){
          $showPhoto = "public/assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }
      

      ?>
          <img src="<?php echo base_url($showPhoto) ?>" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4><?=  $mentorInfo[0]['Mentor_name'] ?></h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                <li class="list-inline-item">
                  <i class='ti ti-layout'></i> <?= $mentorInfo[0]['Mentors_focus'] ?>
                </li>
                <li class="list-inline-item">
                  <i class='ti ti-color-swatch'></i> <?= $mentorInfo[0]['Investment_stage'] ?>
                </li>
                <li class="list-inline-item">
                  <i class='ti ti-compass'></i> <?= $mentorInfo[0]['Industry'] ?></li> 
              </ul>
            </div>
            
            <?php //$startupConnectionStatus = $this->gfa_model->startupConnectionStatus($getInvestorDetails[0]['Contact_Email'],$email,"startup-investor"); 
            //echo $startupConnectionStatus[0]['extra_status'];
            ?>
            <!--<button class="btn btn-primary connectBtn">-->
            <!--  <i class='ti ti-bell me-1'></i>-->
              <?php 
            //   if(!empty($startupConnectionStatus)){
            //   if($startupConnectionStatus[0]['extra_status']== "New Contact"){
            //   echo "Follow-up with email"; 
            //   $connectStatus = "Follow-up";
            //   $connectMsg = "Reaching Out Again - Follow-up on Investment Opportunity";
            //   }else{
            //       "Pending Request";
            //   }
            //   }else{
            //       $connectStatus = "New Contact";
            //       $connectMsg = "Introduction and Bio sent.";
            //       echo "Send Bio Introduction";
            //   }
              ?>
            <!--</button>-->
            <input type="hidden" class="connectEmail" value="<?php echo $mentorInfo[0]['Email']; ?>" />
             <input type="hidden" class="connectType" value="startup-mentor" />
             <!--<input type="hidden" class="connectMsg" value="<?=  $connectMsg ?>" />-->
             <!--<input type="hidden" class="connectStatus" value="<?=  $connectStatus ?>" />-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
          $(function() {


              $(".connectBtn").click(function() {

                  var connectEmail = $('.connectEmail').val();
                  var connectType = $('.connectType').val();
                  var connectMsg = $('.connectMsg').val();
                  var connectStatus = $('.connectStatus').val(); 
                  $.ajax({ 
                      data: {
                        connectEmail: connectEmail,
                        connectType: connectType,
                        connectMsg: connectMsg, 
                        connectStatus: connectStatus  
                      },
                      type: "POST",
                      url: "<?php echo base_url("gfa/matchedConnectionIntro"); ?>",
                      error: function() {
                          $(".connectBtn").html('Error Request');
                      },
                      beforeSend: function() {
                          $(".connectBtn").html('Requesting...');
                          $('.connectBtn').prop("disabled", true);
                      },
                      success: function(data) {

                          $(".displayContent").html('Request sent to investor, you will be notify as soon as there is a response.'); 
                          $('.connectBtn').html("Sent to this investor");
                          $('.timeRequest').html("Today");
                          $('.connectBtn').prop("disabled", true);



                      }

                  });

              });

              

          });
        </script>
<!--/ Header -->

<!-- Navbar pills -->
<!--<div class="row">-->
<!--  <div class="col-md-12">-->
<!--    <ul class="nav nav-pills flex-column flex-sm-row mb-4">-->
<!--      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='ti-xs ti ti-user-check me-1'></i> Profile</a></li>-->
<!--      <li class="nav-item"><a class="nav-link" href="pages-profile-teams.html"><i class='ti-xs ti ti-users me-1'></i> Teams</a></li>-->
<!--      <li class="nav-item"><a class="nav-link" href="pages-profile-projects.html"><i class='ti-xs ti ti-layout-grid me-1'></i> Projects</a></li>-->
<!--      <li class="nav-item"><a class="nav-link" href="pages-profile-connections.html"><i class='ti-xs ti ti-link me-1'></i> Connections</a></li>-->
<!--    </ul>-->
<!--  </div>-->
<!--</div>-->
<!--/ Navbar pills -->

<!-- User Profile Content -->
<div class="row">
  <div class="col-xl-4 col-lg-5 col-md-5">
    <!-- About User -->
    <div class="card mb-4">
      <div class="card-body">
        <small class="card-text text-uppercase">About</small>
        <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="ti ti-user"></i><span class="fw-bold mx-2">Gender:</span> <span><?= $mentorInfo[0]['Gender'] ?></span></li>
          <li class="d-flex align-items-center mb-3"><i class="ti ti-check"></i><span class="fw-bold mx-2">Status:</span> <span>Active</span></li>
          <li class="d-flex align-items-center mb-3"><i class="ti ti-crown"></i><span class="fw-bold mx-2">Role:</span> <span><?= $mentorInfo[0]['Role'] ?></span></li>
          <li class="d-flex align-items-center mb-3"><i class="ti ti-flag"></i><span class="fw-bold mx-2">Nationality</span> <span><?= $mentorInfo[0]['Nationality'] ?></span></li>
          <li class="d-flex align-items-center mb-3"><i class="ti ti-file-description"></i><span class="fw-bold mx-2">Investment Interest:</span><span><?= $mentorInfo[0]['Investment_Interest'] ?></span></li>
        </ul>
        <small class="card-text text-uppercase">Contacts</small>
        <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="ti ti-phone-call"></i><span class="fw-bold mx-2">Contact:</span> <span><?php //echo $mentorInfo[0]['Phone'] ?></span></li>
          <li class="d-flex align-items-center mb-3"><i class="ti ti-unlink"></i><span class="fw-bold mx-2">WhatsApp:</span> <span><?php //echo $mentorInfo[0]['WhatsApp_Id'] ?></span></li>
          <li class="d-flex align-items-center mb-3"><i class="ti ti-mail"></i><span class="fw-bold mx-2">Email:</span> <span><?= $mentorInfo[0]['Email'] ?></span></li>
        </ul>
        <small class="card-text text-uppercase">Investment Amount Range(USD)</small>
        <ul class="list-unstyled mb-0 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="ti ti-book text-danger me-2"></i>
            <div class="d-flex flex-wrap"><span class="fw-bold me-2">Min Cheque</span><span>$<?= $mentorInfo[0]['Min_Cheque'] ?></span></div>
          </li>
          <li class="d-flex align-items-center"><i class="ti ti-book text-info me-2"></i>
            <div class="d-flex flex-wrap"><span class="fw-bold me-2">Max Cheque</span><span>$<?= $mentorInfo[0]['Max_Cheque'] ?></span></div>
          </li>
        </ul>
      </div>
    </div>
    <!--/ About User -->
    <!-- Profile Overview -->
    <!--<div class="card mb-4">-->
    <!--  <div class="card-body">-->
    <!--    <p class="card-text text-uppercase">Overview</p>-->
    <!--    <ul class="list-unstyled mb-0">-->
    <!--      <li class="d-flex align-items-center mb-3"><i class="ti ti-check"></i><span class="fw-bold mx-2">Task Compiled:</span> <span>13.5k</span></li>-->
    <!--      <li class="d-flex align-items-center mb-3"><i class="ti ti-layout-grid"></i><span class="fw-bold mx-2">Projects Compiled:</span> <span>146</span></li>-->
    <!--      <li class="d-flex align-items-center"><i class="ti ti-users"></i><span class="fw-bold mx-2">Connections:</span> <span>897</span></li>-->
    <!--    </ul>-->
    <!--  </div>-->
    <!--</div>-->
    <!--/ Profile Overview -->
  </div>
  <div class="col-xl-8 col-lg-7 col-md-7">
    <!-- Activity Timeline -->
    <div class="card card-action mb-4">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0">More Info</h5> 
        <!--<div class="card-action-element">-->
        <!--  <div class="dropdown">-->
        <!--    <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical text-muted"></i></button>-->
        <!--    <ul class="dropdown-menu dropdown-menu-end">-->
        <!--      <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>-->
        <!--      <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>-->
        <!--      <li>-->
        <!--        <hr class="dropdown-divider">-->
        <!--      </li>-->
        <!--      <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--</div>-->
      </div>
      <div class="card-body pb-0">
        <ul class="timeline ms-1 mb-0">
            <?php // $connectionArray = $this->gfa_model->connectionWithInvestor($email, $getInvestorDetails[0]['Contact_Email']); 
            //if(!empty($connectionArray)){
            //foreach($connectionArray as $connection){  ?>
          <!--<li class="timeline-item timeline-item-transparent">-->
          <!--  <span class="timeline-point timeline-point-primary"></span>-->
          <!--  <div class="timeline-event">-->
          <!--    <div class="timeline-header">-->
          <!--      <h6 class="mb-0"><?=  $connection['extra_status']; ?></h6>-->
          <!--      <small class="text-muted"><?=  $connection['time_submit']; ?></small>-->
          <!--    </div>-->
          <!--    <p class="mb-2"><?=  $connection['status']; ?></p>-->
          <!--    <div class="d-flex flex-wrap">-->
                
          <!--      <div class="ms-1">-->
          <!--        <h6 class="mb-0"><?=  $connection['more_info']; ?></h6>-->
          <!--        <span>$<?=  $connection['amount']; ?></span>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</li>-->
          <?php  //}}else{  ?>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0 displayContent">LinkedIn</h6>
                <small class="text-muted timeRequest"></small>
              </div>
              <p class="mb-2 text-muted"><?= $mentorInfo[0]['LinkedIn']  ?></p>
              <div class="d-flex flex-wrap">
                
                <!--<div class="ms-1">-->
                <!--  <h6 class="mb-0">Lester McCarthy (Client)</h6>-->
                <!--  <span>CEO of Infibeam</span>-->
                <!--</div>-->
              </div>
            </div>
          </li>
           <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-success"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0 displayContent">Bio data</h6>
                <small class="text-muted timeRequest"></small>
              </div>
              <p class="mb-2 text-muted"><?= $mentorInfo[0]['Bio_data']  ?></p>
              <div class="d-flex flex-wrap">
                
                <!--<div class="ms-1">-->
                <!--  <h6 class="mb-0">Lester McCarthy (Client)</h6>-->
                <!--  <span>CEO of Infibeam</span>-->
                <!--</div>-->
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-warning"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0 displayContent">Experience</h6>
                <small class="text-muted timeRequest"></small>
              </div>
              <p class="mb-2 text-muted"><?= $mentorInfo[0]['Exp']  ?></p>
              <div class="d-flex flex-wrap">
                
                <!--<div class="ms-1">-->
                <!--  <h6 class="mb-0">Lester McCarthy (Client)</h6>-->
                <!--  <span>CEO of Infibeam</span>-->
                <!--</div>-->
              </div>
            </div>
          </li>
          <?php  //}  ?>
        </ul>
      </div>
    </div>
    <!--/ Activity Timeline -->
    
    <!-- Projects table -->
    
    <!--/ Projects table -->
  </div>
</div>
<!--/ User Profile Content -->

            
          </div>
          
          </div>
<!-- Modern -->
</div>

  </div>          
          </div>