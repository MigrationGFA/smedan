<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $email = session()->get('email');
  $loginkey = $this->gfa_model->getWpCred($email);
?>

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y" id="mContent">

  <h4 class="py-3 mb-4"><span class="text-muted fw-light">My</span> Courses</h4>

  <div class="app-academy">
    <div class="row">
      <script>
        document.getElementById('copyButton').addEventListener('click', function() {
          var inputValue = document.getElementById('inputField').value;
          var tempTextarea = document.createElement('textarea');
          tempTextarea.value = inputValue;
          document.body.appendChild(tempTextarea);
          tempTextarea.select();
          document.execCommand('copy');
          document.body.removeChild(tempTextarea);
          alert('Text copied to clipboard: ' + inputValue);
        });
      </script>
    </div>

    <div class="card mb-4">
      <div class="alert alert-danger" role="alert">
        Note that you have <strong>30 days</strong> to complete your chosen course and download your certificate.
      </div>
      <div class="card-header d-flex flex-wrap justify-content-between gap-3">
        <div class="card-title mb-0 me-1">
          <h5 class="mb-1">Soft Skills</h5>
        </div>
        <input type="hidden" id="action_email" value="<?php echo $email; ?>">
      </div>

      <div class="card-body">
        <div class="row mb-4 g-4 loadSoftskillsAnalytics"></div>

        <?php
          // ── Merge all course arrays into one unified list ──────────────────
          $allCourses = [];

          if (!empty($courseArrayToday)) {
              foreach ($courseArrayToday as $c) {
                  $c['_status'] = 'active'; // has active lesson, show today
                  $allCourses[] = $c;
              }
          }

          if (!empty($courseArrayPrev)) {
              foreach ($courseArrayPrev as $c) {
                  $c['_status'] = 'active'; // already passed, still accessible
                  $allCourses[] = $c;
              }
          }

          if (!empty($courseArrayNext)) {
              foreach ($courseArrayNext as $c) {
                  $c['_status'] = 'locked'; // not yet available
                  $allCourses[] = $c;
              }
          }

          if (!empty($courseArrayUpcoming)) {
              foreach ($courseArrayUpcoming as $c) {
                  $c['_status'] = 'locked'; // not yet available
                  $allCourses[] = $c;
              }
          }
        ?>

        <div class="row gy-4 mb-4">
          <?php if (!empty($allCourses)) : ?>

            <?php foreach ($allCourses as $course) : ?>
              <div class="col-sm-6 col-lg-4">
                <div class="card p-2 h-100 shadow-none border">

                  <div class="rounded-2 text-center mb-3">
                    <a href="#">
                      <img class="img-fluid" src="<?php echo base_url("public/assets-new/img/{$course['img']}") ?>" alt="course image" />
                    </a>
                  </div>

                  <div class="card-body p-3 pt-2">
                    <?php 
                 if ($this->gfa_model->checkCompletionSingleCourse($email, $course['id'])) {
                    echo '<span class="badge bg-danger text-white">Completed</span>';
					        }
                 ?>
                    <a class="h5" href="#"><?= $course['coursetitle']; ?></a>
                    <p class="mt-2"><?= $course['description']; ?></p>

                    <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">

                      <?php if ($course['_status'] === 'active') : ?>
                        <?php
                          $cours_url        = str_replace(" ", "-", $course['coursetitle']);
                          $getActiveSection = $this->gfa_model->getSectionByCourseIdActive($course['id']);

                          $hasStarted      = $this->gfa_model->hasUserStartedCourse($email, $course['id']);
                          $startLabel      = $hasStarted ? 'Continue' : 'Start';

                          $getActiveLesson  = $this->gfa_model->getLessonBySectionId($getActiveSection[0]['id']);
                          $lesson_url       = str_replace(" ", "-", $getActiveLesson[0]['title']);
                        ?>
                        <a class="app-academy-md-50 btn btn-label-success d-flex align-items-center"
                           href="<?php echo base_url("gfa/course/{$course['id']}/{$cours_url}") ?>">
                          <span class="me-2">Review</span>
                          <i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                        </a>

                        <?php if (!empty($getActiveLesson[0]['title'])) : ?>
                          <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center userActivity"
                             ls="<?= 'l-' . $getActiveLesson[0]['id']; ?>"
                             href="<?php echo base_url("gfa/lesson/{$getActiveLesson[0]['id']}/{$lesson_url}") ?>">
                            <span class="me-2"><?=$startLabel?></span>
                            <i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                          </a>
                        <?php endif; ?>

                      <?php else : /* locked / upcoming */ ?>
                        <button class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" disabled>
                          <span class="me-2">Coming Soon</span>
                          <i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                        </button>
                      <?php endif; ?>

                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          <?php endif; ?>
        </div><!-- /.row -->

        <!--  Hidden helpers — keep intact for AJAX -->
        <span class="loadModule1 loadingPage1"></span>
        <select id="mySelect" style="display: none;">
          <option value="">Option</option>
          <option value="Option 1">Option 1</option>
        </select>
        <input type="hidden" name="email" class="emailAcct" value="<?php echo $email; ?>" />
      </div><!-- /.card-body -->

      <script>
        $(document).ready(function () {
          $(window).on('load', function () {
            var email = $(".emailAcct").val();
            $.ajax({
              url: '<?php echo base_url("gfa/loadSoftskillsAnalytics") ?>',
              method: 'POST',
              data: { email: email },
              beforeSend: function () {
                $(".loadSoftskillsAnalytics").html("Loading...");
              },
              success: function (data) {
                $(".loadSoftskillsAnalytics").html(data);
              },
              error: function (xhr, status, error) {
                $(".loadSoftskillsAnalytics").html('Error: ' + status + ' ' + error);
              }
            });
          });
        });
      </script>

      <script>
        $(function () {
          $('.userActivity').click(function () {
            var getValue = $(this).attr("ls");
            $.ajax({
              url: '<?php echo base_url("gfa/courseActivities") ?>',
              method: 'POST',
              data: { getValue: getValue },
              success: function (response) {
                $(".loadModule1").html(response);
              },
              error: function (xhr, status, error) {
                $(".loadingPage1").html('Error: ' + status + ' ' + error);
              }
            });
          });
        });
      </script>

    </div><!-- /.card -->
  </div><!-- /.app-academy -->
</div>
<!-- / Content -->
