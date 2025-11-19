    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
      <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Manage Slider</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                  
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/add_slider">+ Add Slider </a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">


  <div class="row match-height">
<!--   The investor name & title -->

<!--The industries the investor invests in -->

<!--The size of cheques the investor writes -->

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12 ">
        
      <div class="card card-company-table">
        <div class="card-body p-0">
            
          <div class="table-responsive">
              
               
            <table class="table">
              <thead>
                   <tr>
                      <td></td>
               <td></td>
               <td></td>
               <!-- <td></td> -->
               <td></td>
              </tr>
                <tr>
                     <th></th>
                <th>Slider Title</th>
                <th>Slider URL</th>
                <th>Slider Content</th>
                  <th>Date Posted</th>
                </tr>
              </thead>
              <tbody>
                <?php
                
                $row = $this->gfa_model->getAllSlider();
                $n = 1;
				foreach($row as $rowArray){
				   
                ?> 
             
                <tr>
                    <td>
                    <div class="d-flex align-items-center">
                
               <!-- <a href="<?php //echo base_url()?>gfa/edit_slider/<?php //echo $rowArray['id']; ?>" ><i data-feather="external-link" class="text-success font-medium-1"></i>View</a> | -->
               <a href="<?php echo base_url()?>gfa/edit_slider/<?php echo $rowArray['id']; ?>" ><i data-feather="edit" class="text-success font-medium-1"></i>Edit</a> | 
               <a href="#" alt="delete Slider" class="deletebtn"><i data-feather="trash" class="text-success font-medium-1"></i>Delete<span style="display: none;"><?php echo $rowArray['id'] ?></span></a>  
              
                    </div>
                    </td>
                    <td>
                    <div class="d-flex align-items-center">                      
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['slider_title']  ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['slider_url']  ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">                      
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['slider_content']  ?></div>
                      </div>
                    </div>
                  </td>
                 
                
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                       <?php echo $rowArray['date_posted']; ?>                      
                    </div>
                  </td>
                   
                </tr>

                
                <?php   }  ?>
               
              </tbody>
            </table>
          </div>
        </div>
      <!-- </div><span class="showDataDel"></span> -->
    </div>
    <!--/ Company Table Card -->
   
  </div>
<script>
    
    $(function(){

      $("tr").on('click','.deletebtn',function() {
        var id = $(this).find('span').text();
        //$(".showDataDel").val(id);
        var choice = confirm('Do you really want to delete this record?');
        if(choice === true) {
            $(this).closest('tr').remove();
            //$('tr.myTable').remove();
          
          $.ajax({
          data:{id:id},
          type: "POST",
          url: "<?php echo base_url(); ?>gfa/deleteSlider",
          //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
          //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
            success: function(data) {
          // $(".showDataDel").html(data);
          }
            
          });
        }
        return false;
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

   