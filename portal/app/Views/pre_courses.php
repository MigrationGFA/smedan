<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $email = session()->get('email');
  $loginkey = $this->gfa_model->getWpCred($email);
$courseTrack = $this->gfa_model->GetUserProgressSoftSkills($email);
?>
   <!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
            
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

<!-- <h4 class="py-3 mb-4"><span class="text-muted fw-light"></span>Pre-Courses</h4> -->

<div class="app-academy">
  <div class="row">
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
        <h5 class="mb-1">Pre-course Learning Engagement</h5>
  
      </div>
      <input type="hidden" id="action_email" value="<?php echo $email; ?>">
    
    </div>
    <div class="card-body">
      <div class="row gy-4 mb-4">
      
        <?php if(!empty($courseArrayPrev)){  ?>
		<!-- <a class="h5" href="#">Previous Courses</a> -->
    <?php $n =1;  foreach ($courseArrayPrev as $courseDetailsPrev) {  ?>
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
            <div class="rounded-2 text-center mb-3">
              <a href="#"><img class="img-fluid" src="https://gfa-tech.com/portal/uploads/files/<?=$courseDetailsPrev['img']?>" alt="course image" /></a>
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
                <a class="app-academy-md-50 btn btn-label-success me-md-2 d-flex align-items-center" href="<?php echo base_url("gfa/course/{$courseDetailsPrev['id']}/{$cours_url}") ?>">
                  <i class="ti ti-chevron-right align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Review</span>
                </a>
                 <?php if($getActiveLesson[0]['title'] !="") {  ?>
                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" href="<?php echo base_url("gfa/lesson/{$getActiveLesson[0]['id']}/{$lesson_url}") ?>"> 
                  <span class="me-2">Start</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>
                <?php }  ?>
              </div>
            </div>
          </div>
        </div>
        
    <?php } } ?>
        <br>
        
      <!--<input type="text" class="getValue" value="" />-->
    <span class="loadModule1 loadingPage1"></span>
     <select id="mySelect" style="display: none;">
                  <option value="">Option</option>
        <option value="Option 1">Option 1</option>
       
    </select>
    <input type="hidden" name="email" class="emailAcct" value="<?php echo $email;  ?>" />
      </div>
       
    </div>
  </div>

</div>

          </div>
          <!-- / Content -->