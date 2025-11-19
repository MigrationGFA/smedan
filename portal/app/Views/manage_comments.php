    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
      <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Manage Comments</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                  <!-- <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/perks">All Courses</a>
                 </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/manage_comments">Reply </a>
                    </li> -->
                    <li class="breadcrumb-item">
                      <h5 class="card-title"> Users Comments (Total: <?php echo $this->gfa_model->countAllComments();?>)</h5>
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
              
               
            <table class="table tablemanager truncate-column">
              <thead>
                   <tr>
                      <td>
            
              </td>
              <td>
            
              </td>
               <td>
            
              </td>
               <td>
                <div class="col-xl-6 col-md-6 col-12">
              <!--<div class="mb-1">-->
              <!--  <label class="form-label" for="basicInput">Search Jobs</label>-->
              <!--  <input type="text" name="searchJobs" class="form-control searchJobs" id="basicInput" placeholder="Enter search">-->
              <!--</div>-->
            </div>
              </td>
              </tr>
                <tr>
                    <th></th>
                 	<th>Comments</th>
					<th>Lesson Title</th>
				<!-- <th>User Email</th> -->
					<th>Comment Date</th>
					<th>Response</th>
					<th>Response Date</th>
                </tr>
              </thead>
              <tbody class="loadCorperate">
                <?php
                $row = $this->gfa_model->getAllComments();
				// var_dump($row);
                $n = 1;
				foreach($row as $rowArray){
                ?>
                <tr>
                  <td>
                    <div class="">
						<a href="<?php echo base_url()?>gfa/edit_comment/<?php echo $rowArray['id']; ?>" ><i data-feather="edit" class="text-success font-medium-1"></i>Reply</a>
							<!-- | 
						<a href="#" alt="delete Course" class="deletebtn"><i data-feather="trash" class="text-success font-medium-1"></i>Delete<span style="display: none;"><?php //echo $rowArray['id'] ?></span></a>   -->
                    </div>
                  </td>
                  <td class="">
                	<div class="fw-bolder"><?php echo $rowArray['comment'] ?></div>
                  </td>
                  <td>
                    <div class="fw-bolder"><?php echo $this->gfa_model->getLessonById($rowArray['lesson_id'])[0]['title'] ?></div>
                  </td>
                 <!-- <td>
                     <div class="d-flex flex-column"><?php echo $rowArray['email'] ?></div>                     
                  </td> -->
				  <td class="">
                    <div class="d-flex flex-column"><?php echo $rowArray['date']; ?></div>
                  </td>
                  <td class="">
                <!-- class="text-truncate" -->
                 	<!-- <div class="d-flex align-items-center"> -->
                     <!-- <div> -->
                        <div class="fw-bolder"><?php echo $rowArray['response'] ?></div>
                     <!-- </div> -->
                   <!-- </div> -->
                  </td>
                  <td class="">
                    <div class="d-flex flex-column"><?php echo $rowArray['response_date']; ?></div>
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


</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   <style>
    .truncate-column td:nth-child(2),
    .truncate-column td:nth-child(6) {
       max-width: 100px;
       overflow: hidden;
       white-space: nowrap;
       text-overflow: ellipsis;
    }
    </style>