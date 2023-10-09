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
<div class="container-fluid bg-info my-3 p-5">
    <div class="row">
        <div class="col-md-12">
            <p class="h3 text-center">Before you submit your Resume, Please ckick the link below to see if you are qualified to teach in China.</p>
           <p class="text-center"> <a href="teach.php" class="btn btn-lg btn-dark">Check if You Qualify</a><p>
        </div>
    </div>
</div>
<hr>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <p class="display-6">Upload Your Resume To Apply To Schools</p>
            <p class="h5">We will check your Resume and match you with the Positions that Fit Your Qualification.<br/>We may ask you to provide more documentation if necessary.</p>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <p class="h5 text-center">Resume Upload Form</p>
                </div>
                <div class="card-body">
                    <div class="my-3 text-center">
                        <?php include 'functions/post.inc.php';?>
                    </div>
                    <form action="post.php" method="post" enctype="multipart/form-data">
                        <div class="my-3">
                            <label for="name">Full name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" name="name" id="" class="form-control border border-dark" placeholder="Your full name">
                            </div>
                        </div>
                        <div class="my-3">
                            <label for="email">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" name="email" id="" class="form-control border border-dark" placeholder="Your Email address">
                            </div>
                        </div>
                        <div class="my-3">
                            <label for="name">Your Resume *Must Be PDF only*</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-filetype-pdf"></i></span>
                                <input type="file" name="file" class="form-control border border-dark">
                            </div>
                        </div>
                        <div class="my-3">
                            <label for="message">Cover Message</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-pencil"></i></span>
                                <textarea name="message" id="" class="form-control border border-dark" placeholder="Write a cover message"></textarea>
                            </div>
                        </div>
                        <div class="my-3">
                            <input type="submit" name="submit" value="Send Resume Now" class="form-control btn btn-lg btn-primary">
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