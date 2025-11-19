<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if(!empty($page_title)){ echo $page_title; } ?></title>
  <link
      rel="icon"
      href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-32x32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-192x192.png"
      sizes="192x192"
    />
    <link
      rel="apple-touch-icon"
      href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-180x180.png"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('public/assets-new/cert/styles-borno.css'); ?>">

</head>
<body>
  <div class="certificate-container">
    <img src="<?php echo base_url('public/assets-new/cert/fgn_certificate_borno.png'); ?>" alt="Certificate" class="certificate-image">
    <div class="text-overlay">
      <p><?php echo $certData[0]['matric_number']; ?></p>
      <h1><?php echo $certData[0]['name_of_participant']; ?></h1>
      <h3>
          for completing the 10 weeks intensive <?php echo $certData[0]['course_enrolled']; ?> training at the FGN-ALAT Innovation hub in Maiduguri, Borno State.
        </h3>
    </div>
  </div>

</body>
</html>
