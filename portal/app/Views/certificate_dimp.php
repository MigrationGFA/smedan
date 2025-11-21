<?php $this->gfa_model = model('App\Models\GfaModel'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if(!empty($page_title)){ echo $page_title; } ?></title>

    
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/cert/styles_dimp.css'); ?>" />
  </head>
  <body>
    <div class="certificate-container">
      <img
        src="<?php echo base_url('public/assets-new/cert/Certificate_dimp.jpg'); ?>"
        alt="Certificate"
        class="certificate-image"
      />

      <div class="text-overlay">
        <p><?php echo $certData[0]['prog'] ?></p>
        <h1><?php 
            $nameArray = explode(" ", $certData[0]['name']);
            echo strtoupper(trim(($nameArray[0] ?? '') . ' ' . ($nameArray[2] ?? '') . ' ' . ($nameArray[1] ?? ''))); 
          ?></h1>
        <h2><?php //echo ucwords($certData[0]['course']) ?></h2>
        <h4><?php echo date("F Y", strtotime($certData[0]['time_submit'])); ?></h4>
      </div>
    </div>
  </body>
</html>
