<?php
  if(isset($_POST['submit'])){
     $name = htmlspecialchars($_POST['name']);
     $email = htmlspecialchars($_POST['email']);
     $subject = htmlspecialchars($_POST['subject']);
     $message = htmlspecialchars($_POST['message']);


     if(empty($name)){
      echo "<div class='alert alert-danger'>
      <h5><strong>Error! </strong> Your name is required</h5>
    </div>";
     }elseif (!preg_match("/^[a-zA-Z ]*$/",$name)){
      echo "<div class='alert alert-danger'>
      <h5><strong>Error! </strong> Your name must be letters only</h5>
    </div>";
     }else if(empty($email)){
      echo "<div class='alert alert-danger'>
      <h5><strong>Error! </strong> Your email address is required</h5>
    </div>";
     }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo "<div class='alert alert-danger'>
      <h5><strong>Error! </strong> Your email address is invalid</h5>
    </div>";
     }else if(empty($subject)){
      echo "<div class='alert alert-danger'>
      <h5><strong>Error! </strong> Please write your message subject</h5>
    </div>";
     }elseif(empty($message)) {
      echo "<div class='alert alert-danger'>
      <h5><strong>Error! </strong> Please write your message. You cannot send an empty message</h5>
    </div>";
     }else{
       $headers = "From: " .$email;
	   $mailTo = "info@philiates.com";
	     $message = "You have received an email from " .$name.".\n\n".$message;
		  if(mail($mailTo,$subject,$message,$headers)){
        echo "<div class='alert alert-succcess'>
          <h5><strong>Success! </strong> Your message was sent successfully. We will reply soon</h5>
        </div>";
		  }else{
        echo "<div class='alert alert-danger'>
          <h5><strong>Error! </strong> Your message was not sent. Please resend</h5>
        </div>";
		  }
     }
  }
 ?>
