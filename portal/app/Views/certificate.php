<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if(!empty($page_title)){ echo $page_title; } ?></title>
  <link rel="icon" href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-32x32.png" sizes="32x32">
  <link rel="icon" href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-192x192.png" sizes="192x192">
  <link rel="apple-touch-icon" href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-180x180.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('public/assets-new/cert/styles.css'); ?>">
  
</head>
<body>
  <div class="certificate-container">
    <img src="<?php echo base_url('public/assets-new/cert/Certificate_alat.jpg'); ?>" alt="Certificate" class="certificate-image">
    <div class="text-overlay">
      <p><?php echo $certData[0]['prog'] ?></p>
      <h1>
          <?php 
            $nameArray = explode(" ", $certData[0]['name']);
            echo strtoupper(trim(($nameArray[0] ?? '') . ' ' . ($nameArray[2] ?? '') . ' ' . ($nameArray[1] ?? ''))); 
          ?>
        </h1>
      <h2><?php echo ucwords($certData[0]['course']) ?></h2>
    </div>
  </div>

  <!-- Print and Exportto PDF buttons -->

</body>
</html>
