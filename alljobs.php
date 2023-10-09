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
<div class="container-fluid bg-primary my-3 py-3">
    <div class="row">
      <div class="col-md-12 text-center">
       <p class="display-6">Teaching Jobs in China, Apply Now !</p>
      </div>
    </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-4" id="schools">
         <img src="schools/changsha.jpg" alt="" class="img-fluid rounded">
         <h5 class="text-center text-warning py-2">Primary Schools in Changsha</h5>
         <p>Hunan Mass Media Vocational And Technical College</p>
      </div>
      <div class="col-md-4" id="schools">
      <img src="schools/langfang.jpg" alt="" class="img-fluid rounded">
      <h5 class="text-center text-warning py-2">Langfang City</h5>
         <p>International Schools in Langfang City Needs Mathematics Teachers</p>
      </div>
      <div class="col-md-4" id="schools">
      <img src="schools/beijing.jpg" alt="" class="img-fluid rounded">
      <h5 class="text-center text-warning py-2">Primary Schools in Beijing</h5>
         <p>Many school children in Beijing Need English</p>
      </div>
   </div>
   <div class="row my-4">
      <div class="col-md-4" id="schools">
         <img src="schools/kg.jpg" alt="" class="img-fluid rounded">
         <h5 class="text-center text-warning py-3">Kindergartens In Qingdao City</h5>
         <p>Kindergarten Children all over China Need English</p>
      </div>
      <div class="col-md-4" id="schools">
      <img src="schools/baoding.jpg" alt="" class="img-fluid rounded">
      <h5 class="text-center text-warning py-2">Schools in Guangdong Province</h5>
         <p>Many Schools in Guangdong Province need Foreign Teachers</p>
      </div>
      <div class="col-md-4" id="schools">
      <img src="schools/qingdao.jpg" alt="" class="img-fluid rounded">
      <h5 class="text-center text-warning py-2">Qingdao City Schools</h5>
         <p>TV and Radio University in Shandong Province</p>
      </div>
   </div>
</div>
<div class="container-fluid" id="jobboard">
   <div class="row">
      <div class="col-md-12 py-5">
      <p class="display-6 text-center text-secondary">PHILIATES Teach in China Job Board</p>
      <p class="display-6 text-center">Hundreds of Teaching jobs in China, fully screened, updated daily.</p>
      </div>
   </div>
</div>
<div class="container py-5">
   <div class="row">
      <div class="col-md-12 text-center">
         <p class="display-6 text-center">Locations to Teach <span class="text-warning">in China</span></p>
      </div>
   </div>
</div>
<div class="container text-center">
   <div class="row">
      <div class="col-md-3">
         <div class="border p-1" id="location">
            <img src="locations/baoding.jpg" alt="" class="img-fluid rounded">
            <p class="h3">Baoding City</p>
         </div>
      </div>
      <div class="col-md-3">
         <div class="border p-1" id="location">
         <img src="locations/beijing.jpg" alt="" class="img-fluid rounded"> 
         <p class="h3">Beijing City</p>
         </div>
      </div>
      <div class="col-md-3">
         <div class="border p-1" id="location">
         <img src="locations/chengde.jpg" alt="" class="img-fluid rounded">
         <p class="h3">Chengde City</p>
         </div>
      </div>
      <div class="col-md-3">
         <div class="border p-1" id="location">
         <img src="locations/changsha.jpg" alt="" class="img-fluid rounded">
         <p class="h3">Changsha City</p>
         </div>
      </div>
   </div>
   <div class="row my-2">
      <div class="col-md-3">
         <div class="border p-1" id="location">
            <img src="locations/guangzhou.jpg" alt="" class="img-fluid rounded">
            <p class="h3">Guangzhou City</p>
         </div>
      </div>
      <div class="col-md-3">
         <div class="border p-1" id="location">
         <img src="locations/hangjiakou.jpg" alt="" class="img-fluid rounded"> 
         <p class="h3">Hangjiakou City</p>
         </div>
      </div>
      <div class="col-md-3">
         <div class="border p-1" id="location">
         <img src="locations/shengyang.jpg" alt="" class="img-fluid rounded">
         <p class="h3">Shengyang City</p>
         </div>
      </div>
      <div class="col-md-3">
         <div class="border p-1" id="location">
         <img src="locations/tangshan.jpg" alt="" class="img-fluid rounded">
         <p class="h3">Tangshan City</p>
         </div>
      </div>
   </div>
</div>
<div class="container">
<div class="row my-4">
      <div class="col-md-12 text-center">
        <a href="post.php" class="btn btn-success btn-lg"><i class="bi bi-pencil"></i> UPLOAD YOUR RESUME NOW</a>
      </div>
   </div>
</div>
<?php include 'includes/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>