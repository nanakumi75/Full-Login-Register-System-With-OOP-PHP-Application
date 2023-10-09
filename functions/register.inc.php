<?php
include 'connection.php';
  
if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $str = rand();
  $hashedCode = hash("sha256", $str);
  $activationCode = $hashedCode;

    if(empty($name)){
		echo "<div class='alert alert-danger'>
		 <h5><strong>Error! </strong>Your full name is required</h5>
		</div>";
	}elseif(!preg_match("/^[a-zA-Z ]*$/",$name)){
		echo "<div class='alert alert-danger'>
		 <h5><strong>Error! </strong>Your full name must be only letters</h5>
		</div>";
	}elseif(empty($email)){
        echo "<div class='alert alert-danger'>
		 <h5><strong>Error! </strong>Your email address is required</h5>
		</div>";
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<div class='alert alert-danger'>
		 <h5><strong>Error! </strong>Your email address is invalid</h5>
		</div>";
    }else if(empty($username)){
		echo "<div class='alert alert-danger'>
		 <h5><strong>Error! </strong>Your username is required</h5>
		</div>";
	}else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		echo "<div class='alert alert-danger'>
		 <h5><strong>Error! </strong>Your username must be letters and numbers only</h5>
		</div>";
	}else if(empty($password)){
		echo "<div class='alert alert-danger'>
		 <h5><strong>Error! </strong>Password is required</h5>
		</div>";
	}else if(strlen($password)<6){
		echo "<div class='alert alert-danger'>
		 <h5><strong>Error! </strong>Password must be at least 6 characters long</h5>
		</div>";
	}else{
		$sql = "SELECT * FROM philiates WHERE usersEmail = '$email'";
		$query = $conn->query($sql);
		if($query->num_rows>0){
			echo "<div class='alert alert-danger'>
		 <h5><strong>Error! </strong>The email address is already in use</h5>
		</div>";
		}else{
			$sql = "SELECT * FROM philiates WHERE usersUsername='$username'";
			$query = $conn->query($sql);
			if($query->num_rows>0){
				echo "<div class='alert alert-danger'>
		           <h5><strong>Error! </strong>The username is already in use</h5>
		        </div>";
			}else{
				$hashedpwd = PASSWORD_HASH($password,PASSWORD_DEFAULT);
				$sql = "INSERT INTO philiates(usersName,usersEmail,usersUsername,usersPassword,usersActivationCode,usersActive)
				VALUES('$name','$email','$username','$hashedpwd','$activationCode','No')";
				if($conn->query($sql)){
					$to = $email;
                    $url = "https://www.philiates.com/activate.php?email=".$email ."&activationCode=".$activationCode;
                    $from = "no-reply@philiates.com";
                    $subject = 'Activate your Account!';
                    $message = '<p>Click the link below to verify your account!</p>';
                    $message.= '<p><a href="'.$url.'">"'.$url.'"</a></p>';
                    $headers = "From: Philiates| Teach abroad in China <no-reply@philiates.com>\r\n";
                    $headers.= "Reply-To:no-reply@philiates.com\r\n";
                    $headers.= "Content-type:text/html\r\n";
                    mail($to,$subject,$message,$headers);
                        echo '<div class="alert alert-success">
                         <h5><strong>Success! </strong>Registration is successful</h5>
                        </div>';
                        echo "<div class='alert alert-success'>
                         <h5>Please check your email to activate your account!</h5>
                        </div>"; 
				}else{
					echo "<div class='alert alert-danger'>
		              <h5><strong>Error! </strong>We could not register your account</h5>
		            </div>"; 
				}
			}
		}
	}
}
