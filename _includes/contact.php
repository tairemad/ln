<?php
//       $name = $_POST['name'];
//       $email = $_POST['email'];
//       $message = $_POST['message'];
//       $from = 'From: Lovely Nails Contact Form';
//       $to = 'tairemadailey@gmail.com';
//       $subject = $_POST['subject'];
//	   $phone = $_POST['phone']; 
//
//       $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";
//
//     if ($_POST['submit'] ) {				 
//        if (mail ($to, $subject, $body, $from)) { 
//	    echo '<p>Your message has been sent!</p>';
//	} else { 
//	    echo '<p>Something went wrong, go back and try again!</p>'; 
//	} 
//	 }
//?>



<h1>Contact</h1>

<div id="contact">

<?=$message?>
	
	<h2>Leave us a message</h2>
    <br>
	<form id="FormName" action="send.php" method="post" name="FormName">
		<fieldset>
			<label for="name">*Name:</label>
			<input type="text" id="name" name="name" value="<?=$name?>" autofocus placeholder="Enter your full name" required/>
			<br/>
            <label for="phone">Number:</label>
			<input type="text" id="number" name="number" value="<?=$number?>" autofocus placeholder="Enter your number"/>
			<br/>
			<label for="email">*Email:</label>
			<input type="email" id="email" name="email" value="<?=$email?>" autofocus placeholder="Enter your email address" required />
			<br/>
            <label for="subject">Subject:</label>
			<input type="text" id="subject" name="subject" value="<?=$subject?>" autofocus placeholder="Enter the subject"/>
			<br/>
			<label for="message">*Message:</label>
			<textarea id="message" name="message" autofocus placeholder="What's on your mind?" required><?=$message?></textarea>
			<br/>
			<input type="submit" name="submitButtonName" value="Send message" /> 
            
		</fieldset>
	</form>
    
    </div>