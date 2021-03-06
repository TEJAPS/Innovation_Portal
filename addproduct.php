<?php
session_start();
include 'connection.php';
if($_SESSION["status"]=="mallow")
{}
else
{ header("location:404.html");
session_destroy();
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<!--<link rel="icon" type="image/png" href="assets/img/favicon.ico">-->
	<link rel="shortcut icon" href="favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Innovation Portal</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="dashboard.com">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
					<li>
                    <a href="adminProfile.com">
                        <i class="pe-7s-note2"></i>
                        <p>My Profile</p>
                    </a>
                </li>
				<li>
                    <a href="adminnotifications.com">
                        <i class="pe-7s-note2"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active">
                    <a href="addproduct.com">
                        <i class="pe-7s-user"></i>
                        <p>Add Profile</p>
                    </a>
                </li>
				<li>
                    <a href="updateproduct.com">
                        <i class="pe-7s-user"></i>
                        <p>Update Profile</p>
                    </a>
                </li>
				<li>
                    <a href="deleteproduct.com">
                        <i class="pe-7s-user"></i>
                        <p>Delete profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.com">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
							
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
									<?php
							$sql = "SELECT *  from notifications order by date_requested";		
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {																			
								while($row = $result->fetch_assoc())
									{
							  		}
							}
							?>
                                    <span class="notification hidden-sm hidden-xs"><?php echo $result->num_rows; ?></span>
									
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
							  
                              <ul class="dropdown-menu">
							  	<?php
							$sql = "SELECT *  from notifications order by date_requested";		
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {																			
								while($row = $result->fetch_assoc())
									{
										?>
							
                                <li><a href="#"><?php echo $row['end_user_name']; ?></a></li>    
									<?php   		}
											}
									?>
                              </ul>
							
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="logout.com">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Profile</h4>
                            </div>
                            <div class="content">
                                <form action="insert.com" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>name_of_organisation</label>
                                                <input type="text" class="form-control"  placeholder="Company" name="1" id="1" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>product_name</label>
                                                <input type="text" class="form-control" placeholder="Username" name="2" id="2" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label >product_decription</label>
                                                <input type="text" class="form-control" placeholder="Email" name="3" id="3" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>linkages_to_research</label>
                                                <input type="text" class="form-control" placeholder="Company" name="4" id="4">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>stage_of_development</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="5" id="5">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>business_offer</label>
                                                <input type="text" class="form-control" placeholder="Home Address" name="6" id="6">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>attach_with_mail </label>
                                                <!--<input type="file" class="form-control" placeholder="City" id="image" name="image">-->
													attach_with_mail<input type="file" id="image" name="image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>invitations_to</label>
                                                <input type="text" class="form-control" placeholder="Invtations to" name="8" id="8">
                                            </div>
                                        </div>                                        
                                    </div>

                                    <div class="row">                                        
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Cost</label>                                                
												<input type="text" name="14" id="14" class="form-control">
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>description</label>
												<textarea class="form-control" cols="40" rows="4" name="desc" placeholder="Say something about this image..."></textarea>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>date</label>                                                
												<input type="date" class="form-control" name="10" id="10">
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country</label>                                                
												<select class="form-control" name="11" id="11">                  
												  <?php include 'countries.php';?>										  
												</select>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>innovator_name</label>                                                
												<input type="text" name="12" id="12" class="form-control">
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Category</label>                                                
												<select class="form-control" name="13" id="13">                  
												  <?php include 'categories.php';?>										  
												</select>
                                            </div>
                                        </div>
	                               </div>
								   <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>email</label>                                                
												<input type="email" name="15" id="15" class="form-control">
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>phone1</label>                                                
												<input type="text" name="16" id="16" class="form-control" required>
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>phone2</label>                                             
												<input type="text" name="17" id="17" class="form-control">
                                            </div>
                                        </div>
	                               </div>
								   <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>city</label>                                                
												<input type="text" name="18" id="18" class="form-control">
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>state</label>                                                
												<input type="text" name="19" id="19" class="form-control">
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address</label>                                                
												<textarea class="form-control" cols="40" rows="4" name="20" placeholder="enter address"></textarea>
                                            </div>
                                        </div>
	                               </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="insert_btn">Add Profile</button>
									
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
					
					
								  
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>