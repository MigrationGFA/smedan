<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $email = session()->get('email');
  $loginkey = $this->gfa_model->getWpCred($email);
$courseTrack = $this->gfa_model->GetUserProgressSoftSkills($email);
?>
   <!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y" id="mContent">
            
     <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="<?php echo $nonce_value; ?>"></script>

  <div class="col-lg-12 mb-4">
    <div class="input-group">
        <input type="text" class="form-control" value="<?php echo 'https://kaduna-digital.dimpified.com/register/?ref='.$skillArray[0]['ref']; ?>"  readonly="readonly" id="inputField" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-primary" type="button" id="copyButton">Copy Referral Link</button>
        </div>
    </div>
    <div id="revenueGenerated" class="mb-2 mt-2"><a class="btn btn-outline-primary" href="whatsapp://send?text=<?php echo 'https://kaduna-digital.dimpified.com/register/?ref='.$skillArray[0]['ref']; ?>" data-action="share/whatsapp/share">Share via WhatsApp</a> 
   <div class="fb-share-button btn btn-outline-primary" data-href="<?php echo 'https://kaduna-digital.dimpified.com/register/?ref='.$skillArray[0]['ref']; ?>" data-layout="button"></div>
   <a href="https://twitter.com/intent/tweet?url=<?php echo 'https://kaduna-digital.dimpified.com/register/?ref='.$skillArray[0]['ref']; ?>" class="btn btn-outline-primary" target="_blank" rel="noopener noreferrer">Share on Twitter</a>
     <a href="<?php echo base_url('gfa/referral'); ?>" class="btn btn-dark">Details</a>
	</div>
  </div>       

<h4 class="py-3 mb-4"><span class="text-muted fw-light">My</span> Courses</h4>

<div class="app-academy">
  <div class="row">
    <!-- <div class="alert alert-danger <?php echo ((int)$courseTrack[0]['Progress'] < 60) ? '' : 'd-none'; ?>" role="alert">
        To access the technical course, you must achieve a 60% pass mark in the soft skill courses.
    </div> -->
  <script>
    document.getElementById('copyButton').addEventListener('click', function() {
        // Get the value of the input field
        var inputValue = document.getElementById('inputField').value;
        
        // Create a temporary textarea element
        var tempTextarea = document.createElement('textarea');
        tempTextarea.value = inputValue;
        
        // Append the textarea to the document
        document.body.appendChild(tempTextarea);
        
        // Select the text inside the textarea
        tempTextarea.select();
        
        // Copy the selected text to the clipboard
        document.execCommand('copy');
        
        // Remove the temporary textarea from the document
        document.body.removeChild(tempTextarea);
        
        // Alert the user that the text has been copied (optional)
        alert('Text copied to clipboard: ' + inputValue);
    });
  </script>
  
</div>  

  <div class="card mb-4">
    <div class="card-header d-flex flex-wrap justify-content-between gap-3">
      <div class="card-title mb-0 me-1">
        <h5 class="mb-1">Soft Skills</h5>
  
        
      </div>
      <input type="hidden" id="action_email" value="<?php echo $email; ?>">
    <!--  <div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">-->
    <!--    <select id="select2_course_select" class="select2 form-select" data-placeholder="All Courses">-->
    <!--      <option value="">All Courses</option>-->
    <!--      <option value="Digital Marketing">Digital Marketing (1)</option>-->
    <!--      <option value="Cloud Platforms Navigation">Cloud Platforms Navigation (2)</option>-->
    <!--      <option value="Data Analysis and Visualization">Data Analysis and Visualization (7)</option>-->
    <!--      <option value="Search Engine Optimization">Search Engine Optimization (SEO)</option>-->
    <!--      <option value="CRM Management">CRM Management (6)</option>-->
      <!--<option value="Graphics Design">Graphics Design (0)</option>-->
      <!--<option value="UIUX Design">UI/UX Design (0)</option>-->
      <!--<option value="Accounting Software">Accounting Software (2)</option>-->
    <!--    </select>-->

        
    <!--  </div>-->
    </div>
    <div class="card-body">
    <div class="row mb-4 g-4 loadSoftskillsAnalytics"> </div>
      <div class="row gy-4 mb-4">
           <?php if(!empty($courseArrayToday)){  ?>
           
    <?php $n =1;  foreach ($courseArrayToday as $courseDetailsToday) { ?>
           <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border"> 
    <a href="#" class="h5"><?= "Today's Course"?></a> 
            <div class="rounded-2 text-center mb-3">
              <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets-new/img/{$courseDetailsToday['img']}") ?>" alt="course image" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- <span class="badge bg-success">Duration: <ls style="color:#"><?php echo $courseDetailsToday['duration']; ?> mins</ls></span> -->
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                 <!--<span class="text-muted"> Day <?php echo $n++ ?></span>-->
                </h6>
              </div>
              <a class="h5" href="#"><?= $courseDetailsToday['coursetitle'];  ?></a>
              <p class="mt-2"><?= $courseDetailsToday['description'];  ?></p> 
              <!--<p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>7 hours</p>-->
              <!--<div class="progress mb-4" style="height: 8px">-->
              <!--  <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--</div>-->
             <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <!--<a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="<?= $courseDetailsToday['lmslink'];  ?>">-->
                <!--  <i class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Start Over</span>-->
                <!--</a>-->
             <?php   $cours_url =  str_replace(" ","-",$courseDetailsToday['coursetitle']); 
                    $getActiveSection = $this->gfa_model->getSectionByCourseIdActive($courseDetailsToday['id']);
                    $getActiveLesson = $this->gfa_model->getLessonBySectionId($getActiveSection[0]['id']);
                    $lesson_url = str_replace(" ","-",$getActiveLesson[0]['title']);
             ?>
                <a class="app-academy-md-50 btn btn-label-success d-flex align-items-center userActivity" ls="<?= $getActiveLesson[0]['title'];  ?>" href="<?php echo base_url("gfa/course/{$courseDetailsToday['id']}/{$cours_url}") ?>"> 
                  <span class="me-2">Review</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a> 

             <?php if($getActiveLesson[0]['title'] !="") {  ?>  

                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center userActivity" ls="<?= $getActiveLesson[0]['title'];  ?>" href="<?php echo base_url("gfa/lesson/{$getActiveLesson[0]['id']}/{$lesson_url}") ?>"> 
                  <span class="me-2">Start</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>
                <?php }  ?>
              </div>
            </div>
          </div>
        </div>
        <?php } }?>
         
        <?php if(!empty($courseArrayNext)){ ?>
        
    <?php $n =1;  foreach ($courseArrayNext as $courseDetailsNext) { ?>
          <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
              <a class="h5" href="#">Your Next Course</a>
            <div class="rounded-2 text-center mb-3">
              <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets-new/img/{$courseDetailsNext['img']}") ?>" alt="course image" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- <span class="badge bg-success">Duration: <ls style="color:#"><?php echo $courseDetailsNext['duration']; ?> mins</ls></span> -->
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                 <!--<span class="text-muted"> Day <?php echo $n++ ?></span>-->
                </h6>
              </div>
              <a class="h5" href="#"><?= $courseDetailsNext['coursetitle'];  ?></a>
              <p class="mt-2"><?= $courseDetailsNext['description'];  ?></p> 
              <!--<p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>7 hours</p>-->
              <!--<div class="progress mb-4" style="height: 8px">-->
              <!--  <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--</div>-->
             <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <!--<a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="#">-->
                <!--  <i class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Start Over</span>-->
                <!--</a>-->
                <button class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" disabled href="#"> 
                  <span class="me-2">Next on <?php echo date('j M y',strtotime('+1 day')); ?></span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
       <?php } } ?> 
         <br>
        <?php if(!empty($courseArrayPrev)){  ?>
		<a class="h5" href="#">Previous Courses</a>
    <?php $n =1;  foreach ($courseArrayPrev as $courseDetailsPrev) {  ?>
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
            <div class="rounded-2 text-center mb-3">
              <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets-new/img/{$courseDetailsPrev['img']}") ?>" alt="course image" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- <span class="badge bg-success">Duration: <ls style="color:#"><?php echo $courseDetailsPrev['duration']; ?> mins</ls></span> -->
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                 <!--<span class="text-muted"> Day <?php echo $n++ ?></span>-->
                </h6>
              </div>
              <a class="h5" href="#"><?= $courseDetailsPrev['coursetitle'];  ?></a>
              <p class="mt-2"><?= $courseDetailsPrev['description'];  ?></p> 
              <!--<p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>7 hours</p>-->
              <!--<div class="progress mb-4" style="height: 8px">-->
              <!--  <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--</div>-->
              <?php   $cours_url =  str_replace(" ","-",$courseDetailsPrev['coursetitle']); 
                    $getActiveSection = $this->gfa_model->getSectionByCourseIdActive($courseDetailsPrev['id']);
                    $getActiveLesson = $this->gfa_model->getLessonBySectionId($getActiveSection[0]['id']);
                    $lesson_url = str_replace(" ","-",$getActiveLesson[0]['title']);
             ?>
             <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <a class="app-academy-md-50 btn btn-label-success me-md-2 d-flex align-items-center" ls="<?= $courseDetailsPrev['coursetitle'];  ?>" href="<?php echo base_url("gfa/course/{$courseDetailsPrev['id']}/{$cours_url}") ?>">
                  <i class="ti ti-chevron-right align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Review</span>
                </a>
                 <?php if($getActiveLesson[0]['title'] !="") {  ?>
                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center userActivity" ls="<?= $getActiveLesson[0]['title'];  ?>" href="<?php echo base_url("gfa/lesson/{$getActiveLesson[0]['id']}/{$lesson_url}") ?>"> 
                  <span class="me-2">Start</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>
                <?php }  ?>
              </div>
            </div>
          </div>
        </div>
        
    <?php } } ?>
        <br>
        <?php
        if(!empty($courseArrayUpcoming)){  ?>
		  <a class="h5" href="#">Upcoming Courses</a>
    <?php $n =1;  foreach ($courseArrayUpcoming as $courseDetails) { ?>
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
        <!-- <a class="h5" href="#">Upcoming Course</a> -->
            <div class="rounded-2 text-center mb-3">
              <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets-new/img/{$courseDetails['img']}") ?>" alt="course image" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- <span class="badge bg-success">Duration: <ls style="color:#"><?php echo $courseDetails['duration']; ?> mins</ls></span> -->
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                 <!--<span class="text-muted"> Day <?php echo $n++ ?></span>-->
                </h6>
              </div>
              <a class="h5" href="#"><?= $courseDetails['coursetitle'];  ?></a>
              <p class="mt-2"><?= $courseDetails['description'];  ?></p> 
              <!--<p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>7 hours</p>-->
              <!--<div class="progress mb-4" style="height: 8px">-->
              <!--  <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--</div>-->
             <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <!--<a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="#">-->
                <!--  <i class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Start Over</span>-->
                <!--</a>-->
                <button class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" disabled href="#">  
                  <span class="me-2">Coming Soon on <?php echo date('j M y',strtotime($coursetitleArray[$courseDetails['coursetitle']][0])); ?></span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        
    <?php } } ?>
        
      <!--<input type="text" class="getValue" value="" />-->
    <span class="loadModule1 loadingPage1"></span>
     <select id="mySelect" style="display: none;">
                  <option value="">Option</option>
        <option value="Option 1">Option 1</option>
       
    </select>
    <input type="hidden" name="email" class="emailAcct" value="<?php echo $email;  ?>" />
      </div>
       <script>
          $(document).ready(function() {
              $(window).on('load', function() {
             //$("#mySelect").change(function() {
                var email = $(".emailAcct").val();  
                  //load analytic page 
                  $.ajax({
        url: '<?php echo base_url("gfa/loadSoftskillsAnalytics") ?>',
        method: 'POST',
        data:{email:email},
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".loadSoftskillsAnalytics").html("Loading...");

            // You can add loading indicators or other preparations here
        },
        success: function(data) {
            // Code to be executed after the AJAX request is successful
          $(".loadSoftskillsAnalytics").html("");
            $(".loadSoftskillsAnalytics").html(data);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadSoftskillsAnalytics").html('Error:', status, error);
        }
    });
           });        
             
          });
             
      </script>
      <script>
          $(function(){
            $('.userActivity').click(function(){
                var getValue =  $(this).attr("ls");
                //var showValue = $(".getValue").val(getValue);
                
                 // Perform an AJAX request after the page has loaded 1
    $.ajax({
        url: '<?php echo base_url("gfa/courseActivities") ?>',
        method: 'POST',
        data:{getValue:getValue},
        success: function(response) {
            // Code to be executed after the AJAX request is successful
          
            $(".loadModule1").html(response);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadingPage1").html('Error:', status, error);
        }
    });
            });  
              
              
          });
      </script>
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

          </div>
          <!-- / Content -->

          <?php 
    if (!$this->gfa_model->CheckUserCategory($email)) {    
      include ("update_category.php");
    }
  ?>
  