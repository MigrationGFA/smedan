<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
<!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">


  <div class="row match-height">
<!--   The investor name & title -->

<!--The industries the investor invests in -->

            <h4 class="card-title">Referrals(Total: <?php echo $this->gfa_model->countReferrals()[0]['distinct_email_count'];?>)</h4>
<!--The size of cheques the investor writes -->



<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
    <div class="col-lg-3 mb-2 pull-right" style="float: right;">
    <a href="<?php echo base_url("gfa/export_all_reg_ref"); ?>" class="btn btn-dark btn-next">Export to CSV</a>
</div>
      <div class="card card-company-table">
        <div class="card-body p-0">
            
          <div class="table-responsive">
              
             
            <table class="table tablemanager">
              <thead>
                  
                <tr>
                  <th></th>
                  <th>Date</th>
				<th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Reg Category</th>
                </tr>
              </thead>              <tbody class="loadCorperate">
                 
              
                <?php
                
                $referralData = $this->gfa_model->getDistinctStartupsRef();
                
					
    
        			$n = 1;
                // $rowArrayM[0]['PrimaryBusinessIndustry'],$rowArrayM[0]['Startup_Implementation_Stage'],
				foreach($referralData as $referralInfo){  
               
             ?>
                <tr>
                  
                <td class="text-nowrap">
                   <a  class="btn btn-dark" href="<?php echo base_url("gfa/corperate_startups_details/{$referralInfo['STUP_ID']}"); ?>" alt="link" >Profile Details</a>
                  </td>
                <td class="text-nowrap">
                   <?php echo $referralInfo['time_submit'] ?>
                  </td>
                  <td class="text-nowrap">
                   <?php echo $referralInfo['Primary_Contact_Name'] ?>
                  </td>
     				<td class="">
                    <?php echo $referralInfo['email'] ?>
                  </td>
                <td class="">
                <?php echo $referralInfo['Phones'] ?>
                  </td>
                <td class="">
                    <?php echo $referralInfo['Interest_Fund_Raise'] ?>
                  </td>
                 
                </tr>
                <?php   }  ?>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--/ Company Table Card -->
    <div class="modal fade" id="checkHireProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Panel Request</h1>
         
        <p>
             Request to be one of the Panelist at the Microsoft Corporate Innovation and Enterprise Forum.
        </p>
        
        <br>
       
        <button href="#" class="btn btn-primary float-end mt-3 requestPanel" >
          <span class="me-50">Submit</span>
          <i data-feather="user"></i>
        </button>
     
     
      </div>
      
    </div>
  </div>
</div>


        </div>
     <div class="modal fade" id="checkInterview" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Request Interview</h1>
         
        <p>
             Request for an interview  at the Microsoft Corperate Innovation and Enterprise Forum.
        </p>
        
        <br>
       
        <button href="#" class="btn btn-primary float-end mt-3 requestInterview" >
          <span class="me-50">Submit</span>
          <i data-feather="user"></i>
        </button>
     
     
      </div>
      
    </div>
  </div>
</div>


        </div>
   
  </div>
        <script>
            
            $(function(){
                
                
                $(".requestPanel").click(function(){
         
         var status = 1;
          $.ajax({
     data:{status:status},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/requestPanelStartup",
     error:function() {$(".requestPanel").html('Error Request');},
	 beforeSend:function() {$(".requestPanel").html('Requesting...');$('.requestPanel').prop("disabled", true );},
      success: function(data) {
       
		 $(".requestPanel").html('Request Sent'); 
	    $('.requestPanel').prop("disabled", true );
	   
	  
	
       }
      
    });
         
       }); 
                
                $(".requestInterview").click(function(){
         
         var status = 1;
          $.ajax({
     data:{status:status},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/requestInterviewStartup",
     error:function() {$(".requestPanel").html('Error Request');},
	 beforeSend:function() {$(".requestInterview").html('Requesting...');$('.requestInterview').prop("disabled", true );},
      success: function(data) {
       
		 $(".requestInterview").html('Request Sent'); 
	    $('.requestInterview').prop("disabled", true );
	   
	  
	
       }
      
    });
         
       }); 
                
                $(".industry").change(function(){
                    $(".locationChange").html("Need Location");
                      var industry = $('.industry').serialize();
                             
                             $.ajax({
     data:industry,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/industry_corp",
	 error:function() {$(".loadCorperate").html('Error loading Data');},
	 beforeSend:function() {$(".loadCorperate").html('loading data...');},
     success: function(data) {
        
		
		$(".loadCorperate").html(data);
	
		}
                    
                });
                
               
               
                
            });
            
             $(".service").change(function(){
                 $(".locationChange").html("Service Location");
                      var service = $('.service').serialize();
                             
                             $.ajax({
     data:service,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/industry_corp_service",
	 error:function() {$(".loadCorperate").html('Error loading Data');},
	 beforeSend:function() {$(".loadCorperate").html('loading data...');},
     success: function(data) {
        
		
		$(".loadCorperate").html(data);
	
		}
                    
                });
                
               
               
                
            });
            });
            
        </script>

</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   
