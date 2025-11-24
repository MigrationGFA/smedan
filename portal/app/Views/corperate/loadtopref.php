<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
            <h5 class="card-title">Top Referrers [from: <?php echo $start_date ?> to <?php echo $end_date ?>]</h5>
<!--The size of cheques the investor writes -->
<div class="table-responsive">
              
             
            <table class="table">
              <thead>
                  
                <tr>
                  <!-- <th></th> -->
                  <th>S/No</th>
				<th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Total Referrals</th>
                  <th>Account Verified</th>
                </tr>
              </thead>              <tbody class="loadCorperate">
                 
              
                <?php
                
                $referralData = $this->gfa_model->GetTopReferrer($start_date,$end_date);
                
					
    
        			$n = 1;
                // $rowArrayM[0]['PrimaryBusinessIndustry'],$rowArrayM[0]['Startup_Implementation_Stage'],
				foreach($referralData as $referralInfo){  
               
             ?>
                <tr>
                  
                <td>
                <?php echo $n++ ?>
                  </td>
                <!-- <td class="text-nowrap">
                   <?php //echo $referralInfo['time_submit'] ?>
                  </td> -->
                  <td class="text-nowrap">
                   <?php echo $referralInfo['Primary_Contact_Name'] ?>
                  </td>
     				<td class="">
                    <?php echo $referralInfo['email'] ?>
                  </td>
                <td class="">
                <?php echo $referralInfo['Phones'] ?>
                  </td>
                <td class="">
                    <?php echo $referralInfo['ref_count'] ?>
                  </td>
                  <td class="">
                    <?php if($referralInfo['account_verified'] > $referralInfo['ref_count']){
                         echo $referralInfo['ref_count'];
                    }else{
                        echo $referralInfo['account_verified'];
                    }
                         
                         ?>
                  </td>
                 
                </tr>
                <?php   }  ?>
               
              </tbody>
            </table>
          </div>