<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/style.css">
    <title><?= SYSTEM_TITLE ?></title>
  </head>

	<body>
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        <div class="card card-signin my-5">
	          <div class="card-body">
	            <h2 class="card-title text-center"><i class="fas fa-unlock-alt"></i> User Login</h2>
	            <hr>
	            <?php if(isset($_SESSION['error_login'])): ?>
	            <div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <?= $_SESSION['error_login']; ?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<?php endif; ?>
	            <form class="form-signin" method="post" action="<?= base_url() ?>">
	              <div class="form-label-group">
	                <label for="inputUsername">Username</label>
	                <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
	              </div>

	              <div class="form-label-group">
	                <label for="inputPassword">Password</label>
	                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
	              </div>

	              <div class="custom-control custom-checkbox mb-3">
	                <input type="checkbox" class="custom-control-input" id="customCheck1">
	                <label class="custom-control-label" for="customCheck1">Remember password</label>
	              </div>
	              <button class="btn btn-lg btn-dark btn-block text-uppercase" type="submit">Sign in</button>
	            </form>
	          </div>
	        </div>
	        <div class="container bg-dark" id="footer-login">
				  <div class="row">
			        <div class="col-sm-12">
			          <i class="fab fa-creative-commons"></i>
			          <p id="developer-login">Developed by IT Training and Solutions Engineering Center</p>
			          <p id="copy-statement-login">
			            Except where otherwise noted, content on this site is licensed under a Creative Commons Attribution 4.0 International license. Icons by The Noun Project.
			          </p>
			        </div>
			      </div>
			 </div>
	      </div>
	    </div>
	  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="<?= base_url() ?>/public/js/jquery-3.3.1.slim.min.js"></script> -->
    <script src="<?= base_url() ?>/public/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>/public/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/public/js/sweetalert2@9.js"></script>
    <script src="<?= base_url() ?>/public/js/myAlerts.js"></script>
    <?= view('App\Views\theme\notification') ?>
  </body>
</html>
