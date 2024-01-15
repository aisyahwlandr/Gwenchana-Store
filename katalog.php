<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>GWENCHANA STORE</title>
    <style>
        .btn-primary.selected {
            color: white;
            /* Warna tulisan terpilih */
            background-color: #0A58CA;
            /* Warna kartu terpilih */
        }
    </style>
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
        <form method="POST" action="insert.php">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body my-4" style="background-image: linear-gradient(to bottom, #55aef6, #a1d2fa);" align="center">
                    <h5 class="card-title pb-1 border-bottom border-dark">Langkah - Langkah Top Up</h5>
                    <div class="mx-auto" align="left">
                        <h6 class="card-text text-left">1. Masukkan Id Player kalian</h6>
                        <h6 class="card-text text-left">2. Masukkan E-Mail yang digunakan</h6>
                        <h6 class="card-text">3. Pilih item yang diinginkan</h6>
                        <h6 class="card-text text-left">4. Cek kembali item yang diinginkan</h6>
                        <h6 class="card-text text-left">5. Tampilan pembayaran akan muncul</h6>
                        <h6 class="card-text">6. Scan barcode yang muncul</h6>
                        <h6 class="card-text text-left">7. Kirim screenshot detail pesanan & <br>bukti pembayaran dengan mengklik tautan yang tertera</h6>
                        <h6 class="card-text text-left">8. Mendapat pesan whatsapp "TOP-UP BERHASIL" <br> jika transaksi telah selesai</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body my-4" style="background-image: linear-gradient(to bottom, #55aef6, #a1d2fa);" align="center">
                            <h5 class="card-title pb-1 border-bottom border-dark">Masukkan E-Mail Anda</h5>
                            <div class="mb-3 mx-auto">
                                <input type="email" class="form-control" id="emailAnda" name="email" placeholder="Masukkan E-Mail Anda">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-body pb-4" style="background-image: linear-gradient(to bottom, #55aef6, #a1d2fa);" align="center">
                            <h5 class="card-title pb-1 border-bottom border-dark">Masukkan ID Player</h5>
                            <div class="mb-3 mx-auto">
                                <input type="text" class="form-control" id="idAnda" name="idplayer" placeholder="Masukkan ID Player">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body my-4" style="background-image: linear-gradient(to bottom, #55aef6, #a1d2fa);" align="center">
            <h5 class="card-title pb-1 border-bottom border-dark">Pilih Item</h5>
            <div class="card-group gap-2 mx-auto d-md-flex justify-content-center">
                <?php

                if (isset($_GET['id'])) { // Memeriksa apakah parameter 'id' telah diberikan
                    $id = $_GET['id']; // Mengambil ID dari parameter 'id'
                    $sql = "SELECT * FROM katalog WHERE id = $id"; // Menggunakan ID dalam kueri SQL
                    $hasil = mysqli_query($db, $sql);

                    while ($row = mysqli_fetch_object($hasil)) {
                ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card btn btn-primary">
                                <center>
                                    <img src="<?php echo $row->photo ?>" class="card-img-top" style="height: 25px; width: 25px;" alt="...">
                                </center>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row->desc1 ?></p>
                                    <p class="card-text"><?php echo $row->price1 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card btn btn-primary">
                                <center>
                                    <img src="<?php echo $row->photo ?>" class="card-img-top" style="height: 25px; width: 25px;" alt="...">
                                </center>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row->desc2 ?></p>
                                    <p class="card-text"><?php echo $row->price2 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card btn btn-primary">
                                <center>
                                    <img src="<?php echo $row->photo ?>" class="card-img-top" style="height: 25px; width: 25px;" alt="...">
                                </center>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row->desc3 ?></p>
                                    <p class="card-text"><?php echo $row->price3 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card btn btn-primary">
                                <center>
                                    <img src="<?php echo $row->photo ?>" class="card-img-top" style="height: 25px; width: 25px;" alt="...">
                                </center>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row->desc4 ?></p>
                                    <p class="card-text"><?php echo $row->price4 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card btn btn-primary">
                                <center>
                                    <img src="<?php echo $row->photo ?>" class="card-img-top" style="height: 25px; width: 25px;" alt="...">
                                </center>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row->desc5 ?></p>
                                    <p class="card-text"><?php echo $row->price5 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card btn btn-primary">
                                <center>
                                    <img src="<?php echo $row->photo ?>" class="card-img-top" style="height: 25px; width: 25px;" alt="...">
                                </center>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row->desc6 ?></p>
                                    <p class="card-text"><?php echo $row->price6 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card btn btn-primary">
                                <center>
                                    <img src="<?php echo $row->photo ?>" class="card-img-top" style="height: 25px; width: 25px;" alt="...">
                                </center>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row->desc7 ?></p>
                                    <p class="card-text"><?php echo $row->price7 ?></p>
                                </div>
                            </div>
                        </div>
            </div>
    <?php
                    }
                } else {
                    echo "Tidak tersedia.";
                }
    ?>
        </div>
        </form>
    </div>


    <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="popupModalLabel">DETAIL PESANAN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="popupContent">
                    <!-- Content of the popup will be dynamically added using JavaScript -->

                </div>
                <center><img src="image/qris.png" style="width: 50%; height: 50%;"></center>
                <center><a href="https://wa.me/nomorwa" target="_blank">KIRIM BUKTI PEMBAYARAN</a></center>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="pesanButton" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
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

    <!-- <script>
        //BATAS ATAS KODE SCROLL UP//
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

        //BATAS ATAS KODE CARD SELECTED//
        document.addEventListener('DOMContentLoaded', function() {
            // Mendapatkan semua elemen kartu dengan kelas 'btn-primary'
            var cards = document.querySelectorAll('.btn-primary');

            // Menambahkan event listener untuk setiap kartu
            cards.forEach(function(card) {
                card.addEventListener('click', function() {
                    // Menghapus kelas 'selected' dari semua kartu
                    cards.forEach(function(c) {
                        c.classList.remove('selected');
                    });

                    // Menambahkan kelas 'selected' ke kartu yang diklik
                    this.classList.add('selected');
                });
            });
        });

        //BATAS ATAS KODE POPUP//
        document.addEventListener('DOMContentLoaded', function() {
            // Get the input element
            var emailElement = document.getElementById('emailAnda');
            var idElement = document.getElementById('idAnda');


            // Get all the buttons with the class 'btn-primary'
            var buttons = document.querySelectorAll('.btn-primary');

            // Add a click event listener to each button
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Get the input value
                    var emailValue = emailElement.value;
                    var idValue = idElement.value;

                    // Get the text content of the clicked button
                    var buttonText = this.textContent;

                    // Create a message to display in the modal
                    // var message = 'Email: ' + emailValue + '<br>' + 'ID Player: ' + idValue + '<br>' + 'Item TopUp: ' + buttonText;
                    var message = '<table>' +
                        '<tr><td>Email</td><td> </td><td>:</td><td>' + emailValue + '</td></tr>' +
                        '<tr><td>ID Player</td><td> </td><td>:</td><td>' + idValue + '</td></tr>' +
                        '<tr><td>Item TopUp</td><td> </td><td>:</td><td>' + buttonText + '</td></tr>' +
                        '</table>';


                    // Set the content of the modal body
                    document.getElementById('popupContent').innerHTML = message;

                    // Show the modal
                    var popupModal = new bootstrap.Modal(document.getElementById('popupModal'));
                    popupModal.show();
                });
            });
        });
    </script> -->


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the input elements
        var emailElement = document.getElementById('emailAnda');
        var idplayerElement = document.getElementById('idAnda');

        // Get the selected card
        var selectedCard = null;

        // Get all the buttons with the class 'btn-primary'
        var buttons = document.querySelectorAll('.btn-primary');

        // Add a click event listener to each button
        buttons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Get the input values
                var emailValue = emailElement.value;
                var idplayerValue = idplayerElement.value;

                // Get the text content and price of the clicked button
                var buttonText = this.querySelector('.card-text:first-child').textContent.trim();
                var buttonPrice = this.querySelector('.card-text:last-child').textContent.trim();

                // Set the selected card
                selectedCard = {
                    desc: buttonText,
                    price: buttonPrice
                };

                // Create a message to display in the modal
                var message = '<table>' +
                    '<tr><td>Email</td><td> </td><td>:</td><td>' + emailValue + '</td></tr>' +
                    '<tr><td>ID Player</td><td> </td><td>:</td><td>' + idplayerValue + '</td></tr>' +
                    '<tr><td>Item</td><td> </td><td>:</td><td>' + selectedCard.desc + '</td></tr>' +
                    '<tr><td>Price</td><td> </td><td>:</td><td>' + selectedCard.price + '</td></tr>' +
                    '</table>';

                // Set the content of the modal body
                document.getElementById('popupContent').innerHTML = message;

                // Show the modal
                var popupModal = new bootstrap.Modal(document.getElementById('popupModal'));
                popupModal.show();
            });
        });

        // Add an event listener to the "Pesan Sekarang" button
        var pesanButton = document.getElementById('pesanButton');
        pesanButton.addEventListener('click', function () {
            // Check if a card is selected
            if (selectedCard !== null) {
                // Send data to the server using AJAX
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Handle the response from the server if needed
                        console.log(xhr.responseText);
                    }
                };


                // Prepare data to be sent
                
                var data = "email=" + emailElement.value +
                    "&idplayer=" + idplayerElement.value +
                    "&item=" + encodeURIComponent(selectedCard.desc) +
                    "&price=" + selectedCard.price;

                // Set up the AJAX request
                xhr.open("POST", "insert.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                // Send the request
                xhr.send(data);
            }
        });
    });
</script>

</body>