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
                <h2 class="content-header-title float-start mb-0">Edit Comment</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/manage_comments">All Comment</a>-->
                    <!--</li>-->
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/manage_comments">Manage Comments</a>
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
   <?php $getCommentData = $this->gfa_model->getCommentById($id); ?>          
              
              <div class="col-sm-6 col-12">
              <label>Comments </label>
                <div class="mb-2">
                  <input type="text" class="form-control" readonly value="<?php echo $getCommentData[0]['comment']  ?>" />
                </div>
              </div>
              
              <div class="col-sm-6 col-12">
              <label>Lesson </label>
                <div class="mb-2">
                  <input type="text" class="form-control" readonly value="<?php echo $this->gfa_model->getLessonById($getCommentData[0]['lesson_id'])[0]['title']  ?>" />
                </div>
              </div>
              
              <div class="col-sm-6 col-12">
              <label>User Email </label>
                <div class="mb-2">
                  <input type="text" class="form-control" readonly value="<?php echo $getCommentData[0]['email']  ?>" />
                </div>
              </div>

              <div class="col-sm-6 col-12">
              <label>Date </label>
                <div class="mb-2">
                  <input type="text" class="form-control" readonly value="<?php echo $getCommentData[0]['date']  ?>" />
                </div>
              </div>
              
              <hr class="mb-2" />
              
              <div id="full-wrapper col-12">
                <div id="full-container" class="mb-2">
                  <!-- <div class="editor eventDoc textData" style="height:250px;"> -->
                  <textarea name="response" style="width: 100%;" rows="10">
                    <?php echo $getCommentData[0]['response'] ?>
                  </textarea>
                  <!-- </div> -->
                </div>
              </div>       
              
    </div>
       <input type="hidden" class="id" name="id" value="<?php echo $id ?>">
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn mb-2">Submit</button><span class="displayAction"></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Blog --> 

    <hr class="invoice-spacing" />
        
        <!--/ form -->
      </div>
    </div>
    
    
    
    <script>
      $(function(){
        $(".EventForm").submit(function(e) {
        e.preventDefault();
        var form = $(this)[0];
          var formData = new FormData(form);
        // console.log(formData);
        $.ajax({
          data:formData,
          type: "POST",
          url: "<?php echo base_url("gfa/edit_commentpro"); ?>",
          error:function() {$(".displayAction").html('Error')},
          beforeSend:function() {$(".displayAction").html('Update Comment...'); $(".EventBtn").prop('disabled', false);},
          processData: false,
          contentType: false,
            success: function(data) {          
              $(".displayAction").html(data);
              $(".EventBtn").prop('disabled', false);
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