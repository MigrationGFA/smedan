<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $email = session()->get('email');
  $course = $this->gfa_model->getWemaCategoryDetails($email);
 ?>
<div class="container-xxl flex-grow-1 container-p-y">
            

<h4 class="py-3 mb-4">
  <span class="text-muted fw-light"><?php echo $course ?></span>
</h4>
<div class="row">
  <!-- User Sidebar -->
  <div class="col-xl-8 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
      <div class="card-body">
        <span class="badge bg-label-primary">Lessons Completed</span>
        <div class="info-container">
            <ul class="ps-3 g-2 my-3">
           <?php $CompletedLessonsData = $this->gfa_model->GetCompletedSoftLessons($email,$course); foreach($CompletedLessonsData as $CompletedLessons){ ?>
          <li class="mb-2"><a href="<?php echo base_url("gfa/lesson/{$CompletedLessons['id']}/{$CompletedLessons['lesson']}"); ?>"><?php echo $CompletedLessons['lesson'] ?></a></li>
         <?php  }  ?>
        </ul>
        </div>
      </div>
    </div>
    <!-- /User Card -->
    <!-- Plan Card -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start">
          <span class="badge bg-label-warning">Lessons Not Completed</span>
          <div class="d-flex justify-content-center">
          </div>
        </div>
         <ul class="ps-3 g-2 my-3">
            <?php $PendingLessonsData = $this->gfa_model->GetPendingSoftLessons($email,$course); foreach($PendingLessonsData as $GetPendingSoftLessons){ ?>
          <li class="mb-2 userActivity" ls="<?= 'l-' . $GetPendingSoftLessons['id'] ?>"><a href="<?php echo base_url("gfa/lesson/{$GetPendingSoftLessons['id']}/{$GetPendingSoftLessons['lessons']}"); ?>"><?php echo $GetPendingSoftLessons['lessons'] ?></a></li>
         <?php  }  ?>
        </ul>
        </ul>
        <div class="d-grid w-100 mt-4">
        </div>
      </div>
    </div>
    <!-- /Plan Card -->
  </div>
  <!--/ User Sidebar -->


  <!-- User Content -->
  

<!-- /Modals -->
          </div>
            
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