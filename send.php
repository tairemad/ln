
<?php

$name = trim($_POST['name']);

$number = trim($_POST['number']);

$email = trim($_POST['email']);

$subject = trim($_POST['subject']);

$message = trim($_POST['message']);



/// Validate

$message = "<h2>Error!</h2><h4>You need to fill in the following:</h4><ul>";

if($name == ""){$message .= "<li><b>Name</b> Not completed!"; $fail = "Y";}

if($email == ""){$message .= "<li><b>Email</b> Not completed!"; $fail = "Y";}

if($message == ""){$message .= "<li><b>Message</b> Not completed!"; $fail = "Y";}

if($fail == "Y")

{

$message .= "</ul>";

include("contact.php");

die();

}

///



$EmailTo = "support@hostclearly.com";

$Subject = "Contact from Lovely Nails Website"; /// Add a subject



$validationOK=true;

if (trim($email)=="") $validationOK=false;

if (!$validationOK) {

  echo "Error! E-mail was not sent. Please check you code.";

  exit;

}





$Body = "";

$Body .= "Name:\n$name\n\n";

$Body .= "Number:\n$number\n\n";

$Body .= "Email:\n$email\n\n";

$Body .= "Subject:\n$subject\n\n";

$Body .= "Message:\n$message\n\n";



if($Subject == NULL) {$Subject = "From $email";}

$success = mail($EmailTo, $Subject, $Body, "From: <$email>");



if ($success){ echo "Success! Your e-mail was sent! <br> Return to site <a href='http://tairemadailey.com/ln/index.php'>HERE</a>";}

else{  echo "Error! Your e-mail was not sent!";}

?>
