<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/css-sayur/style.css" type="text/css">
    <title>Fruit Catalogue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
          
          <a class="navbar-brand d-flex ms-lg-0 my-0 my-lg-0" href="#">
            <div class="logo">
                <img src="img/logo.png">
                <div>
                    <span class="hydro">HYDRO</span>
                    <span class="scape" >SCAPE</span>
                    <p class="sub-logo">HYDROPONIC STORE</p>
                </div>
            </div>
          </a>

          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse centered-navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex m-auto m-lg-auto my-0 my-lg-0">
              <input class="px-4 search" type="search" placeholder="What are you looking for?" aria-label="Search"> 
              <button class="btn0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <form class="d-flex me-lg-0 my-4 my-lg-0">
                <a href="/"><span style="margin-right: 10px; margin-left: 10px;"><i class="fa-solid fa-house" style="margin-right: 5px;"></i></span></a>
                <a href="/ordertracking"><span style="margin-right: 10px;"><i class="fa-regular fa-clipboard" style="margin-right: 5px;"></i></span></a>
                <a href="/cart"><span style="margin-right: 10px;"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i></span></a>
                <a href="/login"><span><i class="fa-solid fa-user" style="margin-right: 5px;"></i></span></a>
            </form>
          </div>
        </div>
        
      
    </nav>
    <div style="margin-top: 110px;">
        <ul class="nav kategori-menu justify-content-center">
            <li class="nav-item">
                <a href="/sayur" class="btn btn-outline w-100 sayur" style="margin-left: 10px;border-color: #4E7302;"onmouseover="this.style.color='#ffffff'; this.style.backgroundColor='#4E7302';"
                onmouseout="this.style.color='#000000'; this.style.backgroundColor='transparent';">Sayur</a>
            </li>
            <li class="nav-item">
                <a href="/buah" class="btn btn-outline w-100 buah" style="margin-left: 15px; background-color: #4E7302;color: white;">Buah</a>
            </li>
        </ul>
    </div>

<!-- Product Cards -->
<div class="container-fluid mt-2 mb-5">
        <div class="products">
            <div class="row g-3">
                <!-- Product Card for Strawberry Hearts -->
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card clickable-card">
                        <img src="img/img-buah/Strawberry Sweethearts.webp" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold"><b>Strawberry Sweethearts</b></span>
                                <span class="font-weight-bold">Rp 13.900</span>
                            </div>
                            <p class="card-text mb-1 mt-1">13 - 25 pcs/pack</p>
                            <div class="d-flex align-items-center flex-row">
                                <img src="img/img-buah/safety.png" width="20">
                                <span class="guarantee">Fresh and Safety Guarantee</span>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                        <div class="text-right buttons">
                            <a href="/strawberry" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Product Card for Melon Greeniegal -->
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="img/img-buah/Melon Greeniegal.webp" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold"><b>Melon Greeniegal</b></span>
                                <span class="font-weight-bold">Rp 67.900</span>
                            </div>
                            <p class="card-text mb-1 mt-1">1.4 - 1.5 kg/pcs</p>
                            <div class="d-flex align-items-center flex-row">
                                <img src="img/img-buah/safety.png" width="20">
                                <span class="guarantee">Fresh and Safety Guarantee</span>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                        <div class="text-right buttons">
                            <a href="/melon-greeniegal" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Product Card for Tomat Cherry -->
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="img/img-buah/Tomat Cherry Merah Bulat.webp" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold"><b>Tomat Cherry</b></span>
                                <span class="font-weight-bold">Rp 19.000</span>
                            </div>
                            <p class="card-text mb-1 mt-1">20-25 pcs/pack</p>
                            <div class="d-flex align-items-center flex-row">
                                <img src="img/img-buah/safety.png" width="20">
                                <span class="guarantee">Fresh and Safety Guaranteee</span>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                        <div class="text-right buttons">
                            <a href="/tomat-cherry" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
                 <!-- Product Card for Strawberry Celeb -->
                 <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="img/img-buah/Strawberry Celebrations .webp" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold"><b>Strawberry Celeb</b></span>
                                <span class="font-weight-bold">Rp 61.600</span>
                            </div>
                            <p class="card-text mb-1 mt-1">15 - 21 pcs/pack</p>
                            <div class="d-flex align-items-center flex-row">
                                <img src="img/img-buah/safety.png" width="20">
                                <span class="guarantee">Fresh and Safety Guaranteee</span>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                        <div class="text-right buttons">
                            <a href="/strawberry-celeb" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Product Card for Blackberry -->
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="img/img-buah/Blackberry All Seasons.webp" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold"><b>Blackberry</b></span>
                                <span class="font-weight-bold">Rp 36.500</span>
                            </div>
                            <p class="card-text mb-1 mt-1">15 - 25 pcs/pack</p>
                            <div class="d-flex align-items-center flex-row">
                                <img src="img/img-buah/safety.png" width="20">
                                <span class="guarantee">Fresh and Safety Guaranteee</span>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                        <div class="text-right buttons">
                            <a href="/blackberry" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Product Card for Semangka Merah -->
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="img/img-buah/Semangka Merah.webp" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold"><b>Semangka Merah</b></span>
                                <span class="font-weight-bold">Rp 36.900</span>
                            </div>
                            <p class="card-text mb-1 mt-1">3 - 3.5 kg/pcs</p>
                            <div class="d-flex align-items-center flex-row">
                                <img src="img/img-buah/safety.png" width="20">
                                <span class="guarantee">Fresh and Safety Guaranteee</span>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                        <div class="text-right buttons">
                            <a href="/semangka-merah" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Product Card for Timun -->
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="img/img-buah/Timun.webp" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold"><b>Timun</b></span>
                                <span class="font-weight-bold">Rp 16.200</span>
                            </div>
                            <p class="card-text mb-1 mt-1">6-11 pcs</p>
                            <div class="d-flex align-items-center flex-row">
                                <img src="img/img-buah/safety.png" width="20">
                                <span class="guarantee">Fresh and Safety Guaranteee</span>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                        <div class="text-right buttons">
                            <a href="/timun" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Product Card for Anggur Merah -->
                <div class="col-lg-3 col-6 mt-3">
                    <div class="card">
                        <img src="img/img-buah/Anggur Merah Crimson Seedless.webp" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold"><b>Anggur Merah</b></span>
                                <span class="font-weight-bold">Rp 17.200</span>
                            </div>
                            <p class="card-text mb-1 mt-1">250 gram</p>
                            <div class="d-flex align-items-center flex-row">
                                <img src="img/img-buah/safety.png" width="20">
                                <span class="guarantee">Fresh and Safety Guarantee</span>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                        <div class="text-right buttons">
                            <a href="/anggur-merah" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- jQuery and Custom Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".clickable-card").click(function() {
                $(this).toggleClass("active");
            });
        });

        $(document).ready(function() {
            $('.navbar-toggler').on('click', function() {
                $('#navbarSupportedContent').toggleClass('show');
            });
        });
    </script>
</body>

</html>