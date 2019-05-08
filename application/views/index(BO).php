<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  
  <title>Book Store <?php if(isset ($page)) echo $page ;?> </title>

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>/assets/images/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>/assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url(); ?>/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>/assets/css/style.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/style-responsive.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/bootstrap-fileupload/bootstrap-fileupload.css" />

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>BOOK<span>-STORE</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
          <!-- settings end -->
          <!-- inbox dropdown start-->
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
                           
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Menu</span>
              </a>
            <ul class="sub">
              <li><a href="savebook-SaveBook.html">Save Book</a></li>
              <li><a href="savecategorie-SaveCategorie.html">Save Categorie</a></li>
              <li><a href="list_produit-List.html">List Book</a></li>          
            </ul>
          </li>         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      
          <?php 
          if(isset ($page)) include   $page.".php";
          ?>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url(); ?>/assets/lib/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url(); ?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  
  <script class="include" type="text/javascript" src="<?php echo base_url(); ?>/assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url(); ?>/assets/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  
  <!--common script for all pages-->
  <script src="<?php echo base_url(); ?>/assets/lib/common-scripts.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  
  <!--script for this page-->

</body>

</html>
