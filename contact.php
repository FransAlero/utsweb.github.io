<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

        #contact {
            padding: 60px 0;
            background-color: #007bff; 
            color: white;
            flex: 1;
        }

        .contact-info {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.2); 
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .contact-info h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 18px;
            margin: 5px 0;
        }

        .contact-info a {
            color: white;
            text-decoration: underline;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?> 
  
    <section id="contact">
        <div class="container" data-aos="fade-up">
            <h2 class="text-center mb-5">Contact Information</h2>
            <div class="contact-info" data-aos="zoom-in">
                <h3>Hubungi Kami</h3>
                <?php
                $sql = "SELECT * FROM contact_info";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<p><strong>Nama:</strong> " . $row['nama'] . "</p>";
                        echo "<p><strong>Email:</strong> <a href='mailto:" . $row['email'] . "'>" . $row['email'] . "</a></p>";
                        echo "<p><strong>Telepon:</strong> " . $row['telepon'] . "</p>";
                        echo "<p><strong>Alamat:</strong> " . $row['alamat'] . "</p>";
                    }
                } else {
                    echo "<p>Tidak ada informasi kontak yang ditemukan.</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Frans Alero Hutapea. Hak Cipta Dilindungi.</p>
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
