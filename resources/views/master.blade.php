<!DOCTYPE html>
<!-- saved from url=(0042)http://thevectorlab.net/flatlab/index.html -->
<html lang="en" class="sb-init" style="overflow: hidden;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="http://thevectorlab.net/flatlab/img/favicon.png">


    <title>General Invasion...An Invasion of Service</title>

    <!-- Bootstrap core CSS -->
    {!! HTML::style('assets/css/bootstrap.min.css') !!}
    {!! HTML::style('assets/css/bootstrap-reset.css') !!}

    <!--external css-->
    <link href="http://thevectorlab.net/flatlab/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    {!! HTML::style('assets/css/jquery.easy-pie-chart.css') !!}
    {!! HTML::style('assets/css/owl.carousel.css') !!}
    {!! HTML::style('assets/css/mystyle.css') !!}

      <!--right slidebar-->
      <link href="http://thevectorlab.net/flatlab/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="http://thevectorlab.net/flatlab/css/style.css" rel="stylesheet">
    <link href="http://thevectorlab.net/flatlab/css/style-responsive.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}</style></head>

  <body style="">

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->

            <a href="./FlatLab - Flat & Responsive Bootstrap Admin Template_files/FlatLab - Flat & Responsive Bootstrap Admin Template.html" class="logo">G-<span>Invasion</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                   
                     
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server #3 overloaded.
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>                           
                             
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="http://thevectorlab.net/flatlab/index.html#">
                            <img alt="" src="./FlatLab - Flat & Responsive Bootstrap Admin Template_files/avatar1_small.jpg">
                            <span class="username">Jhon Doue</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="#"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                   
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar" class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none; margin-left: 0px;">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion" style="display: block;">
                  <li>
                      <a class="active" href="./FlatLab - Flat & Responsive Bootstrap Admin Template_files/FlatLab - Flat & Responsive Bootstrap Admin Template.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                   <li class="sub-menu dcjq-parent-li">
                      <a href="javascript:;" class="dcjq-parent">
                          <i class="fa fa-laptop"></i>
                          <span>Orders & Partners</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: none;">
                          <li>{!! HTML::link('/suppliers','Suppliers') !!}

                            <!--<a href="suppliers.html">Suppliers</a></li> -->
                          <li><a href="forwarders.html">Forwarders</a></li>
                          <li><a href="#">Orders</a></li>
                          
                      </ul>
                  </li>                
       
                  
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content" style="margin-left: 210px;">
          <section class="wrapper">
              <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">3</h1>
                              <p>New Users</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">947</h1>
                              <p>Sales</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">328</h1>
                              <p>New Order</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">10328</h1>
                              <p>Total Profit</p>
                          </div>
                      </section>
                  </div>
              </div>
              <!--state overview end-->


              <section class="panel">
                          <header class="panel-heading">
                             <strong>@yield('page_title')</strong>
                          </header>
                          <div class="panel-body">
                            @yield('main')
                          </div>
                </section>      
                  
                
               
              </div>
              
              </div>

          </section>
      </section>
      <!--main content end-->

    

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 © General Invasion LLC
              <a href="http://thevectorlab.net/flatlab/index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    {!! HTML::script('assets/js/jquery.js') !!}
    {!! HTML::script('assets/js/bootstrap.min.js') !!}
      {!! HTML::script('assets/js/bootstrap.min.js') !!}
      {!! HTML::script('assets/js/jquery.dcjqaccordion.2.7.js') !!}
       {!! HTML::script('assets/js/jquery.scrollTo.min.js') !!}
        {!! HTML::script('assets/js/jquery.nicescroll.js') !!}
         {!! HTML::script('assets/js/jquery.sparkline.js') !!}
          {!! HTML::script('assets/js/jquery.easy-pie-chart.js') !!}
           {!! HTML::script('assets/js/owl.carousel.js') !!}
            {!! HTML::script('assets/js/jquery.customSelect.min.js') !!}
               {!! HTML::script('assets/js/respond.min.js') !!}
                  {!! HTML::script('assets/js/slidebars.min.js') !!}
                     {!! HTML::script('assets/js/common-scripts.js') !!}
                        {!! HTML::script('assets/js/myscript.js') !!}



    <!--common script for all pages-->
<div id="ascrail2000" class="nicescroll-rails" style="width: 3px; z-index: auto; cursor: default; position: fixed; height: 635px; opacity: 0; display: block; background: rgb(64, 64, 64);"><div style="position: relative; top: 0px; float: right; width: 3px; height: 509px; border-radius: 10px; background-color: rgb(232, 64, 63); background-clip: padding-box;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 3px; z-index: auto; position: fixed; cursor: default; display: none; width: 207px; opacity: 0; background: rgb(64, 64, 64);"><div style="position: relative; top: 0px; height: 3px; width: 210px; border-radius: 10px; background-color: rgb(232, 64, 63); background-clip: padding-box;"></div></div><div id="ascrail2001" class="nicescroll-rails" style="width: 6px; z-index: 1000; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0; background: rgb(64, 64, 64);"><div style="position: relative; top: 0px; float: right; width: 6px; height: 200px; border-radius: 10px; background-color: rgb(232, 64, 63); background-clip: padding-box;"></div></div><div id="ascrail2001-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0; background: rgb(64, 64, 64);"><div style="position: relative; top: 0px; height: 6px; width: 1301px; border-radius: 10px; background-color: rgb(232, 64, 63); background-clip: padding-box;"></div></div>

    <!--script for this page-->

    {!! HTML::script('assets/js/sparkline-chart.js') !!}
    {!! HTML::script('assets/js/easy-pie-chart.js') !!}
    {!! HTML::script('assets/js/count.js') !!}

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
        autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  

</body></html>
