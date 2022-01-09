<?php include_once "include/header.php"; ?>


    <!-- navbar -->
    <nav class="navbar navbar-default nav_color navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand logo" href="#" style="color: #FBFBFB;">CKM</a>
        </div>
        
      </div>
    </nav>
    <!-- navbar -->
    <!-- <br><br><br><br><br> -->




<!-- header -->
<div class="container-fluid login-img">
	<div class="container">
		<h2 class="text-center train_text">LOGIN</h2>
	</div>
</div>
<br><br><br>


<!-- login form -->
<div class="container-fluid">
	<div class="container">
        <?php 
        // if($error!=null){ 
            if (checkSession("error_login") &&  getSession('error_login') != '') {
                echo '<h5 class=" text-danger"> ' . getSession('error_login') . ' </h5>';
                unset($_SESSION['error_login']);                 
            }
        
                // <h5 class="text-danger text-center"><?= $error </h5> 
         ?>
  
		<div class="well">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                        
                    <form action="" role="form" method="post" class="text-center">
                      
                         <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password" required>
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg" name="login" value="Login">
                    </form>
                </div>
            </div>
        </div>
	</div>
</div>

<?php include_once "include/footer.php"; ?>