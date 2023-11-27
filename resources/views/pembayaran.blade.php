<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style/css-cart-pembayaran/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/css-cart-pembayaran/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

	<title>E-Commerce Hydroponics Cart</title>
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
                    <p class="sub-logo" style="color: black;">HYDROPONIC STORE</p>
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
	<div class="container" style="margin-top: 110px;">
		

		<!-- JUDUL HALAMAN -->
		<div class="row">
			<div class="col-12">
				<h3 class="text-judul-halaman" style="text-align: center; margin-bottom: 20px;background-color: #A72122;color: white; border-radius: 15px;">&nbsp;&nbsp;&nbsp;PEMBAYARAN</h3>
			</div>
		</div>

		<div class="row">
			<!-- KOLOM 1 -->
			<div class="col-md-7">
				<form>
					<h3 class="text-judul">Alamat Pengiriman</h3>

					<label class="w-100 mb-3">
						Alamat lengkap <br>
						<input type="text" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Provinsi <br>
						<input type="text" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Kabupaten / Kota <br>
						<input type="text" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Kode POS <br>
						<input type="number" class="form-control">
					</label>

					<h3 class="text-judul mt-5">Kurir Pengiriman</h3>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="kurir">
						<img src="img/img-cart-pembayaran/kurir-1.png">
						<span class="float-end">+ IDR 10.000</span>
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="kurir">
						<img src="img/img-cart-pembayaran/kurir-2.png">
						<span class="float-end">+ IDR 12.000</span>
					</label>


					<h3 class="text-judul mt-5">Metode Pembayaran</h3>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						Transfer Bank
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						Cash on Delivery (COD)
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						<img src="img/img-cart-pembayaran/bayar-1.png">
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						<img src="img/img-cart-pembayaran/bayar-2.png">
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						<img src="img/img-cart-pembayaran/bayar-3.png">
					</label>

					<button type="submit" class="btn btn-lg btn-custom mt-5 mb-5">Bayar</button>

				</form>
			</div>

			<!-- KOLOM 2 -->
			<div class="col-md-4 offset-md-1">
				<div class="card sticky-top">
				  <div class="card-header bg-white">
				    <h3 class="text-judul">Detail Pembayaran</h3>
				  </div>
				  <div class="card-body">
				    <div class="row mt-2 mb-2">
				    	<div class="col-md"><small>Sub Total</small></div>
				    	<div class="col-md">IDR 145.400</div>
				    </div>
				    <div class="row mt-2 mb-2">
				    	<div class="col-md"><small>Biaya pengiriman</small></div>
				    	<div class="col-md">IDR 10.000</div>
				    </div>
				    <div class="row mt-2 mb-2">
				    	<div class="col-md"><small>Total</small></div>
				    	<div class="col-md">IDR 155.400</div>
				    </div>
				  </div>
				  <div class="card-footer">
				    <button type="submit" class="btn btn-lg btn-custom w-100">Bayar</button>
				  </div>
				</div>
			</div>
		</div>

		<script>
			function tampilkanAlert() {
				alert('Berhasil');
			}
			</script>
		
	</div> <!-- PENUTUP CONTAINER -->
</body>
</html>	