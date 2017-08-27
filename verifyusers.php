<?php
session_start();
include 'connection.php';

$username=$_POST['username'];
$pwd=$_POST['password'];

$sql="select * from iloginusers where username like '$username' and password like '$pwd'";
										$result=$conn->query($sql);
										if ($result->num_rows > 0) {
											$_SESSION["status"]="userin";
											$_SESSION["user"]="$username";
											
											header("location:homepage.com");
										}
										else
										{	$_SESSION["status"]="nallow";
											header("location:homepagelog.com");											
										}
									
?>										
									