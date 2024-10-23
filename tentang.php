<?php 
include 'koneksi.php';  

$sql = "SELECT nama, deskripsi FROM tentang WHERE id = 1"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    $nama = $data['nama'];
    $deskripsi = $data['deskripsi'];
} else {
    $nama = "Data tidak ditemukan";
    $deskripsi = "Tidak ada data tersedia.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>Tentang Saya</title>
    <style>
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #fff;
        }
        
        .about-section {
            padding: 80px 0;
        }

        .profile-image {
            max-width: 300px;
            border-radius: 50%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
        }

        footer {
            background-color: #000;
            color: #fff;
            padding: 20px;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
        }

        footer a {
            color: #ff5722;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?> 

    <section id="tentang-saya" class="about-section">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Tentang Saya</h2>
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-5 text-center" data-aos="fade-right">
                    <img src="https://picsum.photos/300" alt="Foto Profil" class="profile-image mb-4">
                </div>

                <div class="col-lg-7 about-text" data-aos="fade-left">
                    <p>Halo! Saya <?php echo htmlspecialchars($nama); ?>, adalah mahasiswa Informatika di Universitas Pembangunan Jaya. Saya memiliki minat besar dalam teknologi dan pengembangan web,informasi serta memiliki pengalaman dalam beberapa proyek pengembangan web. Dengan ketertarikan yang kuat dalam dunia teknologi sejak SMA, saya berusaha untuk terus belajar dan berkembang di bidang ini. Selain itu, saya juga berpartisipasi aktif dalam kompetisi Basket dan Game selama saya memiliki waktu luang.</p>                    
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <p>&copy; 2024 <?php echo htmlspecialchars($nama); ?>. Hak Cipta Dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init(); 
    </script>
</body>
</html>


