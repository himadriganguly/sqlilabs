<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Himadri Ganguly">

    <title>SQL INJECTION PRACTICE LABS</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo WEBROOT; ?>assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo WEBROOT; ?>assets/css/bootstrap-theme.css" type="text/css" />
    <!--external css-->
    <link href="<?php echo WEBROOT; ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo WEBROOT; ?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo WEBROOT; ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo WEBROOT; ?>assets/css/style-responsive.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a href="index.php" class="logo"><b>SQL INJECTION LABS</b></a>
            <!--logo end-->            
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="http://www.brainchamp.net/"><img src="<?php echo WEBROOT; ?>assets/img/logo.jpg" class="img-circle" width="60"></a></p>
              	  	
                  <li class="mt">
                      <a class="<?php echo ($menu_main == 'welcome')? "active" : ''; ?>" href="<?php echo WEBROOT; ?>index.php">
                          <i class="fa fa-thumbs-o-up"></i>
                          <span>Welcome</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="<?php echo ($menu_main == 'setup')? "active" : ''; ?>" href="javascript:;" >
                          <i class="fa fa-database"></i>
                          <span>Setup</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($menu_main == 'setup' && $menu_sub == 'config')? "active" : ''; ?>"><a  href="<?php echo WEBROOT; ?>config.php">Configuration</a></li>
                          <li class="<?php echo ($menu_main == 'setup' && $menu_sub == 'createdb')? "active" : ''; ?>"><a  href="<?php echo WEBROOT; ?>dbsetup.php">Create/Restore Database</a></li>
                      </ul>
                  </li>
                                    
                  <li class="sub-menu">
                  	  <a class="<?php echo ($menu_main == 'error_based')? "active" : ''; ?>" href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Error Based</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($menu_main == 'error_based' && $menu_sub == 'example1')? "active" : ''; ?>"><a  href="<?php echo WEBROOT; ?>practice/example1.php">Example1</a></li>
                      </ul>
                  </li>
                  
                   <li class="sub-menu">
                      <a class="<?php echo ($menu_main == 'solutions')? "active" : ''; ?>" href="javascript:;" >
                          <i class="fa fa-code"></i>
                          <span>Solutions</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($menu_main == 'solutions' && $menu_sub == 'error_based_solutions')? "active" : ''; ?>"><a  href="<?php echo WEBROOT; ?>solutions/error_based.php">Error Based</a></li>
                      </ul>
                  </li>
                  
                  <li>
                      <a class="<?php echo ($menu_main == 'about')? "active" : ''; ?>" href="<?php echo WEBROOT; ?>about.php">
                          <i class="fa fa-info-circle"></i>
                          <span>About</span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->