 <?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>

 <!-- BEGIN: Content-->
 <div class="app-content content " onmouseover='getallposts(5)'>
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    <!-- Medal Card -->
 <?php     
		        $loginkey = $this->gfa_model->getWpCred($email);  ?>
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5>SMEs Mentees Details</h5>
          <!--<h5>Congratulations ðŸŽ‰!</h5>-->
          <!--<p class="card-text font-small-3">You have won gold medal</p>-->
          <div class="row">
              <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                  <h3 class="mb-75 mt-2 pt-50">
        		  <div class="card-text font-small-3">Matched</div>
                    <!-- <a href="<?php echo base_url("gfa/investor_deals/"); ?>gfa/investor_deals/">$48.9k</a> -->
                    <a href="#<?php echo base_url("gfa/investor_deals/"); ?>"><?php echo $totalMatched ?></a>
                  </h3>
              </div>
              <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                  <h3 class="mb-75 mt-2 pt-50">
        		  <div class="card-text font-small-3">Connected</div>
                    <!-- <a href="<?php echo base_url("gfa/investor_deals/"); ?>gfa/investor_deals/">$48.9k</a> -->
                    <a href="#<?php echo base_url("gfa/investor_deals/"); ?>"><?php echo $totalConnect ?></a>
                  </h3>
              </div>
          </div>
          
          <a href="<?php echo base_url("gfa/mentor_startups/"); ?>" class="btn btn-primary">Search Startups</a>
          <img src="<?php echo base_url("public/assets/app-assets/images/gold.png"); ?>" class="congratulation-medal" alt="Medal Pic" />
        </div>
      </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title">Your Deals in Summary</h4>
          <div class="d-flex align-items-center">
            <p class="card-text font-small-2 me-25 mb-0"></p>
          </div>
        </div>
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i data-feather="user" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">0</h4>
                  <p class="card-text font-small-3 mb-0">Startups</p>
                  <div class="font-small-2 text-muted"></div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="trending-up" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">0</h4>
                  <p class="card-text font-small-3 mb-0">Resources</p>
                  <div class="font-small-2 text-muted"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">0</h4>
                  <p class="card-text font-small-3 mb-0">Meetings</p>
                  <div class="font-small-2 text-muted"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">0</h4>
                  <p class="card-text font-small-3 mb-0">Report</p>
                  <div class="font-small-2 text-muted"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Statistics Card -->
  </div>


  <div class="row match-height">
    <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table" id="table">
              <thead>
			  <tr>
                  <th colspan="5">Browse your Recommended Startups  <a href="<?php echo base_url("gfa/mentor_startups/"); ?>" class="btn btn-primary">Browse all startups</a></th>
                 
                </tr>
                <tr>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Interest</th>
                  <th>Investment Size</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
            <?php
            
                
            	$row = $this->admin_model->MatchMentorStartup($rowArray[0]['Industry'],$rowArray[0]['Mentors_focus'],$rowArray[0]['Investment_stage']); 
            	
              $n = 1;
              $s = 1;	
              $count = 0;
            	foreach($row as $rowArrays){  
               
                //if($rowArrays['PrimaryBusinessIndustry'] !=''  && ($rowArrays['CurrentInvestmentStage'] !='' || $rowArrays['Next_Funding_Round_Target_Sought'] !='') && $rowArrays['Mentorship']!=''){
                  $count += $n;
                  ?>
                <tr class="data">
                  <td>
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div class="fw-bolder"><?php echo $rowArrays['Primary_Contact_Name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $rowArrays['Startup_Company_Name'] ; ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo $rowArrays['PrimaryBusinessIndustry'] ; ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArrays['CountryHQ'] ; ?></span>
                      <!--<span class="font-small-2 text-muted">in 24 hours</span>-->
                    </div>
                  </td>
                  <td>$<?php if($rowArrays['Next_Funding_Round_Target_Sought']=='0' || $rowArrays['Next_Funding_Round_Target_Sought']==''){ echo 0; }else{ echo $rowArrays['Next_Funding_Round_Target_Sought'] ;} ?></td>
                  <td>
                    
					  <a href="<?php echo base_url("gfa/mentor_startup_details/{$rowArrays['STUP_ID']}"); ?>" class="btn btn-primary getStartup">Connect <span style="display: none;"><?php echo $rowArrays['STUP_ID'] ?></span></a>
                   
                  </td>
                </tr>
                <?php }
                //else{ echo ''; }}  ?>
      
              </tbody>
            </table>
            <div class="paging-container" id="tablePaging"> </div>
          </div>
        </div>
      </div>
      
    </div>
    <!--/ Company Table Card -->
    <script>
            
            $(function(){

              $("tr").on('click','.getStartup',function() {
    var id = $(this).find('span').text();
    //$(".showDataDel").val(id);
  
  // $(this).closest('tr').remove();
        //$('tr.myTable').remove();
    
    $.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url("gfa/checkMentorConnection"); ?>",
   //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
   //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
    
   $(".showData").html(data);
    
   window.open("<?php echo base_url("gfa/mentor_startup_details/"); ?>"+data, "_self");
    
    
    }
      
    });
    
  
    
  return false;
}); 
             
});

</script>

    <!-- Mentor Card -->
                        <div class="col-lg-6 col-12">
                            <div class="card card-user-timeline">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="list" class="user-timeline-title-icon"></i>
                                        <h4 class="card-title">Latest News</h4>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <ul class="timeline ms-50" id="startup_news_rand">



                                        <h6>Loading.....</h6>

                                    </ul>

                                </div>
                            </div>
                        </div>
                     <!--/ Transaction Card -->

                     <!-- Profile Card -->
                    
                     <!--/ Profile Card -->
                     <!-- Developer Meetup Card -->
                     <div class="col-lg-6 col-md-6 col-12">
                         <div class="card card-developer-meetup">
                             <div class="meetup-img-wrapper rounded-top text-center">
                                 <img src="<?php echo base_url('public/assets/app-assets/images/eventgfa.jpg'); ?>"
                                     alt="Meeting Pic" height="170" />
                             </div>

                             <?php //foreach($eventResp as $eventResponseArray){  ?>
                             <div class="card-body">
                             <?php if(empty($eventResp['Title'])){ echo ''; $limit = 2;}else{  ?>
                                 <div class="meetup-header d-flex align-items-center">
                                     <div class="meetup-day">
                                         <h6 class="mb-0"><?php $dateEvent = date('w', strtotime($eventResp['Date']));
                                          echo $this->gfa_model->getDay($dateEvent);  ?>
                                         </h6>
                                         <h3 class="mb-0"><?php echo date('d', strtotime($eventResp['Date']));  ?></h3>
                                     </div>
                                     <div class="my-auto">
                                         <h4 class="card-title mb-25">Upcoming Event </h4>
                                         <p class="card-text mb-0"><?php echo $eventResp['Title']; ?></p>
                                         <p><a href="<?php echo $eventResp['Url']; ?>" target="_blank">Click here for
                                                 more details</a></p>
                                     </div>
                                 </div>
                                 <?php }  ?>
                                 <?php $rowEvent = $this->gfa_model->getEventByEmailLimit(1);
                                        foreach($rowEvent as $rowArrayEvent){
                                        ?>
                                 <div class="meetup-header d-flex align-items-center">
                                     <div class="meetup-day">
                                         <h6 class="mb-0"><?php $dateEvent = date('w', strtotime($rowArrayEvent['start_date']));
                                          echo $this->gfa_model->getDay($dateEvent);  ?>
                                         </h6>
                                         <h3 class="mb-0"><?php echo date('d', strtotime($rowArrayEvent['start_date']));  ?></h3>
                                     </div>
                                     <div class="my-auto">
                                         <h4 class="card-title mb-25">Upcoming Event </h4>
                                         <p class="card-text mb-0"><?php echo $rowArrayEvent['title']; ?></p>
                                         <p><a href="<?php echo base_url(); ?>gfa/events/<?php echo $rowArrayEvent['ref_id']; ?>" target="_blank">Click here for
                                                 more details</a></p>
                                     </div>
                                 </div>
                                 
                                 <div class="d-flex flex-row meetings">
                                     <div class="avatar bg-light-primary rounded me-1">
                                         <div class="avatar-content">
                                             <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                         </div>
                                     </div>
                                     <div class="content-body">
                                         <h6 class="mb-0"><?php echo date('M d, Y', strtotime($rowArrayEvent['start_date'])) ?>
                                         </h6>
                                         <small><?php //echo implode(" ", $rowArrayEvent['start_date'])[1]; ?></small>
                                     </div>
                                 </div>
                                 <div class="d-flex flex-row meetings">
                                     <div class="avatar bg-light-primary rounded me-1">
                                         <div class="avatar-content">
                                             <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                         </div>
                                     </div>
                                     <div class="content-body">
                                         <h6 class="mb-0"><?php echo $rowArrayEvent['venue']; ?></h6>
                                         <!--<small>Abeokuta, Ogun State</small>-->
                                     </div>
                                 </div>
                                 <input type="hidden" class="eventId" value="<?php echo $rowArrayEvent['event_id']; ?>">
                                 <input type="hidden" class="title" value="<?php echo $rowArrayEvent['title']; ?>">
                                 <?php }  ?>
                                 

                                  <hr class="mb-2" />
                                <div class="d-grid">
                                
                                    <button type="button" class="btn btn-primary">Attend Event</button>  
                                   
                                  </div>
                                
                                 
                                 
                             </div>


                             <!--onclick="location.href='https://events.getfundedafrica.com';"-->
                             <?php// }  ?>
                         </div>
                     </div>
    <!--/ Developer Meetup Card -->

   


  </div>
</section>
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

    <script>

	$(function () {
			// for (var i = 1; i < 20; i++) {
			// 	$('#table').append('<tr class="data"><td>' + i + '</td><td>Some title</td><td>Some Description</td></tr>');
			// }

			load = function() {
				window.tp = new Pagination('#tablePaging', {
					itemsCount: <?php echo $count ?>,
					onPageSizeChange: function (ps) {
						console.log('changed to ' + ps);
					},
					onPageChange: function (paging) {
						//custom paging logic here
						console.log(paging);
						var start = paging.pageSize * (paging.currentPage - 1),
							end = start + paging.pageSize,
							$rows = $('#table').find('.data');

						$rows.hide();

						for (var i = start; i < end; i++) {
							$rows.eq(i).show();
						}
					}
				});
			}

		load();
	});
	</script>