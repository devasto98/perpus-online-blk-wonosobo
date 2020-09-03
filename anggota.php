<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="gambar/blk-icon.png">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/regular.min.css">
    <link rel="stylesheet" href="fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="fontawesome/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/popper.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <title>Anggota</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <img src="gambar/blk2.png" width="256">
        <form class="form-inline">
            <a href="#" class="logo"><i class="fab fa-instagram fa-2x" style="margin-right: 10px;color: rgb(228, 74, 194);"></i></a>
            <a href="#" class="logo"><i class="fab fa-facebook fa-2x" style="margin-right: 10px; color: rgb(26, 83, 170)"></i></a>
            <a href="#" class="logo"> <i class="fab fa-twitter fa-2x" style="margin-right: 10px; color: rgb(100, 173, 241)"></i></a>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            <a href="logout.php" class="btn btn-danger my-2 my-sm-0" style="margin-left: 10px;"> Keluar</a>
        </form>
    </nav>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner carousel-size">
            <div class="carousel-item active" data-interval="1000">
                <img class="d-block w-100" src="gambar/lib-11.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="gambar/lib-22.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="gambar/lib-33.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <a class="nav-link " href="index.php"><i class="fas fa-home fa-lg"></i> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#"><i class="fas fa-users fa-lg"></i> Anggota</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="daftar_buku.php"><i class="fa fa-book fa-lg"></i> Daftar Buku</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profil.php"><i class="fas fa-user fa-lg"></i> Profil</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-building fa-lg"></i> Tentang</a>
            <div class="dropdown-menu w-100">
                <a class="dropdown-item" href="#">Tentang Kami</a>
                <a class="dropdown-item" href="#">Credits</a>
                <a class="dropdown-item" href="#">Gallery</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Laporan Peminjaman</a>
        </li>
    </ul>
    <br>
    <center>
        <h1>Daftar Anggota Perpus</h1>
    </center>
    <hr>
    <div class="container-fluid">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Umur</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Lain-lain</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle text-center">1</td>
                    <td><img src="gambar/blk-1.jpg" alt="" class="foto-anggota"></td>
                    <td class="align-middle text-center">03642545654</td>
                    <td class="align-middle">Achmad Aqil Aftoni</td>
                    <td class="align-middle">30 September 1998</td>
                    <td class="align-middle">21 Thn</td>
                    <td class="align-middle">Wirausaha</td>
                    <td class="align-middle">Bugangan Wonosobo</td>
                    <td class="align-middle text-center">0857878465468</td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-primary btn-block">Edit</a>
                        <a href="#" class="btn btn-danger btn-block">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center">2</td>
                    <td><img src="gambar/blk-2.jpg" alt="" class="foto-anggota"></td>
                    <td class="align-middle text-center">03642545654</td>
                    <td class="align-middle">Achmad Aqil Aftoni</td>
                    <td class="align-middle">30 September 1998</td>
                    <td class="align-middle">21 Thn</td>
                    <td class="align-middle">Wirausaha</td>
                    <td class="align-middle">Bugangan Wonosobo</td>
                    <td class="align-middle text-center">0857878465468</td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-primary btn-block">Edit</a>
                        <a href="#" class="btn btn-danger btn-block">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<footer class="page-footer font-small teal pt-4">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3 footer-1">
                <h5 class="text-uppercase font-weight-bold">Sekilas Tentang BLK</h5>
                <p>Balai Latihan Kerja atau sering disebut dengan singkatan BLK adalah
                    prasarana dan sarana tempat pelatihan untuk mendapatkan keterampilan
                    atau yang ingin mendalami keahlian dibidangnya masing-masing.
                </p>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-6 mb-md-0 mb-3 footer-1">
                <h5 class="text-uppercase font-weight-bold">Sekilas Tentang BLK Pustaka</h5>
                <p>Perpustakaan digital (Inggris: digital library atau electronic library atau virtual library)
                    adalah perpustakaan yang mempunyai koleksi buku sebagian besar dalam bentuk format digital
                    dan yang bisa diakses dengan komputer.</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3 footer-2">© 2020 Copyright:
        BLK PUSTAKA
    </div>
</footer>

</html>