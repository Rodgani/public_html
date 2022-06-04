<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/style.css">

    <?php
    $slug  = $this->uri->segment(1)  ? $this->uri->segment(1)  : 'home'; 
    $this->load->helper('meta_helper');
    $meta_data = meta_data($slug); 
     ?>
    <title><?php echo $meta_data['title'] ?></title>


 <meta name="description" content="<?php echo $meta_data['description'] ?>"/>
    <meta name="keywords" content="<?php echo $meta_data['keywords'] ?>"/>
    <meta property="og:title" content="<?php echo $meta_data['og_title'] ?>"/>
    <meta property="og:description" content="<?php echo $meta_data['og_description'] ?>"/>
    <meta property="og:type" content="website"/>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="<?php echo base_url(); ?>assets/front/js/jquery-3.4.1.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/front/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/jquery.unveil.js"></script>
    <script>var base_url = '<?php echo base_url(); ?>';</script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <style>
      @media (max-width: 1199px) {
        .heading-next{font-size: 14px;font-weight:700}
        .heading-next.mb-st{margin-bottom:70px!important}
      }
      @media (max-width: 991px) {
        .show-arrow-in-mobile{display: inline!important;}
      }
    </style>
  </head>
  <body class="about">