<?php
 session_start();
 if(isset($_SESSION['id'])){
    header('Location:account.php');
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
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <p class="h4 text-center">Login To Your Account</p>
                </div>
                <div class="card-body">
                    <div class="my-3 text-center">
                         <?php /*include 'functions/login.inc.php';*/?>
                    </div>
                 <form action="login.php" method="post">
                    <div class="my-3">
                        <label for="name">Email or Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="text" name="emailuser" id="" class="form-control border border-dark" placeholder="Email address or Username">
                        </div>
                    </div>
                    <div class="my-3">
                        <label for="name">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" name="password" id="" class="form-control border border-dark" placeholder="Password">
                        </div>
                    </div>
                    <div class="my-3">
                      <input type="submit" name="submit" class="form-control btn btn-success btn-lg" value="Login">
                      <p>
                    <span class="float-end"><a href="passwordforget.php">Password Forget</a></span>  
                    </p>
                    </div>
                 </form>
                </div>
                <div class="card-footer">
                 <p>
                 <span class="float-start">Not a member yet? <a href="register.php">Register Here</a></span>
                </p>
                </div>
            </div>
        </div>
    </div>
  </div>
<?php include 'includes/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>