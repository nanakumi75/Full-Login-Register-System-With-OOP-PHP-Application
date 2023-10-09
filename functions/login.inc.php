<?php
 include 'connection.php';
 if(isset($_POST['submit'])){
	$emailuser = mysqli_real_escape_string($conn,$_POST['emailuser']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if(empty($emailuser)){
        echo "<div class='alert alert-danger'>
		       <h5><strong>Error! </strong>Enter email address or Usernamde</h5>
		     </div>";
    }else if(empty($password)){
        echo "<div class='alert alert-danger'>
		           <h5><strong>Error! </strong>Your Password is required</h5>
		        </div>";
    }else{
		$sql = "SELECT * FROM philiates WHERE usersEmail='$emailuser' OR usersUsername='$emailuser'";
		$query = $conn->query($sql);
		if($query->num_rows>0){
		 while($row = $query->fetch_assoc()){
			 $isActive = $row['usersActive'];
			 if($isActive == "No"){
				 echo "<div class='alert alert-danger'>
		           <h5><strong>Error! </strong>You have not yet activated your account</h5>
		        </div>";
			 }elseif(PASSWORD_VERIFY($password,$row['usersPassword']) == FALSE){
				echo "<div class='alert alert-danger'>
		           <h5><strong>Error! </strong>The password you entered is wrong</h5>
		        </div>"; 
			 }else if(PASSWORD_VERIFY($password,$row['usersPassword']) == TRUE){
				session_start();
                $_SESSION['id'] = $row['usersID'];
                $_SESSION['user'] = $row['usersUsername'];
                $_SESSION['email'] = $row['usersEmail'];
                header('location:account.php');				
			 }
		 }	
		}else{
			echo "<div class='alert alert-danger'>
		           <h5><strong>Error! </strong>The email address or Username is wrong</h5>
		        </div>";
		}
	}
 }