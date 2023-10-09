<?php
include 'functions/connection.php';
 session_start();
 if(isset($_SESSION['id'])){
    header('location:account.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'includes/header.php';?>
</head>
<body class="bg-light">
<?php include 'includes/topbar.php';?>
<hr/>
<?php include 'includes/navigation.php'; ?>
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center py-5">
            <?php 
			  if(isset($_GET['email'],$_GET['activationCode'])){
                $email = $_GET['email'];
                $activationCode = $_GET['activationCode'];

                $sql = "SELECT * FROM philiates WHERE usersEmail ='$email' AND usersActivationCode='$activationCode'";
                $query = $conn->query($sql);
                if($query->num_rows>0){
                  $sql = "UPDATE philiates SET usersActive='Yes' WHERE usersEmail='$email'";
                  if($conn->query($sql) == TRUE){
                    echo "<div class='alert alert-success'>
                    <h5><strong>Success! </strong>Your account is now activated. You can log in now</h5>
                   </div>";  
                  }else{
                    echo "<div class='alert alert-danger'>
                    <h5><strong>Error! </strong>Some wrong wrong Happened. We could not activate your account.</h5>
                   </div>";
                  }
                }else{
                    echo "<div class='alert alert-danger'>
                     <h5><strong>Error! </strong>Email address or Activation Code is wrong</h5>
                    </div>";
                }
              }
			?>
        </div>
    </div>
  </div>
<?php include 'includes/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>