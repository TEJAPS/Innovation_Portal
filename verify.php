<?php
session_start();
include 'connection.php';

$username=$_POST['inputEmail'];
$pwd=$_POST['inputPassword'];

$sql="select * from ilogin where username like '$username' and password like '$pwd'";
										$result=$conn->query($sql);
										if ($result->num_rows > 0) {
											$_SESSION["status"]="mallow";
											$_SESSION["admin_name"]="$username";
											header("location:dashboard.com");
										}
										else
										{	$_SESSION["status"]="nallow";
									session_destroy();
											header("location:homepagelog.php");											
										}
									
?>										
									