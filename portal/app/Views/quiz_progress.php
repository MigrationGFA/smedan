<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $email = session()->get('email');
?>

<div class="container-xxl flex-grow-1 container-p-y">

<h4 class="py-3 mb-4">
  <span class="text-muted fw-light"><?php echo $course ?></span>
</h4>

<div class="row">

  <!-- LEFT SIDE -->
  <div class="col-xl-8 col-lg-5 col-md-5 order-1 order-md-0">

    <!-- PASSED QUIZZES -->
    <div class="card mb-4">
      <div class="card-body">
        <span class="badge bg-label-success">Quizzes Passed</span>

        <div class="info-container">
          <ul class="ps-3 g-2 my-3">

            <?php 
              $PassedQuizzesData = $this->gfa_model->GetPassedSoftQuizzes($email, $course);
              foreach($PassedQuizzesData as $quiz){ 
            ?>

              <li class="mb-2">
                <a href="<?php echo base_url("gfa/quiz/{$quiz['ref_id']}"); ?>">
                  <?php echo $quiz['quiz']; ?>
                </a>
              </li>

            <?php } ?>

          </ul>
        </div>
      </div>
    </div>

    <!-- UNPASSED QUIZZES -->
    <div class="card mb-4">
      <div class="card-body">

        <div class="d-flex justify-content-between align-items-start">
          <span class="badge bg-label-warning">Quizzes Not Passed</span>
        </div>

        <ul class="ps-3 g-2 my-3">

          <?php 
            $UnpassedQuizzesData = $this->gfa_model->GetUnpassedSoftQuizzes($email, $course);
            foreach($UnpassedQuizzesData as $quiz){ 
          ?>

          <li class="mb-2 userActivity" qs="<?= 'q-' . $quiz['ref_id']; ?>">
            <a href="<?php echo base_url("gfa/quiz/{$quiz['ref_id']}"); ?>">
              <?php echo $quiz['quiz']; ?>
            </a>
          </li>

          <?php } ?>

        </ul>

      </div>
    </div>

  </div>

</div>

</div>

<script>
$(function(){

  $('.userActivity').click(function(){

    var getValue = $(this).attr("qs");

    $.ajax({
      url: '<?php echo base_url("gfa/courseActivities") ?>',
      method: 'POST',
      data:{getValue:getValue},
      success: function(response) {
        $(".loadModule1").html(response);
      },
      error: function(xhr, status, error) {
        $(".loadingPage1").html('Error:', status, error);
      }
    });

  });

});
</script>
