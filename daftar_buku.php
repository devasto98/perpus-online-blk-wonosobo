<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="strict-origin" />
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

    <title>Daftar Buku</title>
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
            <a class="nav-link" href="anggota.php"><i class="fas fa-users fa-lg"></i> Anggota</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#"><i class="fa fa-book fa-lg"></i> Daftar Buku</a>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" aria-hidden="true" id="list-pelajaran-list" data-toggle="list" href="#list-pelajaran" role="tab" aria-controls="pelajaran">
                        <i class="fas fa-book fa-lg"></i> Buku Pelajaran</a>
                    <a class="list-group-item list-group-item-action" id="list-novel-list" data-toggle="list" href="#list-novel" role="tab" aria-controls="novel">
                        <i class="fas fa-book-reader fa-lg"></i> Novel</a>
                    <a class="list-group-item list-group-item-action" id="list-ensiklopedia-list" data-toggle="list" href="#list-ensiklopedia" role="tab" aria-controls="ensiklopedia">
                        <i class="fas fa-atlas fa-lg"></i> Ensiklopedia</a>
                    <a class="list-group-item list-group-item-action" id="list-komik-list" data-toggle="list" href="#list-komik" role="tab" aria-controls="komik">
                        <i class="fas fa-journal-whills fa-lg"></i> Komik</a>
                    <a class="list-group-item list-group-item-action" id="list-dongeng-list" data-toggle="list" href="#list-dongeng" role="tab" aria-controls="dongeng">
                        <i class="fas fa-book-open fa-lg"></i> Dongeng</a>
                    <a class="list-group-item list-group-item-action" id="list-biografi-list" data-toggle="list" href="#list-biografi" role="tab" aria-controls="biografi">
                        <i class="fas fa-address-book fa-lg"></i> Biografi</a>
                    <a class="list-group-item list-group-item-action" id="list-ilmiah-list" data-toggle="list" href="#list-ilmiah" role="tab" aria-controls="ilmiah">
                        <i class="fas fa-book-dead fa-lg"></i> Karya Ilmiah</a>
                    <a class="list-group-item list-group-item-action" id="list-kamus-list" data-toggle="list" href="#list-kamus" role="tab" aria-controls="kamus">
                        <i class="fas fa-bookmark fa-lg"></i> Kamus</a>
                </div>
            </div>
            
            <div class="col-10">
                <div class="border-list">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active " id="list-pelajaran" role="tabpanel" aria-labelledby="list-pelajaran-list">
                        <div class="container">
                            <div class="row mt-5 justify-content-center">
                                <!-- card ke-1 -->
                                <div class="card card-custom mx-2 mb-3">
                                    <a href="#">
                                    <img src="gambar/seni-sma.jpg" alt="" class="card-img card-size">
                                    </a>
                                <div class="card-body">
                                    <h3 class="card-title text-center">Seni Budaya SMA</h3>
                                    <hr>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Iste, error debitis? Illo minus dolor veniam, molestiae soluta, id nam quae placeat 
                                        adipisci laboriosam atque provident dolores labore repudiandae excepturi ipsum.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-info">Pinjam</a>
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-warning">Edit</a>
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-danger">Hapus</a>
                                </div>
                                </div>
                                <!-- card ke-2 -->
                                <div class="card card-custom mx-2 mb-3">
                                    <a href="#">
                                    <img src="gambar/bahasa-sma.jpg" alt="" class="card-img card-size">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title text-center">Bahasa Indonesia SMA</h3>
                                    <hr>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Iste, error debitis? Illo minus dolor veniam, molestiae soluta, id nam quae placeat 
                                        adipisci laboriosam atque provident dolores labore repudiandae excepturi ipsum.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-info">Pinjam</a>
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-warning">Edit</a>
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-danger">Hapus</a>
                                </div>
                                </div>
                                <!-- card ke-3 -->
                                <div class="card card-custom mx-2 mb-3">
                                    <a href="#">
                                    <img src="gambar/ekonomi.jpg" alt="" class="card-img card-size">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title text-center">Ekonomi SMA</h3>
                                    <hr>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Iste, error debitis? Illo minus dolor veniam, molestiae soluta, id nam quae placeat 
                                        adipisci laboriosam atque provident dolores labore repudiandae excepturi ipsum.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-info">Pinjam</a>
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-warning">Edit</a>
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-danger">Hapus</a>
                                </div>
                                </div>
                                <!-- card ke-4 -->
                                <div class="card card-custom mx-2 mb-3">
                                    <a href="#">
                                    <img src="gambar/mein-kampf.jpg" alt="" class="card-img card-size">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title text-center">Mein Kampf</h3>
                                    <hr>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Iste, error debitis? Illo minus dolor veniam, molestiae soluta, id nam quae placeat 
                                        adipisci laboriosam atque provident dolores labore repudiandae excepturi ipsum.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-info">Pinjam</a>
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-warning">Edit</a>
                                    <a href="#" class="btn btn-primary btn-large btn-block btn-danger">Hapus</a>
                                </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                        <div class="tab-pane fade" id="list-novel" role="tabpanel" aria-labelledby="list-novel-list">
                        <div class="container">
                            <div class="row mt-5 justify-content-center">
                                <!-- card ke-1 -->
                                <div class="card card-custom mx-2 mb-3">
                                    <a href="#">
                                    <img src="gambar/mein-kampf.jpg" alt="" class="card-img card-size">
                                    </a>
                                <div class="card-body">
                                    <h3 class="card-title">Mein Kampf</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Iste, error debitis? Illo minus dolor veniam, molestiae soluta, id nam quae placeat 
                                        adipisci laboriosam atque provident dolores labore repudiandae excepturi ipsum.</p>
                                </div>
                                </div>
                                <!-- card ke-2 -->
                                <div class="card card-custom mx-2 mb-3">
                                    <a href="#">
                                    <img src="gambar/matematika.jpg" alt="" class="card-img card-size">
                                </a>
                                </div>
                                <!-- card ke-3 -->
                                <div class="card card-custom mx-2 mb-3">
                                    <a href="#">
                                    <img src="gambar/matematika2.jpg" alt="" class="card-img card-size">
                                </a>
                                </div>
                                <!-- card ke-4 -->
                                <div class="card card-custom mx-2 mb-3">
                                    <a href="#">
                                    <img src="gambar/mein-kampf.jpg" alt="" class="card-img card-size">
                                </a>
                                </div>    
                            </div>
                        </div>    
                    </div>
                        <div class="tab-pane fade" id="list-ensiklopedia" role="tabpanel" aria-labelledby="list-ensiklopedia-list">ensiklopedia
                        </div>
                        <div class="tab-pane fade" id="list-komik" role="tabpanel" aria-labelledby="list-komik-list">komik
                        </div>
                        <div class="tab-pane fade" id="list-dongeng" role="tabpanel" aria-labelledby="list-dongeng-list">
                            Dongeng
                        </div>
                        <div class="tab-pane fade" id="list-biografi" role="tabpanel" aria-labelledby="list-biografi-list">
                            biografi
                        </div>
                        <div class="tab-pane fade" id="list-ilmiah" role="tabpanel" aria-labelledby="list-ilmiah-list">
                            Ilmiah
                        </div>
                        <div class="tab-pane fade" id="list-kamus" role="tabpanel" aria-labelledby="list-kamus-list">
                            kamus
                        </div>
                    </div>
                </div>
            </div>
        </div>
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