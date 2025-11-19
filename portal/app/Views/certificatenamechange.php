  <?php 
  $this->gfa_model = model('App\Models\GfaModel');
  
  $nameArray = explode(" ", $this->gfa_model->getCertificateName($email)[0]['name']);
  $firstname = (!empty($nameArray[1]))? $nameArray[0] : '';
  $lastname = (!empty($nameArray[1]))? $nameArray[1] : '';
  $middlename = (!empty($nameArray[1]))? $nameArray[2] : '';
  ?>
      <!-- BEGIN: Content-->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Profile Details</span>
  </h4>
<div class="row">
  <div class="col-12">
<?php // print_r($this->gfa_model->getStartUpDetails($email));?>
    <!-- profile -->
    <div class="card">
     <div class="card-body py-2 my-25">
         <br>
        <!-- form -->
        <form class="validate-form mt-2 pt-50 startUpForm" method="post" action="" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12 mb-2">
              <label class="form-label" for="accountFirstName">First Name</label>
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="firstName"
                placeholder="First Name"
                value="<?php echo $firstname ?>"
                data-msg="Please enter first name"
              />
            </div>
            <div class="col-12 mb-2">
              <label class="form-label" for="accountMiddleName">Middle Name</label>
              <input
                type="text"
                class="form-control"
                id="accountMiddleName"
                name="middleName"
                placeholder="Middle Name"
                value="<?php echo $middlename ?>"
                data-msg="Please enter middle name"
              />
            </div>
            <div class="col-12 mb-2">
              <label class="form-label" for="accountLastName">Surname</label>
              <input
                type="text"
                class="form-control"
                id="accountLastName"
                name="lastName"
                placeholder="Surname"
                value="<?php echo $lastname ?>"
                data-msg="Please enter surname"
              />
            </div>
            
            <div class="col-12 mt-2">
              <button type="submit" class="btn btn-primary mt-1 me-1 saveBtn">Update</button>
              <span class="displayAction"></span>

            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>
    
    <script>
      $(function(){
        $(".saveBtn").click(function(e) {
    //---------------^---------------
    e.preventDefault();
    
	 var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url('gfa/updateCertificateName'); ?>",
     error:function(e) {$(".displayAction").html('Error saving data');},
     beforeSend:function() {$(".saveBtn").html('Saving Profile...');},
      success: function(data) {           
      if (data == 'First Name and Surname are required!') {
        $(".displayAction").html('<b class="text-danger">' + data + '</b>');
        $(".saveBtn").html('Update');  
        // location.reload();              
      }else{
        $(".displayAction").html("Successfully Saved!");  
        $(".saveBtn").html('Saved');  
      }      
    }      
   });
	 
  
  });
          
      });  
    </script>

  </div>
</div>
</div>
    <!-- END: Content-->

  