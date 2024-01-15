<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>GWENCHANA STORE</title>
</head>

<body style="background-color: rgb(43, 0, 43);">
    <nav class="navbar navbar-expand-lg sticky-top" style="background-image: linear-gradient(to bottom, #79155B, #940B92);">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="index.php">
                <img src="image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            </a>
            <a class="navbar-brand fw-bold text-white" href="index.php">GWENCHANA STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0 mx-5">
                    <li class="nav-item">
                        <a class="nav-link active text-white" ia-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">Games</a>
                        <ul class="dropdown-menu" onmouseover="this.style.backgroundColor='white'">
                            <li><a class="dropdown-item" href="gamespc.php">for PC</a></li>
                            <li><a class="dropdown-item" href="gamesmobile.php">for Mobile</a></li>
                            <li><a class="dropdown-item" href="gamesvoucher.php">for Voucher</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="event.php">Event</a>
                    </li>
                </ul>
                <form class="d-flex me-4" role="search" action="filter.php" method="get">
                    <?php $tcari = isset($_GET['tcari']) ? $_GET['tcari'] : ''; ?>
                    <input class="form-control me-2" name="tcari" value="<?= $tcari ?>" type="text" placeholder="Temukan games anda" aria-label="Search" style="color: #940B92;">
                    <button class="btn btn-sm rounded-circle btn-light" name="bcari" type="submit" href="loginregist.html">
                        <img style="width: 24px; height: 24px;" src="image/search.png">
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item my-5 active" align="center">
                <center>
                    <iframe width="901" height="380" src="https://www.youtube.com/embed/XfuMEmcz3k0" title="REVELATION // Episode 6 Cinematic - VALORANT" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </center>
            </div>
            <div class="carousel-item my-5">
                <center>
                    <iframe width="901" height="380" src="https://www.youtube.com/embed/pw3N3Uv1OLk" title="Terminus | NOLAN | New Hero Nolan&#39;s Cinematic Trailer 4K | Mobile Legends: Bang Bang" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </center>
            </div>
            <div class="carousel-item my-5">
                <center>
                    <iframe width="901" height="380" src="https://www.youtube.com/embed/TmaAOV4SJNQ" title="[Genshin Impact - Chapter Teyvat] Teaser Interlude: Sandiwara di Malam Musim Dingin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </center>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <h2 class="py-4 text-white">Top Up Murah, Cepat, Terpercaya? Gwenchana Store Solusinya!</h2>
        <div class="row row-cols-1 row-cols-md-3">
            <?php
            $hasil = mysqli_query($db, "SELECT * FROM games LIMIT 3");

            while ($row = mysqli_fetch_object($hasil)) {
            ?>
                <a href="katalog.php?id=<?= $row->id ?>" style="text-decoration: none;">
                    <div class="col py-4" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card border-dark h-100" style="border-color: white;">
                            <img src="<?php echo $row->photo ?>" class="card-img-top" alt="t">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $row->title ?></h5>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="container">
        <button id="scrollUpBtn" class="btn btn-sm rounded-circle scroll-up-btn d-none float-end">
            <img style="width: 30px; height: 30px;" src="image/arrow.svg">
        </button>
    </div>

    <div class="container">
        <footer class="py-4 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="https://www.gmail.com/" class="nav-link px-2 text-white">E-Mail</a></li>
                <li class="nav-item"><a href="https://www.instagram.com/" class="nav-link px-2 text-white">Instagram</a></li>
                <li class="nav-item"><a href="https://www.facebook.com/" class="nav-link px-2 text-white">Facebook</a></li>
                <li class="nav-item"><a href="https://www.twitter.com/" class="nav-link px-2 text-white">Twitter</a></li>
            </ul>
            <p class="text-center text-white">&copy; 2023 Gwenchana</p>
        </footer>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fungsi untuk menangani perilaku tombol "Scroll Up"
            document.getElementById('scrollUpBtn').addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Fungsi untuk memeriksa posisi scroll
            window.addEventListener('scroll', function() {
                var scrollPosition = window.scrollY;

                if (scrollPosition > 300) {
                    document.getElementById('scrollUpBtn').classList.remove('d-none');
                } else {
                    document.getElementById('scrollUpBtn').classList.add('d-none');
                }
            });
        });
    </script>
</body>

</html>