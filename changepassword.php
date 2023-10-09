<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("Location:login.php");
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
<div class="container my-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <p class="display-6">Reset Your Password</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body shadow">
                <div class="my-3">
                    <?php  include 'functions/changepassword.inc.php';?>
                </div>
                <form action="changepassword.php" method="post">
                    <div class="my-3">
                        <label for="password">New Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" name="password" id="" class="form-control border border-dark" placeholder="Enter A new Password">
                        </div>
                    </div>
                     
                    <div class="my-3">
                        <input type="submit" name="submit" value="Save New Password" class="form-control btn btn-lg btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>