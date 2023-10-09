<?php
include 'connection.php';

if(isset($_SESSION['id'])){
    if(isset($_POST['submit'])){
        $id = $_SESSION['id'];
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        if(empty($password)){
            echo "<div class='alert alert-danger'>
             <h5><strong>Error! </strong>Please enter the new Password</h5>
            </div>";
        }else if(strlen($password)<6){
            echo "<div class='alert alert-danger'>
            <h5><strong>Error! </strong>Password should be at least 6 characters.</h5>
           </div>"; 
        }else{
            $hashed = PASSWORD_HASH($password,PASSWORD_DEFAULT);
            $sql = "UPDATE philiates SET usersPassword='$hashed' WHERE usersID='$id'";
            if($conn->query($sql)){
                echo "<div class='alert alert-success'>
             <h5><strong>Success! </strong>Your new Password was saved successfully</h5>
            </div>";
            }else{
                echo "<div class='alert alert-danger'>
             <h5><strong>Error! </strong>We could not save your new Password</h5>
            </div>";
            }
        }
    }
}