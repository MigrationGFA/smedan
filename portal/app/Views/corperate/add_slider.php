<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Add Slider</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/Lesson">All Lesson</a>-->
                    <!--</li>-->
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/manage_slider">Manage Slider</a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>

          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
      <div class="col-12 mt-1">
      <h6 class="section-label mt-25"></h6>
      <div class="card">
<!--      <div class="alert alert-info" role="alert">-->
<!--              <h4 class="alert-heading">Note</h4>-->
<!--              <div class="alert-body">-->
                  
               
<!--<p>Criteria for approving submitted events below:</p>-->
<!--<ul>-->
<!--<li>You must not promote tribal, ethnic or religious divisiveness at any level</li>-->
<!--<li>You must not be seen to contravene applicable laws of the country of origin</li>-->
<!--<li>You must have updated your GFA profile to at least 50% completion.</li>-->
<!--</ul>-->
<!--              </div>-->
<!--            </div>-->
        <div class="card-body">
          <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
            
              <div class="col-md-6 col-12">
              <label>Slider Title </label>
                <div class="mb-2">
                  <input type="text" name="slider_title" class="form-control" required  />
                </div>
              </div>
              
              <div class="col-md-6 col-12">
              <label>Slider URL </label>
                <div class="mb-2">
                  <input type="text" name="slider_url" class="form-control" required  />
                </div>
              </div>
              
              <div id="full-wrapper col-12">
                <div id="full-container" class="mb-2">
                  <label class="form-label" for="content">Slider Content</label>
                  <textarea name="slider_content" class="form-control" rows="2" required></textarea>
                </div>
              </div>
              
                    <!--
                        <label class="form-label" for="backgrond_image">Background Image</label>
                        <input type="file" id="backgrond_image" class="form-control" required />
                     -->
              
    </div>
            
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn mb-2">Submit</button><span class="displayAction"></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Blog --> 
   
        <!--/ form -->
      </div>
    </div>
  
    <script>
      $(function(){
          
           $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
    var form = $(this)[0];
        var formData = new FormData(form);
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/addsliderpostpro"); ?>",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Uploading Slider...'); $(".EventBtn").prop('disabled', false);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtn").prop('disabled', false);
     window.open("<?php echo base_url(); ?>gfa/manage_slider", "_self");



      }
    });

    return false;

  });
         
          
          
      });  
    </script>

    <!-- Blog Comment -->
   
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
   
    <!--/ Leave a Blog Comment -->
  </div>
</div>
<!--/ Blog Detail -->

          </div>
        
        
      </div>
    </div>