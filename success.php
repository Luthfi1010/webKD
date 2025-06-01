<?php
if (!isset($_GET['reg'])) {
    header('Location: index.php');
    exit();
}
$regNumber = $_GET['reg'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil - KeDai Computerworks</title>
    <link href="assets/img/logokedai.png" rel="icon">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/977ee109edb851f6c4a2c401445c74ee?family=Staccato+222" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            max-width: 600px;
            width: 90%;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 15px;
        }

        .logoo {
            width: 80px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .logoo:hover {
            transform: scale(1.1);
        }

        .registration-number {
            font-size: 24px;
            color: #2c3e50;
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .btn-home {
            margin-top: 20px;
        }

        .thank-you {
            color: #2c3e50;
            margin: 20px 0;
        }

        @font-face {
            font-family: 'Staccato 222';
            src: url('https://db.onlinewebfonts.com/t/977ee109edb851f6c4a2c401445c74ee.woff2') format('woff2'),
                url('https://db.onlinewebfonts.com/t/977ee109edb851f6c4a2c401445c74ee.woff') format('woff'),
                url('https://db.onlinewebfonts.com/t/977ee109edb851f6c4a2c401445c74ee.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        .kedai {
            font-family: 'Rockwell', 'Courier New', 'Georgia', serif;
            font-weight: bold;
        }

        .computerworks {
            font-family: 'Staccato 222', cursive, sans-serif;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <div class="success-container">
        <div class="logo-container">
            <img src="assets/img/logokedai.png" alt="KeDai Logo" class="logoo">
            <img src="assets/img/CODE.png" alt="STE Logo" class="logoo">
        </div>
        <h2><span class="kedai">KeDai</span> <span class="computerworks">Computerworks</span></h2>
        <div class="thank-you">
            <h3>Terima Kasih!</h3>
            <p>Pendaftaran Anda telah berhasil</p>
        </div>
        <div class="registration-number">
            <strong>Nomor Registrasi:</strong><br>
            <?php echo htmlspecialchars($regNumber); ?>
        </div>
        <p>Silakan simpan nomor registrasi Anda untuk keperluan selanjutnya</p>
        <a href="index.php" class="btn btn-primary btn-home">
            Kembali Halaman Utama
        </a>
    </div>
</body>

</html>