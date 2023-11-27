<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" />

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- BoxIcons -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style/recipe.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>HYDROSCAPE</title>
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

    

    <!--Recipe start-->
    <div class="container container-resep" style="margin-top: 110px;">
      <div class="row">
        <div class="col-12">
          <h3 class="text-judul-halaman"  style="text-align: center; margin-bottom: -25px ;color: #2C3319; ">&nbsp;&nbsp;&nbsp;<b>RECIPE RECOMMENDATION</b></h3>
        </div>
      </div>
      <section id="fda_product_tile" class="col-12">
        <div class="row fda_food_row">
          
            <div class="col-lg-6 col-md-6 my-lg-0 my-3">
                <div class="food_tile">
                    <img src="img/bg pattern.png" alt="" class="fda_product_img">
                    <span class="food_name">Salad Tuna ala Prancis</span>
                    <span class="food_detail">Pilihan salad lezat yang menampilkan tuna sebagai protein utamanya. Hidangan ini dilengkapi saus zesty ala Prancis yang meningkatkan cita rasa tuna dan sayuran yang menyertainya. Biasanya berisi berbagai sayuran segar, seperti selada, tomat, mentimun, dan zaitun yang memberikan cita rasa segar.</span>
                    <a href="/tunaprancis"><button type="button" class="btn btn-sm btn-default">Read More</button></a>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 my-lg-0 my-3">
                <div class="food_tile">
                  <img src="img/bg pattern (1).png" alt="" class="fda_product_img">
                  <span class="food_name">Sup Ayam Ketumbar</span>
                  <span class="food_detail">Sup beraroma yang dibuat dengan potongan ayam empuk dan infus ketumbar, ramuan harum yang menambahkan sentuhan unik dan aromatik pada hidangan. Ini adalah makanan klasik yang menenangkan yang menawarkan kombinasi nikmat antara ayam dan rasa ketumbar yang segar dan bersahaja</span>
                  <a href="/supayam"><button type="button" class="btn btn-sm btn-default">Read More</button></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 my-lg-0 my-3" style="padding-top: 30px;">
                <div class="food_tile">
                  <img src="img/bg pattern (2).png" alt="" class="fda_product_img">
                  <span class="food_name">Jus Jeruk Nipis Pir Selada Kale</span>
                  <span class="food_detail">Adalah minuman menyegarkan yang menggabungkan sayuran sehat kangkung dan selada dengan rasa manis dan tajam dari pir, apel, dan jeruk nipis. Jus ini tidak hanya lezat tetapi juga bergizi, menawarkan campuran vitamin, antioksidan, dan serat<br><br></span>
                  <a href="/jusjeruk"><button type="button" class="btn btn-sm btn-default">Read More</button></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 my-lg-0 my-3" style="padding-top: 30px;">
                <div class="food_tile">
                  <img src="img/bg pattern (3).png" alt="" class="fda_product_img">
                  <span class="food_name">Tumis bayam dengan tomat</span>
                  <span class="food_detail">Adalah hidangan yang terbuat dari bayam cincang halus dicampur dengan tomat. Proses memasak biasanya melibatkan pemanasan minyak atau mentega dalam wajan, menambahkan tomat cincang dan bayam, dan kemudian dengan cepat memasaknya<br><br></span>
                  <a href="/tumisbayam"><button type="button" class="btn btn-sm btn-default">Read More</button></a>
              </div> 
            </div>

            <div class="col-lg-6 col-md-6 my-lg-0 my-3" style="padding-top: 30px;">
                <div class="food_tile">
                  <img src="img/tumis kangkung balacan.png" alt="" class="fda_product_img">
                  <span class="food_name">Tumis Kangkung Balacan</span>
                  <span class="food_detail">Tumis Kangkung Belacan adalah hidangan populer di Asia Tenggara, terutama di Indonesia dan Malaysia, yang terdiri dari kangkung yang dicuci bersih dan dipotong-potong, kemudian dimasak dengan bumbu belacan<br><br></span>
                  <a href="/tumiskangkung"><button type="button" class="btn btn-sm btn-default">Read More</button></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 my-lg-0 my-3" style="padding-top: 30px;">
                <div class="food_tile">
                  <img src="img/oseng sapi caisim.png" alt="" class="fda_product_img">
                  <span class="food_name">Oseng Sapi Caisim</span>
                  <span class="food_detail">Hidangan Indonesia yang menggabungkan irisan daging sapi yang lembut dengan daun caisim yang segar, bawang putih, bawang merah, kecap manis, dan cabai merah untuk memberikan rasa manis, gurih, dan sedikit pedas<br><br></span>
                  <a href="/osengsapi"><button type="button" class="btn btn-sm btn-default">Read More</button></a>
                </div>
            </div>


          </div>
        </section>
    </div>
  
    <!--Recipe End-->

    
    <!-- Footer End -->

    <!-- Bootstrap Script -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- JS Custom -->
    <script src="script/script.js"></script>
  </body>
</html>
