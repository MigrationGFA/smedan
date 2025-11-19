<?php 
    $this->gfa_model = model('App\Models\GfaModel');
    $getAllResources = $this->gfa_model->getAllResources($id);
?>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Mentorship</span> Resources</h4>
        <div class="app-academy">
        

        <div class="card mb-4">
            <div class="card-header d-flex flex-wrap justify-content-between gap-3">
                <div class="card-title mb-0 me-1">
                    <h5 class="mb-1">Mentorship session recorded materials</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row gy-4 mb-1">
                    <?php foreach ($getAllResources as $rowArray) { ?>

                    <div class="col-sm-6 col-lg-4">
                    <div class="card p-2 h-100 shadow-none border">
                        <div class="rounded-2 text-center mb-3">
                        <a href="<?= base_url("gfa/resource_center_details/{$rowArray['id']}")?>"><img class="img-fluid" src="<?php echo base_url("public/assets-new/img/business_commx.jpg") ?>" alt="resource image" /></a>
                        <!-- src="<?php echo base_url("public/assets/") ?>" -->
                        </div>
                        <div class="card-body p-3 pt-2">
                        <a class="h5" href="<?= base_url("gfa/resource_center_details/{$rowArray['id']}")?>"><?= $rowArray['resource_title']?></a>
                        <div class="d-flex flex-column flex-md-row gap-2 text-nowrap mt-2">
                            <a class="w-100 btn btn-label-primary" href="<?= base_url("gfa/resource_center_details/{$rowArray['id']}")?>"><i class="ti ti-eye me-2 mt-n1 scaleX-n1-rtl"></i>View</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        </div>
    </div>
    <!-- / Content -->
