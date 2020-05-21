<?php
//PLEASE UPLOAD THIS SCRIPT ON A SERVER.

$email = $_POST['email'];
$subject = $_POST['subject'];
$content = $_POST['content'];
$error = "";
if($_POST){
		
	if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
	 	$error.=" The email address entered is invalid.<br>";
	}
	if(!$email) {
		$error.=" An email address is required.<br>";
	}
	if(!$subject) {
		$error.=" A subject is required.<br>";
	}
	if(!$content) {
		$error.=" A message is required.";
	}
	if($error != ""){
		$error = '<div class="alert alert-danger" role="alert"><p><strong>There were errors in your form:</strong></p>'. $error .'</div>';	
	} else{
		
		$emailto = "example@example.com";  //Insert Sender's mail here
		$headers = "from: ".$email;
		
		if(mail($emailto, $subject, $content, $headers)) {
			$error = '<div class="alert alert-success" role="alert">Your request has been submitted successfully. :)</div>';	
		} else {
			$error = '<div class="alert alert-danger" role="alert"><p><strong>Error sending your message, Please try again later.</strong></p></div>';
		}
		
		
	}
	
}



?>



<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Contact Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
<h1>Get in Touch!</h1>
	<div id="error"><? echo $error; ?></div>
	<form method="post">
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
    </div>
	<div class="form-group">
    <label for="content">What would you like to ask us?</label>
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
  	</div>	
    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
  	</form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
/*
<script type="text/javascript">	
	$('form').submit(function (e){
		e.preventDefault();
		
		var errormsg = "";
		if($("#email").val() == ""){
			errormsg = errormsg + "Email field is required!<br>";
		}
		if($("#subject").val() == ""){
			errormsg = errormsg + "Subject field is required!<br>";
		}
		
		if($("#content").val() == ""){
			errormsg = errormsg + "Content field is required!";
		}
		
		if(errormsg != ""){
			   $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were errors in your form:</strong></p>'+ errormsg +'</div>');
		   } else {
			   $('form').unbind("submit").submit();
			   }
		});
</script>
*/
</body>
</html>
