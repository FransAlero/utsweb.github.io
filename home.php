<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Home - Frans Alero</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1; 
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .hero-section {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero-content {
            color: #fff;
        }

        .hero-content h2 {
            font-size: 2.5rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-top: 20px;
        }

        .btn-custom {
            background-color: #ff5722;
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .btn-custom:hover {
            background-color: #e64a19;
        }

        .profile-image {
            max-width: 300px;
            border-radius: 50%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin-top: 30px;
        }

        .btn-container {
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?> 

    <div class="content">
        <section id="home" class="hero-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 hero-content" data-aos="fade-right">
                        <?php
                        $sql = "SELECT greeting, name, description FROM profile LIMIT 1"; 
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<h2>" . $row['greeting'] . "</h2>";
                                echo "<h1 class='display-4 fw-bold'>" . $row['name'] . "</h1>";
                                echo "<h2 class='animated-text'>" . $row['description'] . "</h2>";
                            }
                        } else {
                            echo "<h2>Data tidak ditemukan</h2>";
                        }
                        ?>
                        <p class="mt-3">
                        Terima kasih telah berkunjung di web saya! Di sini Kalian dapat menemukan Informasi Tentang Saya, Portofolio, dan cara untuk Menghubungi Saya melalui email yang tersedia. Selamat menjelajahi Portofolio saya.
                        </p>
                    </div>
                    
                    <div class="col-lg-6 text-center" data-aos="fade-left">
                        <img src="https://picsum.photos/300/300" alt="Gambar Profil" class="profile-image rounded-circle shadow-lg">
                        <div class="btn-container">
                            <a href="about.php" class="btn btn-custom">Lebih Lanjut Tentang Saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 Frans Alero. Hak Cipta Dilindungi.</p>
            <div>
                <a href="#" class="text-white me-3">Privasi</a>
                <a href="#" class="text-white me-3">Syarat</a>
                <a href="#" class="text-white">Kontak</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init(); 
    </script>
</body>
</html>
