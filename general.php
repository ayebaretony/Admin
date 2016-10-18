<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>WoundMetrics</title>

    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory');?>/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php bloginfo('template_directory');?>/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    
    <link href="<?php bloginfo('template_directory');?>/style-responsive.css" rel="stylesheet">

    <script src="<?php bloginfo('template_directory');?>/assets/js/chart-master/Chart.js"></script>
    
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php bloginfo('template_directory');?>/index.php" class="logo"><b>WoundMetrics</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="<?php bloginfo('template_directory');?>/index.php#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="<?php bloginfo('template_directory');?>/index.php#">
                                    <div class="task-info">
                                        <div class="desc">Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('template_directory');?>/index.php#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('template_directory');?>/index.php#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('template_directory');?>/index.php#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="<?php bloginfo('template_directory');?>/index.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="<?php bloginfo('template_directory');?>/index.php#">
                                    <span class="photo"><img alt="avatar" src="<?php bloginfo('template_directory');?>/assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('template_directory');?>/index.php#">
                                    <span class="photo"><img alt="avatar" src="<?php bloginfo('template_directory');?>/assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('template_directory');?>/index.php#">
                                    <span class="photo"><img alt="avatar" src="<?php bloginfo('template_directory');?>/assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('template_directory');?>/index.php#">
                                    <span class="photo"><img alt="avatar" src="<?php bloginfo('template_directory');?>/assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('template_directory');?>/index.php#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php bloginfo('template_directory');?>/login.php">Logout</a></li>
                </ul>
            </div>
            <?php wp_head();?>
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
              
              	  <p class="centered"><a href="profile.php"><img src="<?php bloginfo('template_directory');?>/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
                  <li class="mt">
                      <a href="<?php bloginfo('template_directory');?>/index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="<?php bloginfo('template_directory');?>/javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="<?php bloginfo('template_directory');?>/general.php">General</a></li>
                          <li><a  href="<?php bloginfo('template_directory');?>/buttons.php">Buttons</a></li>
                          <li><a  href="<?php bloginfo('template_directory');?>/panels.php">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php bloginfo('template_directory');?>/calendar.php">Calendar</a></li>
                          <li><a  href="<?php bloginfo('template_directory');?>/gallery.php">Gallery</a></li>
                          <li><a  href="<?php bloginfo('template_directory');?>/todo_list.php">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php bloginfo('template_directory');?>/javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php bloginfo('template_directory');?>/blank.php">Blank Page</a></li>
                          <li><a  href="<?php bloginfo('template_directory');?>/login.php">Login</a></li>
                          <li><a  href="<?php bloginfo('template_directory');?>/lock_screen.php">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php bloginfo('template_directory');?>/javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php bloginfo('template_directory');?>/form_component.php">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php bloginfo('template_directory');?>/javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php bloginfo('template_directory');?>/basic_table.php">Basic Table</a></li>
                          <li><a  href="<?php bloginfo('template_directory');?>/responsive_table.php">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php bloginfo('template_directory');?>/javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php bloginfo('template_directory');?>/morris.php">Morris</a></li>
                          <li><a  href="<?php bloginfo('template_directory');?>/chartjs.php">Chartjs</a></li>
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
      		<div class="row mt">
      			<div class="col-lg-6 col-md-6 col-sm-12">
      				<! -- BASIC PROGRESS BARS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Basic Progress Bars</h4>
	      				<div class="progress">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
						    <span class="sr-only">20% Complete</span>
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						    <span class="sr-only">60% Complete (warning)</span>
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						    <span class="sr-only">80% Complete</span>
						  </div>
						</div>
      				</div><!--/showback -->
      				
      				<! -- STRIPPED PROGRESS BARS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Stripped Progress Bars</h4>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
						    <span class="sr-only">20% Complete</span>
						  </div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						    <span class="sr-only">60% Complete (warning)</span>
						  </div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						    <span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>      				
					</div><!-- /showback -->
					
      				<! -- ANIMATED PROGRESS BARS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Animated Progress Bars</h4>
	      				<div class="progress progress-striped active">
						  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
						    <span class="sr-only">45% Complete</span>
						  </div>
						</div>
      				</div><!-- /showback -->
      				
      				<! -- MODALS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Modal Example</h4>
						<!-- Button trigger modal -->
						<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						  Launch Modal
						</button>
						
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
						      </div>
						      <div class="modal-body">
						        Hi there, I am a Modal Example for Dashgum Admin Panel.
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-primary">Save changes</button>
						      </div>
						    </div>
						  </div>
						</div>      				
      				</div><!-- /showback -->
      				
      				<! -- GRITTER NOTICES -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Gritter Examples</h4>
							<p>Click on below buttons to check it out.</p>
							<a id="add-regular" class="btn btn-default btn-sm" href="<?php bloginfo('template_directory');?>/javascript:;">Regular</a>
							<a id="add-sticky" class="btn btn-success  btn-sm" href="<?php bloginfo('template_directory');?>/javascript:;">Sticky</a>
							<a id="add-without-image" class="btn btn-info  btn-sm" href="<?php bloginfo('template_directory');?>/javascript:;">Imageless</a>
							<a id="add-gritter-light" class="btn btn-warning  btn-sm" href="<?php bloginfo('template_directory');?>/javascript:;">Light</a>
							<a id="remove-all" class="btn btn-danger  btn-sm" href="<?php bloginfo('template_directory');?>/general.php#">Remove all</a>
      				</div><!-- /showback -->
      				
      			</div><! --/col-lg-6 -->
      			
      			
      			<div class="col-lg-6 col-md-6 col-sm-12">
      				<! -- ALERTS EXAMPLES -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Alerts Examples</h4>
							<div class="alert alert-success"><b>Well done!</b> You successfully read this important alert message.</div>
							<div class="alert alert-info"><b>Heads up!</b> This alert needs your attention, but it's not super important.</div>
							<div class="alert alert-warning"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
							<div class="alert alert-danger"><b>Oh snap!</b> Change a few things up and try submitting again.</div>      				
      				</div><!-- /showback -->
      				
      				<! -- DISMISSABLE ALERT -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Dismissable Alert</h4>
						<div class="alert alert-warning alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Warning!</strong> Better check yourself, you're not looking too good.
						</div>      				
      				</div><!-- /showback -->
      				
      				<! -- BADGES -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Badges</h4>
						<span class="badge">5</span>
						<span class="badge bg-primary">10</span>
						<span class="badge bg-success">15</span>
						<span class="badge bg-info">20</span>
						<span class="badge bg-inverse">25</span>
						<span class="badge bg-warning">30</span>
						<span class="badge bg-important">35</span>
      				</div><!-- /showback -->
      				
      				<! -- LABELS -->
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Labels</h4>
							<span class="label label-default">label</span>
							<span class="label label-primary">Primary</span>
							<span class="label label-success">Success</span>
							<span class="label label-info">Info</span>
							<span class="label label-warning">Warning</span>
							<span class="label label-danger">Danger</span>
                    </div><!-- /showback -->
      			
      			</div><!-- /col-lg-6 -->
      			
      		</div><!--/ row -->
          </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="<?php bloginfo('template_directory');?>/general.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jjquery-1.8.3.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/gritter-conf.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
