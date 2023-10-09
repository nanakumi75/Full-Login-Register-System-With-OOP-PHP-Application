<?php 
include 'connection.php';
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $password_repeat = mysqli_real_escape_string($conn,$_POST['passwordrepeat']);

    if(empty($email)){
        echo "<div class='alert alert-danger'>
         <h5><strong>Error! </strong>Please enter your current email address.</h5>
        </div>";
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<div class='alert alert-danger'>
         <h5><strong>Error! </strong>Please enter a valid email address.</h5>
        </div>"; 
    }else if(empty($password)){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Please create a new password.</h5>
       </div>";
    }else if(strlen($password <6)){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Your new password must be at least 6 characters long.</h5>
       </div>";
    }else if(empty($password_repeat)){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Please repeat the new password.</h5>
       </div>";
    }else if($password_repeat != $password){
        echo "<div class='alert alert-danger'>
        <h5><strong>Error! </strong>Password does not match.</h5>
       </div>";
    }else{
        $sql = "SELECT * FROM philiates WHERE usersEmail='$email'";
        $query = $conn->query($sql);
        if($query->num_rows>0){
          $hashed = PASSWORD_HASH($password,PASSWORD_DEFAULT);
          $sql = "UPDATE philiates SET usersPassword='$hashed' WHERE usersEmail='$email'";
          if($conn->query($sql)){
            echo "<div class='alert alert-success'>
            <h5><strong>Success! </strong>Your new password was saved successfully. You can login now.</h5>
           </div>";
          }else{
            echo "<div class='alert alert-danger'>
            <h5><strong>Error! </strong>We could not save your new password. Please check.</h5>
           </div>";
          }
        }else{
            echo "<div class='alert alert-danger'>
            <h5><strong>Error! </strong>The email address you have entered is wrong.</h5>
           </div>";
        }
    }
}