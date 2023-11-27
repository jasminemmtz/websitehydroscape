<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style-ordertracking.css">
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
    <!--Bootstrap 5.3.2 CDN-->
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        />
    <!--FontAwesome 4.7.0 CDN -->
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <title>Order Tracking</title>    
    
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
    <div class="container px-1 px-md-4 py-5 mx-auto">
        <div class="card">
            <div class="row d-flex justify-content-between px-3 top">
                <div class="d-flex">
                    <h5>ORDER <span class="text-primary font-weight-bold">#Y34XDHR</span></h5>
                </div>
                <div class="d-flex flex-column text-sm-right">
                    <p class="mb-0">Expected Arrival <span>19 Sept 2023</span></p>
                    <p>USPS <span class="font-weight-bold">234094567242423422898</span></p>
                </div>
            </div>
            <!-- Add class 'active' to progress -->
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="step0"></li>
                </ul>
                </div>
            </div>
            <div class="row justify-content-between top">
                <div class="content-item" style="margin-left: -40px;">
                    <img class="icon" src="img/img-ordertracking/CheckList.png "style="width: 70px">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Order<br>Processed</p>
                    </div>
                </div>
                <div class="content-item" style="margin-left: 70px;">
                    <img class="icon" src="img/img-ordertracking/Delivery.png" style="width: 70px">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Order<br>Shipped</p>
                    </div>
                </div>
                <div class="content-item" style="margin-left: 70px;">
                    <img class="icon" src="img/img-ordertracking/Shipping.png"style="width: 70px">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Order<br>En Route</p>
                    </div>
                </div>
                <div class="content-item" style="margin-left: 70px;margin-right: -140px;">
                    <img class="icon" src="img/img-ordertracking/Home.png"style="width: 70px">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Order<br>Arrived</p>
                    </div>
                </div>
            </div>
            
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