<?php
if(!empty($_POST["Name"]) && !empty($_POST["Email"]) && !empty($_POST["Number"]) && !empty("Mes")) {
$to ='aman76079@gmail.com';
$subject = 'Subscription mail';
$name=$_POST['Name'];
$email = $_POST['Email'];
$number = $_POST['Number'];
$mess = $_POST ['Mes'];

$message = "
<html>
<head>
<title>Tirupati Timber Subscription</title>
</head>
<body>
<p>You are subscribed to Tirupati Timber Depot.</p>
<table>
<tr>
<th>Name</th>:
<td>$name</td>
</tr>
<tr>
<th>Email</th>:
<td>$email</td>
</tr>
<tr>
<th>Number</th>:
<td>$number</td>
</tr>
<tr>
<th>Message</th>:
<td>$mess</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$send = mail($to,$subject,$message,$headers);

if($send)
echo "You have subscribed successfully!";
else
echo "Subscription Failed! Contact Adminstrator..";
	}
?>