<?php
 include 'connection.php';
session_start();
include 'connection.php';
if($_SESSION["status"]=="mallow")
{}
else
{ header("location:404.html");
session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Send HTML Email from Localhost using PHP and PHPMailer</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body bgcolor="#6ba2f9">
<div class="container">
	<div class="row">
	<!--	<h1>Send HTML Email from Localhost using PHP and PHPMailer</h1> -->
		<div class="col-md-6">
			<?php
				echo $proname=$_POST['proname'];
				$email = $_POST['email'];
				require 'PHPMailer/PHPMailerAutoload.php';
				$mail = new PHPMailer;

				$mail->isSMTP();                                   // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                            // Enable SMTP authentication
				$mail->Username = 'innovationportalvnr@gmail.com';          // SMTP username
				$mail->Password = 'zxcvbnmqwertyuiop'; // SMTP password
				$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                 // TCP port to connect to

				$mail->setFrom('innovationportalvnr@gmail.com', 'InnovationPortal');
				#$mail->addReplyTo('tejapolisetty143@gmail.com', 'InnovationPortal');
				$mail->addAddress($email);   // Add a recipient
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');

				$mail->isHTML(true);  // Set email format to HTML

				#$bodyContent = '<h1>How to Send HTML Email using PHP in Localhost by Weidea4u</h1>';
				$bodyContent = '<p>This is the email sent from <b>InnovationPortal</b></p>';
				//getting values of all attributes of particular prouct name
		$sql = "SELECT *  from iproduct where product_name like '".$_POST['proname']."'";		
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
			{
			while($row = $result->fetch_assoc())
			    {
					$name_of_organisation=$row['name_of_organisation'];
					$product_name=$row['product_name'];
					$product_description=$row['product_description'];
					$linkages_to_research=$row['linkages_to_research'];
					$stage_of_development=$row['stage_of_development'];
					$business_offer=$row['business_offer'];
					$attach_with_mail=$row['attach_with_mail'];
					$invitations_to=$row['invitations_to'];
					$description=$row['description'];
					$date_added=$row['date_added'];
					$country=$row['country'];
					$innovator_name=$row['innovator_name'];
					$category=$row['category'];
					$cost=$row['cost'];
					// echo $date_added;
				}//while
			}//if
			$bodyContent .="Name of the organisation  = ".$name_of_organisation."<br> ";
			$bodyContent .="Name of the Product  = ".$product_name."<br> ";
			$bodyContent .="Product Description  = ".$product_description."<br> ";
			$bodyContent .="Linkages To Research  = ".$linkages_to_research."<br> ";
			$bodyContent .="Stage Of Development  = ".$stage_of_development."<br> ";
			$bodyContent .="Buisness Offer  = ".$business_offer."<br> ";
			#$bodyContent .="Attach with Mail  = ".$name_of_organisation."<br> ";
			$bodyContent .="Invitations To  = ".$invitations_to."<br> ";
			$bodyContent .="Description = ".$description."<br> ";
			$bodyContent .="Date Added  = ".$date_added."<br> ";
			$bodyContent .="Country = ".$country."<br> ";
			$bodyContent .="Innovator Name  = ".$innovator_name."<br> ";
			$bodyContent .="Category  = ".$category."<br> ";
			$bodyContent .="Cost  = ".$cost."<br> ";
			
			

				$mail->Subject = 'Details from InnovationPortal for the product you Requested';
				$mail->Body    = $bodyContent;

				if(!$mail->send()) {
				    ?>
				    <div class="alert alert-danger alert-dismissable fade in">
				   	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   		Message could not be sent.
				   	</div>
				    <?php
				} else {
				    ?>
				   	<div class="alert alert-success alert-dismissable fade in">
				   	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   		Message has been sent
				   	</div>
				    <?php
				}
			header("location:adminnotifications.php");
			?>
			
		</div>
	</div>
</div>
</body>
</html>