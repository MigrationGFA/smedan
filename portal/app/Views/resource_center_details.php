<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $getOneResource = $this->gfa_model->getOneResource($id);
?>

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
            
<h4 class="pt-3 mb-0">
  <span class="text-muted fw-light">Resource /</span> Course Details
</h4>

<div class="card g-3 mt-5">
  <div class="card-body row g-3 justify-content-center">
    <div class="col-md-10">
      <div class="card academy-content shadow-none border">
        <div class="p-2">
          <div style="max-width: 853px"><div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;"><iframe src="<?= $getOneResource[0]['resource_link']?>" width="853" height="480" frameborder="0" scrolling="no" allowfullscreen title="Business Model Canvas by Philip Hermannsdoerfer-20240425_143604-Meeting Recording.mp4" style="border:none; position: absolute; top: 0; left: 0; right: 0; bottom: 0; height: 100%; max-width: 100%;"></iframe></div></div>

          <!-- <div>
            <iframe src="https://getfundedafricacom-my.sharepoint.com/personal/promise_gfa-tech_com/_layouts/15/embed.aspx?UniqueId=a9141678-833f-408c-8272-ff6f09477582" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen title="Business_Model_Canvas"></iframe>
          </div> -->
        </div>
        <div class="card-body">
          <h5 class="mb-2"><?= $getOneResource[0]['resource_title']?></h5>
          <hr class="my-4">
          <h5>Instructor</h5>
          <div class="d-flex justify-content-start align-items-center user-name">
            <div class="avatar-wrapper">
              <div class="avatar me-2"><img src="<?= base_url('public/assets-new/img/avatars/default-img.jpg')?>" alt="Instructor" class="rounded-circle"></div>
            </div>
            <div class="d-flex flex-column">
              <span class="fw-medium"><?= $getOneResource[0]['instructor_name']?></span>
              <small class="text-muted"><?= $getOneResource[0]['instructor_description']?></small>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



          </div>
          <!-- / Content -->

          
      