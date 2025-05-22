<?php
include 'config/fungsi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="KeDai Computerworks" />
    <meta name="keywords" content="kedai, kedai computerworks, app, kdcw" />
    <link href="assets/img/logokedai.png" rel="icon">
    <link rel="stylesheet" href="assets/css/daftar.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Pendaftaran Search To Extract XXI</title>
    <style>

    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <div class="header">
                <h2>Pendaftaran Search To Extract XXI</h2>
                <p><img src="assets/img/logokedai.png" alt="" class="logoo"><span class="kedai">KeDai</span><span
                        class="computerworks">Computerworks</span></p>
            </div>
            <form id="formPendaftaran">
                <div class="modal-body">
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

                        <!-- Tempat -->
                        <div class="col-md-6">
                            <label for="tempat" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat" name="tempat"
                                placeholder="Masukkan tempat lahir">
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="col-md-6">
                            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="col-md-6 mt-3">
                            <label for="jenisKelamin" class="form-label mb-2">Jenis Kelamin</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenisKelamin"
                                        id="jenisKelaminLaki" value="Laki-laki">
                                    <label class="form-check-label" for="jenisKelaminLaki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenisKelamin"
                                        id="jenisKelaminPerempuan" value="Perempuan">
                                    <label class="form-check-label" for="jenisKelaminPerempuan">Perempuan</label>
                                </div>
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
                            <select class="form-control custom-semester" id="semester" name="semester">
                                <option selected disabled>Pilih Semester</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
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
                        </div>

                        <!-- Bukti Follow -->
                        <div class="col-md-6">
                            <label for="follow" class="form-label">Bukti Follow <a
                                    href="https://www.instagram.com/kd_computerworks/"
                                    class="ig">@kd_computerworks</a></label>
                            <input type="file" class="form-control" id="follow" name="follow">
                        </div>

                        <!-- Pembayaran -->
                        <div class="col-md-6">
                            <label for="pembayaran" class="form-label">Bukti Pembayaran (Opsional)</label>
                            <input type="file" class="form-control" id="pembayaran" name="pembayaran">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-secondary"
                        onclick="window.location.href='index.php'">Kembali</button>
                </div>
            </form>
        </div>
    </div>



    <script type="module">
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
        import {
            getFirestore,
            collection,
            addDoc
        } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-firestore.js";
        import {
            getStorage,
            ref,
            uploadBytes,
            getDownloadURL
        } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-storage.js";

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

        // Handle form submission
        document.querySelector('form').addEventListener('submit', async function (e) {
            e.preventDefault();

            // Collect form data
            const formData = {
                nama: document.getElementById('nama').value,
                nim: document.getElementById('nim').value,
                email: document.getElementById('email').value,
                noHp: document.getElementById('noHp').value,
                noOrtu: document.getElementById('noOrtu').value,
                alamat: document.getElementById('alamat').value,
                tempat: document.getElementById('tempat').value,
                tanggalLahir: document.getElementById('tanggalLahir').value,
                jenisKelamin: document.querySelector('input[name="jenisKelamin"]:checked')?.value,
                asalKampus: document.getElementById('asalKampus').value,
                jurusan: document.getElementById('jurusan').value,
                semester: document.getElementById('semester').value,
                angkatan: document.getElementById('angkatan').value,
                instagram: document.getElementById('instagram').value
            };

            // Validate required fields
            if (!formData.nama || !formData.nim || !formData.email || !formData.noHp) {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Mohon lengkapi semua field yang wajib diisi.'
                });
                return;
            }

            try {
                // Handle file uploads
                const fotoFile = document.getElementById('foto').files[0];
                const followFile = document.getElementById('follow').files[0];
                const pembayaranFile = document.getElementById('pembayaran').files[0]; // Optional file

                if (!fotoFile || !followFile) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Mohon unggah semua file yang diperlukan (foto dan bukti follow).'
                    });
                    return;
                }

                // Upload files to Firebase Storage
                const fotoRef = ref(storage, `foto/${Date.now()}_${fotoFile.name}`);
                const followRef = ref(storage, `follow/${Date.now()}_${followFile.name}`);
                const uploads = [
                    uploadBytes(fotoRef, fotoFile),
                    uploadBytes(followRef, followFile)
                ];

                // Upload pembayaran file if provided
                if (pembayaranFile) {
                    const pembayaranRef = ref(storage, `pembayaran/${Date.now()}_${pembayaranFile.name}`);
                    uploads.push(uploadBytes(pembayaranRef, pembayaranFile));
                }

                const uploadResults = await Promise.all(uploads);

                // Get download URLs
                const fotoURL = await getDownloadURL(uploadResults[0].ref);
                const followURL = await getDownloadURL(uploadResults[1].ref);
                let pembayaranURL = null;

                if (pembayaranFile) {
                    pembayaranURL = await getDownloadURL(uploadResults[2].ref);
                }

                // Add file URLs to formData
                formData.foto = fotoURL;
                formData.follow = followURL;
                if (pembayaranURL) {
                    formData.pembayaran = pembayaranURL;
                }

                // Save data to Firestore
                await addDoc(collection(db, 'ste_2025'), formData);

                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Pendaftaran berhasil disimpan!'
                }).then(() => {
                    // Reset the form
                    document.querySelector('form').reset();
                });
            } catch (error) {
                console.error('Error saving data: ', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan saat menyimpan data.'
                });
            }
        });

        // Handle "Kembali" button
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>