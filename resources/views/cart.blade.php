<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: /login');
    }
    unset($_SESSION['gagal'], $_SESSION['berhasil'], $_SESSION['gagalp'], $_SESSION['berhasilp']);
?>

<?php
    require_once base_path('resources/views/php/conn.php');

    $total = 0;
    $sql = "SELECT c.qty, c.cart_id, p.product_name, p.image, p.unit, p.price, p.unit
        FROM cart c
        JOIN products p ON c.product_id = p.product_id";
    $result = $conn->query($sql);
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/css-cart-pembayaran/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css-cart-pembayaran/style.css">
    <link rel="stylesheet" type="text/css" href="style/css-cart-pembayaran/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>E-Commerce Hydroponics Cart</title>
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
                    <input class="px-4 search" type="search" placeholder="What are you looking for?"
                        aria-label="Search">
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
        <section class="bg-light my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card border shadow-0">
                            <div class="m-4">
                                <h4 class="card-title mb-4">Your shopping cart</h4>

                                <?php while($row = $result->fetch_assoc()): ?>
                                <!-- Product -->
                                <div class="row gy-3 mb-4">
                                    <div class="col-lg-5">
                                        <div class="me-lg-5">
                                            <div class="d-flex">
                                                <img src="<?php echo $row['image']; ?>" class="border rounded me-3"
                                                    style="width: 96px; height: 96px;" />
                                                <div class="">
                                                    <a href="#" class="nav-link"><?php echo $row['product_name']; ?></a>
                                                    <p class="text-muted"><?php echo $row['unit']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                                        <div class="">
                                            <input type="number" class="form-control me-4"
                                                value="<?php echo $row['qty']; ?>" onchange="calculateTotal()" min="1"
                                                style="width: 100px;" />
                                        </div>
                                        <div class="">
                                            <text class="h6">Rp.
                                                <?php echo number_format($row['price'] * $row['qty']); ?></text>
                                            <br />
                                            <small
                                                class="text-muted text-nowrap"><?php echo number_format($row['price'], '0', '', '.'); ?>
                                                /
                                                <?php echo $row['unit']; ?>
                                            </small>
                                        </div>
                                    </div>

                                    <div
                                        class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                        <div class="float-md-end">
                                            <a href="php/delete_cart.php?cart_id=<?= $row['cart_id'] ?>"
                                                class="btn btn-light border text-danger icon-hover-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    $total += $row['price'] * $row['qty'];
                                    endwhile; 
                                ?>
                            </div>

                            <div class="border-top pt-4 mx-4 mb-4">
                                <p><i class="far fa-clock fa-lg text-muted"></i>
                                    </i>Pembayaran harus dilakukan dalam waktu 24 jam.</p>
                                <p class="text-muted">
                                    Jika tidak diselesaikan dalam waktu 24 jam, maka pesanan anda akan dibatalkan secara
                                    otomatis.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card mb-3 border shadow-0">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label class="form-label">Masukan kode voucher(optional)</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control border" name=""
                                                placeholder="Coupon code" />
                                            <button class="btn btn-light border">Apply</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card shadow-0 border">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Total Harga:</p>
                                    <p class="mb-2" id="total_harga">
                                        <?= number_format($total, 0, '', '.') ?>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Diskon:</p>
                                    <p class="mb-2 text-success">-Rp. 0</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Pajak:</p>
                                    <p class="mb-2">Rp. 2.000</p>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Total price:</p>
                                    <p class="mb-2 fw-bold" id="total_price">Rp.
                                        <?= number_format($total + 2000, 0, '', '.') ?>
                                    </p>
                                </div>

                                <div class="mt-3">
                                    <a href="/pembayaran" class="btn btn-custom w-100 shadow-0 mb-2">Selesaikan
                                        Pembayaran</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container my-5">
                <header class="mb-4">
                    <h3>Recommended items</h3>
                </header>
                <div class="row">
                    <!-- Product 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card px-4 border shadow-0 mb-4 mb-lg-0">
                            <div class="mask px-2" style="height: 50px;">
                                <div class="d-flex justify-content-between">
                                    <h6><span class="badge bg-danger pt-1 mt-3 ms-2">New</span></h6>
                                </div>
                            </div>
                            <a href="#" class="">
                                <img src="img/Bayam Hijau.webp" class="card-img-top rounded-2" />
                            </a>
                            <div class="card-body d-flex flex-column pt-3 border-top">
                                <a href="#" class="nav-link">Bayam</a>
                                <div class="price-wrap mb-2">
                                    <strong>Rp. 18.900</strong>
                                    <del>Rp. 14.900</del>
                                </div>
                                <div class="card-footer d-flex align-items-end pt-0 px-0 pb-0 mt-auto">
                                    <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Product 5 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card px-4 border shadow-0 mb-4 mb-lg-0">
                            <div class="mask px-2" style="height: 50px;">
                                <div class="d-flex justify-content-between">
                                    <h6><span class="badge bg-danger pt-1 mt-3 ms-2">New</span></h6>
                                </div>
                            </div>
                            <a href="#" class="">
                                <img src="img/Bayam Hijau.webp" class="card-img-top rounded-2" />
                            </a>
                            <div class="card-body d-flex flex-column pt-3 border-top">
                                <a href="#" class="nav-link">Bayam</a>
                                <div class="price-wrap mb-2">
                                    <strong class="">Rp. 18.900</strong>
                                    <del class="">Rp. 14.900</del>
                                </div>
                                <div class="card-footer d-flex align-items-end pt-0 px-0 pb-0 mt-auto">
                                    <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--PRODUK 6-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card px-4 border shadow-0 mb-4 mb-lg-0">
                            <div class="mask px-2" style="height: 50px;">
                                <div class="d-flex justify-content-between">
                                    <h6><span class="badge bg-danger pt-1 mt-3 ms-2">New</span></h6>
                                </div>
                            </div>
                            <a href="#" class="">
                                <img src="img/Bayam Hijau.webp" class="card-img-top rounded-2" />
                            </a>
                            <div class="card-body d-flex flex-column pt-3 border-top">
                                <a href="#" class="nav-link">Bayam</a>
                                <div class="price-wrap mb-2">
                                    <strong class="">Rp. 18.900</strong>
                                    <del class="">Rp. 14.900</del>
                                </div>
                                <div class="card-footer d-flex align-items-end pt-0 px-0 pb-0 mt-auto">
                                    <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function calculateTotal() {
            var total = 0;

            // For each quantity input
            $("input[type='number']").each(function () {
                var qty = parseInt($(this).val());

                // Remove any formatting (commas, dots) and get the price per item
                var pricePerItem = parseFloat($(this).closest(".col-lg-2").find(".text-muted").text().split(
                    '/')[0].trim().replace(/\./g, ''));

                var rowTotal = qty * pricePerItem;
                total += rowTotal;

                // Format the row total to include thousands separator
                var formattedRowTotal = rowTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");

                // Updating the row's total
                $(this).closest(".col-lg-2").find(".h6").text("Rp. " + formattedRowTotal);
            });

            // Update the #total_harga and #total_price elements
            var formattedTotal = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            $("#total_harga").text(formattedTotal);

            var formattedTotalPrice = (total + 2000).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            $("#total_price").text("Rp. " + formattedTotalPrice);
        }
    </script>
</body>

</html>