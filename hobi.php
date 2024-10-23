<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Hobi</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #007bff; 
            color: white;
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
        #hobbies {
            background-color: #007bff; 
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .hobby-list {
            list-style-type: none; 
            padding: 0;
        }
        .hobby-list li {
            background-color: rgba(255, 255, 255, 0.2); 
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
            color: white;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?> 

    <div class="content">
        <section id="hobbies">
            <div class="container">
                <h2 class="mb-5" data-aos="fade-up">Hobi Saya</h2>
                <p data-aos="fade-up">
                    Hobi adalah bagian penting dalam kehidupan saya. Beberapa hobi yang saya nikmati meliputi:
                </p>
                <ul class="hobby-list mt-4" data-aos="fade-up">
                    <?php
                    $sql = "SELECT * FROM hobi"; 
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<li>" . $row['deskripsi'] . "</li>";
                        }
                    } else {
                        echo "<li>Tidak ada hobi yang ditemukan.</li>";
                    }
                    ?>
                </ul>
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
