<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/css-pageproduk/style.css" type="text/css">
    <title>Anggur Merah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
   
    <style>
        /* Gaya CSS tambahan sesuai kebutuhan Anda */
        .product-container {
            padding: 20px;
        }
        .guarantee {
            font-size: 12px;
            margin-left: 5px;
        }
        .rating {
        display: flex;
        justify-content: flex-start; /* Membuat bintang-bintang sejajar ke kiri */
    }

    .rating span {
        font-size: 20px;
        padding: 0 5px;
        color: #f1c40f; /* Warna kuning */
        cursor: pointer;
    }

    .rating span:hover,
    .rating span:hover ~ span {
        color: #f39c12; /* Warna kuning muda ketika dihover */
    }

    .comment-box {
            margin-top: 20px;
        }

        .comment-box textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

    
    </style>
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

    <div class="container" style="margin-top: 110px;">
        <div class="row">
            <div class="col-md-6">
                <img src="img/img-buah/Anggur Merah Crimson Seedless.webp" class="img-fluid" alt="Gambar Produk" style="border-radius: 15px;">
            </div>
            <div class="col-md-6 product-container">
                <h2>Anggur Merah Crimson Seedless</h2>
                <p>Harga: Rp 17.200,-</p>
                <p>250 gram</p>
                <p>Lama Tahannya: 7 hari</p>
                <p>Cara Menyimpan: Simpan di dalam kulkas untuk menjaga kesegarannya.</p>

                <div class="d-flex align-items-center flex-row">
                    <img src="img/img-buah/safety.png" width="20">
                    <span class="guarantee">Fresh and Safety Guarantee</span>
                </div>

                <div class="mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="quantity">Jumlah:</label>
                                <input type="number" class="form-control" id="quantity" value="1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button class="btn-custom" style="margin-top: 20px;">Tambahkan ke Keranjang</button>
                        </div>
                    </div>
                </div>

                <hr>

                <div>
                    <h3>Ulasan Produk</h3>
                    <!-- Bintang 5 kolom review -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="text-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        <div class="comment-box">
                            <textarea placeholder="Tambahkan komentar Anda"></textarea>
                            <button class="btn-custom">Submit</button>
                        </div>
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
    <!-- Sertakan Bootstrap JS (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>