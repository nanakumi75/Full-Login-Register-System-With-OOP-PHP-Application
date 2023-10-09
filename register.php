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
                    <p class="h4 text-center">Register For An Account</p>
                </div>
                <div class="card-body">
                    <div class="my-3 text-center">
                       <?php include 'functions/register.inc.php'; ?>
                    </div>
                 <form action="register.php" method="post">
                    <div class="my-3">
                        <label for="name">Full name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" name="name" id="" class="form-control border border-dark" placeholder="Full name">
                        </div>
                    </div>
                    <div class="my-3">
                        <label for="name">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="text" name="email" id="" class="form-control border border-dark" placeholder="Email address">
                        </div>
                    </div>
                    <div class="my-3">
                        <label for="name">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-people"></i></span>
                            <input type="text" name="username" id="" class="form-control border border-dark" placeholder="Username">
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
                      <input type="submit" name="submit" class="form-control btn btn-success btn-lg" value="Register">
                    </div>
                 </form>
                </div>
                <div class="card-footer">
                 <p>Already a member? <a href="login.php">Login Here</a></p>
                </div>
            </div>
        </div>
    </div>
  </div>
<?php include 'includes/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>