<?php defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
	<link rel="manifest" href="/assets/icons/manifest.json">
	<link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg" color="#5600bb">
	<link rel="shortcut icon" href="/assets/icons/favicon.ico"> -->
	<!-- <meta name="apple-mobile-web-app-title" content="Weber Shandwick">
	<meta name="application-name" content="Weber Shandwick">
	<meta name="msapplication-config" content="/assets/icons/browserconfig.xml">
	<meta name="theme-color" content="#000"> -->

	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
<?php /* if (ENVIRONMENT == 'production') { */?>
	<!-- <link rel="stylesheet" type="text/css" href="/assets/css/main.min.css"> -->
<?php /* } else { */ ?>
	<link rel="stylesheet/less" type="text/css" href="./assets/less/main.less">
	<script tyle="text/javascript" src="./assets/js/less.min.js" async></script>
<?php /*}*/ ?>
	<script type="text/javascript" src="./assets/js/jquery-3.6.2.min.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.min.js" async></script>


  <!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	<title>Weber Shandwick</title>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="">
      <ul class="nav navbar-nav navbar-left">
           <li>
             <a href="<?php echo site_url();?>"  class="logo navbar-brand " title="Weber Shandwick">
              <?php echo file_get_contents("./assets/images/weber_w_logotype_rgb_black.svg"); ?>
            </a>
           </li>
       </ul>

      <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
		</div>
		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
          <!-- <li><?php echo anchor('?hl=en', 'En'); ?></li>
          <li><?php echo anchor('?hl=zh', 'Zh'); ?></li> -->
          <!-- <a href="<?php $this->session->set_userdata("language","zh"); ?>">Zh</a> -->
          <a href="<?php echo site_url().'#join'; ?>" class="button transparent">Join Now</a>
				</ul>
			</div>
  </div>
</nav>
