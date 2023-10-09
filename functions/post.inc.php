<?php
if(isset($_POST['submit'])){
     $name = htmlspecialchars($_POST['name']);
     $email = htmlspecialchars($_POST['email']);
    $file = $_FILES['file']['name'];
    $message = htmlspecialchars($_POST['message']);
    $tmp_name = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $fileerror = $_FILES['file']['error'];
    $filedir = "uploads/";
    $target_file = $filedir . basename($file);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    if(empty($name)){
        echo "<div class='alert alert-danger'>
         <h5><strong>Error! </strong>Please enter your full name</h5>
        </div>";
    }elseif(!preg_match("/^[a-zA-Z ]*$/",$name)){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Your name must be letters only</h5>
       </div>"; 
    }elseif(empty($email)){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Please enter your email address</h5>
       </div>";
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Please enter a valid email address</h5>
       </div>";
    }else if(empty($message)){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Please enter your Cover Letter</h5>
       </div>";
    }else if(empty($file)){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Please upload a Resume</h5>
       </div>";
    }elseif(file_exists($target_file)){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>The image you selected already exisits</h5>
       </div>";   
    }else if($filesize>500000){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Your Resume is too large.</h5>
       </div>";
    }else if($fileerror>0){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>The Resume has an error.</h5>
       </div>";
    }else if($imageFileType != "pdf"){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Only PDF documents are accepted</h5>
       </div>";
    }else{
      move_uploaded_file($tmp_name,$target_file);
      $to ="info@philiates.com";
      $subject = "You have received a new Resume From:" .$name;
      //$from = $email;

      $content = file_get_contents($tmp_name);
      $content = chunk_split(base64_encode($content));

      // a random hash will be necessary to send mixed content
      $separator = md5(time());
      
      // carriage return type (RFC)
      $eol = "\r\n";

          // main header (multipart mandatory)
    $headers = "From: ".$name." <".$email.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

        // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    if (mail($to, $subject, $body, $headers)) {
         echo "<div class='alert alert-success'>
          <h5><strong>Success! </strong>You have successfully submitted Your Resume. We will review it. If  you qualify to teach in China, will contact you for more details.</h5>
         </div>";
     } else {
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Your Resume was not sent. Please check and re-send.</h5>
       </div>"; 
     }
    }
}