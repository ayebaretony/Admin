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
              
              	  <p class="centered"><a href="<?php bloginfo('template_directory');?>/profile.php"><img src="<?php bloginfo('template_directory');?>/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
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
                          <li><a  href="<?php bloginfo('template_directory');?>/general.php">General</a></li>
                          <li><a  href="<?php bloginfo('template_directory');?>/buttons.php">Buttons</a></li>
                          <li class="active"><a  href="<?php bloginfo('template_directory');?>/panels.php">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php bloginfo('template_directory');?>/javascript:;" >
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
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Discover Our Panels</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
					<! -- 1st ROW OF PANELS -->
					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="twitter-panel pn">
								<i class="fa fa-twitter fa-4x"></i>
								<p>Dashgum is here! Take a look and enjoy this new Bootstrap Dashboard theme.</p>
								<p class="user">@Alvrz_is</p>
							</div>
						</div><!-- /col-md-4 -->
						
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>TOP USER</h5>
								</div>
								<p><img src="<?php bloginfo('template_directory');?>/assets/img/ui-zac.jpg" class="img-circle" width="50"></p>
								<p><b>Zac Snider</b></p>
									<div class="row">
										<div class="col-md-6">
											<p class="small mt">MEMBER SINCE</p>
											<p>2012</p>
										</div>
										<div class="col-md-6">
											<p class="small mt">TOTAL SPEND</p>
											<p>$ 47,60</p>
										</div>
									</div>
							</div>
						</div><!-- /col-md-4 -->
						
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<!-- INSTAGRAM PANEL -->
							<div class="instagram-panel pn">
								<i class="fa fa-instagram fa-4x"></i>
								<p>@THISISYOU<br/>
									5 min. ago
								</p>
								<p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
							</div>
						</div><!-- /col-md-4 -->
					</div><! --/END 1ST ROW OF PANELS -->
					
					<! -- 2ND ROW OF PANELS -->
					<div class="row">
						<! -- TODO PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="steps pn">
							    <input id='op1' name='op1' type='checkbox' checked/>
							    <label for='op1'>Update Profile</label>
							    <input id='op2' name='op2' type='checkbox'/>
							    <label for='op2'>Contact Paul</label>
							    <input id='op3' name='op3' type='checkbox'/>
							    <label for='op3'>Enjoy Life</label>
							    <input type='submit' value='All Done!' id='submit'/>
							</div>
						</div><! --/col-md-4 -->
						
						<! -- PROFILE 01 PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="content-panel pn">
								<div id="profile-01">
									<h3>Sharon Holmes</h3>
									<h6>WEB DESIGNER</h6>
								</div>
								<div class="profile-01 centered">
									<p>ADD TO CONTACT LIST</p>
								</div>
								<div class="centered">
									<h6><i class="fa fa-envelope"></i><br/>SHARON@DASHGUMTHEME.COM</h6>
								</div>
							</div><! --/content-panel -->
						</div><! --/col-md-4 -->
						
						<! -- PROFILE 02 PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="content-panel pn">
								<div id="profile-02">
									<div class="user">
										<img src="<?php bloginfo('template_directory');?>/assets/img/friends/fr-06.jpg" class="img-circle" width="80">
										<h4>DJ SHERMAN</h4>
									</div>
								</div>
								<div class="pr2-social centered">
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
								</div>
							</div><! --/panel -->
						</div><!--/ col-md-4 -->
					</div><! --/END 2ND ROW OF PANELS -->
					
					<! -- 3RD ROW OF PANELS -->
					<!-- Product Panel -->
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="product-panel-2 pn">
								<div class="badge badge-hot">HOT</div>
								<img src="<?php bloginfo('template_directory');?>/assets/img/product.jpg" width="200" alt="">
								<h5 class="mt">Flat Pack Heritage</h5>
								<h6>TOTAL SALES: 1388</h6>
								<button class="btn btn-small btn-theme04">FULL REPORT</button>
							</div>
						</div><! --/col-md-4 -->
						
						<! -- Spotify Panel -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="content-panel pn">
								<div id="spotify">
									<div class="col-xs-4 col-xs-offset-8">
										<button class="btn btn-sm btn-clear-g">FOLLOW</button>
									</div>
									<div class="sp-title">
										<h3>LORDE</h3>
									</div>
									<div class="play">
										<i class="fa fa-play-circle"></i>
									</div>
								</div>
								<p class="followers"><i class="fa fa-user"></i> 576,000 FOLLOWERS</p>
							</div>
						</div><! --/col-md-4-->
					
						<! -- Blog Panel -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="content-panel pn">
								<div id="blog-bg">
									<div class="badge badge-popular">POPULAR</div>
									<div class="blog-title">Incredible Title</div>
								</div>
								<div class="blog-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">Read More</a></p>
								</div>
							</div>
						</div><!-- /col-md-4-->
					</div><! -- END 3RD ROW OF PANELS -->
          		
                      <!-- CHART PANELS -->
                      <div class="row">
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="grey-panel pn donut-chart">
                      			<div class="grey-header">
						  			<h5>SERVER LOAD</h5>
                      			</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 70,
												color:"#FF6B6B"
											},
											{
												value : 30,
												color : "#fdfdfd"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
								</script>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p>Usage<br/>Increase:</p>
									</div>
									 <div class="col-sm-6 col-xs-6">
									 	<h2>21%</h2>
									 </div>
	                      		</div>
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
                      	

                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>DROPBOX STATICS</h5>
                      			</div>
								<canvas id="serverstatus02" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 60,
												color:"#1c9ca7"
											},
											{
												value : 40,
												color : "#f68275"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
								</script>
								<p>April 17, 2014</p>
								<footer>
									<div class="pull-left">
										<h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
									</div>
									<div class="pull-right">
										<h5>60% Used</h5>
									</div>
								</footer>
                      		</div><! -- /darkblue panel -->
                      	</div><!-- /col-md-4 -->

                      	<div class="col-md-4 col-sm-4 mb">
					  		<div class="green-panel pn">
					  			<div class="green-header">
						  			<h5>DISK SPACE</h5>
					  			</div>
								<canvas id="serverstatus03" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 60,
												color:"#2b2b2b"
											},
											{
												value : 40,
												color : "#fffffd"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
								</script>
								<h3>60% USED</h3>
					  		</div>
					  	</div><! --/col-md-4 -->
                    </div><!-- /END CHART - 4TH ROW OF PANELS -->
                    
                    
					<! -- 5TH ROW OF PANELS -->
					<div class="row">
						<div class="col-md-4 col-sm-4 mb">
							<!-- REVENUE PANEL -->
							<div class="green-panel pn">
								<div class="green-header">
									<h5>REVENUE</h5>
								</div>
								<div class="chart mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
								</div>
								<p class="mt"><b>$ 17,980</b><br/>Month Income</p>
							</div>
						</div><!-- /col-md-4 -->
					
                      	<div class="col-md-4 col-sm-4 mb">
					        <div class="stock card">
					        	<div class="stock-chart">
					            	<div id="chart"></div>
								</div>
								<div class="stock current-price">
									<div class="row">
						        		<div class="info col-sm-6 col-xs-6"><abbr>AAPL</abbr>
						            		<time>Yesterday</time>
										</div>
									<div class="changes col-sm-6 col-xs-6">
										<div class="value up"><i class="fa fa-caret-up hidden-sm hidden-xs"></i> 694.00</div>
										<div class="change hidden-sm hidden-xs">+4.95 (3.49%)</div>
									</div>
									</div>
								</div>
								<div class="summary">
					            	<strong>18.3 M</strong> <span>SHARES TRADED</span>
								</div>
					        </div>
						</div><! -- /col-md-4 -->
						
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>SITE STATICS</h5>
                      			</div>
                      			<h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
								<p>+ 1,789 NEW VISITS</p>
								<footer>
									<div class="centered">
										<h5><i class="fa fa-trophy"></i> 17,988</h5>
									</div>
								</footer>
                      		</div><! -- /darkblue panel -->
                      	</div><!-- /col-md-4 -->
                    </div><!-- /END 5TH ROW OF PANELS -->


					<! -- 6TH ROW OF PANELS -->
					<div class="row">
						<!-- WEATHER PANEL -->
                      	<div class="col-md-4 col-sm-4 mb">
							<div class="weather pn">
								<i class="fa fa-cloud fa-4x"></i>
								<h2>11º C</h2>
								<h4>BUDAPEST</h4>
							</div>
						</div><!-- /col-md-4-->
						
						<!-- WEATHER-2 PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="weather-2 pn">
								<div class="weather-2-header">
									<div class="row">
										<div class="col-sm-6 col-xs-6">
											<p>NEW YORK</p>
										</div>
										<div class="col-sm-6 col-xs-6 goright">
											<p class="small">Thu Apr 14, 2014</p>
										</div>
									</div>
								</div><!-- /weather-2 header -->
								<div class="row centered">
									<img src="<?php bloginfo('template_directory');?>/assets/img/ny.jpg" class="img-circle" width="120">			
								</div>
								<div class="row data">
									<div class="col-sm-6 col-xs-6 goleft">
										<h4><b>16 ºC</b></h4>
										<h6>21º max</h6>
										<h6>8º min</h6>
									</div>
									<div class="col-sm-6 col-xs-6 goright">
										<h5><i class="fa fa-sun-o fa-2x"></i></h5>
										<h6><b>Sunny</b></h6>
										<h5>7:15 am</h5>
									</div>
								</div>
							</div>
						</div><! --/col-md-4 -->
						
						<!-- WEATHER-3 PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="weather-3 pn centered">
								<i class="fa fa-sun-o"></i>
								<h1>30º C</h1>
								<div class="info">
									<div class="row">
											<h3 class="centered">MADRID</h3>
										<div class="col-sm-6 col-xs-6 pull-left">
											<p class="goleft"><i class="fa fa-tint"></i> 13%</p>
										</div>
										<div class="col-sm-6 col-xs-6 pull-right">
											<p class="goright"><i class="fa fa-flag"></i> 15 MPH</p>
										</div>
									</div>
								</div>
							</div>
						</div><! --/col-md-4 -->
					</div><!-- /END 6TH ROW OF PANELS -->

					
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="<?php bloginfo('template_directory');?>/panels.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/sparkline-chart.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
