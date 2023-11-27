<?php
require_once 'php/conn.php';
$query = $conn->query("SELECT * FROM alamat");
$alamat = [];
while ($d = $query->fetch_assoc()) {
    $alamat[] = $d;
}
if (isset($_POST['selectedAddress'])) {
    $id_alamat = stripslashes(trim($_POST['selectedAddress']));
    $current_primary = $conn->query("SELECT id_alamat FROM alamat WHERE alamat_utama='1'")->fetch_row()[0];
    if ($current_primary) {
        $query_delete = $conn->query("UPDATE alamat SET alamat_utama='0' WHERE id_alamat='$current_primary'");
    }
    $query_change = $conn->query("UPDATE alamat SET alamat_utama='1' WHERE id_alamat='$id_alamat'");
    if ($query_change) {
        echo "<script>
        alert('Mengganti alamat utama berhasil');
        window.location.href = '/alamat';
        </script>";
    } else {
        echo "<script>
        alert('Mengganti alamat utama gagal');
        window.location.href = '/alamat';
        </script>";
    }
}
if (isset($_POST['form'])) {
    $nama = stripslashes(trim($_POST['nama']));
    $telp = stripslashes(trim($_POST['telp']));
    $alamat = stripslashes(trim($_POST['alamat']));
    switch ($_POST['form']):
        case 'tambah':
            $sql = $conn->query("INSERT INTO alamat (nama,telp,alamat,alamat_utama) VALUES('$nama','$telp','$alamat','0')");
            if ($sql) {
                echo "<script>
                alert('Tambah alamat berhasil');
                window.location.href = '/alamat';
                </script>";
            } else {
                echo "<script>
                alert('Tambah alamat gagal');
                window.location.href = '/alamat';
                </script>";
            }
            break;
        case 'edit':
            $id_alamat = stripslashes(trim($_POST['id']));
            $sql = $conn->query("UPDATE alamat SET nama='$nama',telp='$telp',alamat='$alamat' WHERE id_alamat='$id_alamat'");
            if ($sql) {
                echo "<script>
                alert('Edit alamat berhasil');
                window.location.href = '/alamat';
                </script>";
            } else {
                echo "<script>
                alert('Edit alamat gagal');
                window.location.href = '/alamat';
                </script>";
            }
            break;
        case 'hapus':
            $id_alamat = stripslashes(trim($_POST['id']));
            $sql = $conn->query("DELETE FROM alamat WHERE id_alamat='$id_alamat'");
            if ($sql) {
                echo "<script>
                alert('Hapus alamat berhasil');
                window.location.href = '/alamat';
                </script>";
            } else {
                echo "<script>
                alert('Hapus alamat gagal');
                window.location.href = '/alamat';
                </script>";
            }
            break;
        default:
            break;
    endswitch;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alamat E-Commerce</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        /* Add your custom styles here */
        .delete-btn {
            background-color: #A72122;
            color: white;
        }

        .edit-btn {
            background-color: #4E7302;
            color: white;
        }

        /* Add new styles for glowing border */
        .glow-border {
            border: 2px solid transparent;
            transition: border 0.3s ease;
        }

        .glow-border.active {
            border-color: #4E7302;
            box-shadow: 0 0 10px rgba(40, 167, 69, 0.5);
        }

        .card {
            border: 3px solid #4E7302;
            /* Increase the border width to 3px */
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card.glow-border {
            border-color: #ffffff;
            /* You can set the border color to your preferred color */
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-between">
            <div class="col">
                <h2>Alamat Tersimpan</h2>
            </div>
            <div class="col-sm-4 d-flex justify-content-end align-items-center">
                <button class="btn btn-outline-transparent text-primary rounded-4" data-bs-toggle="modal" data-bs-target="#tambahModal">+ Add Address</button>
            </div>
        </div>
        <!-- Alamat Card List -->
        <?php
        foreach ($alamat as $almt) : ?>
            <div class="card mb-4 <?= ($almt['alamat_utama'] == 0) ? 'glow-border' : ''; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $almt['nama']; ?> <?= ($almt['alamat_utama'] == 0) ? '' : "<span class='badge rounded-pill text-bg-danger ml-3'>Alamat Utama</span>"; ?> </h5>
                    <p class="card-text">Nomor Telepon: <?= $almt['telp']; ?></p>
                    <p class="card-text">Alamat: <?= $almt['alamat']; ?></p>
                    <hr>
                    <div class="row">
                        <div class="col-sm d-flex flex-row gap-2 mb-2">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $almt['id_alamat'] ?>">
                                <button type="submit" name="form" value="hapus" class="btn btn-outline-danger rounded-4 mr-2" onclick="return confirm('Apakah anda yakin akan menghapus alamat ini?')">Hapus</button>
                            </form>
                            <a type="button" href="?update=<?= $almt['id_alamat'] ?>" class="btn btn-success rounded-4">Ubah</a>
                        </div>
                        <div class="col-sm d-flex justify-content-sm-end">
                            <form action="" method="post">
                                <input type="hidden" name="selectedAddress" value="<?= $almt['id_alamat'] ?>">
                                <button type="submit" class="btn btn-primary rounded-4" <?= ($almt['alamat_utama'] == 0) ? '' : 'disabled'; ?>>Jadikan Utama</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
        <!-- End Alamat Card List -->

        <!-- Tambah Alamat Modal -->
        <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="tambahModalLabel">Tambah Alamat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Form Tambah Alamat -->
                    <form method="post" action="" name="formtambah">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="tambahNama">Nama Pengguna</label>
                                <input type="text" class="form-control" id="tambahNama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="tambahTelepon">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="tambahTelepon" name="telp">
                            </div>
                            <div class="form-group">
                                <label for="tambahAlamat">Alamat</label>
                                <textarea class="form-control" id="tambahAlamat" rows="3" name="alamat"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="form" value="tambah" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                    <!-- End Form Tambah Alamat -->
                </div>
            </div>
        </div>
        <!-- End Edit Alamat Modal -->
        <!-- Edit Alamat Modal -->
        <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="editModalLabel">Ubah Alamat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Form Edit Alamat -->
                    <?php
                    if (isset($_GET['update'])) {
                        $id_alamat = stripslashes(trim($_GET['update']));
                        $current_alamat = $conn->query("SELECT * FROM alamat WHERE id_alamat='$id_alamat'")->fetch_assoc();
                    }
                    ?>
                    <form method="post" action="" name="formedit">
                        <div class="modal-body">
                            <input type="hidden" name="id" value="<?= $current_alamat['id_alamat'] ?>">
                            <div class="form-group">
                                <label for="editNama">Nama Pengguna</label>
                                <input type="text" class="form-control" id="editNama" name="nama" value="<?= $current_alamat['nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="editTelepon">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="editTelepon" name="telp" value="<?= $current_alamat['telp'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="editAlamat">Alamat</label>
                                <textarea class="form-control" id="editAlamat" rows="3" name="alamat"><?= $current_alamat['alamat'] ?></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="form" value="edit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                    <!-- End Form Edit Alamat -->
                </div>
            </div>
        </div>
        <a href="/profile" class="btn btn-primary">Kembali</a>
        <!-- End Edit Alamat Modal -->
        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script>
            // Function to toggle glowing border and checkbox state
            function selectAddress(card) {
                card.classList.toggle('glow-border');
                let addressBoxEl = document.querySelector('.addressBox');
                addressBoxEl.checked = !document.getElementById('addressCheckbox').checked;
                console.log(addressBoxEl.checked);
            }
        </script>
        <?php
        if (isset($_GET['update'])) {
            echo "<script>
                const editModalAlternative = new bootstrap.Modal('#editModal');
                editModalAlternative.show('editModalAlternative');
            </script>";
        }
        ?>
</body>

</html>