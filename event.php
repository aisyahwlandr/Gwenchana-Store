<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                    <button class="btn btn-sm rounded-circle btn-light" name="bcari" type="submit">
                        <img style="width: 24px; height: 24px;" src="image/search.png">
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card m-3" style="max-width: 100%; background-color: #a1d2fa;" data-aos="flip-left" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="image/event3.jpg" class="img-fluid rounded-start" alt="..." >
                </div>
                <div class="col-md-8">
                    <div class="card-body" align="justify">
                        <h5 class="card-title">XCCURATE memutuskan rencananya untuk beralih ke ProSecene VALORANT</h5>
                        <p class="card-text">Sebelumnya, pada September 2022, xccurate memutuskan untuk meninggalkan scene CS:GO dan berfokus untuk bermain VALORANT. Tetapi sepanjang musim, pemain yang lolos di dua major turnamen Valve ini hanya terlihat melakukan grinding rank di VALORANT. Meski dirinya sempat terlihat beberapa kali bermain di scene VALORANT, namun penampilan terakhirnya yaitu pada saat tahun 2022 dan saat itu ia merupakan pemain pengganti untuk di Persija Esports. Xccurate berhasil menampilkan performa gemilang dengan KDA 53/40/7 dalam series yang berlangsung selama 3 map tersebut.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card m-3" style="max-width: 100%; background-color: #a1d2fa;" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500">
            <div class="row g-0">
                <div class="col-md-4" >
                    <img src="image/event4.jpg" class="img-fluid rounded-start" alt="..">
                </div>
                <div class="col-md-8">
                    <div class="card-body" align="justify">
                        <h5 class="card-title">Fakta Menarik yang Terjadi di 2023 PMRC SEA vs PEL</h5>
                        <p class="card-text">Bigetron Red Villains akhirnya resmi mengakhiri puasa gelar mereka di ajang 2023 PMRC SEA vs PEL. Sang robot merah tampil begitu konsisten sedari hari pertama kompetisi ini dimulai. Terbukti, setelah hari pertama laga ini digelar, mereka berada di posisi kedua dengan perolehan 1x WWCD. Berlanjut ke hari berikutnya, uHigh dan kolega mampu bermain seperti hari pertama dan bertahan di posisi ketiga. Di hari penentuan lah mereka tampil sangat percaya diri dan mampu memperoleh 2x WWCD dan berada di puncak klasemen. BTR RV berhasil menjadi juara usai unggul 5 poin dari Morph GPX yang mengisi peringkat kedua.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card m-3" style="max-width: 100%; background-color: #a1d2fa;" data-aos="flip-left" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-4" >
                    <img src="image/event5.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body"  align="justify">
                        <h5 class="card-title">MIKOTO Sharing tips buat pemula di game Dota 2</h5>
                        <p class="card-text">Pemain Dota 2 Indonesia Rafli "Mikoto" Fathur Rahman, memberikan tips untuk pemula yang tertarik bermain salah satu game Valve Dota 2. Mikoto merupakan salah satu pemain profesional yang sering sekali menjadi bahan pembicaraan karena prestasinya musim ini yang membanggakan. Bersama timnya yaitu Talon Esports, Mikoto berhasil membawa organisasi asal hongkong tersebut meraih top 3 di dua kejuaraan internasional Lima Major dan Riyadh Master 2023. Selain itu, pada turnamen Riyadh Master 2023 Mikoto juga keluar sebagai MVP turnamen karena performa yang cukup gemilang.</p>
                    </div>
                </div>
            </div>
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