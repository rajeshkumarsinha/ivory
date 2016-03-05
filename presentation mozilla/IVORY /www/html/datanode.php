<!DOCTYPE html>

<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Ivory the Bright | Demo1</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Bhavishya Himanshu" >
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Admin</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul 
							class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>Notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                         	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>TASKS</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>                                
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						
					
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<li>
							<li>
							<a href="#" id="toggle-fullscreen" class="hidden-phone hidden-tablet">
							<i class="halflings-icon white fullscreen"></i>
							</a>
						</li>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Username
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<!--<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>-->
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<div class="container-fluid-full">
		<div class="row-fluid">
<!-- start: Main Menu -->
			<div class="container-fluid-full">
		<div class="row-fluid">
				<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="Dashboard.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<!--<li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>-->
						<li><a href="Jobs.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Jobs</span></a></li>
						<!--<li><a href="Hosts.html"><i class="icon-eye-open"></i><span class="hidden-tablet">IPs Available</span></a></li>-->
						<li>
							<a class="dropmenu" href="#"><i class="icon-briefcase"></i><span class="hidden-tablet"> Services</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="HDFS.html"><i class="icon-hdd"></i><span class="hidden-tablet">HDFS 1</span></a></li>
								<li><a class="submenu" href="Mapred (2).html"><i class="icon-retweet"></i><span class="hidden-tablet"> Mapreduce</span></a></li>
								<li><a class="btn-primary noty submenu" href="#" data-noty-options='{"text":"Framework Support is Coming soon...","layout":"top","type":"information"}'><i class="icon-cargo"></i><span class="hidden-tablet"> 
						      	Framework
								</span></a>
								</li>
							</ul>	
						</li>
						<li><a href="UserConsole.html"><i class="icon-user"></i><span class="hidden-tablet"> User Console</span></a></li>
						<li><a href="FileManager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
						<div id="content" class="span10">
			
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-signal"></i>
					<a href="#">Connected IPs</a>
				</li>
			</ul>
			
			
			<div id = "leftColumn">
			<table style="width:100%">
	<?php		
      $myfile = fopen("/var/www/cgi-bin/datanode.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
      while(!feof($myfile)) {
	  $str = fgets($myfile);
	  $str=str_replace("\n","",$str);
	  $svar = "/vnc/vnc.html?autoconnect=true&host=";
	  $vvar = "&port=6666";
	  echo '<tr><td>';echo "$str";
      echo '</td><td><a href='; echo "$svar";echo "$str";echo "$vvar";echo '><font color="blue" size = "3">';
      echo "for web"; echo '</font></a></td><td>';echo '<a href='; echo "qr.html"; echo '><font color="blue" size = "3">';
      echo "for mobile"; echo '</font></a></td></tr>';

    
      //echo '<a href='; echo '"\"$str\"';echo '/vnc/vnc.html?host='; echo "$str"; echo'&port=6667';  echo '"><font color="blue" size = "3">';echo "$str"; echo '</font></a><br>';
      }
      fclose($myfile);
      ?>
      </table>
			</div>
			
	
				
				</div>
		</div>
		
		
			<!--starting Footer-->
			<div class="clearfix"></div>
		
<style type="text/css">
footer{
width: 100%;
bottom: 0%;
position: fixed;
}
</style>	

    <footer>

		<p>
			<span style="text-align:center;float:left">&copy; 2015 <a href="Developers.html" alt="Mathur_Maurya_Dashboard">Hadoop Basic Services Dashboard</a></span>
			
		</p>

	</footer>
	

	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>