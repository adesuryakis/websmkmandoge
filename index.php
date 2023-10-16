<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid mx-3">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-house"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Program Studi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil Sekolah
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sambutan</a></li>
                            <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="#">Guru dan Staff</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="text-center top-logo">
        <img src="images/logo.png" class="rounded" alt="loading..." style="height: 7rem;">
    </div>
    <div class="row my-2">
        <h2 class="text-center teks-logo">SMK NEGERI 1 BP. MANDOGE</h2>
        <!-- <div class="col text-center">
                <img src="images/rpl.png" class="rounded" alt="loading..." style="height: 10rem;">
            </div>
            <div class="col text-center">
                <img src="images/aphp.png" class="rounded" alt="loading..." style="height: 10rem;">
            </div>
            <div class="col text-center">
                <img src="images/tbsm.png" class="rounded" alt="loading..." style="height: 10rem;">
            </div> -->
    </div>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/carousel/1.jpeg" class="d-block img-fluid" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="images/carousel/2.jpeg" class="d-block img-fluid" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="images/carousel/3.jpeg" class="d-block img-fluid" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>