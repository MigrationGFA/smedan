<div class="container-xxl flex-grow-1 container-p-y">
            
            
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Job Board</span>
  </h4>

  <div class="row">
    
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
          
   			<?php
                
                $row = $this->gfa_model->getAllJobs();
                $n = 1;
				foreach($row as $rowArray){
				   
                ?> 
          <h4 class="d-flex align-items-center mt-2 mb-4">
            <span class="badge bg-label-secondary p-2 rounded me-3">
              <i class="ti ti-alert-circle ti-md"></i> 
            </span>
          <?= $rowArray['job_title']?>
          </h4>

          <pre style="font-family: inherit !important;"><?= $rowArray['job_description']?></pre>
          <?php
$link = $rowArray['job_link'];
$isEmail = filter_var($link, FILTER_VALIDATE_EMAIL);
$href = $isEmail ? "mailto:$link" : $link;
?>
<a class="btn btn-label-primary mb-4" target="_blank" href="<?= $href ?>">Apply</a>

          <hr class="container-m-nx my-4">

          <?php } ?>

          
        </div>
      </div>
    </div>
    <!-- /Article -->
  </div>
       
</div>
