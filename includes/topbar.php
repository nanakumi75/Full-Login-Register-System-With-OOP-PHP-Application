 
            <div class="container">
            <ul class="nav justify-content-end mt-2">
             <?php 
              if(isset($_SESSION['id'])){
                ?>
             <li class="nav-item">
               <a href="teach.php" class="btn btn-info btn-sm mx-2"><i class="bi bi-mortarboard-fill"></i> Teach English In China</a>
             </li>
             <li class="nav-item">
               <a href="post.php" class="btn btn-sm btn-success"><i class="bi bi-card-list"></i> Post Your Resume</a>
             </li>
             <li class="nav-item">
               <a href="account.php" class="btn btn-danger btn-sm btn-primary mx-2"><i class="bi bi-key"></i> My Account</a>
             </li>
             <li class="nav-item">
               <a href="logout.php" class="btn btn-sm btn-dark"><i class="bi bi-lock"></i> Logout</a>
             </li>
             <?php
              }else{
                ?>
                
             <li class="nav-item">
               <a href="teach.php" class="btn btn-info btn-sm mx-2"><i class="bi bi-mortarboard-fill"></i> Teach English In China</a>
             </li>
             <li class="nav-item">
               <a href="post.php" class="btn btn-sm btn-success"><i class="bi bi-card-list"></i> Post Your Resume</a>
             </li>
             <li class="nav-item">
               <a href="register.php" class="btn btn-danger btn-sm btn-primary mx-2"><i class="bi bi-key"></i> Register</a>
             </li>
             <li class="nav-item">
               <a href="login.php" class="btn btn-sm btn-dark"><i class="bi bi-lock"></i> Login</a>
             </li>
             <?php
              }
             ?>
            </ul>
           </div>
            
             
     