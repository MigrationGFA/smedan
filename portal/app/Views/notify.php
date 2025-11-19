<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $winners = $this->gfa_model->GetReferralWinnersByDate('2024-05-17');
?>
<div class="container-xxl flex-grow-1 container-p-y">
            
            
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Notification</span>
    </h4>
    
    <div class="row">
      <!-- Categories -->
      <!--<div class="col-xl-3 col-lg-4 col-md-4 mb-lg-0 mb-4">-->
      <!--  <h6>eCommerce</h6>-->
      <!--  <div class="nav-align-left">-->
      <!--    <ul class="nav nav-pills border-0 w-100 gap-1">-->
      <!--      <li class="nav-item">-->
      <!--        <button class="nav-link" data-bs-target="javascript:void(0);">Setup</button>-->
      <!--      </li>-->
      <!--      <li class="nav-item">-->
      <!--        <button class="nav-link active" data-bs-target="javascript:void(0);">Items & Categories</button>-->
      <!--      </li>-->
      <!--      <li class="nav-item">-->
      <!--        <button class="nav-link" data-bs-target="javascript:void(0);">Payments & Checkout</button>-->
      <!--      </li>-->
      <!--      <li class="nav-item">-->
      <!--        <button class="nav-link" data-bs-target="javascript:void(0);">Fulfillment</button>-->
      <!--      </li>-->
      <!--      <li class="nav-item">-->
      <!--        <button class="nav-link" data-bs-target="javascript:void(0);">Manage Orders</button>-->
      <!--      </li>-->
      <!--      <li class="nav-item">-->
      <!--        <button class="nav-link" data-bs-target="javascript:void(0);">Coupons & Other Gifts</button>-->
      <!--      </li>-->
      <!--      <li class="nav-item">-->
      <!--        <button class="nav-link" data-bs-target="javascript:void(0);">Store Emails</button>-->
      <!--      </li>-->
      <!--      <li class="nav-item">-->
      <!--        <button class="nav-link" data-bs-target="javascript:void(0);">Taxes</button>-->
      <!--      </li>-->
      <!--    </ul>-->
      <!--  </div>-->
      <!--</div>-->
      <!-- /Categories -->
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
      <!-- Article -->
      <div class="col-xl-12 col-lg-8 col-md-8">
        <div class="card overflow-hidden">
          <div class="card-body">
            <a class="btn btn-label-primary mb-4" href="#" onclick="goBack()">
              <i class="ti ti-chevron-left scaleX-n1-rtl me-1 me-1"></i>
              <span class="align-middle">Back</span>
            </a>
            <?php if($notify_id == 1){  ?>
            <h4 class="d-flex align-items-center mt-2 mb-4">
              <span class="badge bg-label-secondary p-2 rounded me-3">
                <i class="ti ti-alert-circle ti-md"></i> 
              </span>
             Survey on services for your growth
            </h4>
    
      <p>As a business owner, aspiring business owner, working professional, or even a job seeker, there are several services that you will need in order to reach the next level.</p>
    
    <p>To help you along the way, we thought to do a short survey to find out what you will need, so we can find the right partners to support you. Kindly use this link to take a two-minute survey <a href="https://forms.office.com/r/yLbtuAzfax" target="_blank">Survey Link</a>.</p>
    
    <p>Once again, we are so pleased you have chosen to join the FGN-ALAT Skillnovation Program and are rooting for your success!</p>
    
    <p>Warm regards,</p>
    <p>FGN-ALAT Skillnovation Team</p>
    <?php }elseif($notify_id == 2){  ?>
    
    <h4 class="d-flex align-items-center mt-2 mb-4">
              <span class="badge bg-label-secondary p-2 rounded me-3">
                <i class="ti ti-alert-circle ti-md"></i> 
              </span>
             Learning Guidelines
            </h4>
    
      <h6>Mandatory Course Deadline:</h6>
        <p>Ensure the completion of your mandatory course by Friday, March 29th, 2024.</p>
    
        <h6>Monthly Assignments:</h6>
        <ul>
            <li>You will receive one course per month, which may be either mandatory or elective.</li>
            <li>You have the flexibility to select additional courses from your learning path.</li>
            <li>All previous Soft Skills are still available in the menu in case you would like to revise them.</li>
        </ul>
    
        <h6>Study Routine:</h6>
        <ul>
            <li>Access lessons daily on weekdays while you reflect and share on weekends.</li>
            <li>Lessons will remain available until the specified deadline.</li>
            <li>Log in daily, engage with lessons, and successfully complete quizzes to mark courses as finished.</li>
        </ul>
    
        <h6>Time Management:</h6>
        <p>Effectively manage your time to successfully conclude all assigned courses within the provided timeframe.</p>
    
        <h6>Contact for Support:</h6>
        <p>If you have any questions or concerns, feel free to reach out to <a
                href="mailto:purpleconnect@wemabank.com">purpleconnect@wemabank.com</a>.</p>
    <?php }elseif($notify_id == 3){  ?>
    
    <h4 class="d-flex align-items-center mt-2 mb-4">
              <span class="badge bg-label-secondary p-2 rounded me-3">
                <i class="ti ti-alert-circle ti-md"></i> 
              </span>
             Activate Your FGN-ALAT Bank Account
            </h4>
    
      <p>Hi there!</p>
        
        <p>Have you activated your FGN-ALAT bank account yet? You can activate your FGN-ALAT bank account by completing your profile on our ALAT by Wema Bank mobile banking app and performing a credit transaction.</p>
        
        <p>Kindly click the link below to download the ALAT by Wema app and complete your profile: <a href="http://onelink.to/alat">http://onelink.to/alat</a></p>
    
    <?php }elseif($notify_id == 4){  ?>
    
    <h4 class="d-flex align-items-center mt-2 mb-4">
              <span class="badge bg-label-secondary p-2 rounded me-3">
                <i class="ti ti-alert-circle ti-md"></i> 
              </span>
            Next Stage of FGN-ALAT Digital Skillnovation Program
            </h4>
            
            <p>You Are One Step Closer to the Next Stage of FGN-ALAT Digital Skillnovation Program!</p>
        
        <p>We trust your journey with the FGN-ALAT Digital Skillnovation Program has been nothing short of amazing! We're thrilled to share that the next stage of the program is about to commence.</p>
        
        <p>Get ready to join live online classes hosted on Zoom, YouTube Live, and other platforms, alongside learners from across the country. This would provide you with the opportunity to engage with expert instructors and fellow participants, ask questions, receive immediate feedback, and collaborate on exciting projects.</p>
        
        <p>The courses to be covered will range from business management essentials like strategic planning and sales, as well as tech skills like data analytics, UI/UX design, and product management, based on your chosen track.</p>
        
        <p>To access this next stage, ensure completion of all assigned eLearning courses or stay on track to complete them. Only those invited to participate in the live online classes can progress to subsequent stages of the program, which include mentorship, access to grants, and other funding opportunities.</p>
        
        <p>Don't forget to log in to the platform at <a href="https://fgn-alat.dimpified.com/portal/gfa/login">https://fgn-alat.dimpified.com/portal/gfa/login</a> and ensure that you complete all your assigned courses and assessments by the deadline, which is set for March 29, 2024.</p>
          
          <p>Encountering technical hurdles while accessing the platform? Kindly fill out the form <a href="link-to-form">here</a> to seek assistance.</p>
          
          <p>For further inquiries or assistance, please send us an email at <a href="mailto:purpleconnect@wemabank.com">purpleconnect@wemabank.com</a>.</p>
          
          <!-- <h4 class="d-flex align-items-center mt-2 mb-4">
            <span class="badge bg-label-secondary p-2 rounded me-3">
              <i class="ti ti-alert-circle ti-md"></i> 
            </span>
            Job Alert
          </h4>
          
          <p class="fs-3 text-wrap text-justify"><b>Job Alert!</b> 
          As one of the participants who has completed a significant portion of the Skillnovation Program, we thought to let you know of some internship opportunities. See link to apply <a href="https://forms.office.com/r/mSESXfGM2w">https://forms.office.com/r/mSESXfGM2w</a>
          </p> -->  
          
          <?php }elseif($notify_id == 6){  ?>
          
          <h4 class="d-flex align-items-center mt-2 mb-4">
            <span class="badge bg-label-secondary p-2 rounded me-3">
              <i class="ti ti-alert-circle ti-md"></i> 
            </span>
            First Batch of Referral Winners
          </h4>

          <div class="row">        
            <div class="col-12">            
              <div class="card">
                <div class="card-body">                
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr class="fw-bold">
                          <th>Name</th>
                          <!-- <th>Email</th>
                          <th>Phone</th> -->
                          <th>Gift Won</th>
                        </tr>
                      </thead>
                      <tbody>               
                        <?php foreach ($winners as $rowArray) {?>
                        <tr>    
                          <td>
                            <div><?php echo $rowArray['Name']  ?></div>
                          </td>                  
                          <!-- <td>
                            <div><?php // echo $rowArray['Email']  ?></div>
                          </td>                  
                          <td>
                            <div><?php // echo $rowArray['Phone']  ?></div>
                          </td>                   -->
                          <td>
                            <div><?php echo $rowArray['GiftWon']  ?></div>
                          </td>                  
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <?php }else{ echo "";  }  ?>
            <hr class="container-m-nx my-4">
            <!--<div class="d-flex justify-content-between flex-wrap gap-3 mb-3">-->
            <!--  <div class="article-info">-->
            <!--    <h5 class="mb-1">Did you find this article helpful?</h5>-->
            <!--    <p class="card-text">55 People found this helpful</p>-->
            <!--  </div>-->
            <!--  <h5>Still need help? <a href="javascript:void(0);">Contact us?</a></h5>-->
            <!--</div>-->
            <!--<div class="article-votes">-->
            <!--  <a href="javascript:void(0);" class="badge bg-label-primary me-2 p-2"><i class="ti ti-thumb-up ti-xs"></i></a>-->
            <!--  <a href="javascript:void(0);" class="badge bg-label-primary p-2"><i class="ti ti-thumb-down ti-xs"></i></a>-->
            <!--</div>-->
          </div>
        </div>
      </div>
      <!-- /Article -->
    </div>
    
                
              </div>