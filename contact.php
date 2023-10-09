<?php session_start();?>
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
        <div class="col-md-12">
            <p class="text-center">We are happy to hear from you. Fill the form below to reach us. We weill be with you soon.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <p class="display-6 text-center">Contact Form</p>
                </div>
                <div class="card-body">
                    <div class="my-3 text-center">
                        <?php include 'functions/contact.inc.php';?>
                    </div>
                  <form action="contact.php" method="post">
                    <div class="my-3">
                        <label for="name">Full name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" name="name" id="" class="form-control border border-dark" placeholder="Enter full name">
                        </div>
                    </div>
                    <div class="my-3">
                        <label for="email">Email address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="text" name="email" id="" class="form-control border border-dark" placeholder="Enter email address">
                        </div>
                    </div>
                    <div class="my-3">
                        <label for="subject">Subject</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-question"></i></span>
                            <input type="text" name="subject" id="" class="form-control border border-dark" placeholder="Enter your mesage">
                        </div>
                    </div>
                    <div class="my-3">
                        <label for="message">Message</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-pencil"></i></span>
                            <textarea name="message" id="" class="form-control border border-dark" placeholder="Enter your message"></textarea>
                        </div>
                    </div>
                    <div class="my-3">
                        <input type="submit" value="Send Message Now"  name="submit" class="btn btn-lg btn-primary form-control">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>