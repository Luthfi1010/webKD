<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background-color: #1e1e1e;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            padding: 40px;
            width: 800px;
            max-width: 90%;
            text-align: left;
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h2 {
            font-size: 2.5em;
            color: #64b5f6;
            margin-bottom: 5px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #90caf9;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 6px;
            background-color: #2c2c2c;
            color: #fff;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            background-color: #424242;
        }

        .form-select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 6px;
            background-color: #2c2c2c;
            color: #fff;
            font-size: 1em;
            appearance: none;
            /* Remove default arrow */
            background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
        }

        .form-select:focus {
            outline: none;
            background-color: #424242;
        }

        .form-check {
            margin-bottom: 15px;
        }

        .form-check-input {
            margin-right: 8px;
            vertical-align: middle;
        }

        .form-check-label {
            color: #90caf9;
            vertical-align: middle;
        }

        .btn-custom {
            background-color: #64b5f6;
            color: #121212;
            border: none;
            padding: 14px 30px;
            border-radius: 6px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .btn-custom:hover {
            background-color: #90caf9;
        }

        .btn-secondary {
            background-color: #424242;
            color: #fff;
            border: none;
            padding: 14px 30px;
            border-radius: 6px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 15px;
        }

        .btn-secondary:hover {
            background-color: #616161;
        }

        img {
            max-width: 150px;
            border-radius: 8px;
            margin-top: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-container {
                padding: 30px;
            }

            .form-header h2 {
                font-size: 2em;
            }

            .btn-custom,
            .btn-secondary {
                padding: 12px 25px;
                font-size: 1em;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2>Edit Data Pendaftaran</h2>
            </div>
            <form id="editForm">
                <div class="row g-3">
                    <!-- Nama -->
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <!-- NIM -->
                    <div class="col-md-6">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <!-- No HP -->
                    <div class="col-md-6">
                        <label for="noHp" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="noHp" name="noHp">
                    </div>

                    <!-- No Ortu -->
                    <div class="col-md-6">
                        <label for="noOrtu" class="form-label">No HP Orang Tua</label>
                        <input type="text" class="form-control" id="noOrtu" name="noOrtu">
                    </div>

                    <!-- Alamat -->
                    <div class="col-md-6">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>

                    <!-- Tempat Lahir -->
                    <div class="col-md-6">
                        <label for="tempat" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat" name="tempat">
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="col-md-6">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="col-md-6">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelaminLaki"
                                value="Laki-laki">
                            <label class="form-check-label" for="jenisKelaminLaki">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelaminPerempuan"
                                value="Perempuan">
                            <label class="form-check-label" for="jenisKelaminPerempuan">Perempuan</label>
                        </div>
                    </div>

                    <!-- Asal Kampus -->
                    <div class="col-md-6">
                        <label for="asalKampus" class="form-label">Asal Kampus</label>
                        <input type="text" class="form-control" id="asalKampus" name="asalKampus">
                    </div>

                    <!-- Jurusan -->
                    <div class="col-md-6">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>

                    <!-- Semester -->
                    <div class="col-md-6">
                        <label for="semester" class="form-label">Semester</label>
                        <select class="form-select" id="semester" name="semester">
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="3">Semester 3</option>
                            <option value="4">Semester 4</option>
                            <option value="5">Semester 5</option>
                            <option value="6">Semester 6</option>
                            <option value="7">Semester 7</option>
                            <option value="8">Semester 8</option>
                        </select>
                    </div>

                    <!-- Angkatan -->
                    <div class="col-md-6">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <input type="number" class="form-control" id="angkatan" name="angkatan">
                    </div>

                    <!-- Instagram -->
                    <div class="col-md-6">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram">
                    </div>

                    <!-- Foto -->
                    <div class="col-md-6">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <img id="previewFoto" src="" alt="Preview Foto" style="max-width: 150px; margin-top: 10px;">
                    </div>

                    <!-- Bukti Follow -->
                    <div class="col-md-6">
                        <label for="follow" class="form-label">Bukti Follow</label>
                        <input type="file" class="form-control" id="follow" name="follow">
                        <img id="previewFollow" src="" alt="Preview Follow" style="max-width: 150px; margin-top: 10px;">
                    </div>

                    <!-- Bukti Pembayaran -->
                    <div class="col-md-6">
                        <label for="pembayaran" class="form-label">Bukti Pembayaran (Opsional)</label>
                        <input type="file" class="form-control" id="pembayaran" name="pembayaran">
                        <img id="previewPembayaran" src="" alt="Preview Pembayaran"
                            style="max-width: 150px; margin-top: 10px;">
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn-custom">Simpan Perubahan</button>
                    <a href="index.php" class="btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
        import { getFirestore, doc, getDoc, updateDoc } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-firestore.js";
        import { getStorage, ref, uploadBytes, getDownloadURL } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-storage.js";

        // Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyBl2ZL-IdeiHulplNu1de-avhhzEWaBplo",
            authDomain: "pendaftaran-kedai.firebaseapp.com",
            projectId: "pendaftaran-kedai",
            storageBucket: "pendaftaran-kedai.appspot.com",
            messagingSenderId: "173578785882",
            appId: "1:173578785882:web:f9e34f6deb6f6886023463"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const db = getFirestore(app);
        const storage = getStorage(app);

        // Function to load data
        async function loadData() {
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id');

            if (id) {
                const docRef = doc(db, "ste_2025", id);
                try {
                    const docSnap = await getDoc(docRef);
                    if (docSnap.exists()) {
                        const data = docSnap.data();
                        document.getElementById('nama').value = data.nama || '';
                        document.getElementById('nim').value = data.nim || '';
                        document.getElementById('email').value = data.email || '';
                        document.getElementById('noHp').value = data.noHp || '';
                        document.getElementById('noOrtu').value = data.noOrtu || '';
                        document.getElementById('alamat').value = data.alamat || '';
                        document.getElementById('tempat').value = data.tempat || '';
                        document.getElementById('tanggalLahir').value = data.tanggalLahir || '';
                        document.querySelector(`input[name="jenisKelamin"][value="${data.jenisKelamin}"]`).checked = true;
                        document.getElementById('asalKampus').value = data.asalKampus || '';
                        document.getElementById('jurusan').value = data.jurusan || '';
                        document.getElementById('semester').value = data.semester || '';
                        document.getElementById('angkatan').value = data.angkatan || '';
                        document.getElementById('instagram').value = data.instagram || '';

                        // Preview existing images
                        document.getElementById('previewFoto').src = data.foto || '';
                        document.getElementById('previewFollow').src = data.follow || '';
                        document.getElementById('previewPembayaran').src = data.pembayaran || '';
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Data tidak ditemukan',
                        });
                    }
                } catch (error) {
                    console.error("Error getting document:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal memuat data',
                    });
                }
            }
        }

        // Function to handle form submission
        document.getElementById('editForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id');

            if (id) {
                const docRef = doc(db, "ste_2025", id);
                const nama = document.getElementById('nama').value;
                const nim = document.getElementById('nim').value;
                const email = document.getElementById('email').value;
                const noHp = document.getElementById('noHp').value;
                const noOrtu = document.getElementById('noOrtu').value;
                const alamat = document.getElementById('alamat').value;
                const tempat = document.getElementById('tempat').value;
                const tanggalLahir = document.getElementById('tanggalLahir').value;
                const jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked')?.value;
                const asalKampus = document.getElementById('asalKampus').value;
                const jurusan = document.getElementById('jurusan').value;
                const semester = document.getElementById('semester').value;
                const angkatan = document.getElementById('angkatan').value;
                const instagram = document.getElementById('instagram').value;

                try {
                    await updateDoc(docRef, {
                        nama: nama,
                        nim: nim,
                        email: email,
                        noHp: noHp,
                        noOrtu: noOrtu,
                        alamat: alamat,
                        tempat: tempat,
                        tanggalLahir: tanggalLahir,
                        jenisKelamin: jenisKelamin,
                        asalKampus: asalKampus,
                        jurusan: jurusan,
                        semester: semester,
                        angkatan: angkatan,
                        instagram: instagram
                    });

                    Swal.fire({
                        icon: 'success',
                        title: 'Data berhasil diperbarui',
                    }).then(() => {
                        window.location.href = 'index.php';
                    });
                } catch (error) {
                    console.error("Error updating document:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal memperbarui data',
                    });
                }
            }
        });

        // Load data on page load
        document.addEventListener("DOMContentLoaded", loadData);
    </script>
</body>

</html>