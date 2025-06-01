<?php
error_reporting(E_ALL);
$host = "localhost";  // Host database
$username = "root";   // Username
$password = "";       // Password (kosong jika tidak ada)
$database = "daftar_event";  // Nama database

// Membuat koneksi
$db = new mysqli($host, $username, $password, $database);

// Mengecek apakah koneksi berhasil
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Cek jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Mengambil dan memvalidasi data form untuk seminar
    if (isset($_POST['pekerjaan'])) {
        $pekerjaan = htmlspecialchars($_POST['pekerjaan']);
        $nim = isset($_POST['nim']) ? htmlspecialchars($_POST['nim']) : null;
        $nama_depan = htmlspecialchars($_POST['nama_depan']);
        $nama_belakang = htmlspecialchars($_POST['nama_belakang']);
        $tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);

        // Pastikan nomor telepon hanya angka
        $nomorTelepon = isset($_POST['nomor_telepon']) ? $_POST['nomor_telepon'] : null;

        // Cek apakah nomor telepon valid
        if (!is_numeric($nomorTelepon) || strlen($nomorTelepon) < 10) {
            echo "<script>swal('Error', 'Nomor telepon tidak valid.', 'error');</script>";
            exit();
        }

        $tahun_masuk = isset($_POST['tahunMasuk']) ? htmlspecialchars($_POST['tahunMasuk']) : null;
        $asal_kampus = isset($_POST['asal_kampus']) ? htmlspecialchars($_POST['asal_kampus']) : null;
        $alamat = htmlspecialchars($_POST['alamat']);

        // Persiapkan query SQL untuk memasukkan data seminar
        $query = "INSERT INTO data_seminar (pekerjaan, nim, nama_depan, nama_belakang, tgl_lahir, nomorTelepon, tahun_masuk, asal_kampus, alamat) 
                  VALUES ('$pekerjaan', '$nim', '$nama_depan', '$nama_belakang', '$tgl_lahir', '$nomorTelepon', '$tahun_masuk', '$asal_kampus', '$alamat')";

        // Jalankan query untuk seminar
        if ($db->query($query) === TRUE) {
            // Redirect to index.php after successful seminar submission
            header("Location: ../index.php");
            exit();
        } else {
            echo "<script>swal('Error', 'Gagal memasukkan data seminar.', 'error');</script>";
        }
    }

    // Mengambil data untuk tournament
    $nama_tim = isset($_POST['nama_tim']) ? htmlspecialchars($_POST['nama_tim']) : '';

    // Validasi input nama tim
    if (empty($nama_tim)) {
        echo "<script>swal('Error', 'Nama tim tidak boleh kosong!', 'error');</script>";
        exit();
    }

    // Array untuk menampung nama pemain dan file KTM-nya
    $pemain = [];
    $ktm_files = [];
    $uploaded_files = [];

    // Loop untuk mengambil data pemain dan KTM-nya
    for ($i = 1; $i <= 5; $i++) {
        $pemain[$i] = isset($_POST["pemain_$i"]) ? htmlspecialchars($_POST["pemain_$i"]) : '';
        $ktm_files[$i] = isset($_FILES["ktm_$i"]) ? $_FILES["ktm_$i"] : null;
    }

    // Validasi input nama pemain
    foreach ($pemain as $key => $nama) {
        if (empty($nama)) {
            echo "<script>swal('Error', 'Nama pemain $key tidak boleh kosong!', 'error');</script>";
            exit();
        }
    }

    // Proses upload KTM
    foreach ($ktm_files as $index => $file) {
        if ($file && $file['error'] == 0) {
            $upload_dir = 'upload';
            $file_name = $upload_dir . basename($file['name']);
            // Cek apakah file berhasil dipindahkan ke folder uploads
            if (move_uploaded_file($file['tmp_name'], $file_name)) {
                $uploaded_files[$index] = $file_name;
            } else {
                echo "<script>swal('Error', 'Gagal mengupload file KTM Pemain $index.', 'error');</script>";
                exit();
            }
        } else {
            echo "<script>swal('Error', 'File KTM Pemain $index tidak valid.', 'error');</script>";
            exit();
        }
    }

    // Proses simpan data ke database untuk tournament
    $sql = "INSERT INTO tournament (nama_tim, pemain_1, pemain_2, pemain_3, pemain_4, pemain_5, ktm_1, ktm_2, ktm_3, ktm_4, ktm_5)
            VALUES ('$nama_tim', '$pemain[1]', '$pemain[2]', '$pemain[3]', '$pemain[4]', '$pemain[5]', 
                    '$uploaded_files[1]', '$uploaded_files[2]', '$uploaded_files[3]', '$uploaded_files[4]', '$uploaded_files[5]')";

    if ($db->query($sql) === TRUE) {
        // Redirect to index.php after successful tournament submission
        header("Location: ../index.php");
        exit();
    } else {
        echo "<script>swal('Error', 'Gagal memasukkan data tournament.', 'error');</script>";
    }
}


?>