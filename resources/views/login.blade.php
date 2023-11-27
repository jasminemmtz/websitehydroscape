<?php
    session_start();

    if(isset($_SESSION['username'])){
        header('Location: /profile');
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style/style-login-register.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" />
	<link
		  rel="stylesheet"
		  href="https://unpkg.com/swiper/swiper-bundle.min.css"
		/>
	<link
		href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
		rel="stylesheet"
	  />
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">
          <a class="navbar-brand d-flex ms-lg-0 my-0 my-lg-0" href="/">
            <div class="logo">
              <img src="img/logo.png">
              <div>
                <span class="hydro">HYDRO</span>
                <span class="scape">SCAPE</span>
                <p class="sub-logo">HYDROPONIC STORE</p>
              </div>
            </div>
          </a>
    
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse centered-navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex m-auto m-lg-auto my-0 my-lg-0">
              <input class="px-4 search" type="search" placeholder="What are you looking for?" aria-label="Search">
              <button class="btn0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <form class="d-flex me-lg-0 my-4 my-lg-0">
              <a href="/"><span style="margin-right: 10px; margin-left: 10px;"><i class="fa-solid fa-house"
                    style="margin-right: 5px;"></i></span></a>
              <a href="/ordertracking"><span style="margin-right: 10px;"><i class="fa-regular fa-clipboard"
                    style="margin-right: 5px;"></i></span></a>
              <a href="/cart"><span style="margin-right: 10px;"><i class="fa-solid fa-cart-shopping"
                    style="margin-right: 5px;"></i></span></a>
              <a href="/login"><span><i class="fa-solid fa-user" style="margin-right: 5px;"></i></span></a>
            </form>
          </div>
    
        </div>
    
    
    </nav>
	<div class="container-fluid" style="margin-top: 110px;">
		<div class="row">
			<div class="col-lg-6 form-block px-4">
				<div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 form-box">
					<div class="text-center mb-3 mt-5">
						<img  src="img/logo(2).png" width="150px">
					</div>
					<div id="login-alert" class="alert alert-success mt-3" style="display: none;">
						Selamat Login Anda Berhasil!
					</div>		
					<h4 class="text-center mb-4">
						Login into account
					</h4>
					<form action="/signin" id="form_login">
						<div class="form-input">
							<span><i class="fa-solid fa-user"></i></span>
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" tabindex="10"required>
							
						</div>
						<div class="form-input">
							<span><i class="fa fa-key"></i></span>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						</div>

						<div class="mb-3"> 
							<button type="submit" class="btn btn-block" form="form_login">
								Login
							</button>
						</div>

						<div class="text-center mb-3">
							or login with
						</div>
							
						<div class="row mb-3">
							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-facebook">
									<i class="fa-brands fa-facebook"></i>
								</a>
							</div>

							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-google">
									<i class="fa-brands fa-google"></i>
								</a>
							</div>
							
							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-twitter">
									<i class="fa-brands fa-twitter"></i>
								</a>
							</div>
						</div>
							
						<div class="text-center mb-5">
							Don't have an account? 
							<a class="register-link" href="/register">Register here</a>
						</div>

										
					</form>

					
						
				</div>
			</div>

			<div class="col-lg-6 d-none d-lg-block image-container" style="background: url('img/img-login-register/gambar1.png') center no-repeat;
			background-size: cover;
			height: 100vh;"></div>
		</div>
	</div>
	<script>
		
		
		$(document).ready(function(){
			$('.navbar-toggler').on('click', function(){
				$('#navbarSupportedContent').toggleClass('show');
			});
		});

		</script>
</body>
</html>