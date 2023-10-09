<?php
include 'connection.php';

if(isset($_SESSION['id'])){
    if(isset($_POST['submit'])){
       $id = $_SESSION['id'];
        $username = mysqli_real_escape_string($conn,$_POST['username']);

        if(empty($username)){
            echo "<div class='alert alert-danger'>
             <h5><strong>Error! </strong>Please enter the new Username</h5>
            </div>";
        }else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            echo "<div class='alert alert-danger'>
            <h5><strong>Error! </strong>Username can only be letters and numbers.</h5>
           </div>"; 
        }else{
            $sql = "UPDATE philiates SET usersUsername='$username' WHERE usersID='$id'";
            if($conn->query($sql)){
                echo "<div class='alert alert-success'>
             <h5><strong>Success! </strong>Your new Username was saved successfully</h5>
            </div>";
            }else{
                echo "<div class='alert alert-danger'>
             <h5><strong>Error! </strong>We could not save your new Username</h5>
            </div>";
            }
        }
    }
}