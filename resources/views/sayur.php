<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/css-sayur/style.css" type="text/css">
    <title>Vegetable Catalogue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
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
                <a href="index.php"><span style="margin-right: 10px; margin-left: 10px;"><i class="fa-solid fa-house" style="margin-right: 5px;"></i></span></a>
                <a href="ordertracking.php"><span style="margin-right: 10px;"><i class="fa-regular fa-clipboard" style="margin-right: 5px;"></i></span></a>
                <a href="cart.php"><span style="margin-right: 10px;"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i></span></a>
                <a href="login.php"><span><i class="fa-solid fa-user" style="margin-right: 5px;"></i></span></a>
            </form>
          </div>
        </div>
    </nav>
 
    <div style="margin-top: 110px;">
    <ul class="nav kategori-menu d-flex justify-content-center">
        <li class="nav-item">
            <a class="btn btn-outline w-100 sayur" style="margin-left: 10px;background-color: #4E7302;color: white;">Sayur</a>
        </li>
        <li class="nav-item">
            <a href="buah.php" class="btn btn-outline w-100 buah" style="margin-left: 15px; border-color: #4E7302;" onmouseover="this.style.color='#ffffff'; this.style.backgroundColor='#4E7302';"
               onmouseout="this.style.color='#000000'; this.style.backgroundColor='transparent';">Buah</a>
        </li>
    </ul>
</div>
      
<div class="container-fluid mt-2 mb-5">
    <div class="products">
        <div class="row g-3">

            <!-- Product: Bayam Hijau -->
            <div class="col-lg-3 col-6 mt-3">
                <div class="card clickable-card">
                    <img src="img/img-sayur/Bayam Hijau.webp" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <span class="font-weight-bold"><b>Bayam Hijau</b></span>
                            <span class="font-weight-bold">Rp 12.900</span>
                        </div>
                        <p class="card-text mb-1 mt-1">200 gram</p>
                        <div class="d-flex align-items-center flex-row">
                            <img src="img/img-sayur/safety.png" width="20">
                            <span class="guarantee">Fresh and Safety Guarantee</span>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="text-right buttons">
                            <a href="bayam-hijau.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- Product: Kangkung Hidroponik -->
            <div class="col-lg-3 col-6 mt-3">
                <div class="card">
                    <img src="img/img-sayur/Kangkung.webp" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <span class="font-weight-bold"><b>Kangkung Hidroponik</b></span>
                            <span class="font-weight-bold">Rp 11.200</span>
                        </div>
                        <p class="card-text mb-1 mt-1">200 gram</p>
                        <div class="d-flex align-items-center flex-row">
                            <img src="img/img-sayur/safety.png" width="20">
                            <span class="guarantee">Fresh and Safety Guarantee</span>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="text-right buttons">
                            <a href="kangkung.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product: Daun Kemangi -->
            <div class="col-lg-3 col-6 mt-3">
                <div class="card">
                    <img src="img/img-sayur/Daun Kemangi.webp" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-between"> 
                            <span class="font-weight-bold"><b>Daun Kemangi</b></span> 
                            <span class="font-weight-bold">Rp 14.200</span> 
                        </div>
                        <p class="card-text mb-1 mt-1">18-22 gram</p>
                        <div class="d-flex align-items-center flex-row"> 
                            <img src="img/img-sayur/safety.png" width="20"> 
                            <span class="guarantee">Fresh and Safety Guarantee</span> 
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="text-right buttons"> 
                            <a href="daun-kemangi.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product: Curly Kale -->
            <div class="col-lg-3 col-6 mt-3">
                <div class="card">
                    <img src="img/img-sayur/Curly Kale.webp" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-between"> 
                            <span class="font-weight-bold"><b>Curly Kale</b></span> 
                            <span class="font-weight-bold">Rp 23.900</span> 
                        </div>
                        <p class="card-text mb-1 mt-1">250 gram</p>
                        <div class="d-flex align-items-center flex-row"> 
                            <img src="img/img-sayur/safety.png" width="20"> 
                            <span class="guarantee">Fresh and Safety Guarantee</span> 
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="text-right buttons"> 
                            <a href="curly-kale.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product: Mizuna -->
            <div class="col-lg-3 col-6 mt-3">
                <div class="card">
                    <img src="img/img-sayur/Mizuna.webp" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-between"> 
                            <span class="font-weight-bold"><b>Mizuna</b></span> 
                            <span class="font-weight-bold">Rp 27.400</span> 
                        </div>
                        <p class="card-text mb-1 mt-1">200 gram</p>
                        <div class="d-flex align-items-center flex-row"> 
                            <img src="img/img-sayur/safety.png" width="20"> 
                            <span class="guarantee">Fresh and Safety Guarantee</span>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="text-right buttons"> 
                                <a href="mizuna.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a> 
                                <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button> 
                            </div>
                        </div>
                    </div>
                </div>
            

            <!-- Product: Caisim -->
            <div class="col-lg-3 col-6 mt-3">
                <div class="card">
                    <img src="img/img-sayur/Caisim.webp" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-between"> 
                            <span class="font-weight-bold"><b>Caisim</b></span> 
                            <span class="font-weight-bold">Rp 15.200</span> 
                        </div>
                        <p class="card-text mb-1 mt-1">200 gram</p>
                        <div class="d-flex align-items-center flex-row"> 
                            <img src="img/img-sayur/safety.png" width="20"> 
                            <span class="guarantee">Fresh and Safety Guarantee</span>
                        </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="text-right buttons"> 
                                <a href="caisim.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a> 
                                <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button> 
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Product: Baby Pak Choy -->
            <div class="col-lg-3 col-6 mt-3">
                <div class="card">
                    <img src="img/img-sayur/Baby Pak Choy.webp" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-between"> 
                            <span class="font-weight-bold"><b>Baby Pak Choy</b></span> 
                            <span class="font-weight-bold">Rp 14.000</span> 
                        </div>
                        <p class="card-text mb-1 mt-1">200 gram</p>
                        <div class="d-flex align-items-center flex-row"> 
                            <img src="img/img-sayur/safety.png" width="20"> 
                            <span class="guarantee">Fresh and Safety Guarantee</span></div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="text-right buttons"> 
                                <a href="baby-pakchoy.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a> 
                                <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button> 
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- Product: Selada Keriting -->
            <div class="col-lg-3 col-6 mt-3">
                <div class="card">
                    <img src="img/img-sayur/Selada Keriting.webp" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-between"> 
                            <span class="font-weight-bold"><b>Selada Keriting</b></span> 
                            <span class="font-weight-bold">Rp 17.200</span> 
                        </div>
                        <p class="card-text mb-1 mt-1">250 gram</p>
                        <div class="d-flex align-items-center flex-row"> 
                            <img src="img/img-sayur/safety.png" width="20"> 
                            <span class="guarantee">Fresh and Safety Guarantee</span> 
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="text-right buttons"> 
                            <a href="selada-keriting.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product: Selada Romaine -->
            <div class="col-lg-3 col-6 mt-3">
                <div class="card">
                    <img src="img/img-sayur/Selada Romaine.webp" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-between"> 
                            <span class="font-weight-bold"><b>Selada Romaine</b></span> 
                            <span class="font-weight-bold">Rp 19.900</span> 
                        </div>
                        <p class="card-text mb-1 mt-1">250 gram</p>
                        <div class="d-flex align-items-center flex-row"> 
                            <img src="img/img-sayur/safety.png" width="20"> 
                            <span class="guarantee">Fresh and Safety Guarantee</span> 
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="text-right buttons"> 
                            <a href="selada-romaine.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Product: Daun Ketumbar -->
        <div class="col-lg-3 col-6 mt-3">
            <div class="card">
                <img src="img/img-sayur/Daun Ketumbar.webp" class="card-img-top">
                <div class="card-body">
                    <div class="d-flex justify-content-between"> 
                        <span class="font-weight-bold"><b>Daun Ketumbar</b></span> 
                        <span class="font-weight-bold">Rp 14.900</span> 
                    </div>
                    <p class="card-text mb-1 mt-1">20 gram</p>
                    <div class="d-flex align-items-center flex-row"> 
                        <img src="img/img-sayur/safety.png" width="20"> 
                        <span class="guarantee">Fresh and Safety Guarantee</span> 
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="text-right buttons">
                        <a href="daun-ketumbar.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                        <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product: Kembang Kol -->
        <div class="col-lg-3 col-6 mt-3">
            <div class="card">
                <img src="img/img-sayur/Kembang Kol.webp" class="card-img-top">
                <div class="card-body">
                    <div class="d-flex justify-content-between"> 
                        <span class="font-weight-bold"><b>Kembang Kol</b></span> 
                        <span class="font-weight-bold">Rp 44.400</span> 
                    </div>
                    <p class="card-text mb-1 mt-1">500 gram</p>
                    <div class="d-flex align-items-center flex-row"> 
                        <img src="img/img-sayur/safety.png" width="20"> 
                        <span class="guarantee">Fresh and Safety Guarantee</span> 
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="text-right buttons">
                        <a href="kembang-kol.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                        <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product: Cabai Merah Besar -->
        <div class="col-lg-3 col-6 mt-3">
            <div class="card">
                <img src="img/img-sayur/Cabai Merah Besar.webp" class="card-img-top">
                <div class="card-body">
                    <div class="d-flex justify-content-between"> 
                        <span class="font-weight-bold"><b>Cabai Merah Besar</b></span> 
                        <span class="font-weight-bold">Rp 19.300</span> 
                    </div>
                    <p class="card-text mb-1 mt-1">250 gram</p>
                    <div class="d-flex align-items-center flex-row"> 
                        <img src="img/img-sayur/safety.png" width="20"> 
                        <span class="guarantee">Fresh and Safety Guarantee</span> 
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="text-right buttons"> 
                        <a href="cabai-merah.php" class="btn btn-details"><i class="fas fa-info-circle"></i> Detail</a>
                        <button class="btn btn-cart"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pastikan Anda sudah memasukkan jQuery sebelumnya -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
    $(".clickable-card").click(function() {
        $(this).toggleClass("active");
    });
    });

    $(document).ready(function(){
        $('.navbar-toggler').on('click', function(){
            $('#navbarSupportedContent').toggleClass('show');
        });
    });

</script>
</body>
</html>
