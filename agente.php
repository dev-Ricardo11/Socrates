<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SOCRATES</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    
    <link href="dist/css/socrates.min.css" rel="stylesheet" type="text/css" />
    
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    
    
    
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>SOCRATES</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"></li>
                  <li>
                  <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">cerrar seccion</a>
                    </div>
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/th.JPG" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> </small>
                          </h4>                         
                        </a>
                      </li>
                      >
                      
                      
                    </ul>
                  </li>
                  
                </ul>
              </li>
              
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"></li>
                  
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger"></span>
                </a>
                
              </li>
              
              
              
            </ul>
          </div>
        </nav>
      </header>
      
      <aside class="main-sidebar">
        
        <section class="sidebar">
          
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/th.JPG" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>BIENVENIDOS</p>

              <a href="#"><i class="fa fa-circle text-success"></i> en linea</a>
            </div>
          </div>
          
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          
          <ul class="sidebar-menu">
            <li class="header">menu </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Retencion</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                <li><a href="index_agen.php"><i class="fa fa-circle-o"></i> Agente </a></li>
                
                
              </ul>
            </li>
            
            <li>
              <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red"></small>
              </a>
            </li>
            <li class="active"><a href="./busqueda.php"><i class="button"></i> Busqueda </a></li>
            <li class="active"><a href="./index_ingreso.php"><i class="button"></i> Cerrar Sesion </a></li>
            
            
            
          </ul>
        </section>
        
      </aside>

      <
                
              
              
                
                
                
              
              
                    
                  
                
    </div>

    
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
   
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    
    <script src='plugins/fastclick/fastclick.min.js'></script>
    
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <iframe src="./index_agen.php" width = "1500" height="800" frameborder="0"></iframe>
  </body>
</html>