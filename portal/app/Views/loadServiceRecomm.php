<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  //print_r($jsonData);
  $jobsToDisplay = array_slice($jsonData['recommendedServices'], 0, 6);
?>
<?php 
if(!empty($jobsToDisplay)){
foreach($jobsToDisplay as $jobData){   ?>
<li class="d-flex mb-4 pb-1 align-items-center">

                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-primary"> 
                            <img src="<?php echo $jobData['image'] ?>" alt="image" width="20px" height="20px"  />
                          </span>
                        </div>
                        <a href="https://unleashified.com/services/listing?id=<?php echo $jobData['_id'] ?>" class="stretched-link" style="font-weight: bold; color: #5c5470;">
                        <div class="row w-100 align-items-center">
                          <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                            <p class="mb-0 fw-medium"><?php echo ucwords($jobData['serviceHeading'])  ?></p>
                          </div>
                          <div class="col-sm-4 col-lg-12 col-xxl-4 d-flex justify-content-sm-end justify-content-md-start justify-content-xxl-end">
                            <div class="badge bg-label-secondary"><?php echo ucwords($jobData['serviceName'])  ?></div>      </div>
                        </div>
                        </a>
                      </li>
  
  <?php }}else{ echo "Coming Soon";}  ?>
  

  
  
  
  