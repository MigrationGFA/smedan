<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
$nonce_value = bin2hex(random_bytes(16));
   ?>
<div class="container-xxl flex-grow-1 container-p-y" id="mContent">
            
            

<div class="row">
  
  <!-- <div class="alert alert-danger" role="alert">
    Please note: we are currently upgrading the portal to accommodate more courses and more engagement, this may take a while, we will notify you once we are done
  </div> -->
  <div class="col-lg-12 mb-4">
    <div class="input-group">
        <input type="text" class="form-control" value="<?php echo 'https://kaduna-digital.dimpified.com/register/?ref='.$skillArray[0]['ref']; ?>"  readonly="readonly" id="inputField" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-primary" type="button" id="copyButton">Copy Referral Link</button>
        </div>
    </div>
    <div id="revenueGenerated" class="mb-2 mt-2"><a class="btn btn-outline-primary" href="whatsapp://send?text=<?php echo 'https://kaduna-digital.dimpified.com/register/?ref='.$skillArray[0]['ref']; ?>" data-action="share/whatsapp/share">Share via WhatsApp</a> 
   <div class="fb-share-button btn btn-outline-primary" data-href="<?php echo 'https://kaduna-digital.dimpified.com/register/?ref='.$skillArray[0]['ref']; ?>" data-layout="button"></div>
   <a href="https://twitter.com/intent/tweet?url=<?php echo 'https://kaduna-digital.dimpified.com/register/?ref='.$skillArray[0]['ref']; ?>" class="btn btn-outline-primary" target="_blank" rel="noopener noreferrer">Share on Twitter</a>
   </div>
  </div>
  <!--/ Website Analytics -->
  
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

          </div>

          <?php 
    if (!$this->gfa_model->CheckUserCategory($email)) {    
      include ("update_category.php");
    }
  ?>
  