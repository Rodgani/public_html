<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MJP6V7V');</script>
    <!-- End Google Tag Manager -->

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/front/css/style.css">

    <?php
    $slug  = $this->uri->segment(1)  ? $this->uri->segment(1)  : 'home'; 
    $this->load->helper('meta_helper');
    $meta_data = meta_data($slug);
     ?>
    <title><?php echo $meta_data['title'] ?></title>

    <meta name="description" content="<?php echo $meta_data['description'] ?>"/>
    <meta name="keywords" content="<?php echo $meta_data['keywords'] ?>"/>
    <meta property="og:site_name" content="<?php echo $meta_data['og_site_name'] ?>"/>
    <meta property="og:title" content="<?php echo $meta_data['og_title'] ? $meta_data['og_title'] : $meta_data['title'] ?>"/>
    <meta property="og:description" content="<?php echo $meta_data['og_description'] ? $meta_data['og_description'] : $meta_data['description'] ?>"/>
    <meta property="og:type" content="website"/>
  	<meta name="twitter:title" content="<?php echo $meta_data['og_title'] ? $meta_data['og_title'] : $meta_data['title'] ?>">
    <meta name="twitter:description" content="<?php echo $meta_data['og_description'] ? $meta_data['og_description'] : $meta_data['description'] ?>"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="/assets/front/images/favicon.ico" sizes="96x96">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="/assets/front/js/jquery-3.4.1.min.js"></script>

    <script src="/assets/front/js/jquery-ui.js"></script>
    <script src="/assets/front/js/jquery.unveil.js"></script>
    <script>var base_url = '<?php echo base_url(); ?>';</script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/css-vars-ponyfill/2.4.5/css-vars-ponyfill.min.js"></script>
    <script>
      cssVars({
        rootElement: document, // default
      });

      if (!Number.isNaN) {
        Object.defineProperty(Number, 'isNaN', {
          value: function(value) {
            return value !== value;
          }
        });
      }
    </script>
  </head>
  <body class="about">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJP6V7V"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


