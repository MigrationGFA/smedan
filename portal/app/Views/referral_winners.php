<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $winners = $this->gfa_model->GetReferralWinnersByDate('2024-05-17');
   ?>
<div class="container-xxl flex-grow-1 container-p-y">
   
<div class="row">
  <!-- Website Analytics -->
  <div class="alert alert-danger" role="alert">
    First Batch of Referral Winners
  </div>

  <div class="row">        
            <div class="col-12">            
              <div class="card">
                <div class="card-body">                
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr class="fw-bold">
                          <th>Name</th>
                          <!-- <th>Email</th>
                          <th>Phone</th> -->
                          <th>Gift Won</th>
                        </tr>
                      </thead>
                      <tbody>               
                        <?php foreach ($winners as $rowArray) {?>
                        <tr>    
                          <td>
                            <div><?php echo $rowArray['Name']  ?></div>
                          </td>                  
                          <!-- <td>
                            <div><?php // echo $rowArray['Email']  ?></div>
                          </td>                  
                          <td>
                            <div><?php // echo $rowArray['Phone']  ?></div>
                          </td>                   -->
                          <td>
                            <div><?php echo $rowArray['GiftWon']  ?></div>
                          </td>                  
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>


          </div>