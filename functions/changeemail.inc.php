<?php
include 'connection.php';

if(isset($_SESSION['id'])){
    if(isset($_POST['submit'])){
       $id = $_SESSION['id'];
        $email = mysqli_real_escape_string($conn,$_POST['email']);

        if(empty($email)){
            echo "<div class='alert alert-danger'>
             <h5><strong>Error! </strong>Please enter the new Email Address</h5>
            </div>";
        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<div class='alert alert-danger'>
            <h5><strong>Error! </strong>Please enter a valid email address.</h5>
           </div>"; 
        }else{
            $sql = "UPDATE philiates SET usersEmail='$email' WHERE usersID='$id'";
            if($conn->query($sql)){
                echo "<div class='alert alert-success'>
             <h5><strong>Success! </strong>Your new email was saved successfully</h5>
            </div>";
            }else{
                echo "<div class='alert alert-danger'>
             <h5><strong>Error! </strong>We could not save your new email</h5>
            </div>";
            }
        }
    }
}