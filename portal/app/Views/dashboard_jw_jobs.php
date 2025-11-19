<div class="container-xxl flex-grow-1 container-p-y">
            
      

            <!-- Hour chart  -->
            <div class="card bg-transparent shadow-none my-4 border-0 bg-label-primary " >
              <div class="card-body row  g-4">
                <div class="col-12 col-md-8 card-separator ">
                   <h3>Welcome, <?php echo ucwords($name); ?> 👋🏻 </h3>
                  <div class="col-12 col-lg-7">
                    <p>FGN - ALAT Digital SkillNovation Program.</p>
                    
                  </div>
                  <div class="d-flex justify-content-between flex-wrap gap-3 me-5">
                        <a href="<?php echo base_url('gfa/certificate_center'); ?>" class="userActivity" ls="download certificate">
                    <div class="d-flex align-items-center gap-3">
                      <span class="bg-label-warning p-2 rounded">
                        <i class='ti ti-bulb ti-xl'></i>
                      </span>
                      <div class="content-right">
                        <p class="mb-0"><h4 class="text-primary mb-0">Access </h4>your Certificate</p>
                        
                      </div>
                    </div>
                    </a>
                    <a href="<?php echo base_url('gfa/unlishified_reg/seeker'); ?>" class="userActivity" ls="job seeker">
                    <div class="d-flex align-items-center gap-3"  >
                      <span class="bg-label-info p-2 rounded">
                        <i class='ti ti-device-laptop ti-xl'></i>
                      </span>
                      <div class="content-right">
                        <p class="mb-0"><h4 class="text-info mb-0">Apply</h4>for a Job</p>
                      </div>
                    </div>
                    </a>
                    <a href="https://unleashified.com/" target="_blank" class="userActivity" ls="job apply">
                    <div class="d-flex align-items-center gap-3" >
                      <span class="bg-label-warning p-2 rounded">
                        <i class='ti ti-discount-check ti-xl'></i>
                      </span>
                      <div class="content-right">
                        <p class="mb-0"><h4 class="text-warning mb-0">Job Alat</h4>Confirmed</p>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              
                <div class="col-12- col-md-4 ps-md-3 ps-lg-4 pt-3 pt-md-0">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="col-12 col-xl-12 col-md-6">
                <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Learning Continue </h5>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="topCourses" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topCourses">
                      
                        <a class="dropdown-item" href="<?php echo base_url('gfa/learning_path'); ?>">Soft Skill</a>
                        <a class="dropdown-item" href="<?php echo base_url('gfa/soft_skills'); ?>">Technology Skill</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 pb-1 align-items-center">
                        <span class="loadOngoingCourse"></span>
                        <div class="avatar flex-shrink-0 me-3 displayVideo" style="display: none;">
                          <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-video ti-md"></i></span>
                        </div>
                        <div class="row w-100 align-items-center displayCourse" style="display: none;">
                          <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                            <p class="mb-0 fw-medium getCourse"></p>
                          </div>
                          <div class="col-sm-4 col-lg-12 col-xxl-4 d-flex justify-content-sm-end justify-content-md-start justify-content-xxl-end">
                            <a class="badge bg-label-primary getUrl">Get Started</a>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex mb-4 pb-1 align-items-center">
            <div class="row w-100 align-items-center">
              <div class="col-sm-6 col-lg-12 col-xxl-6">
               <a href="<?php echo base_url('gfa/learning_path'); ?>" class="badge bg-label-success">

         <?php      if($rowArrayStartup[0]["Interest_Fund_Raise"]=="Business Owner" || $rowArrayStartup[0]["Interest_Fund_Raise"]=="Aspiring Business Owner"){ 
       echo "Technical Courses";
       }else{
         echo  "Technology Courses";
           } 
            ?>
               </a>
              </div>
              <div class="col-sm-6 col-lg-12 col-xxl-6">
                <a href="<?php echo base_url('gfa/soft_skills'); ?>" class="badge bg-label-dark">Soft Skill Courses</a>
              </div>
            </div>
           </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            
            </div>
                </div>
              </div>
             </div>
            <!-- Hour chart End  -->
            
            <div class="row mb-4 g-4 loadCourseAnalytics"></div>    
            <div class="row mb-4 g-4 courseDataAnalytics" style="display: none;" >
            
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="content-left">
                        <h4 class="mb-0 course_data_1"></h4>
                        <small>Course Assigned</small>
                      </div>
                      <span class="badge bg-label-primary rounded-circle p-2">
                        <i class="ti ti-user ti-md"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="content-left">
                        <h4 class="mb-0 course_data_2"></h4>
                        <small>Course Track</small>
                      </div>
                      <span class="badge bg-label-success rounded-circle p-2">
                        <i class="ti ti-infinity ti-md"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="content-left">
                        <h4 class="mb-0 course_data_3"></h4>
                        <small>Quiz Passed</small>
                      </div>
                      <span class="badge bg-label-danger rounded-circle p-2">
                        <i class="ti ti-check ti-md"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="content-left">
                        <h4 class="mb-0 course_data_4"></h4>
                        <small>Total Courses Taken</small>
                      </div>
                      <span class="badge bg-label-info rounded-circle p-2">
                        <i class="ti ti-book ti-md"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                
                
            
            <!-- Topic and Instructors -->
            <div class="row mb-4 g-4">
            
              <div class="col-12 col-xl-4 col-md-4">
                <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Recommended Jobs</h5>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="topCourses" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topCourses">
                        <a class="dropdown-item" href="https://unleashified.com/jobs/listing/job-list" target="_blank">Apply for a Job</a>
                        <a class="dropdown-item" href="https://unleashified.com/jobs/listing/job-list" target="_blank">Submit your CV</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mb-0 loadDashboardJobsRecomm">
                      
                      
                    </ul>
                  </div>
                </div>
              </div>
            
            
              <div class="col-12 col-xl-4 col-md-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="bg-label-primary rounded-3 text-center mb-3 pt-4">
                      <img class="img-fluid" src="<?php echo base_url('public/assets-new/img/illustrations/girl-with-laptop.png'); ?>" alt="Card girl image" width="140" />
                    </div>
                    <h4 class="mb-2 pb-1">Resource Center</h4>
                    <p class="small">Access resources and materials of the last mentorship class</p>
                    <div class="row mb-3 g-3">
                      <div class="col-6">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-2">
                            <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-calendar-event ti-md"></i></span>
                          </div>
                          <div>
                            <h6 class="mb-0 text-nowrap">8th Apr - </h6>
                            <small>19 May 24</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-2">
                            <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-clock ti-md"></i></span>
                          </div>
                          <div>
                            <h6 class="mb-0 text-nowrap">30 Hours</h6>
                            <small>Total Duration</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="<?= base_url('gfa/resource_center')?>" class="btn btn-primary w-100">Get Started</a>
                  </div>
                </div>
              </div>
            
            
             <!-- Connections -->
                  <div class="col-lg-12 col-xl-4 col-md-4">
                    <div class="card h-100 card-action mb-4">
                      <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Your Community</h5>
                        
                        <div class="card-action-element">
                          <div class="dropdown"> 
                            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical text-muted"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="<?php echo base_url('gfa/group_members'); ?>">All members</a></li>
                              <li><a class="dropdown-item" href="<?php echo base_url('chat/'); ?>">Chat with members</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <ul class="list-unstyled mb-0 loadCourseMember">
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-2">
                                  <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2 ms-1">
                                  <h6 class="mb-0"></h6>
                                  <small class="text-muted"></small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="btn btn-label-primary btn-icon btn-sm"><i class="ti ti-user-check ti-xs"></i></button>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-2">
                                  <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2 ms-1">
                                  <h6 class="mb-0"></h6>
                                  <small class="text-muted"></small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="btn btn-primary btn-icon btn-sm"><i class="ti ti-user-x ti-xs"></i></button>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-2">
                                  <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2 ms-1">
                                  <h6 class="mb-0"></h6>
                                  <small class="text-muted"></small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="btn btn-primary btn-icon btn-sm"><i class="ti ti-user-x ti-xs"></i></button>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-2">
                                  <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2 ms-1">
                                  <h6 class="mb-0"></h6>
                                  <small class="text-muted"></small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="btn btn-label-primary btn-icon btn-sm"><i class="ti ti-user-check ti-xs"></i></button>
                              </div>
                            </div>
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-2">
                                  <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2 ms-1">
                                  <h6 class="mb-0"></h6>
                                  <small class="text-muted"></small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="btn btn-label-primary btn-icon btn-sm"><i class="ti ti-user-check ti-xs"></i></button>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-2">
                                  <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2 ms-1">
                                  <h6 class="mb-0"></h6>
                                  <small class="text-muted"></small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="btn btn-label-primary btn-icon btn-sm"><i class="ti ti-user-check ti-xs"></i></button>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-2">
                                  <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2 ms-1">
                                  <h6 class="mb-0"></h6>
                                  <small class="text-muted"></small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="btn btn-label-primary btn-icon btn-sm"><i class="ti ti-user-check ti-xs"></i></button>
                              </div>
                            </div>
                          </li>
                          <li class="text-center">
                            <a href="<?php echo base_url('gfa/group_members'); ?>">View all members</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--/ Connections -->
            </div>
            <!--  Topic and Instructors  End-->
            
            
            
            
           <div class="row mb-4 g-4">
 <?php
   $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$url = $protocol . "://" . $_SERVER['HTTP_HOST'];
// $url = str_replace("portal/gfa/referral/","",$url);
?>
  <div class="col-lg-12">
    <div class="card h-100">
      <div class="card-body">
        <form class="referral-form" onsubmit="return false">
          <div class="mb-4 mt-1">
            <h5>Invite your friends</h5>
            <div class="d-flex flex-wrap gap-3 align-items-end">
              <div class="w-75">
                <label class="form-label mb-0" for="referralEmail">Enter friend’s email address and invite them to Join<br></label><br><br>
                <input type="text" class="form-control" value="<?php echo $url.'/register/?ref='.$skillArray[0]['ref']; ?>"  readonly="readonly" id="inputField" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
        <!-- <div class="input-group-append">
            <button class="btn btn-outline-primary" type="button" id="copyButton">Copy Referral Link</button>
        </div> -->
              </div>
              <div>
               <button class="btn btn-outline-primary" type="button" id="copyButton">Copy Referral Link</button>
              </div>
            </div>
          </div>
        
        </form>
      </div>
    </div>
  </div>
</div>
            
            <select id="mySelect" style="display: none;">
                  <option value="">Option</option>
        <option value="Option 1">Option 1</option>
       
    </select>
                      </div>

                      <script>
        document.getElementById('copyButton').addEventListener('click', function() {
            // Get the value of the input field
            var inputValue = document.getElementById('inputField').value;
            
            // Create a temporary textarea element
            var tempTextarea = document.createElement('textarea');
            tempTextarea.value = inputValue;
            
            // Append the textarea to the document
            document.body.appendChild(tempTextarea);
            
            // Select the text inside the textarea
            tempTextarea.select();
            
            // Copy the selected text to the clipboard
            document.execCommand('copy');
            
            // Remove the temporary textarea from the document
            document.body.removeChild(tempTextarea);
            
            // Alert the user that the text has been copied (optional)
            alert('Text copied to clipboard: ' + inputValue);
        });
    </script>

                      <script>
          $(document).ready(function() {
              $('#mySelect').change(function() {

//load analytic page 
                  $.ajax({
        url: '<?php echo base_url("gfa/loadOngoingCourse") ?>',
        method: 'POST',
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".loadOngoingCourse").html("Loading...");

            // You can add loading indicators or other preparations here
        },
        success: function(response) {
          // You can perform additional actions or manipulate the loaded content here
           var courseData = response.split("|");
            $(".getCourse").html(courseData[0]);
            var courseId = courseData[1];
            $(".getUrl").attr("href","<?php echo base_url('gfa/course/'); ?>"+courseId);
           
            $(".displayVideo").show();
            $(".displayCourse").show();
            $(".loadOngoingCourse").html("");
            
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadCourseAnalytics").html('Error:', status, error);
        }
    });
                //load Recommended Jobs
    $.ajax({
        url: '<?php echo base_url("gfa/loadCourseMemberx") ?>',
        method: 'POST',
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".loadCourseMember").html("Loading...");

            // You can add loading indicators or other preparations here
        },
        success: function(response) {
          $(".loadCourseMember").html(response);
            
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadCourseMember").html('Error:', status, error);
        }
    });
                
                  //load analytic page 
                  $.ajax({
        url: '<?php echo base_url("gfa/loadDashboardCourseAnalytics") ?>',
        method: 'POST',
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".loadCourseAnalytics").html("Loading...");

            // You can add loading indicators or other preparations here
        },
        success: function(response) {
          // You can perform additional actions or manipulate the loaded content here
           var courseData = response.split("|");
            $(".course_data_1").html(courseData[0]);
            $(".course_data_2").html(courseData[1]);
            $(".course_data_3").html(courseData[2]);
            $(".course_data_4").html(courseData[3]);

            $(".courseDataAnalytics").show();
            $(".loadCourseAnalytics").html("");
            
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadCourseAnalytics").html('Error:', status, error);
        }
    });


    //load Recommended Jobs
    $.ajax({
        url: '<?php echo base_url("gfa/loadDashboardJobsRecomm") ?>',
        method: 'POST',
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".loadDashboardJobsRecomm").html("Loading...");

            // You can add loading indicators or other preparations here
        },
        success: function(data) {
          $(".loadDashboardJobsRecomm").html(data);
            
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadDashboardJobsRecomm").html('Not available:', status, error);
        }
    });
                  
              // Check if the modal has been shown before
    if (!localStorage.getItem('modalShown')) {
      // Show the modal
      $('#agreeGrp').modal('show');

      // Set a flag in localStorage to indicate that the modal has been shown
      localStorage.setItem('modalShown', 'true');
    }

    // Event listener for modal close button
    $('#agreeGrp').on('hidden.bs.modal', function () {
      // Clear the localStorage flag when the modal is closed
      localStorage.removeItem('modalShown');
    });
              }).change();
    
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