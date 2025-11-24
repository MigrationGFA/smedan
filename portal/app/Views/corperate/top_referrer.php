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
        <h4 class="card-title">Search Top Referrers</h4>
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
<form method="post" action="<?php echo base_url("gfa/export_top_ref"); ?>" > 
<div class="row mb-3">
  
                <div class="col-lg-6 col-xl-3  col-12 mb-0">
                  <label class="form-label" for="form-repeater-1-1">Start Date</label>
                  <input type="date" id="form-repeater-1-1" name="start_date" required class="form-control start_date" placeholder="start date" />
                </div>
                <div class="col-lg-6 col-xl-3 col-12 mb-0">
                  <label class="form-label" for="form-repeater-1-2">End Date</label>
                  <input type="date" id="form-repeater-1-2" name="end_date" required class="form-control end_date" placeholder="" />
                </div>
                <!-- <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                  <label class="form-label" for="form-repeater-1-3">Gender</label>
                  <select id="form-repeater-1-3" class="form-select">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div> -->
                <!-- <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                  <label class="form-label" for="form-repeater-1-4">Profession</label>
                  <select id="form-repeater-1-4" class="form-select">
                    <option value="Designer">Designer</option>
                    <option value="Developer">Developer</option>
                    <option value="Tester">Tester</option>
                    <option value="Manager">Manager</option>
                  </select>
                </div> -->
                
                
                <div class=" col-lg-12 col-xl-3 col-12 d-flex align-items-center ">
                <div class="demo-inline-spacing">
          <button type="button" class="btn btn-success submitBtn">Submit</button>
          <button type="Submit" class="btn btn-secondary">Export</button>
          
        </div>
                </div>

                
              </div>
              </form>
  <div class="row match-height displayData">
<!--   The investor name & title -->

<!--The industries the investor invests in -->



<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
    <!-- <div class="col-lg-3 mb-2 pull-right" style="float: right;">
    <a href="<?php echo base_url("gfa/export_all_reg_ref"); ?>" class="btn btn-dark btn-next">Export to CSV</a>
</div> -->
      <div class="card card-company-table">
        <div class="card-body p-0">
            
         
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
                
                
                $(".submitBtn").click(function(){
         var start_date =  $('.start_date').val();
         var end_date =  $('.end_date').val();
         var status = 1;
          $.ajax({
     data:{start_date:start_date,end_date:end_date},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/loadtopref",
     error:function() {$(".displayData").html('Error Request');},
	 beforeSend:function() {$(".displayData").html('Requesting...');},
      success: function(data) {
       
		 $(".displayData").html(data); 
	    //$('.requestPanel').prop("disabled", true );
	   
	  
	
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

   