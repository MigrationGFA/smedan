<?php foreach($courseToDisplay as $courseData){   ?>
<li class="mb-3">
                <div class="d-flex align-items-start">
                  <div class="d-flex align-items-start">
                    <div class="ms-auto">
                    <button class="btn btn-label-primary btn-icon btn-sm"><i class="ti ti-user-check ti-xs"></i></button>
                  </div>
                    <!-- <div class="avatar me-2"> -->
                      <!-- <img src="<?php //echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="Avatar" class="rounded-circle" /> -->
                    <!-- </div> -->
                    <a href="<?php echo base_url("gfa/profile_details/{$courseData['STUP_ID']}"); ?>" class="stretched-link" style="font-weight: bold; color: #5c5460;">
                    <div class="me-2 ms-1">
                      <h6 class="mb-0"><?php echo ucwords($courseData['Name']) ?></h6>
                      <small class="text-muted"><?php echo ucwords($courseData['city']) ?></small>
                    </div>
                  </div>
                  
                </a>
                </div>
              </li>
              
			<?php }  ?>  
			                <li class="text-center">
                <a href="<?php echo base_url('gfa/group_members'); ?>">View all members</a>
              </li>