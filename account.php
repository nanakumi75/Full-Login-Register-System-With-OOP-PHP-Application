<?php
 session_start();
 include 'functions/connection.php';
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
            <h4 class="text-secondary display-6">Your Account Details</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php
            if(isset($_SESSION['id'])){
                $id = $_SESSION['id'];
                $sql = "SELECT * FROM philiates WHERE usersID='$id'";
                $query = $conn->query($sql);
                if($query->num_rows>0){
                  while($row = $query->fetch_assoc()){
                    echo "<table class='table table-striped table-bordered'>
                     <thead>
                      <tr>
                       <th>User ID</th>
                       <th>User Name</th>
                       <th>User Email</th>
                       <th>User Username</th>
                       <th>Action</th>
                      </tr>
                     </thead>
                     <tbody>
                      <tr>
                       <td>".$row['usersID']."</td>
                       <td>".$row['usersName']."</td>
                       <td>".$row['usersEmail']."</td>
                       <td>".$row['usersUsername']."</td>
                       <td><a href='deleteaccount.php' class='btn btn-danger'><i class='bi bi-trash'></i>Delete Account</a></td>
                      </tr>
                     </tbody>
                    </table>";
                  }
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="border p-2">
            <a href="changeusername.php" class="btn btn-success btn-lg form-control"><i class="bi bi-pencil"></i> Change Username</a>
            </div>
        </div>
        <div class="col-md-4">
        <div class="border p-2">
            <a href="changepassword.php" class="btn btn-primary btn-lg form-control"><i class="bi bi-lock"></i> Change Password</a>
            </div>
        </div>
        <div class="col-md-4">
        <div class="border p-2">
            <a href="changeemail.php" class="btn btn-warning btn-lg form-control"><i class="bi bi-envelope"></i> Change Email</a>
            </div> 
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>