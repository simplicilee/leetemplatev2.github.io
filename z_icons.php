<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    
    <title>Supr admin</title>
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Supr admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, masonry, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Supr admin template" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Le styles -->

    <!-- Use new way for google web fonts 
    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' /> <!-- Headings -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> <!-- Text -->
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/supr-theme/jquery.ui.supr.css" rel="stylesheet" type="text/css" />
    <link href="css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Plugin stylesheets -->
    <link href="plugins/qtip/jquery.qtip.css" rel="stylesheet" type="text/css" />
    <link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="plugins/jpages/jPages.css" rel="stylesheet" type="text/css" />
    <link href="plugins/prettify/prettify.css" type="text/css" rel="stylesheet" />
    <link href="plugins/inputlimiter/jquery.inputlimiter.css" type="text/css" rel="stylesheet" />
    <link href="plugins/ibutton/jquery.ibutton.css" type="text/css" rel="stylesheet" />
    <link href="plugins/uniform/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="plugins/color-picker/color-picker.css" type="text/css" rel="stylesheet" />
    <link href="plugins/select/select2.css" type="text/css" rel="stylesheet" />
    <link href="plugins/validate/validate.css" type="text/css" rel="stylesheet" />
    <link href="plugins/pnotify/jquery.pnotify.default.css" type="text/css" rel="stylesheet" />
    <link href="plugins/pretty-photo/prettyPhoto.css" type="text/css" rel="stylesheet" />
    <link href="plugins/smartWizzard/smart_wizard.css" type="text/css" rel="stylesheet" />
    <link href="plugins/dataTables/jquery.dataTables.css" type="text/css" rel="stylesheet" />
    <link href="plugins/elfinder/elfinder.css" type="text/css" rel="stylesheet" />
    <link href="plugins/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" rel="stylesheet" />

    <!-- Main stylesheets -->
    <link href="css/main.css" rel="stylesheet" type="text/css" /> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <link type="text/css" href="css/ie.css" rel="stylesheet" />
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />

    <script type="text/javascript">
        //adding load class to body and hide page
        document.documentElement.className += 'loadstate';
    </script>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
      
    <body>

    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>

    <div id="header">

        <div class="navbar">
            <div class="navbar-inner">
              <div class="container-fluid">
                <a class="brand" href="dashboard.html">Supr.<span class="slogan">admin</span></a>
                <div class="nav-no-collapse">
                    <ul class="nav">
                        <li><a href="dashboard.html"><span class="icon16 icomoon-icon-screen"></span> Dashboard</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-cog"></span> Settings
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul>
                                        <li>                                                    
                                            <a href="#"><span class="icon16 iconic-icon-new-window"></span>Site config</a>
                                        </li>
                                        <li>                                                    
                                            <a href="#"><span class="icon16 icomoon-icon-wrench"></span>Plugins</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon16 icomoon-icon-picture-2"></span>Themes</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-mail"></span>Messages <span class="notification">8</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul class="messages">    
                                        <li class="header"><strong>Messages</strong> (10) emails and (2) PM</li>
                                        <li>
                                           <span class="icon"><span class="icon16 icomoon-icon-user-2"></span></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Sammy Morerira</strong></a><span class="time">35 min ago</span></span>
                                            <span class="msg">I have question about new function ...</span>
                                        </li>
                                        <li>
                                           <span class="icon avatar"><img src="images/avatar.jpg" alt="" /></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>George Michael</strong></a><span class="time">1 hour ago</span></span>
                                            <span class="msg">I need to meet you urgent please call me ...</span>
                                        </li>
                                        <li>
                                            <span class="icon"><span class="icon16 icomoon-icon-mail"></span></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Ivanovich</strong></a><span class="time">1 day ago</span></span>
                                            <span class="msg">I send you my suggestion, please look and ...</span>
                                        </li>
                                        <li class="view-all"><a href="#">View all messages <span class="icon16  icomoon-icon-arrow-right-7"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                  
                    <ul class="nav pull-right usernav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-bell"></span><span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul class="notif">
                                        <li class="header"><strong>Notifications</strong> (3) items</li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-user-2"></span></span>
                                                <span class="event">1 User is registred</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-comments-4"></span></span>
                                                <span class="event">Jony add 1 comment</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-new"></span></span>
                                                <span class="event">admin Julia added post</span>
                                            </a>
                                        </li>
                                        <li class="view-all"><a href="#">View all notifications <span class="icon16  icomoon-icon-arrow-right-7"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="images/avatar.jpg" alt="" class="image" /> 
                                <span class="txt">admin@supr.com</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul>
                                        <li>
                                            <a href="#"><span class="icon16 icomoon-icon-user-3"></span>Edit profile</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon16 icomoon-icon-comments-2"></span>Approve comments</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon16 entypo-icon-contact"></span>Add user</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="index.html"><span class="icon16 icomoon-icon-exit"></span> Logout</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
              </div>
            </div><!-- /navbar-inner -->
          </div><!-- /navbar --> 

    </div><!-- End #header -->

    <div id="wrapper">

        <!--Responsive navigation button-->  
        <div class="resBtn">
            <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
        </div>

        <!--Sidebar collapse button-->  
        <div class="collapseBtn">
             <a href="#" class="tipR" title="Hide sidebar"><span class="icon12 minia-icon-layout"></span></a>
        </div>

        <!--Sidebar background-->
        <div id="sidebarbg"></div>
        <!--Sidebar content-->
        <div id="sidebar">

            <div class="shortcuts">
                <ul>
                    <li><a href="#" title="Support section" class="tip"><span class="icon24 icomoon-icon-support"></span></a></li>
                    <li><a href="#" title="Database backup" class="tip"><span class="icon24 icomoon-icon-database"></span></a></li>
                    <li><a href="#" title="Sales statistics" class="tip"><span class="icon24 iconic-icon-chart"></span></a></li>
                    <li><a href="#" title="Write post" class="tip"><span class="icon24 icomoon-icon-pencil"></span></a></li>
                </ul>
            </div><!-- End search -->            

            <div class="sidenav">

                <div class="sidebar-widget" style="margin: -1px 0 0 0;">
                    <h5 class="title" style="margin-bottom:0">Navigation</h5>
                </div><!-- End .sidenav-widget -->

                <div class="mainnav">
                    <ul>
                        <li><a href="charts.html"><span class="icon16 icomoon-icon-stats-up"></span>Charts</a></li>
                        <li>
                            <a href="#"><span class="icon16 minia-icon-list-4"></span>Forms</a>
                            <ul class="sub">
                                <li><a href="forms.html"><span class="icon16 icomoon-icon-paper"></span>Forms Stuff</a></li>
                                <li><a href="forms-validation.html"><span class="icon16 icomoon-icon-paper"></span>Validation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="icon16 silk-icon-columns"></span>Tables</a>
                            <ul class="sub">
                                <li><a href="tables.html"><span class="icon16 icomoon-icon-arrow-right"></span>Static</a></li>
                                <li><a href="data-table.html"><span class="icon16 icomoon-icon-arrow-right"></span>Data table</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="icon16 brocco-icon-grid"></span>UI Elements</a>
                            <ul class="sub">
                                <li><a href="icons.html"><span class="icon16 icomoon-icon-rocket"></span>Icons</a></li>
                                <li><a href="buttons.html"><span class="icon16 icomoon-icon-paper"></span>Buttons</a></li>
                                <li><a href="elements.html"><span class="icon16 minia-icon-cog"></span>Elements</a></li>
                            </ul>
                        </li>
                        <li><a href="typo.html"><span class="icon16 icomoon-icon-font"></span>Typography</a></li>
                        <li><a href="grid.html"><span class="icon16 icomoon-icon-grid-view"></span>Grid</a></li>
                        <li><a href="calendar.html"><span class="icon16 brocco-icon-calendar"></span>Calendar</a></li>
                        <li>
                            <a href="widgets.html"><span class="icon16 icomoon-icon-cube"></span>Widgets<span class="notification green">28</span></a>
                        </li>
                        <li><a href="file.html"><span class="icon16 icomoon-icon-upload-2"></span>File Manager</a></li>
                        <li>
                            <a href="#"><span class="icon16 icomoon-icon-paper"></span>Error pages<span class="notification">6</span></a>
                            <ul class="sub">
                                <li><a href="403.html"><span class="icon16 icomoon-icon-paper"></span>Error 403</a></li>
                                <li><a href="404.html"><span class="icon16 icomoon-icon-paper"></span>Error 404</a></li>
                                <li><a href="405.html"><span class="icon16 icomoon-icon-paper"></span>Error 405</a></li>
                                <li><a href="500.html"><span class="icon16 icomoon-icon-paper"></span>Error 500</a></li>
                                <li><a href="503.html"><span class="icon16 icomoon-icon-paper"></span>Error 503</a></li>
                                <li><a href="offline.html"><span class="icon16 icomoon-icon-paper"></span>Offline page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="icon16 iconic-icon-box"></span>Other pages<span class="notification blue">2</span></a>
                            <ul class="sub">
                                <li><a href="invoice.html"><span class="icon16 icomoon-icon-paper"></span>Invoice page</a></li>
                                <li><a href="profile.html"><span class="icon16 icomoon-icon-paper"></span>User profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- End sidenav -->

            <div class="sidebar-widget">
                <h5 class="title">Monthly Bandwidth Transfer</h5>
                <div class="content">
                    <span class="icon16 iconic-icon-transfer left"></span>
                    <div class="progress progress-mini progress-danger left tip" title="87%">
                      <div class="bar" style="width: 87%;"></div>
                    </div>
                    <span class="percent">87%</span>
                    <div class="stat">19419.94 / 12000 MB</div>
                </div>

            </div><!-- End .sidenav-widget -->

            <div class="sidebar-widget">
                <h5 class="title">Disk Space Usage</h5>
                <div class="content">
                    <span class="icon16 icomoon-icon-cloud left"></span>
                    <div class="progress progress-mini progress-success left tip" title="16%">
                      <div class="bar" style="width: 16%;"></div>
                    </div>
                    <span class="percent">16%</span>
                    <div class="stat">304.44 / 8000 MB</div>
                </div>

            </div><!-- End .sidenav-widget -->

            <div class="sidebar-widget">
                <h5 class="title">Ad sense stats</h5>
                <div class="content">
                    
                    <div class="stats">
                        <div class="item">
                            <div class="head clearfix">
                                <div class="txt">Advert View</div>
                            </div>
                            <span class="icon16 icomoon-icon-eye left"></span>
                            <div class="number">21,501</div>
                            <div class="change">
                                <span class="icon24 icomoon-icon-arrow-up green"></span>
                                5%
                            </div>
                            <span id="stat1" class="spark"></span>
                        </div>
                        <div class="item">
                            <div class="head clearfix">
                                <div class="txt">Clicks</div>
                            </div>
                            <span class="icon16 entypo-icon-thumbs-up left"></span>
                            <div class="number">308</div>
                            <div class="change">
                                <span class="icon24 icomoon-icon-arrow-down red"></span>
                                8%
                            </div>
                            <span id="stat2" class="spark"></span>
                        </div>
                        <div class="item">
                            <div class="head clearfix">
                                <div class="txt">Page CTR</div>
                            </div>
                            <span class="icon16 icomoon-icon-heart left"></span>
                            <div class="number">4%</div>
                            <div class="change">
                                <span class="icon24 icomoon-icon-arrow-down red"></span>
                                1%
                            </div>
                            <span id="stat3" class="spark"></span>
                        </div>
                        <div class="item">
                            <div class="head clearfix">
                                <div class="txt">Earn money</div>
                            </div>
                            <span class="icon16 icomoon-icon-calculate left"></span>
                            <div class="number">$376</div>
                            <div class="change">
                                <span class="icon24 icomoon-icon-arrow-up green"></span>
                                26%
                            </div>
                            <span id="stat4" class="spark"></span>
                        </div>
                    </div>

                </div>

            </div><!-- End .sidenav-widget -->

            <div class="sidebar-widget">
                <h5 class="title">Right now</h5>
                <div class="content">
                    <div class="rightnow">
                        <ul class="unstyled">
                            <li><span class="number">34</span><span class="icon16 icomoon-icon-new"></span>Posts</li>
                            <li><span class="number">7</span><span class="icon16 icomoon-icon-paper"></span>Pages</li>
                            <li><span class="number">14</span><span class="icon16 brocco-icon-list"></span>Categories</li>
                            <li><span class="number">201</span><span class="icon16 icomoon-icon-tag"></span>Tags</li>
                        </ul>
                    </div>
                </div>

            </div><!-- End .sidenav-widget -->

        </div><!-- End #sidebar -->

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>@font-face Icons</h3>                    

                    <div class="resBtnSearch">
                        <a href="#"><span class="icon16 brocco-icon-search"></span></a>
                    </div>

                    <div class="search">

                        <form id="searchform" action="#" />
                            <input type="text" class="top-search" placeholder="Search here ..." />
                            <input type="submit" class="search-btn" value="" />
                        </form>
                
                    </div><!-- End search -->
                    
                    <ul class="breadcrumb">
                        <li>You are here:</li>
                        <li>
                            <a href="#" class="tip" title="back to dashboard">
                                <span class="icon16 icomoon-icon-screen"></span>
                            </a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right"></span>
                            </span>
                        </li>
                        <li class="active">Icons</li>
                    </ul>

                </div><!-- End .heading-->
    				
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row-fluid">

                        <div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 brocco-icon-flag"></span>
                                        <span>Broccolidry icons by Visual Idiot</span>
                                    </h4>

                                </div>
                                <div class="content">

                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-warning"></span>
                                        &nbsp;brocco-icon-warning
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-cloud"></span>
                                        &nbsp;brocco-icon-cloud
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-locked"></span>
                                        &nbsp;brocco-icon-locked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-inbox"></span>
                                        &nbsp;brocco-icon-inbox
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-comment"></span>
                                        &nbsp;brocco-icon-comment
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-mic"></span>
                                        &nbsp;brocco-icon-mic
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-envelope"></span>
                                        &nbsp;brocco-icon-envelope
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-briefcase"></span>
                                        &nbsp;brocco-icon-briefcase
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-cart"></span>
                                        &nbsp;brocco-icon-cart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-contrast"></span>
                                        &nbsp;brocco-icon-contrast
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-clock"></span>
                                        &nbsp;brocco-icon-clock
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-user"></span>
                                        &nbsp;brocco-icon-user
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-cog"></span>
                                        &nbsp;brocco-icon-cog
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-music"></span>
                                        &nbsp;brocco-icon-music
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-twitter"></span>
                                        &nbsp;brocco-icon-twitter
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-pencil"></span>
                                        &nbsp;brocco-icon-pencil
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-frame"></span>
                                        &nbsp;brocco-icon-frame
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-switch"></span>
                                        &nbsp;brocco-icon-switch
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-star"></span>
                                        &nbsp;brocco-icon-star
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-key"></span>
                                        &nbsp;brocco-icon-key
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-chart"></span>
                                        &nbsp;brocco-icon-chart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-apple"></span>
                                        &nbsp;brocco-icon-apple
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-file"></span>
                                        &nbsp;brocco-icon-file
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-plus"></span>
                                        &nbsp;brocco-icon-plus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-minus"></span>
                                        &nbsp;brocco-icon-minus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-picture"></span>
                                        &nbsp;brocco-icon-picture
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-folder"></span>
                                        &nbsp;brocco-icon-folder
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-camera"></span>
                                        &nbsp;brocco-icon-camera
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-search"></span>
                                        &nbsp;brocco-icon-search
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-dribbble"></span>
                                        &nbsp;brocco-icon-dribbble
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-forrst"></span>
                                        &nbsp;brocco-icon-forrst
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-feed"></span>
                                        &nbsp;brocco-icon-feed
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-blocked"></span>
                                        &nbsp;brocco-icon-blocked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-target"></span>
                                        &nbsp;brocco-icon-target
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-play"></span>
                                        &nbsp;brocco-icon-play
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-pause"></span>
                                        &nbsp;brocco-icon-pause
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-bug"></span>
                                        &nbsp;brocco-icon-bug
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-console"></span>
                                        &nbsp;brocco-icon-console
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-film"></span>
                                        &nbsp;brocco-icon-film
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-type"></span>
                                        &nbsp;brocco-icon-type
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-home"></span>
                                        &nbsp;brocco-icon-home
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-earth"></span>
                                        &nbsp;brocco-icon-earth
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-location"></span>
                                        &nbsp;brocco-icon-location
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-info"></span>
                                        &nbsp;brocco-icon-info
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-eye"></span>
                                        &nbsp;brocco-icon-eye
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-heart"></span>
                                        &nbsp;brocco-icon-heart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-bookmark"></span>
                                        &nbsp;brocco-icon-bookmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-wrench"></span>
                                        &nbsp;brocco-icon-wrench
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-calendar"></span>
                                        &nbsp;brocco-icon-calendar
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-window"></span>
                                        &nbsp;brocco-icon-window
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-monitor"></span>
                                        &nbsp;brocco-icon-monitor
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-mobile"></span>
                                        &nbsp;brocco-icon-mobile
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-droplet"></span>
                                        &nbsp;brocco-icon-droplet
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-mouse"></span>
                                        &nbsp;brocco-icon-mouse
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-refresh"></span>
                                        &nbsp;brocco-icon-refresh
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-location-2"></span>
                                        &nbsp;brocco-icon-location-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-tag"></span>
                                        &nbsp;brocco-icon-tag
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-phone"></span>
                                        &nbsp;brocco-icon-phone
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-star-2"></span>
                                        &nbsp;brocco-icon-star-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-pointer"></span>
                                        &nbsp;brocco-icon-pointer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-thumbs-up"></span>
                                        &nbsp;brocco-icon-thumbs-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-thumbs-down"></span>
                                        &nbsp;brocco-icon-thumbs-down
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-headphones"></span>
                                        &nbsp;brocco-icon-headphones
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-move"></span>
                                        &nbsp;brocco-icon-move
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-checkmark"></span>
                                        &nbsp;brocco-icon-checkmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-cancel"></span>
                                        &nbsp;brocco-icon-cancel
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-skype"></span>
                                        &nbsp;brocco-icon-skype
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-gift"></span>
                                        &nbsp;brocco-icon-gift
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-cone"></span>
                                        &nbsp;brocco-icon-cone
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-alarm"></span>
                                        &nbsp;brocco-icon-alarm
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-coffee"></span>
                                        &nbsp;brocco-icon-coffee
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-basket"></span>
                                        &nbsp;brocco-icon-basket
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-flag"></span>
                                        &nbsp;brocco-icon-flag
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-ipod"></span>
                                        &nbsp;brocco-icon-ipod
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-trashcan"></span>
                                        &nbsp;brocco-icon-trashcan
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-bolt"></span>
                                        &nbsp;brocco-icon-bolt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-ampersand"></span>
                                        &nbsp;brocco-icon-ampersand
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-compass"></span>
                                        &nbsp;brocco-icon-compass
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-list"></span>
                                        &nbsp;brocco-icon-list
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-grid"></span>
                                        &nbsp;brocco-icon-grid
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-volume"></span>
                                        &nbsp;brocco-icon-volume
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-volume-2"></span>
                                        &nbsp;brocco-icon-volume-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-stats"></span>
                                        &nbsp;brocco-icon-stats
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-target-2"></span>
                                        &nbsp;brocco-icon-target-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-forward"></span>
                                        &nbsp;brocco-icon-forward
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-paperclip"></span>
                                        &nbsp;brocco-icon-paperclip
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-keyboard"></span>
                                        &nbsp;brocco-icon-keyboard
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-crop"></span>
                                        &nbsp;brocco-icon-crop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-floppy"></span>
                                        &nbsp;brocco-icon-floppy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-filter"></span>
                                        &nbsp;brocco-icon-filter
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-trophy"></span>
                                        &nbsp;brocco-icon-trophy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-diary"></span>
                                        &nbsp;brocco-icon-diary
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-address-book"></span>
                                        &nbsp;brocco-icon-address-book
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-stop"></span>
                                        &nbsp;brocco-icon-stop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-circle"></span>
                                        &nbsp;brocco-icon-circle
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-shit"></span>
                                        &nbsp;brocco-icon-shit
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-bookmark-2"></span>
                                        &nbsp;brocco-icon-bookmark-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-camera-2"></span>
                                        &nbsp;brocco-icon-camera-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-lamp"></span>
                                        &nbsp;brocco-icon-lamp
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-disk"></span>
                                        &nbsp;brocco-icon-disk
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-button"></span>
                                        &nbsp;brocco-icon-button
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-database"></span>
                                        &nbsp;brocco-icon-database
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-credit-card"></span>
                                        &nbsp;brocco-icon-credit-card
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-atom"></span>
                                        &nbsp;brocco-icon-atom
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-winsows"></span>
                                        &nbsp;brocco-icon-winsows
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-target-3"></span>
                                        &nbsp;brocco-icon-target-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="brocco-icon-battery"></span>
                                        &nbsp;brocco-icon-battery
                                    </span>
                                    <span class="box1">
                                    <span aria-hidden="true" class="brocco-icon-code"></span>
                                        &nbsp;brocco-icon-code
                                    </span>
                                
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->                       

                    </div><!-- End .row-fluid -->

                    <div class="row-fluid">
                        
                        <div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 cut-icon-painting-2"></span>
                                        <span>Cuticons by Vaibhav Bhat</span>
                                    </h4>

                                </div>
                                <div class="content">

                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-arrow-right"></span>
                                        &nbsp;cut-icon-arrow-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-arrow-left"></span>
                                        &nbsp;cut-icon-arrow-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-arrow-up"></span>
                                        &nbsp;cut-icon-arrow-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-arrow-down"></span>
                                        &nbsp;cut-icon-arrow-down
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-plus"></span>
                                        &nbsp;cut-icon-plus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-minus"></span>
                                        &nbsp;cut-icon-minus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-stats"></span>
                                        &nbsp;cut-icon-stats
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-broadcast"></span>
                                        &nbsp;cut-icon-broadcast
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-enter"></span>
                                        &nbsp;cut-icon-enter
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-download"></span>
                                        &nbsp;cut-icon-download
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-mobile"></span>
                                        &nbsp;cut-icon-mobile
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-mobile-2"></span>
                                        &nbsp;cut-icon-mobile-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-screen"></span>
                                        &nbsp;cut-icon-screen
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-stats-2"></span>
                                        &nbsp;cut-icon-stats-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-user"></span>
                                        &nbsp;cut-icon-user
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-heart"></span>
                                        &nbsp;cut-icon-heart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-heart-2"></span>
                                        &nbsp;cut-icon-heart-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-frame"></span>
                                        &nbsp;cut-icon-frame
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-plus-2"></span>
                                        &nbsp;cut-icon-plus-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-minus-2"></span>
                                        &nbsp;cut-icon-minus-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-checkbox-checked"></span>
                                        &nbsp;cut-icon-checkbox-checked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-alert"></span>
                                        &nbsp;cut-icon-alert
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-comment"></span>
                                        &nbsp;cut-icon-comment
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-chat"></span>
                                        &nbsp;cut-icon-chat
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-bookmark"></span>
                                        &nbsp;cut-icon-bookmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-locked"></span>
                                        &nbsp;cut-icon-locked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-unlock"></span>
                                        &nbsp;cut-icon-unlock
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-film"></span>
                                        &nbsp;cut-icon-film
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-camera"></span>
                                        &nbsp;cut-icon-camera
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-camera-2"></span>
                                        &nbsp;cut-icon-camera-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-painting"></span>
                                        &nbsp;cut-icon-painting
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-painting-2"></span>
                                        &nbsp;cut-icon-painting-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-reload"></span>
                                        &nbsp;cut-icon-reload
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-credit-card"></span>
                                        &nbsp;cut-icon-credit-card
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-vcard"></span>
                                        &nbsp;cut-icon-vcard
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-marker"></span>
                                        &nbsp;cut-icon-marker
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-list"></span>
                                        &nbsp;cut-icon-list
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-file"></span>
                                        &nbsp;cut-icon-file
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-thumbs-up"></span>
                                        &nbsp;cut-icon-thumbs-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-printer"></span>
                                        &nbsp;cut-icon-printer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-untitled"></span>
                                        &nbsp;cut-icon-untitled
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-popout"></span>
                                        &nbsp;cut-icon-popout
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-popout-2"></span>
                                        &nbsp;cut-icon-popout-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-printer-2"></span>
                                        &nbsp;cut-icon-printer-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-battery-full"></span>
                                        &nbsp;cut-icon-battery-full
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-battery-low"></span>
                                        &nbsp;cut-icon-battery-low
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-battery"></span>
                                        &nbsp;cut-icon-battery
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-hash"></span>
                                        &nbsp;cut-icon-hash
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-trashcan"></span>
                                        &nbsp;cut-icon-trashcan
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-crop"></span>
                                        &nbsp;cut-icon-crop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-apple"></span>
                                        &nbsp;cut-icon-apple
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-cart"></span>
                                        &nbsp;cut-icon-cart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-pause"></span>
                                        &nbsp;cut-icon-pause
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-play"></span>
                                        &nbsp;cut-icon-play
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-next"></span>
                                        &nbsp;cut-icon-next
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-previous"></span>
                                        &nbsp;cut-icon-previous
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-next-2"></span>
                                        &nbsp;cut-icon-next-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-previous-2"></span>
                                        &nbsp;cut-icon-previous-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-record"></span>
                                        &nbsp;cut-icon-record
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-eject"></span>
                                        &nbsp;cut-icon-eject
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-disk"></span>
                                        &nbsp;cut-icon-disk
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-equalizer"></span>
                                        &nbsp;cut-icon-equalizer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-desktop"></span>
                                        &nbsp;cut-icon-desktop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-grid"></span>
                                        &nbsp;cut-icon-grid
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-frame-2"></span>
                                        &nbsp;cut-icon-frame-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-board"></span>
                                        &nbsp;cut-icon-board
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-shrink"></span>
                                        &nbsp;cut-icon-shrink
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-expand"></span>
                                        &nbsp;cut-icon-expand
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-tree"></span>
                                        &nbsp;cut-icon-tree
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="cut-icon-paper-plane"></span>
                                        &nbsp;cut-icon-paper-plane
                                    </span>
                                
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->                  

                    </div><!-- End .row-fluid -->

                    <div class="row-fluid">

                        <div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 entypo-icon-globe"></span>
                                        <span>Entypo by Daniel Bruce</span>
                                    </h4>

                                </div>
                                <div class="content">

                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-phone"></span>
                                        &nbsp;entypo-icon-phone
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-mobile"></span>
                                        &nbsp;entypo-icon-mobile
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-mouse"></span>
                                        &nbsp;entypo-icon-mouse
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-address"></span>
                                        &nbsp;entypo-icon-address
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-email"></span>
                                        &nbsp;entypo-icon-email
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-write"></span>
                                        &nbsp;entypo-icon-write
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-attachment"></span>
                                        &nbsp;entypo-icon-attachment
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-reply"></span>
                                        &nbsp;entypo-icon-reply
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-reply-to-all"></span>
                                        &nbsp;entypo-icon-reply-to-all
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-forward"></span>
                                        &nbsp;entypo-icon-forward
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-user"></span>
                                        &nbsp;entypo-icon-user
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-users"></span>
                                        &nbsp;entypo-icon-users
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-contact"></span>
                                        &nbsp;entypo-icon-contact
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-card"></span>
                                        &nbsp;entypo-icon-card
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-export"></span>
                                        &nbsp;entypo-icon-export
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-location"></span>
                                        &nbsp;entypo-icon-location
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-map"></span>
                                        &nbsp;entypo-icon-map
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-compass"></span>
                                        &nbsp;entypo-icon-compass
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-direction"></span>
                                        &nbsp;entypo-icon-direction
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-center"></span>
                                        &nbsp;entypo-icon-center
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-share"></span>
                                        &nbsp;entypo-icon-share
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-heart"></span>
                                        &nbsp;entypo-icon-heart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-heart-2"></span>
                                        &nbsp;entypo-icon-heart-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-star"></span>
                                        &nbsp;entypo-icon-star
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-star-2"></span>
                                        &nbsp;entypo-icon-star-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-thumbs-up"></span>
                                        &nbsp;entypo-icon-thumbs-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-chat"></span>
                                        &nbsp;entypo-icon-chat
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-comment"></span>
                                        &nbsp;entypo-icon-comment
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-quote"></span>
                                        &nbsp;entypo-icon-quote
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-printer"></span>
                                        &nbsp;entypo-icon-printer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-alert"></span>
                                        &nbsp;entypo-icon-alert
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-link"></span>
                                        &nbsp;entypo-icon-link
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-flag"></span>
                                        &nbsp;entypo-icon-flag
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-settings"></span>
                                        &nbsp;entypo-icon-settings
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-search"></span>
                                        &nbsp;entypo-icon-search
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-trophy"></span>
                                        &nbsp;entypo-icon-trophy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-price"></span>
                                        &nbsp;entypo-icon-price
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-camera"></span>
                                        &nbsp;entypo-icon-camera
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-sleep"></span>
                                        &nbsp;entypo-icon-sleep
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-palette"></span>
                                        &nbsp;entypo-icon-palette
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-leaf"></span>
                                        &nbsp;entypo-icon-leaf
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-music"></span>
                                        &nbsp;entypo-icon-music
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-shopping"></span>
                                        &nbsp;entypo-icon-shopping
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-flight"></span>
                                        &nbsp;entypo-icon-flight
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-support"></span>
                                        &nbsp;entypo-icon-support
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-google-circles"></span>
                                        &nbsp;entypo-icon-google-circles
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-eye"></span>
                                        &nbsp;entypo-icon-eye
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-clock"></span>
                                        &nbsp;entypo-icon-clock
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-microphone"></span>
                                        &nbsp;entypo-icon-microphone
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-calendar"></span>
                                        &nbsp;entypo-icon-calendar
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-flash"></span>
                                        &nbsp;entypo-icon-flash
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-time"></span>
                                        &nbsp;entypo-icon-time
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-rss"></span>
                                        &nbsp;entypo-icon-rss
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-locked"></span>
                                        &nbsp;entypo-icon-locked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-unlocked"></span>
                                        &nbsp;entypo-icon-unlocked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-checkmark"></span>
                                        &nbsp;entypo-icon-checkmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-cancel"></span>
                                        &nbsp;entypo-icon-cancel
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-minus"></span>
                                        &nbsp;entypo-icon-minus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-plus"></span>
                                        &nbsp;entypo-icon-plus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-close"></span>
                                        &nbsp;entypo-icon-close
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-minus-2"></span>
                                        &nbsp;entypo-icon-minus-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-plus-2"></span>
                                        &nbsp;entypo-icon-plus-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-blocked"></span>
                                        &nbsp;entypo-icon-blocked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-info"></span>
                                        &nbsp;entypo-icon-info
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-info-circle"></span>
                                        &nbsp;entypo-icon-info-circle
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-help"></span>
                                        &nbsp;entypo-icon-help
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-help-2"></span>
                                        &nbsp;entypo-icon-help-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-warning"></span>
                                        &nbsp;entypo-icon-warning
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-reload-CW"></span>
                                        &nbsp;entypo-icon-reload-CW
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-reload-CCW"></span>
                                        &nbsp;entypo-icon-reload-CCW
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-shuffle"></span>
                                        &nbsp;entypo-icon-shuffle
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-back"></span>
                                        &nbsp;entypo-icon-back
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow"></span>
                                        &nbsp;entypo-icon-arrow
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-retweet"></span>
                                        &nbsp;entypo-icon-retweet
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-list"></span>
                                        &nbsp;entypo-icon-list
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-add"></span>
                                        &nbsp;entypo-icon-add
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-grid"></span>
                                        &nbsp;entypo-icon-grid
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-document"></span>
                                        &nbsp;entypo-icon-document
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-document-2"></span>
                                        &nbsp;entypo-icon-document-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-documents"></span>
                                        &nbsp;entypo-icon-documents
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-landscape"></span>
                                        &nbsp;entypo-icon-landscape
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-images"></span>
                                        &nbsp;entypo-icon-images
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-movie"></span>
                                        &nbsp;entypo-icon-movie
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-song"></span>
                                        &nbsp;entypo-icon-song
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-folder"></span>
                                        &nbsp;entypo-icon-folder
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-archive"></span>
                                        &nbsp;entypo-icon-archive
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-trashcan"></span>
                                        &nbsp;entypo-icon-trashcan
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-upload"></span>
                                        &nbsp;entypo-icon-upload
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-download"></span>
                                        &nbsp;entypo-icon-download
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-install"></span>
                                        &nbsp;entypo-icon-install
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-cloud"></span>
                                        &nbsp;entypo-icon-cloud
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-upload-2"></span>
                                        &nbsp;entypo-icon-upload-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-play"></span>
                                        &nbsp;entypo-icon-play
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-pause"></span>
                                        &nbsp;entypo-icon-pause
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-record"></span>
                                        &nbsp;entypo-icon-record
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-stop"></span>
                                        &nbsp;entypo-icon-stop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-fast-forward"></span>
                                        &nbsp;entypo-icon-fast-forward
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-fast-backward"></span>
                                        &nbsp;entypo-icon-fast-backward
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-first"></span>
                                        &nbsp;entypo-icon-first
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-last"></span>
                                        &nbsp;entypo-icon-last
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-full-screen"></span>
                                        &nbsp;entypo-icon-full-screen
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-collapse"></span>
                                        &nbsp;entypo-icon-collapse
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-volume"></span>
                                        &nbsp;entypo-icon-volume
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-sound"></span>
                                        &nbsp;entypo-icon-sound
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-mute"></span>
                                        &nbsp;entypo-icon-mute
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-2"></span>
                                        &nbsp;entypo-icon-arrow-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-3"></span>
                                        &nbsp;entypo-icon-arrow-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-4"></span>
                                        &nbsp;entypo-icon-arrow-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-5"></span>
                                        &nbsp;entypo-icon-arrow-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-6"></span>
                                        &nbsp;entypo-icon-arrow-6
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-7"></span>
                                        &nbsp;entypo-icon-arrow-7
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-8"></span>
                                        &nbsp;entypo-icon-arrow-8
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-9"></span>
                                        &nbsp;entypo-icon-arrow-9
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-10"></span>
                                        &nbsp;entypo-icon-arrow-10
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-11"></span>
                                        &nbsp;entypo-icon-arrow-11
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-12"></span>
                                        &nbsp;entypo-icon-arrow-12
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-13"></span>
                                        &nbsp;entypo-icon-arrow-13
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-14"></span>
                                        &nbsp;entypo-icon-arrow-14
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-15"></span>
                                        &nbsp;entypo-icon-arrow-15
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-16"></span>
                                        &nbsp;entypo-icon-arrow-16
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-17"></span>
                                        &nbsp;entypo-icon-arrow-17
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-18"></span>
                                        &nbsp;entypo-icon-arrow-18
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-19"></span>
                                        &nbsp;entypo-icon-arrow-19
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-20"></span>
                                        &nbsp;entypo-icon-arrow-20
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-21"></span>
                                        &nbsp;entypo-icon-arrow-21
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-triangle"></span>
                                        &nbsp;entypo-icon-triangle
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-triangle-2"></span>
                                        &nbsp;entypo-icon-triangle-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-triangle-3"></span>
                                        &nbsp;entypo-icon-triangle-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-triangle-4"></span>
                                        &nbsp;entypo-icon-triangle-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-code"></span>
                                        &nbsp;entypo-icon-code
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-battery"></span>
                                        &nbsp;entypo-icon-battery
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-battery-2"></span>
                                        &nbsp;entypo-icon-battery-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-battery-3"></span>
                                        &nbsp;entypo-icon-battery-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-battery-4"></span>
                                        &nbsp;entypo-icon-battery-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-battery-5"></span>
                                        &nbsp;entypo-icon-battery-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-history"></span>
                                        &nbsp;entypo-icon-history
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-back-2"></span>
                                        &nbsp;entypo-icon-back-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-sun"></span>
                                        &nbsp;entypo-icon-sun
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-sun-2"></span>
                                        &nbsp;entypo-icon-sun-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-light-bulb"></span>
                                        &nbsp;entypo-icon-light-bulb
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-browser"></span>
                                        &nbsp;entypo-icon-browser
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-publish"></span>
                                        &nbsp;entypo-icon-publish
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-screen"></span>
                                        &nbsp;entypo-icon-screen
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-arrow-22"></span>
                                        &nbsp;entypo-icon-arrow-22
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-broadcast"></span>
                                        &nbsp;entypo-icon-broadcast
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-globe"></span>
                                        &nbsp;entypo-icon-globe
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-square"></span>
                                        &nbsp;entypo-icon-square
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-inbox"></span>
                                        &nbsp;entypo-icon-inbox
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-network"></span>
                                        &nbsp;entypo-icon-network
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-feather"></span>
                                        &nbsp;entypo-icon-feather
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-keyboard"></span>
                                        &nbsp;entypo-icon-keyboard
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-home"></span>
                                        &nbsp;entypo-icon-home
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-bookmark"></span>
                                        &nbsp;entypo-icon-bookmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-book"></span>
                                        &nbsp;entypo-icon-book
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-popup"></span>
                                        &nbsp;entypo-icon-popup
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-search-2"></span>
                                        &nbsp;entypo-icon-search-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-dots-three"></span>
                                        &nbsp;entypo-icon-dots-three
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-dots-two"></span>
                                        &nbsp;entypo-icon-dots-two
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-dot"></span>
                                        &nbsp;entypo-icon-dot
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-creative-commons"></span>
                                        &nbsp;entypo-icon-creative-commons
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-cd"></span>
                                        &nbsp;entypo-icon-cd
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-suitcase"></span>
                                        &nbsp;entypo-icon-suitcase
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="entypo-icon-suitcase-2"></span>
                                        &nbsp;entypo-icon-suitcase-2
                                    </span>

                                
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->                  

                    </div><!-- End .row-fluid -->

                    <div class="row-fluid">
                        
                        <div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 icomoon-icon-IcoMoon"></span>
                                        <span>IcoMoon by Keyamoon</span>
                                    </h4>

                                </div>
                                <div class="content">

                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-home"></span>
                                        &nbsp;icomoon-icon-home
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-home-2"></span>
                                        &nbsp;icomoon-icon-home-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-home-3"></span>
                                        &nbsp;icomoon-icon-home-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-newspaper"></span>
                                        &nbsp;icomoon-icon-newspaper
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-pencil"></span>
                                        &nbsp;icomoon-icon-pencil
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-pencil-2"></span>
                                        &nbsp;icomoon-icon-pencil-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-droplet"></span>
                                        &nbsp;icomoon-icon-droplet
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-picture"></span>
                                        &nbsp;icomoon-icon-picture
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-picture-2"></span>
                                        &nbsp;icomoon-icon-picture-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-camera"></span>
                                        &nbsp;icomoon-icon-camera
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-music"></span>
                                        &nbsp;icomoon-icon-music
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-play"></span>
                                        &nbsp;icomoon-icon-play
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-film"></span>
                                        &nbsp;icomoon-icon-film
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-camera-2"></span>
                                        &nbsp;icomoon-icon-camera-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-spades"></span>
                                        &nbsp;icomoon-icon-spades
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-clubs"></span>
                                        &nbsp;icomoon-icon-clubs
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-diamonds"></span>
                                        &nbsp;icomoon-icon-diamonds
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-broadcast"></span>
                                        &nbsp;icomoon-icon-broadcast
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-microphone"></span>
                                        &nbsp;icomoon-icon-microphone
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-book"></span>
                                        &nbsp;icomoon-icon-book
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-paper"></span>
                                        &nbsp;icomoon-icon-paper
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-paper-2"></span>
                                        &nbsp;icomoon-icon-paper-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-new"></span>
                                        &nbsp;icomoon-icon-new
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-copy"></span>
                                        &nbsp;icomoon-icon-copy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-folder"></span>
                                        &nbsp;icomoon-icon-folder
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-folder-2"></span>
                                        &nbsp;icomoon-icon-folder-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-tag"></span>
                                        &nbsp;icomoon-icon-tag
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-cart"></span>
                                        &nbsp;icomoon-icon-cart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-basket"></span>
                                        &nbsp;icomoon-icon-basket
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-calculate"></span>
                                        &nbsp;icomoon-icon-calculate
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-support"></span>
                                        &nbsp;icomoon-icon-support
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-phone"></span>
                                        &nbsp;icomoon-icon-phone
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-mail"></span>
                                        &nbsp;icomoon-icon-mail
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-location"></span>
                                        &nbsp;icomoon-icon-location
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-compass"></span>
                                        &nbsp;icomoon-icon-compass
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-history"></span>
                                        &nbsp;icomoon-icon-history
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-clock"></span>
                                        &nbsp;icomoon-icon-clock
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-bell"></span>
                                        &nbsp;icomoon-icon-bell
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-bell-2"></span>
                                        &nbsp;icomoon-icon-bell-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-bell-3"></span>
                                        &nbsp;icomoon-icon-bell-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-calendar"></span>
                                        &nbsp;icomoon-icon-calendar
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-mouse"></span>
                                        &nbsp;icomoon-icon-mouse
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-screen"></span>
                                        &nbsp;icomoon-icon-screen
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-laptop"></span>
                                        &nbsp;icomoon-icon-laptop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-mobile"></span>
                                        &nbsp;icomoon-icon-mobile
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-tablet"></span>
                                        &nbsp;icomoon-icon-tablet
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-mobile-2"></span>
                                        &nbsp;icomoon-icon-mobile-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-drawer"></span>
                                        &nbsp;icomoon-icon-drawer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-drawer-2"></span>
                                        &nbsp;icomoon-icon-drawer-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-box-add"></span>
                                        &nbsp;icomoon-icon-box-add
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-box-remove"></span>
                                        &nbsp;icomoon-icon-box-remove
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-database"></span>
                                        &nbsp;icomoon-icon-database
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-undo"></span>
                                        &nbsp;icomoon-icon-undo
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-redo"></span>
                                        &nbsp;icomoon-icon-redo
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-forward"></span>
                                        &nbsp;icomoon-icon-forward
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-reply"></span>
                                        &nbsp;icomoon-icon-reply
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-reply-2"></span>
                                        &nbsp;icomoon-icon-reply-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-comments"></span>
                                        &nbsp;icomoon-icon-comments
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-comments-2"></span>
                                        &nbsp;icomoon-icon-comments-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-comments-3"></span>
                                        &nbsp;icomoon-icon-comments-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-comments-4"></span>
                                        &nbsp;icomoon-icon-comments-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-comments-5"></span>
                                        &nbsp;icomoon-icon-comments-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-comments-6"></span>
                                        &nbsp;icomoon-icon-comments-6
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-user"></span>
                                        &nbsp;icomoon-icon-user
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-user-2"></span>
                                        &nbsp;icomoon-icon-user-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-user-3"></span>
                                        &nbsp;icomoon-icon-user-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-busy"></span>
                                        &nbsp;icomoon-icon-busy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-loading"></span>
                                        &nbsp;icomoon-icon-loading
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-loading-2"></span>
                                        &nbsp;icomoon-icon-loading-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-search"></span>
                                        &nbsp;icomoon-icon-search
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-search-2"></span>
                                        &nbsp;icomoon-icon-search-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-zoom-in"></span>
                                        &nbsp;icomoon-icon-zoom-in
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-zoom-out"></span>
                                        &nbsp;icomoon-icon-zoom-out
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-key"></span>
                                        &nbsp;icomoon-icon-key
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-key-2"></span>
                                        &nbsp;icomoon-icon-key-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-locked"></span>
                                        &nbsp;icomoon-icon-locked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-unlocked"></span>
                                        &nbsp;icomoon-icon-unlocked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-wrench"></span>
                                        &nbsp;icomoon-icon-wrench
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-equalizer"></span>
                                        &nbsp;icomoon-icon-equalizer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-cog"></span>
                                        &nbsp;icomoon-icon-cog
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-pie"></span>
                                        &nbsp;icomoon-icon-pie
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-bars"></span>
                                        &nbsp;icomoon-icon-bars
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-stats-up"></span>
                                        &nbsp;icomoon-icon-stats-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-gift"></span>
                                        &nbsp;icomoon-icon-gift
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-trophy"></span>
                                        &nbsp;icomoon-icon-trophy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-diamond"></span>
                                        &nbsp;icomoon-icon-diamond
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-coffee"></span>
                                        &nbsp;icomoon-icon-coffee
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-rocket"></span>
                                        &nbsp;icomoon-icon-rocket
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-meter-slow"></span>
                                        &nbsp;icomoon-icon-meter-slow
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-meter-medium"></span>
                                        &nbsp;icomoon-icon-meter-medium
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-meter-fast"></span>
                                        &nbsp;icomoon-icon-meter-fast
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-dashboard"></span>
                                        &nbsp;icomoon-icon-dashboard
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-fire"></span>
                                        &nbsp;icomoon-icon-fire
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-lab"></span>
                                        &nbsp;icomoon-icon-lab
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-remove"></span>
                                        &nbsp;icomoon-icon-remove
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-remove-2"></span>
                                        &nbsp;icomoon-icon-remove-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-remove-3"></span>
                                        &nbsp;icomoon-icon-remove-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-briefcase"></span>
                                        &nbsp;icomoon-icon-briefcase
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-briefcase-2"></span>
                                        &nbsp;icomoon-icon-briefcase-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-cars"></span>
                                        &nbsp;icomoon-icon-cars
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-bus"></span>
                                        &nbsp;icomoon-icon-bus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-cube"></span>
                                        &nbsp;icomoon-icon-cube
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-cube-2"></span>
                                        &nbsp;icomoon-icon-cube-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-puzzle"></span>
                                        &nbsp;icomoon-icon-puzzle
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-glasses"></span>
                                        &nbsp;icomoon-icon-glasses
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-glasses-2"></span>
                                        &nbsp;icomoon-icon-glasses-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-accessibility"></span>
                                        &nbsp;icomoon-icon-accessibility
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-accessibility-2"></span>
                                        &nbsp;icomoon-icon-accessibility-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-target"></span>
                                        &nbsp;icomoon-icon-target
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-target-2"></span>
                                        &nbsp;icomoon-icon-target-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-lightning"></span>
                                        &nbsp;icomoon-icon-lightning
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-power"></span>
                                        &nbsp;icomoon-icon-power
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-power-2"></span>
                                        &nbsp;icomoon-icon-power-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-clipboard"></span>
                                        &nbsp;icomoon-icon-clipboard
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-clipboard-2"></span>
                                        &nbsp;icomoon-icon-clipboard-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-playlist"></span>
                                        &nbsp;icomoon-icon-playlist
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-grid-view"></span>
                                        &nbsp;icomoon-icon-grid-view
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-tree-view"></span>
                                        &nbsp;icomoon-icon-tree-view
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-menu"></span>
                                        &nbsp;icomoon-icon-menu
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-menu-2"></span>
                                        &nbsp;icomoon-icon-menu-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-cloud"></span>
                                        &nbsp;icomoon-icon-cloud
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-cloud-2"></span>
                                        &nbsp;icomoon-icon-cloud-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-download"></span>
                                        &nbsp;icomoon-icon-download
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-upload"></span>
                                        &nbsp;icomoon-icon-upload
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-upload-2"></span>
                                        &nbsp;icomoon-icon-upload-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-link"></span>
                                        &nbsp;icomoon-icon-link
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-link-2"></span>
                                        &nbsp;icomoon-icon-link-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-flag"></span>
                                        &nbsp;icomoon-icon-flag
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-flag-2"></span>
                                        &nbsp;icomoon-icon-flag-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-flag-3"></span>
                                        &nbsp;icomoon-icon-flag-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-eye"></span>
                                        &nbsp;icomoon-icon-eye
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-eye-2"></span>
                                        &nbsp;icomoon-icon-eye-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-bookmark"></span>
                                        &nbsp;icomoon-icon-bookmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-bookmark-2"></span>
                                        &nbsp;icomoon-icon-bookmark-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-star"></span>
                                        &nbsp;icomoon-icon-star
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-star-2"></span>
                                        &nbsp;icomoon-icon-star-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-star-3"></span>
                                        &nbsp;icomoon-icon-star-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-heart"></span>
                                        &nbsp;icomoon-icon-heart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-heart-2"></span>
                                        &nbsp;icomoon-icon-heart-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-thumbs-up"></span>
                                        &nbsp;icomoon-icon-thumbs-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-thumbs-down"></span>
                                        &nbsp;icomoon-icon-thumbs-down
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-happy"></span>
                                        &nbsp;icomoon-icon-happy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-smiley"></span>
                                        &nbsp;icomoon-icon-smiley
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-neutral"></span>
                                        &nbsp;icomoon-icon-neutral
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-plus"></span>
                                        &nbsp;icomoon-icon-plus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-minus"></span>
                                        &nbsp;icomoon-icon-minus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-help"></span>
                                        &nbsp;icomoon-icon-help
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-help-2"></span>
                                        &nbsp;icomoon-icon-help-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-info"></span>
                                        &nbsp;icomoon-icon-info
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-blocked"></span>
                                        &nbsp;icomoon-icon-blocked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-cancel"></span>
                                        &nbsp;icomoon-icon-cancel
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-cancel-2"></span>
                                        &nbsp;icomoon-icon-cancel-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-cancel-3"></span>
                                        &nbsp;icomoon-icon-cancel-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-checkmark"></span>
                                        &nbsp;icomoon-icon-checkmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-minus-2"></span>
                                        &nbsp;icomoon-icon-minus-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-plus-2"></span>
                                        &nbsp;icomoon-icon-plus-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-enter"></span>
                                        &nbsp;icomoon-icon-enter
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-exit"></span>
                                        &nbsp;icomoon-icon-exit
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-loop"></span>
                                        &nbsp;icomoon-icon-loop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up"></span>
                                        &nbsp;icomoon-icon-arrow-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-right"></span>
                                        &nbsp;icomoon-icon-arrow-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down"></span>
                                        &nbsp;icomoon-icon-arrow-down
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-left"></span>
                                        &nbsp;icomoon-icon-arrow-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-left"></span>
                                        &nbsp;icomoon-icon-arrow-up-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-2"></span>
                                        &nbsp;icomoon-icon-arrow-up-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-right"></span>
                                        &nbsp;icomoon-icon-arrow-up-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-right-2"></span>
                                        &nbsp;icomoon-icon-arrow-right-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-right"></span>
                                        &nbsp;icomoon-icon-arrow-down-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-2"></span>
                                        &nbsp;icomoon-icon-arrow-down-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-left"></span>
                                        &nbsp;icomoon-icon-arrow-down-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-left-2"></span>
                                        &nbsp;icomoon-icon-arrow-left-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-left-2"></span>
                                        &nbsp;icomoon-icon-arrow-up-left-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-3"></span>
                                        &nbsp;icomoon-icon-arrow-up-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-right-2"></span>
                                        &nbsp;icomoon-icon-arrow-up-right-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-right-3"></span>
                                        &nbsp;icomoon-icon-arrow-right-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-right-2"></span>
                                        &nbsp;icomoon-icon-arrow-down-right-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-3"></span>
                                        &nbsp;icomoon-icon-arrow-down-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-left-2"></span>
                                        &nbsp;icomoon-icon-arrow-down-left-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-left-3"></span>
                                        &nbsp;icomoon-icon-arrow-left-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-left-3"></span>
                                        &nbsp;icomoon-icon-arrow-up-left-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-4"></span>
                                        &nbsp;icomoon-icon-arrow-up-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-right-3"></span>
                                        &nbsp;icomoon-icon-arrow-up-right-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-right-4"></span>
                                        &nbsp;icomoon-icon-arrow-right-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-right-3"></span>
                                        &nbsp;icomoon-icon-arrow-down-right-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-4"></span>
                                        &nbsp;icomoon-icon-arrow-down-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-left-3"></span>
                                        &nbsp;icomoon-icon-arrow-down-left-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-left-4"></span>
                                        &nbsp;icomoon-icon-arrow-left-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-5"></span>
                                        &nbsp;icomoon-icon-arrow-up-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-right-5"></span>
                                        &nbsp;icomoon-icon-arrow-right-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-5"></span>
                                        &nbsp;icomoon-icon-arrow-down-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-left-5"></span>
                                        &nbsp;icomoon-icon-arrow-left-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-6"></span>
                                        &nbsp;icomoon-icon-arrow-up-6
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-right-6"></span>
                                        &nbsp;icomoon-icon-arrow-right-6
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-6"></span>
                                        &nbsp;icomoon-icon-arrow-down-6
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-left-6"></span>
                                        &nbsp;icomoon-icon-arrow-left-6
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-up-7"></span>
                                        &nbsp;icomoon-icon-arrow-up-7
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-right-7"></span>
                                        &nbsp;icomoon-icon-arrow-right-7
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-down-7"></span>
                                        &nbsp;icomoon-icon-arrow-down-7
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-arrow-left-7"></span>
                                        &nbsp;icomoon-icon-arrow-left-7
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-menu-3"></span>
                                        &nbsp;icomoon-icon-menu-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-enter-2"></span>
                                        &nbsp;icomoon-icon-enter-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-backspace"></span>
                                        &nbsp;icomoon-icon-backspace
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-backspace-2"></span>
                                        &nbsp;icomoon-icon-backspace-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-tab"></span>
                                        &nbsp;icomoon-icon-tab
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-tab-2"></span>
                                        &nbsp;icomoon-icon-tab-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-checkbox"></span>
                                        &nbsp;icomoon-icon-checkbox
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-checkbox-unchecked"></span>
                                        &nbsp;icomoon-icon-checkbox-unchecked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-checkbox-partial"></span>
                                        &nbsp;icomoon-icon-checkbox-partial
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-radio-checked"></span>
                                        &nbsp;icomoon-icon-radio-checked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-radio-unchecked"></span>
                                        &nbsp;icomoon-icon-radio-unchecked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-font"></span>
                                        &nbsp;icomoon-icon-font
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-paragraph-left"></span>
                                        &nbsp;icomoon-icon-paragraph-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-paragraph-center"></span>
                                        &nbsp;icomoon-icon-paragraph-center
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-paragraph-right"></span>
                                        &nbsp;icomoon-icon-paragraph-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-left-to-right"></span>
                                        &nbsp;icomoon-icon-left-to-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-right-to-left"></span>
                                        &nbsp;icomoon-icon-right-to-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-out"></span>
                                        &nbsp;icomoon-icon-out
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-out-2"></span>
                                        &nbsp;icomoon-icon-out-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-embed"></span>
                                        &nbsp;icomoon-icon-embed
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-seven-segment"></span>
                                        &nbsp;icomoon-icon-seven-segment
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-seven-segment-2"></span>
                                        &nbsp;icomoon-icon-seven-segment-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-seven-segment-3"></span>
                                        &nbsp;icomoon-icon-seven-segment-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-seven-segment-4"></span>
                                        &nbsp;icomoon-icon-seven-segment-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-seven-segment-5"></span>
                                        &nbsp;icomoon-icon-seven-segment-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-seven-segment-6"></span>
                                        &nbsp;icomoon-icon-seven-segment-6
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-seven-segment-7"></span>
                                        &nbsp;icomoon-icon-seven-segment-7
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-seven-segment-8"></span>
                                        &nbsp;icomoon-icon-seven-segment-8
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-seven-segment-9"></span>
                                        &nbsp;icomoon-icon-seven-segment-9
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-seven-segment-10"></span>
                                        &nbsp;icomoon-icon-seven-segment-10
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-bluetooth"></span>
                                        &nbsp;icomoon-icon-bluetooth
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-share"></span>
                                        &nbsp;icomoon-icon-share
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-share-2"></span>
                                        &nbsp;icomoon-icon-share-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-mail-2"></span>
                                        &nbsp;icomoon-icon-mail-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-mail-3"></span>
                                        &nbsp;icomoon-icon-mail-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-google-plus"></span>
                                        &nbsp;icomoon-icon-google-plus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-google-plus-2"></span>
                                        &nbsp;icomoon-icon-google-plus-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-google-plus-3"></span>
                                        &nbsp;icomoon-icon-google-plus-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-gplus"></span>
                                        &nbsp;icomoon-icon-gplus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-facebook"></span>
                                        &nbsp;icomoon-icon-facebook
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-facebook-2"></span>
                                        &nbsp;icomoon-icon-facebook-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-facebook-3"></span>
                                        &nbsp;icomoon-icon-facebook-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-facebook-4"></span>
                                        &nbsp;icomoon-icon-facebook-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-twitter"></span>
                                        &nbsp;icomoon-icon-twitter
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-twitter-2"></span>
                                        &nbsp;icomoon-icon-twitter-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-twitter-3"></span>
                                        &nbsp;icomoon-icon-twitter-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-feed"></span>
                                        &nbsp;icomoon-icon-feed
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-feed-2"></span>
                                        &nbsp;icomoon-icon-feed-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-feed-3"></span>
                                        &nbsp;icomoon-icon-feed-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-youtube"></span>
                                        &nbsp;icomoon-icon-youtube
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-youtube-2"></span>
                                        &nbsp;icomoon-icon-youtube-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-vimeo"></span>
                                        &nbsp;icomoon-icon-vimeo
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-vimeo-2"></span>
                                        &nbsp;icomoon-icon-vimeo-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-flickr"></span>
                                        &nbsp;icomoon-icon-flickr
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-flickr-2"></span>
                                        &nbsp;icomoon-icon-flickr-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-flickr-3"></span>
                                        &nbsp;icomoon-icon-flickr-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-picassa"></span>
                                        &nbsp;icomoon-icon-picassa
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-picassa-2"></span>
                                        &nbsp;icomoon-icon-picassa-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-dribbble"></span>
                                        &nbsp;icomoon-icon-dribbble
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-dribbble-2"></span>
                                        &nbsp;icomoon-icon-dribbble-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-dribbble-3"></span>
                                        &nbsp;icomoon-icon-dribbble-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-forrst"></span>
                                        &nbsp;icomoon-icon-forrst
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-forrst-2"></span>
                                        &nbsp;icomoon-icon-forrst-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-deviantart"></span>
                                        &nbsp;icomoon-icon-deviantart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-deviantart-2"></span>
                                        &nbsp;icomoon-icon-deviantart-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-github"></span>
                                        &nbsp;icomoon-icon-github
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-github-2"></span>
                                        &nbsp;icomoon-icon-github-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-github-3"></span>
                                        &nbsp;icomoon-icon-github-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-github-4"></span>
                                        &nbsp;icomoon-icon-github-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-github-5"></span>
                                        &nbsp;icomoon-icon-github-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-github-6"></span>
                                        &nbsp;icomoon-icon-github-6
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-git"></span>
                                        &nbsp;icomoon-icon-git
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-github-7"></span>
                                        &nbsp;icomoon-icon-github-7
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-wordpress"></span>
                                        &nbsp;icomoon-icon-wordpress
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-wordpress-2"></span>
                                        &nbsp;icomoon-icon-wordpress-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-blogger"></span>
                                        &nbsp;icomoon-icon-blogger
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-blogger-2"></span>
                                        &nbsp;icomoon-icon-blogger-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-tumblr"></span>
                                        &nbsp;icomoon-icon-tumblr
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-tumblr-2"></span>
                                        &nbsp;icomoon-icon-tumblr-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-yahoo"></span>
                                        &nbsp;icomoon-icon-yahoo
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-yahoo-2"></span>
                                        &nbsp;icomoon-icon-yahoo-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-amazon"></span>
                                        &nbsp;icomoon-icon-amazon
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-amazon-2"></span>
                                        &nbsp;icomoon-icon-amazon-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-apple"></span>
                                        &nbsp;icomoon-icon-apple
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-finder"></span>
                                        &nbsp;icomoon-icon-finder
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-android"></span>
                                        &nbsp;icomoon-icon-android
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-windows"></span>
                                        &nbsp;icomoon-icon-windows
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-soundcloud"></span>
                                        &nbsp;icomoon-icon-soundcloud
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-soundcloud-2"></span>
                                        &nbsp;icomoon-icon-soundcloud-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-skype"></span>
                                        &nbsp;icomoon-icon-skype
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-reddit"></span>
                                        &nbsp;icomoon-icon-reddit
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-linkedin"></span>
                                        &nbsp;icomoon-icon-linkedin
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-lastfm"></span>
                                        &nbsp;icomoon-icon-lastfm
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-lastfm-2"></span>
                                        &nbsp;icomoon-icon-lastfm-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-delicious"></span>
                                        &nbsp;icomoon-icon-delicious
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-stumbleupon"></span>
                                        &nbsp;icomoon-icon-stumbleupon
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-stumbleupon-2"></span>
                                        &nbsp;icomoon-icon-stumbleupon-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-pinterest"></span>
                                        &nbsp;icomoon-icon-pinterest
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-pinterest-2"></span>
                                        &nbsp;icomoon-icon-pinterest-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-xing"></span>
                                        &nbsp;icomoon-icon-xing
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-libreoffice"></span>
                                        &nbsp;icomoon-icon-libreoffice
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-file-pdf"></span>
                                        &nbsp;icomoon-icon-file-pdf
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-file-openoffice"></span>
                                        &nbsp;icomoon-icon-file-openoffice
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-file-word"></span>
                                        &nbsp;icomoon-icon-file-word
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-file-excel"></span>
                                        &nbsp;icomoon-icon-file-excel
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-file-powerpoint"></span>
                                        &nbsp;icomoon-icon-file-powerpoint
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-file-zip"></span>
                                        &nbsp;icomoon-icon-file-zip
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-file-xml"></span>
                                        &nbsp;icomoon-icon-file-xml
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-file-css"></span>
                                        &nbsp;icomoon-icon-file-css
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-html5"></span>
                                        &nbsp;icomoon-icon-html5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-html5-2"></span>
                                        &nbsp;icomoon-icon-html5-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-css3"></span>
                                        &nbsp;icomoon-icon-css3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-chrome"></span>
                                        &nbsp;icomoon-icon-chrome
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-firefox"></span>
                                        &nbsp;icomoon-icon-firefox
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-IE"></span>
                                        &nbsp;icomoon-icon-IE
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-opera"></span>
                                        &nbsp;icomoon-icon-opera
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-safari"></span>
                                        &nbsp;icomoon-icon-safari
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="icomoon-icon-IcoMoon"></span>
                                        &nbsp;icomoon-icon-IcoMoon
                                    </span>

                                
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->                  

                    </div><!-- End .row-fluid -->

                    <div class="row-fluid">
                        
                        <div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 minia-icon-equals-2"></span>
                                        <span>Icon Minia by Egmen Kapuzus</span>
                                    </h4>

                                </div>
                                <div class="content">

                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-home"></span>
                                        &nbsp;minia-icon-home
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-list"></span>
                                        &nbsp;minia-icon-list
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-book"></span>
                                        &nbsp;minia-icon-book
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-pencil"></span>
                                        &nbsp;minia-icon-pencil
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-bookmark"></span>
                                        &nbsp;minia-icon-bookmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-pointer"></span>
                                        &nbsp;minia-icon-pointer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-cloud"></span>
                                        &nbsp;minia-icon-cloud
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-cloud-ul"></span>
                                        &nbsp;minia-icon-cloud-ul
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-cloud-dl"></span>
                                        &nbsp;minia-icon-cloud-dl
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-search"></span>
                                        &nbsp;minia-icon-search
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-folder"></span>
                                        &nbsp;minia-icon-folder
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-trashcan"></span>
                                        &nbsp;minia-icon-trashcan
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-droplet"></span>
                                        &nbsp;minia-icon-droplet
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-tag"></span>
                                        &nbsp;minia-icon-tag
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-moon"></span>
                                        &nbsp;minia-icon-moon
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-eye"></span>
                                        &nbsp;minia-icon-eye
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-target"></span>
                                        &nbsp;minia-icon-target
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-blocked"></span>
                                        &nbsp;minia-icon-blocked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-switch"></span>
                                        &nbsp;minia-icon-switch
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-goal"></span>
                                        &nbsp;minia-icon-goal
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-location"></span>
                                        &nbsp;minia-icon-location
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-close"></span>
                                        &nbsp;minia-icon-close
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-checkmark"></span>
                                        &nbsp;minia-icon-checkmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-munis"></span>
                                        &nbsp;minia-icon-munis
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-plus"></span>
                                        &nbsp;minia-icon-plus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-close-2"></span>
                                        &nbsp;minia-icon-close-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-divide"></span>
                                        &nbsp;minia-icon-divide
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-minus"></span>
                                        &nbsp;minia-icon-minus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-plus-2"></span>
                                        &nbsp;minia-icon-plus-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-equals"></span>
                                        &nbsp;minia-icon-equals
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-cancel"></span>
                                        &nbsp;minia-icon-cancel
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-minus-2"></span>
                                        &nbsp;minia-icon-minus-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-checkmark-2"></span>
                                        &nbsp;minia-icon-checkmark-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-equals-2"></span>
                                        &nbsp;minia-icon-equals-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-asterisk"></span>
                                        &nbsp;minia-icon-asterisk
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-mobile"></span>
                                        &nbsp;minia-icon-mobile
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-tablet"></span>
                                        &nbsp;minia-icon-tablet
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-phone"></span>
                                        &nbsp;minia-icon-phone
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-bars"></span>
                                        &nbsp;minia-icon-bars
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-stack"></span>
                                        &nbsp;minia-icon-stack
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-battery"></span>
                                        &nbsp;minia-icon-battery
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-battery-2"></span>
                                        &nbsp;minia-icon-battery-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-battery-3"></span>
                                        &nbsp;minia-icon-battery-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-calculator"></span>
                                        &nbsp;minia-icon-calculator
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-bolt"></span>
                                        &nbsp;minia-icon-bolt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-list-2"></span>
                                        &nbsp;minia-icon-list-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-grid"></span>
                                        &nbsp;minia-icon-grid
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-list-3"></span>
                                        &nbsp;minia-icon-list-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-list-4"></span>
                                        &nbsp;minia-icon-list-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-layout"></span>
                                        &nbsp;minia-icon-layout
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-equalizer"></span>
                                        &nbsp;minia-icon-equalizer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-equalizer-2"></span>
                                        &nbsp;minia-icon-equalizer-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-cog"></span>
                                        &nbsp;minia-icon-cog
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-window"></span>
                                        &nbsp;minia-icon-window
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-window-2"></span>
                                        &nbsp;minia-icon-window-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-window-3"></span>
                                        &nbsp;minia-icon-window-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-window-4"></span>
                                        &nbsp;minia-icon-window-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-locked"></span>
                                        &nbsp;minia-icon-locked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-unlocked"></span>
                                        &nbsp;minia-icon-unlocked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-shield"></span>
                                        &nbsp;minia-icon-shield
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-cart"></span>
                                        &nbsp;minia-icon-cart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-console"></span>
                                        &nbsp;minia-icon-console
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-office"></span>
                                        &nbsp;minia-icon-office
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-basket"></span>
                                        &nbsp;minia-icon-basket
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-suitcase"></span>
                                        &nbsp;minia-icon-suitcase
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-airplane"></span>
                                        &nbsp;minia-icon-airplane
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-file-download"></span>
                                        &nbsp;minia-icon-file-download
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-file-upload"></span>
                                        &nbsp;minia-icon-file-upload
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-file"></span>
                                        &nbsp;minia-icon-file
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-file-add"></span>
                                        &nbsp;minia-icon-file-add
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-file-remove"></span>
                                        &nbsp;minia-icon-file-remove
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-bars-2"></span>
                                        &nbsp;minia-icon-bars-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-chart"></span>
                                        &nbsp;minia-icon-chart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-stats"></span>
                                        &nbsp;minia-icon-stats
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-right"></span>
                                        &nbsp;minia-icon-arrow-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-left"></span>
                                        &nbsp;minia-icon-arrow-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-down"></span>
                                        &nbsp;minia-icon-arrow-down
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-up"></span>
                                        &nbsp;minia-icon-arrow-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-right-2"></span>
                                        &nbsp;minia-icon-arrow-right-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-left-2"></span>
                                        &nbsp;minia-icon-arrow-left-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-up-2"></span>
                                        &nbsp;minia-icon-arrow-up-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-down-2"></span>
                                        &nbsp;minia-icon-arrow-down-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-down-left"></span>
                                        &nbsp;minia-icon-arrow-down-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-down-right"></span>
                                        &nbsp;minia-icon-arrow-down-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-up-left"></span>
                                        &nbsp;minia-icon-arrow-up-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-up-right"></span>
                                        &nbsp;minia-icon-arrow-up-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-left-3"></span>
                                        &nbsp;minia-icon-arrow-left-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-right-3"></span>
                                        &nbsp;minia-icon-arrow-right-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-down-3"></span>
                                        &nbsp;minia-icon-arrow-down-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-arrow-up-3"></span>
                                        &nbsp;minia-icon-arrow-up-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-move"></span>
                                        &nbsp;minia-icon-move
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-movie"></span>
                                        &nbsp;minia-icon-movie
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-refresh"></span>
                                        &nbsp;minia-icon-refresh
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-picture"></span>
                                        &nbsp;minia-icon-picture
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-music"></span>
                                        &nbsp;minia-icon-music
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-disk"></span>
                                        &nbsp;minia-icon-disk
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-camera"></span>
                                        &nbsp;minia-icon-camera
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-film"></span>
                                        &nbsp;minia-icon-film
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-tablet-2"></span>
                                        &nbsp;minia-icon-tablet-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-ipod"></span>
                                        &nbsp;minia-icon-ipod
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-camera-2"></span>
                                        &nbsp;minia-icon-camera-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-mouse"></span>
                                        &nbsp;minia-icon-mouse
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-volume"></span>
                                        &nbsp;minia-icon-volume
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-monitor"></span>
                                        &nbsp;minia-icon-monitor
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-thumbs-up"></span>
                                        &nbsp;minia-icon-thumbs-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-thumbs-down"></span>
                                        &nbsp;minia-icon-thumbs-down
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-neutral"></span>
                                        &nbsp;minia-icon-neutral
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-grin"></span>
                                        &nbsp;minia-icon-grin
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-heart"></span>
                                        &nbsp;minia-icon-heart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-pacman"></span>
                                        &nbsp;minia-icon-pacman
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-star"></span>
                                        &nbsp;minia-icon-star
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-star-2"></span>
                                        &nbsp;minia-icon-star-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-envelope"></span>
                                        &nbsp;minia-icon-envelope
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-comment"></span>
                                        &nbsp;minia-icon-comment
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-comment-2"></span>
                                        &nbsp;minia-icon-comment-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-user"></span>
                                        &nbsp;minia-icon-user
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-download"></span>
                                        &nbsp;minia-icon-download
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-upload"></span>
                                        &nbsp;minia-icon-upload
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-inbox"></span>
                                        &nbsp;minia-icon-inbox
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-partial"></span>
                                        &nbsp;minia-icon-partial
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-unchecked"></span>
                                        &nbsp;minia-icon-unchecked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-checked"></span>
                                        &nbsp;minia-icon-checked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-circles"></span>
                                        &nbsp;minia-icon-circles
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-pencil-2"></span>
                                        &nbsp;minia-icon-pencil-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-flag"></span>
                                        &nbsp;minia-icon-flag
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-link"></span>
                                        &nbsp;minia-icon-link
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-stop"></span>
                                        &nbsp;minia-icon-stop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-play"></span>
                                        &nbsp;minia-icon-play
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-pause"></span>
                                        &nbsp;minia-icon-pause
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-next"></span>
                                        &nbsp;minia-icon-next
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-previous"></span>
                                        &nbsp;minia-icon-previous
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-drink"></span>
                                        &nbsp;minia-icon-drink
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-drink-2"></span>
                                        &nbsp;minia-icon-drink-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-hamburger"></span>
                                        &nbsp;minia-icon-hamburger
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-mug"></span>
                                        &nbsp;minia-icon-mug
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-calendar"></span>
                                        &nbsp;minia-icon-calendar
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-clock"></span>
                                        &nbsp;minia-icon-clock
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-calendar-2"></span>
                                        &nbsp;minia-icon-calendar-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="minia-icon-compass"></span>
                                        &nbsp;minia-icon-compass
                                    </span>

                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->                  

                    </div><!-- End .row-fluid -->

                    <div class="row-fluid">
                        
                        <div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 iconic-icon-dial"></span>
                                        <span>Iconic by PJ Onori</span>
                                    </h4>

                                </div>
                                <div class="content">

                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-chat"></span>
                                        &nbsp;iconic-icon-chat
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-chat-alt-stroke"></span>
                                        &nbsp;iconic-icon-chat-alt-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-chat-alt-fill"></span>
                                        &nbsp;iconic-icon-chat-alt-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-comment-alt1-stroke"></span>
                                        &nbsp;iconic-icon-comment-alt1-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-comment-alt1-fill"></span>
                                        &nbsp;iconic-icon-comment-alt1-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-comment-stroke"></span>
                                        &nbsp;iconic-icon-comment-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-comment-fill"></span>
                                        &nbsp;iconic-icon-comment-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-comment-alt2-stroke"></span>
                                        &nbsp;iconic-icon-comment-alt2-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-comment-alt2-fill"></span>
                                        &nbsp;iconic-icon-comment-alt2-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-checkmark"></span>
                                        &nbsp;iconic-icon-checkmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-check-alt"></span>
                                        &nbsp;iconic-icon-check-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-x"></span>
                                        &nbsp;iconic-icon-x
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-x-altx-alt"></span>
                                        &nbsp;iconic-icon-x-altx-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-denied"></span>
                                        &nbsp;iconic-icon-denied
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-cursor"></span>
                                        &nbsp;iconic-icon-cursor
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-rss"></span>
                                        &nbsp;iconic-icon-rss
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-rss-alt"></span>
                                        &nbsp;iconic-icon-rss-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-wrench"></span>
                                        &nbsp;iconic-icon-wrench
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-dial"></span>
                                        &nbsp;iconic-icon-dial
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-cog"></span>
                                        &nbsp;iconic-icon-cog
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-calendar"></span>
                                        &nbsp;iconic-icon-calendar
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-calendar-alt-stroke"></span>
                                        &nbsp;iconic-icon-calendar-alt-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-calendar-alt-fill"></span>
                                        &nbsp;iconic-icon-calendar-alt-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-share"></span>
                                        &nbsp;iconic-icon-share
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-mail"></span>
                                        &nbsp;iconic-icon-mail
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-heart-stroke"></span>
                                        &nbsp;iconic-icon-heart-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-heart-fill"></span>
                                        &nbsp;iconic-icon-heart-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-movie"></span>
                                        &nbsp;iconic-icon-movie
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-document-alt-stroke"></span>
                                        &nbsp;iconic-icon-document-alt-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-document-alt-fill"></span>
                                        &nbsp;iconic-icon-document-alt-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-document-stroke"></span>
                                        &nbsp;iconic-icon-document-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-document-fill"></span>
                                        &nbsp;iconic-icon-document-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-plus"></span>
                                        &nbsp;iconic-icon-plus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-plus-alt"></span>
                                        &nbsp;iconic-icon-plus-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-minus"></span>
                                        &nbsp;iconic-icon-minus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-minus-alt"></span>
                                        &nbsp;iconic-icon-minus-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-pin"></span>
                                        &nbsp;iconic-icon-pin
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-link"></span>
                                        &nbsp;iconic-icon-link
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-bolt"></span>
                                        &nbsp;iconic-icon-bolt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-move"></span>
                                        &nbsp;iconic-icon-move
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-move-alt1"></span>
                                        &nbsp;iconic-icon-move-alt1
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-move-alt2"></span>
                                        &nbsp;iconic-icon-move-alt2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-equalizer"></span>
                                        &nbsp;iconic-icon-equalizer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-award-fill"></span>
                                        &nbsp;iconic-icon-award-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-award-stroke"></span>
                                        &nbsp;iconic-icon-award-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-magnifying-glass"></span>
                                        &nbsp;iconic-icon-magnifying-glass
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-trash-stroke"></span>
                                        &nbsp;iconic-icon-trash-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-trash-fill"></span>
                                        &nbsp;iconic-icon-trash-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-beaker-alt"></span>
                                        &nbsp;iconic-icon-beaker-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-beaker"></span>
                                        &nbsp;iconic-icon-beaker
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-key-stroke"></span>
                                        &nbsp;iconic-icon-key-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-key-fill"></span>
                                        &nbsp;iconic-icon-key-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-new-window"></span>
                                        &nbsp;iconic-icon-new-window
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-lightbulb"></span>
                                        &nbsp;iconic-icon-lightbulb
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-spin-alt"></span>
                                        &nbsp;iconic-icon-spin-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-spin"></span>
                                        &nbsp;iconic-icon-spin
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-curved-arrow"></span>
                                        &nbsp;iconic-icon-curved-arrow
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-undo"></span>
                                        &nbsp;iconic-icon-undo
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-reload"></span>
                                        &nbsp;iconic-icon-reload
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-reload-alt"></span>
                                        &nbsp;iconic-icon-reload-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-loop"></span>
                                        &nbsp;iconic-icon-loop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-loop-alt1"></span>
                                        &nbsp;iconic-icon-loop-alt1
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-loop-alt2"></span>
                                        &nbsp;iconic-icon-loop-alt2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-loop-alt3"></span>
                                        &nbsp;iconic-icon-loop-alt3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-loop-alt4"></span>
                                        &nbsp;iconic-icon-loop-alt4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-transfer"></span>
                                        &nbsp;iconic-icon-transfer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-move-vertical"></span>
                                        &nbsp;iconic-icon-move-vertical
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-move-vertical-alt1"></span>
                                        &nbsp;iconic-icon-move-vertical-alt1
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-move-vertical-alt2"></span>
                                        &nbsp;iconic-icon-move-vertical-alt2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-move-horizontal"></span>
                                        &nbsp;iconic-icon-move-horizontal
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-move-horizontal-alt1"></span>
                                        &nbsp;iconic-icon-move-horizontal-alt1
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-move-horizontal-alt2"></span>
                                        &nbsp;iconic-icon-move-horizontal-alt2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-left"></span>
                                        &nbsp;iconic-icon-arrow-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-left-alt1"></span>
                                        &nbsp;iconic-icon-arrow-left-alt1
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-left-alt2"></span>
                                        &nbsp;iconic-icon-arrow-left-alt2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-right"></span>
                                        &nbsp;iconic-icon-arrow-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-right-alt1"></span>
                                        &nbsp;iconic-icon-arrow-right-alt1
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-right-alt2"></span>
                                        &nbsp;iconic-icon-arrow-right-alt2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-up"></span>
                                        &nbsp;iconic-icon-arrow-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-up-alt1"></span>
                                        &nbsp;iconic-icon-arrow-up-alt1
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-up-alt2"></span>
                                        &nbsp;iconic-icon-arrow-up-alt2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-down"></span>
                                        &nbsp;iconic-icon-arrow-down
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-down-alt1"></span>
                                        &nbsp;iconic-icon-arrow-down-alt1
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-arrow-down-alt2"></span>
                                        &nbsp;iconic-icon-arrow-down-alt2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-cd"></span>
                                        &nbsp;iconic-icon-cd
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-steering-wheel"></span>
                                        &nbsp;iconic-icon-steering-wheel
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-microphone"></span>
                                        &nbsp;iconic-icon-microphone
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-headphones"></span>
                                        &nbsp;iconic-icon-headphones
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-volume"></span>
                                        &nbsp;iconic-icon-volume
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-volume-mute"></span>
                                        &nbsp;iconic-icon-volume-mute
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-play"></span>
                                        &nbsp;iconic-icon-play
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-pause"></span>
                                        &nbsp;iconic-icon-pause
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-stop"></span>
                                        &nbsp;iconic-icon-stop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-eject"></span>
                                        &nbsp;iconic-icon-eject
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-first"></span>
                                        &nbsp;iconic-icon-first
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-last"></span>
                                        &nbsp;iconic-icon-last
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-play-alt"></span>
                                        &nbsp;iconic-icon-play-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-fullscreen-exit"></span>
                                        &nbsp;iconic-icon-fullscreen-exit
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-fullscreen-exit-alt"></span>
                                        &nbsp;iconic-icon-fullscreen-exit-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-fullscreen"></span>
                                        &nbsp;iconic-icon-fullscreen
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-fullscreen-alt"></span>
                                        &nbsp;iconic-icon-fullscreen-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-iphone"></span>
                                        &nbsp;iconic-icon-iphone
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-battery-empty"></span>
                                        &nbsp;iconic-icon-battery-empty
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-battery-half"></span>
                                        &nbsp;iconic-icon-battery-half
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-battery-full"></span>
                                        &nbsp;iconic-icon-battery-full
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-battery-charging"></span>
                                        &nbsp;iconic-icon-battery-charging
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-compass"></span>
                                        &nbsp;iconic-icon-compass
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-box"></span>
                                        &nbsp;iconic-icon-box
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-folder-stroke"></span>
                                        &nbsp;iconic-icon-folder-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-folder-fill"></span>
                                        &nbsp;iconic-icon-folder-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-at"></span>
                                        &nbsp;iconic-icon-at
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-ampersand"></span>
                                        &nbsp;iconic-icon-ampersand
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-info"></span>
                                        &nbsp;iconic-icon-info
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-question-mark"></span>
                                        &nbsp;iconic-icon-question-mark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-pilcrow"></span>
                                        &nbsp;iconic-icon-pilcrow
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-hash"></span>
                                        &nbsp;iconic-icon-hash
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-left-quote"></span>
                                        &nbsp;iconic-icon-left-quote
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-right-quote"></span>
                                        &nbsp;iconic-icon-right-quote
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-left-quote-alt"></span>
                                        &nbsp;iconic-icon-left-quote-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-right-quote-alt"></span>
                                        &nbsp;iconic-icon-right-quote-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-article"></span>
                                        &nbsp;iconic-icon-article
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-read-more"></span>
                                        &nbsp;iconic-icon-read-more
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-list"></span>
                                        &nbsp;iconic-icon-list
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-list-nested"></span>
                                        &nbsp;iconic-icon-list-nested
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-book"></span>
                                        &nbsp;iconic-icon-book
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-book-alt"></span>
                                        &nbsp;iconic-icon-book-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-book-alt2"></span>
                                        &nbsp;iconic-icon-book-alt2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-pen"></span>
                                        &nbsp;iconic-icon-pen
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-pen-alt-stroke"></span>
                                        &nbsp;iconic-icon-pen-alt-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-pen-alt-fill"></span>
                                        &nbsp;iconic-icon-pen-alt-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-pen-alt2"></span>
                                        &nbsp;iconic-icon-pen-alt2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-brush"></span>
                                        &nbsp;iconic-icon-brush
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-brush-alt"></span>
                                        &nbsp;iconic-icon-brush-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-eyedropper"></span>
                                        &nbsp;iconic-icon-eyedropper
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-layers-alt"></span>
                                        &nbsp;iconic-icon-layers-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-layers"></span>
                                        &nbsp;iconic-icon-layers
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-image"></span>
                                        &nbsp;iconic-icon-image
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-camera"></span>
                                        &nbsp;iconic-icon-camera
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-aperture"></span>
                                        &nbsp;iconic-icon-aperture
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-aperture-alt"></span>
                                        &nbsp;iconic-icon-aperture-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-chart"></span>
                                        &nbsp;iconic-icon-chart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-chart-alt"></span>
                                        &nbsp;iconic-icon-chart-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-bars"></span>
                                        &nbsp;iconic-icon-bars
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-bars-alt"></span>
                                        &nbsp;iconic-icon-bars-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-eye"></span>
                                        &nbsp;iconic-icon-eye
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-user"></span>
                                        &nbsp;iconic-icon-user
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-home"></span>
                                        &nbsp;iconic-icon-home
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-clock"></span>
                                        &nbsp;iconic-icon-clock
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-lock-stroke"></span>
                                        &nbsp;iconic-icon-lock-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-lock-fill"></span>
                                        &nbsp;iconic-icon-lock-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-unlock-stroke"></span>
                                        &nbsp;iconic-icon-unlock-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-unlock-fill"></span>
                                        &nbsp;iconic-icon-unlock-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-tag-stroke"></span>
                                        &nbsp;iconic-icon-tag-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-tag-fill"></span>
                                        &nbsp;iconic-icon-tag-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-sun-stroke"></span>
                                        &nbsp;iconic-icon-sun-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-sun-fill"></span>
                                        &nbsp;iconic-icon-sun-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-moon-stroke"></span>
                                        &nbsp;iconic-icon-moon-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-moon-fill"></span>
                                        &nbsp;iconic-icon-moon-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-cloud"></span>
                                        &nbsp;iconic-icon-cloud
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-rain"></span>
                                        &nbsp;iconic-icon-rain
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-umbrella"></span>
                                        &nbsp;iconic-icon-umbrella
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-star"></span>
                                        &nbsp;iconic-icon-star
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-map-pin-stroke"></span>
                                        &nbsp;iconic-icon-map-pin-stroke
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-map-pin-fill"></span>
                                        &nbsp;iconic-icon-map-pin-fill
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-map-pin-alt"></span>
                                        &nbsp;iconic-icon-map-pin-alt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-target"></span>
                                        &nbsp;iconic-icon-target
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-download"></span>
                                        &nbsp;iconic-icon-download
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-upload"></span>
                                        &nbsp;iconic-icon-upload
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-cloud-download"></span>
                                        &nbsp;iconic-icon-cloud-download
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-cloud-upload"></span>
                                        &nbsp;iconic-icon-cloud-upload
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-fork"></span>
                                        &nbsp;iconic-icon-fork
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="iconic-icon-paperclip"></span>
                                        &nbsp;iconic-icon-paperclip
                                    </span>

                                
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->                  

                    </div><!-- End .row-fluid -->

                    <div class="row-fluid">
                        
                        <div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 meteo-icon-compass"></span>
                                        <span>Meteocons by Alessio Atzeni</span>
                                    </h4>

                                </div>
                                <div class="content">

                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-sunrise"></span>
                                        &nbsp;meteo-icon-sunrise
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-sun"></span>
                                        &nbsp;meteo-icon-sun
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-moon"></span>
                                        &nbsp;meteo-icon-moon
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-sun-2"></span>
                                        &nbsp;meteo-icon-sun-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-windy"></span>
                                        &nbsp;meteo-icon-windy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-wind"></span>
                                        &nbsp;meteo-icon-wind
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-snowflake"></span>
                                        &nbsp;meteo-icon-snowflake
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-cloudy"></span>
                                        &nbsp;meteo-icon-cloudy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-cloud"></span>
                                        &nbsp;meteo-icon-cloud
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-weather"></span>
                                        &nbsp;meteo-icon-weather
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-weather-2"></span>
                                        &nbsp;meteo-icon-weather-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-weather-3"></span>
                                        &nbsp;meteo-icon-weather-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-lines"></span>
                                        &nbsp;meteo-icon-lines
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-cloud-2"></span>
                                        &nbsp;meteo-icon-cloud-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-lightning"></span>
                                        &nbsp;meteo-icon-lightning
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-lightning-2"></span>
                                        &nbsp;meteo-icon-lightning-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-rainy"></span>
                                        &nbsp;meteo-icon-rainy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-rainy-2"></span>
                                        &nbsp;meteo-icon-rainy-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-windy-2"></span>
                                        &nbsp;meteo-icon-windy-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-windy-3"></span>
                                        &nbsp;meteo-icon-windy-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-snowy"></span>
                                        &nbsp;meteo-icon-snowy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-snowy-2"></span>
                                        &nbsp;meteo-icon-snowy-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-snowy-3"></span>
                                        &nbsp;meteo-icon-snowy-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-weather-4"></span>
                                        &nbsp;meteo-icon-weather-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-cloudy-2"></span>
                                        &nbsp;meteo-icon-cloudy-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-cloud-3"></span>
                                        &nbsp;meteo-icon-cloud-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-lightning-3"></span>
                                        &nbsp;meteo-icon-lightning-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-sun-3"></span>
                                        &nbsp;meteo-icon-sun-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-moon-2"></span>
                                        &nbsp;meteo-icon-moon-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-cloudy-3"></span>
                                        &nbsp;meteo-icon-cloudy-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-cloud-4"></span>
                                        &nbsp;meteo-icon-cloud-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-cloud-5"></span>
                                        &nbsp;meteo-icon-cloud-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-lightning-4"></span>
                                        &nbsp;meteo-icon-lightning-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-rainy-3"></span>
                                        &nbsp;meteo-icon-rainy-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-rainy-4"></span>
                                        &nbsp;meteo-icon-rainy-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-windy-4"></span>
                                        &nbsp;meteo-icon-windy-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-windy-5"></span>
                                        &nbsp;meteo-icon-windy-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-snowy-4"></span>
                                        &nbsp;meteo-icon-snowy-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-snowy-5"></span>
                                        &nbsp;meteo-icon-snowy-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-weather-5"></span>
                                        &nbsp;meteo-icon-weather-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-cloudy-4"></span>
                                        &nbsp;meteo-icon-cloudy-4
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-lightning-5"></span>
                                        &nbsp;meteo-icon-lightning-5
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-thermometer"></span>
                                        &nbsp;meteo-icon-thermometer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-compass"></span>
                                        &nbsp;meteo-icon-compass
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-none"></span>
                                        &nbsp;meteo-icon-none
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-Celsius"></span>
                                        &nbsp;meteo-icon-Celsius
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="meteo-icon-Fahrenheit"></span>
                                        &nbsp;meteo-icon-Fahrenheit
                                    </span>
                                    

                                
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->                  

                    </div><!-- End .row-fluid -->

                    <div class="row-fluid">
                        
                        <div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 silk-icon-icons"></span>
                                        <span>Silkcons by Vaibhav Bhat</span>
                                    </h4>

                                </div>
                                <div class="content">

                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-expand"></span>
                                        &nbsp;silk-icon-expand
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-expand-2"></span>
                                        &nbsp;silk-icon-expand-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-untitled"></span>
                                        &nbsp;silk-icon-untitled
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-shrink"></span>
                                        &nbsp;silk-icon-shrink
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-plus"></span>
                                        &nbsp;silk-icon-plus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-minus"></span>
                                        &nbsp;silk-icon-minus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-notes"></span>
                                        &nbsp;silk-icon-notes
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-notebook"></span>
                                        &nbsp;silk-icon-notebook
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-popout"></span>
                                        &nbsp;silk-icon-popout
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-popout-2"></span>
                                        &nbsp;silk-icon-popout-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-down"></span>
                                        &nbsp;silk-icon-arrow-down
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-up"></span>
                                        &nbsp;silk-icon-arrow-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-left"></span>
                                        &nbsp;silk-icon-arrow-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-right"></span>
                                        &nbsp;silk-icon-arrow-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-down-2"></span>
                                        &nbsp;silk-icon-arrow-down-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-up-2"></span>
                                        &nbsp;silk-icon-arrow-up-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-left-2"></span>
                                        &nbsp;silk-icon-arrow-left-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-right-2"></span>
                                        &nbsp;silk-icon-arrow-right-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-target"></span>
                                        &nbsp;silk-icon-target
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-clock"></span>
                                        &nbsp;silk-icon-clock
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-cloud"></span>
                                        &nbsp;silk-icon-cloud
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-cloud-2"></span>
                                        &nbsp;silk-icon-cloud-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-mobile"></span>
                                        &nbsp;silk-icon-mobile
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-expand-3"></span>
                                        &nbsp;silk-icon-expand-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-contract"></span>
                                        &nbsp;silk-icon-contract
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-chart"></span>
                                        &nbsp;silk-icon-chart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-checkmark"></span>
                                        &nbsp;silk-icon-checkmark
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-cancel"></span>
                                        &nbsp;silk-icon-cancel
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-enter"></span>
                                        &nbsp;silk-icon-enter
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-exit"></span>
                                        &nbsp;silk-icon-exit
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-download"></span>
                                        &nbsp;silk-icon-download
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-upload"></span>
                                        &nbsp;silk-icon-upload
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-heart"></span>
                                        &nbsp;silk-icon-heart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-heart-2"></span>
                                        &nbsp;silk-icon-heart-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-heart-3"></span>
                                        &nbsp;silk-icon-heart-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-vector"></span>
                                        &nbsp;silk-icon-vector
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-vector-2"></span>
                                        &nbsp;silk-icon-vector-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-star"></span>
                                        &nbsp;silk-icon-star
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-star-half"></span>
                                        &nbsp;silk-icon-star-half
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-star-empty"></span>
                                        &nbsp;silk-icon-star-empty
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-eraser"></span>
                                        &nbsp;silk-icon-eraser
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-pencil"></span>
                                        &nbsp;silk-icon-pencil
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-calendar"></span>
                                        &nbsp;silk-icon-calendar
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-marker"></span>
                                        &nbsp;silk-icon-marker
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow"></span>
                                        &nbsp;silk-icon-arrow
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-2"></span>
                                        &nbsp;silk-icon-arrow-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-undo"></span>
                                        &nbsp;silk-icon-undo
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-redo"></span>
                                        &nbsp;silk-icon-redo
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-console"></span>
                                        &nbsp;silk-icon-console
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-picture"></span>
                                        &nbsp;silk-icon-picture
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-droplet"></span>
                                        &nbsp;silk-icon-droplet
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-droplet-2"></span>
                                        &nbsp;silk-icon-droplet-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-up-3"></span>
                                        &nbsp;silk-icon-arrow-up-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-down-3"></span>
                                        &nbsp;silk-icon-arrow-down-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-left-3"></span>
                                        &nbsp;silk-icon-arrow-left-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-arrow-right-3"></span>
                                        &nbsp;silk-icon-arrow-right-3
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-pictures"></span>
                                        &nbsp;silk-icon-pictures
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-frame"></span>
                                        &nbsp;silk-icon-frame
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-cloud-play"></span>
                                        &nbsp;silk-icon-cloud-play
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-cover-flow"></span>
                                        &nbsp;silk-icon-cover-flow
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-columns"></span>
                                        &nbsp;silk-icon-columns
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-list"></span>
                                        &nbsp;silk-icon-list
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-icons"></span>
                                        &nbsp;silk-icon-icons
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-home"></span>
                                        &nbsp;silk-icon-home
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-office"></span>
                                        &nbsp;silk-icon-office
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-camera"></span>
                                        &nbsp;silk-icon-camera
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-redo-2"></span>
                                        &nbsp;silk-icon-redo-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-refresh"></span>
                                        &nbsp;silk-icon-refresh
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-undo-2"></span>
                                        &nbsp;silk-icon-undo-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-credit-card"></span>
                                        &nbsp;silk-icon-credit-card
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-podcast"></span>
                                        &nbsp;silk-icon-podcast
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-share"></span>
                                        &nbsp;silk-icon-share
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-calculator"></span>
                                        &nbsp;silk-icon-calculator
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-play"></span>
                                        &nbsp;silk-icon-play
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-search"></span>
                                        &nbsp;silk-icon-search
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-chat"></span>
                                        &nbsp;silk-icon-chat
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-umbrella"></span>
                                        &nbsp;silk-icon-umbrella
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-drops"></span>
                                        &nbsp;silk-icon-drops
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-sun"></span>
                                        &nbsp;silk-icon-sun
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-battery-empty"></span>
                                        &nbsp;silk-icon-battery-empty
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-battery-charging"></span>
                                        &nbsp;silk-icon-battery-charging
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-battery-low"></span>
                                        &nbsp;silk-icon-battery-low
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-battery"></span>
                                        &nbsp;silk-icon-battery
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-battery-full"></span>
                                        &nbsp;silk-icon-battery-full
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-battery-warning"></span>
                                        &nbsp;silk-icon-battery-warning
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-grass"></span>
                                        &nbsp;silk-icon-grass
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-food"></span>
                                        &nbsp;silk-icon-food
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-pointer"></span>
                                        &nbsp;silk-icon-pointer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-drawer"></span>
                                        &nbsp;silk-icon-drawer
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-envelope"></span>
                                        &nbsp;silk-icon-envelope
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-rainbow"></span>
                                        &nbsp;silk-icon-rainbow
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-trashcan"></span>
                                        &nbsp;silk-icon-trashcan
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-lollipop"></span>
                                        &nbsp;silk-icon-lollipop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-contrast"></span>
                                        &nbsp;silk-icon-contrast
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-crop"></span>
                                        &nbsp;silk-icon-crop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-untitled-2"></span>
                                        &nbsp;silk-icon-untitled-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-boat"></span>
                                        &nbsp;silk-icon-boat
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-puzzle"></span>
                                        &nbsp;silk-icon-puzzle
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-tshirt"></span>
                                        &nbsp;silk-icon-tshirt
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-yinyang"></span>
                                        &nbsp;silk-icon-yinyang
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-watch"></span>
                                        &nbsp;silk-icon-watch
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-bars"></span>
                                        &nbsp;silk-icon-bars
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-wand"></span>
                                        &nbsp;silk-icon-wand
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-music"></span>
                                        &nbsp;silk-icon-music
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-music-2"></span>
                                        &nbsp;silk-icon-music-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-checklist"></span>
                                        &nbsp;silk-icon-checklist
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-notes-2"></span>
                                        &nbsp;silk-icon-notes-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-power"></span>
                                        &nbsp;silk-icon-power
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-folder"></span>
                                        &nbsp;silk-icon-folder
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-broadcast"></span>
                                        &nbsp;silk-icon-broadcast
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-locked"></span>
                                        &nbsp;silk-icon-locked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-unlocked"></span>
                                        &nbsp;silk-icon-unlocked
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-desktop"></span>
                                        &nbsp;silk-icon-desktop
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-warning"></span>
                                        &nbsp;silk-icon-warning
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-happy"></span>
                                        &nbsp;silk-icon-happy
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="silk-icon-fence"></span>
                                        &nbsp;silk-icon-fence
                                    </span>
                                                                    
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->                  

                    </div><!-- End .row-fluid -->

                    <div class="row-fluid">
                        
                        <div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 typ-icon-bookmark"></span>
                                        <span>Typicons by Stephen Hutchings</span>
                                    </h4>

                                </div>
                                <div class="content">

                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-battery-low"></span>
                                        &nbsp;typ-icon-battery-low
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-battery"></span>
                                        &nbsp;typ-icon-battery
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-battery-full"></span>
                                        &nbsp;typ-icon-battery-full
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-battery-charging"></span>
                                        &nbsp;typ-icon-battery-charging
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-plus"></span>
                                        &nbsp;typ-icon-plus
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-cross"></span>
                                        &nbsp;typ-icon-cross
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-arrow-right"></span>
                                        &nbsp;typ-icon-arrow-right
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-arrow-left"></span>
                                        &nbsp;typ-icon-arrow-left
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-pencil"></span>
                                        &nbsp;typ-icon-pencil
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-search"></span>
                                        &nbsp;typ-icon-search
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-grid"></span>
                                        &nbsp;typ-icon-grid
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-list"></span>
                                        &nbsp;typ-icon-list
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-star"></span>
                                        &nbsp;typ-icon-star
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-heart"></span>
                                        &nbsp;typ-icon-heart
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-back"></span>
                                        &nbsp;typ-icon-back
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-forward"></span>
                                        &nbsp;typ-icon-forward
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-map-marker"></span>
                                        &nbsp;typ-icon-map-marker
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-phone"></span>
                                        &nbsp;typ-icon-phone
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-home"></span>
                                        &nbsp;typ-icon-home
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-camera"></span>
                                        &nbsp;typ-icon-camera
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-arrow-left-2"></span>
                                        &nbsp;typ-icon-arrow-left-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-arrow-right-2"></span>
                                        &nbsp;typ-icon-arrow-right-2
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-arrow-up"></span>
                                        &nbsp;typ-icon-arrow-up
                                    </span>
                                    <span class="box1">
                                        <span aria-hidden="true" class="typ-icon-arrow-down"></span>
                                        &nbsp;typ-icon-arrow-down
                                    </span>
                     </div></div></div></div></div></div></div>
                         <!-- Le javascript
    ================================================== -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>  
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>

    <!-- Load plugins -->
    <script type="text/javascript" src="plugins/qtip/jquery.qtip.min.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.grow.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.tooltip_0.4.4.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.orderBars.js"></script>

    <script type="text/javascript" src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="plugins/knob/jquery.knob.js"></script>
    <script type="text/javascript" src="plugins/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="plugins/prettify/prettify.js"></script>

    <script type="text/javascript" src="plugins/watermark/jquery.watermark.min.js"></script>
    <script type="text/javascript" src="plugins/elastic/jquery.elastic.js"></script>
    <script type="text/javascript" src="plugins/inputlimiter/jquery.inputlimiter.1.3.min.js"></script>
    <script type="text/javascript" src="plugins/maskedinput/jquery.maskedinput-1.3.min.js"></script>
    <script type="text/javascript" src="plugins/ibutton/jquery.ibutton.min.js"></script>
    <script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="plugins/stepper/ui.stepper.js"></script>
    <script type="text/javascript" src="plugins/color-picker/colorpicker.js"></script>
    <script type="text/javascript" src="plugins/timeentry/jquery.timeentry.min.js"></script>
    <script type="text/javascript" src="plugins/select/select2.min.js"></script>
    <script type="text/javascript" src="plugins/dualselect/jquery.dualListBox-1.3.min.js"></script>
    <script type="text/javascript" src="plugins/tiny_mce/jquery.tinymce.js"></script>
    <script type="text/javascript" src="plugins/validate/jquery.validate.min.js"></script>

    <script type="text/javascript" src="plugins/animated-progress-bar/jquery.progressbar.js"></script>
    <script type="text/javascript" src="plugins/pnotify/jquery.pnotify.min.js"></script>
    <script type="text/javascript" src="plugins/lazy-load/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="plugins/jpages/jPages.min.js"></script>
    <script type="text/javascript" src="plugins/pretty-photo/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="plugins/smartWizzard/jquery.smartWizard-2.0.min.js"></script>

    <script type="text/javascript" src="plugins/ios-fix/ios-orientationchange-fix.js"></script>

    <script type="text/javascript" src="plugins/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="plugins/elfinder/elfinder.min.js"></script>
    <script type="text/javascript" src="plugins/plupload/plupload.js"></script>
    <script type="text/javascript" src="plugins/plupload/plupload.html4.js"></script>
    <script type="text/javascript" src="plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>

    <!-- Init plugins -->
    <script type="text/javascript" src="js/statistic.js"></script><!-- Control graphs ( chart, pies and etc) -->

    <!-- Important Place before main.js  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script type="text/javascript" src="plugins/touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


    </body>
</html>
