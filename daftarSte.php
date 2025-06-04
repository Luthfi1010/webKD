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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Pendaftaran Search To Extract XXI</title>
    <style>
        .payment-info-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .payment-info-container h4 {
            color: #2c3e50;
            font-weight: 600;
        }

        .payment-details .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }

        .payment-details .card:hover {
            transform: translateY(-2px);
        }

        .bank-info {
            text-align: center;
            margin-bottom: 15px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .bank-info:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .bank-logo {
            max-width: 120px;
            height: auto;
            margin: 0 auto;
            display: block;
            filter: grayscale(0);
            transition: transform 0.3s ease;
        }

        .bank-logo:hover {
            transform: scale(1.05);
        }

        .account-number {
            font-size: 1.2em;
            font-weight: 600;
            color: #2c3e50;
            margin: 5px 0;
            letter-spacing: 1px;
        }

        .account-name {
            color: #666;
            font-size: 0.9em;
        }

        .card-title {
            text-align: center;
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(44, 62, 80, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading-content {
            text-align: center;
            padding: 20px;
        }

        .custom-spinner {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .spinner-ring {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 64px;
            height: 64px;
            margin: 8px;
            border: 6px solid #fff;
            border-radius: 50%;
            border-color: #fff transparent transparent transparent;
            animation: spin 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        }

        .loading-text {
            color: #fff;
            font-size: 1.1em;
            font-weight: 500;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
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

        .logo-container .logoo {
            width: 80px;
            height: auto;
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.5s ease;
            animation: logoAppear 0.8s forwards;
            animation-delay: calc(var(--logo-delay, 0) * 200ms);
        }

        @keyframes logoAppear {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .logoo:hover {
            transform: scale(1.1);
        }

        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .form-container {
                padding: 15px;
                margin: 10px;
            }

            .logo-container {
                gap: 10px;
            }

            .logoo {
                width: 70px;
            }

            .header h2 {
                font-size: 1.5rem;
            }

            .header h3 {
                font-size: 1.2rem;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-label {
                font-size: 0.9rem;
            }

            .form-control {
                font-size: 0.9rem;
                padding: 8px;
            }

            .payment-info-container {
                padding: 15px;
            }

            .bank-info {
                padding: 15px;
            }

            .bank-logo {
                max-width: 100px;
            }

            .account-number {
                font-size: 1em;
            }

            .account-name {
                font-size: 0.8em;
            }

            .modal-footer {
                flex-direction: column;
                gap: 10px;
            }

            .modal-footer .btn {
                width: 100%;
                margin: 0;
            }

            .form-check-inline {
                display: block;
                margin-bottom: 10px;
            }

            .payment-details .col-md-6 {
                padding: 0 10px;
            }

            .loading-content {
                padding: 15px;
            }

            .loading-text {
                font-size: 1em;
            }

            .custom-spinner {
                width: 60px;
                height: 60px;
            }

            .spinner-ring {
                width: 48px;
                height: 48px;
                border-width: 4px;
            }

            /* Form layout fixes */
            .row.g-4 {
                margin: 0;
            }

            .col-md-6 {
                width: 100%;
                padding: 0;
                margin-bottom: 15px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            /* Payment info container fixes */
            .payment-details .col-md-6 {
                width: 100%;
                padding: 0;
            }

            .bank-info {
                margin: 10px 0;
            }

            /* Button fixes */
            .modal-footer {
                padding: 15px 0;
            }

            .modal-footer .btn {
                width: 100%;
                margin: 5px 0;
            }
        }

        /* Small mobile devices */
        @media (max-width: 480px) {
            .container {
                padding: 5px;
            }

            .form-container {
                padding: 10px;
                margin: 5px;
            }

            .logoo {
                width: 60px;
            }

            .header h2 {
                font-size: 1.3rem;
            }

            .header h3 {
                font-size: 1rem;
            }

            .bank-logo {
                max-width: 80px;
            }

            .payment-info-container h4 {
                font-size: 1.1rem;
            }

            .card-title {
                font-size: 1rem;
            }

            .account-number {
                font-size: 0.9em;
                letter-spacing: 0.5px;
            }

            .btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            .form-container {
                padding: 15px;
                margin: 0;
            }

            .row.g-4>* {
                padding-right: 0;
                padding-left: 0;
            }

            .form-control {
                font-size: 16px;
                height: auto;
                padding: 10px;
            }

            /* Adjust spacing for radio buttons */
            .form-check-inline {
                display: block;
                margin-right: 0;
                margin-bottom: 10px;
            }

            /* File input adjustments */
            input[type="file"] {
                font-size: 14px;
            }
        }

        /* New styles for form section titles */
        .form-section-title {
            font-size: 1.2rem;
            font-weight: 500;
            color: #2c3e50;
            margin: 20px 0 10px;
            position: relative;
        }

        .form-section-title::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(to right, #007bff, #6610f2);
        }

        /* Add these to your existing styles */
        [data-aos] {
            pointer-events: none;
        }

        [data-aos].aos-animate {
            pointer-events: auto;
        }

        .form-container {
            opacity: 0;
            transform: translateY(20px);
        }

        .form-container.aos-animate {
            opacity: 1;
            transform: translateY(0);
        }

        .logo-container img {
            opacity: 0;
            transform: scale(0.8);
        }

        .logo-container img.aos-animate {
            opacity: 1;
            transform: scale(1);
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container" data-aos="fade-up" data-aos-duration="1000">
            <div class="header" data-aos="zoom-in" data-aos-delay="200">
                <div class="logo-container">
                    <img src="assets/img/logokedai.png" alt="KeDai Logo" class="logoo" style="--logo-delay: 1">
                    <img src="assets/img/CODE.png" alt="STE Logo" class="logoo" style="--logo-delay: 2">
                </div>
                <h2 data-aos="zoom-in" data-aos-delay="600">
                    <span class="kedai">KeDai</span>
                    <span class="computerworks">Computerworks</span>
                </h2>
                <h3 data-aos="zoom-in" data-aos-delay="800">Pendaftaran Search To Extract XXI</h3>
            </div>

            <!-- Form sections -->
            <form id="formPendaftaran" class="needs-validation" novalidate>
                <!-- Data Pribadi Section -->
                <div class="col-12" data-aos="fade-right" data-aos-delay="200">
                    <h5 class="form-section-title">Data Pribadi</h5>
                </div>

                <!-- Form fields with staggered animations -->
                <div class="row g-4">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <!-- Personal Information fields -->
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>

                    <!-- NIM -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="form-group">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>

                    <!-- No HP -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="450">
                        <div class="form-group">
                            <label for="noHp" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="noHp" name="noHp" required>
                        </div>
                    </div>

                    <!-- No Ortu -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="form-group">
                            <label for="noOrtu" class="form-label">No HP Orang Tua</label>
                            <input type="text" class="form-control" id="noOrtu" name="noOrtu" required>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="550">
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    </div>

                    <!-- Tempat -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="form-group">
                            <label for="tempat" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat" name="tempat"
                                placeholder="Masukkan tempat lahir" required>
                        </div>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="650">
                        <div class="form-group">
                            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required>
                        </div>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="col-md-6 mt-3" data-aos="fade-up" data-aos-delay="700">
                        <label for="jenisKelamin" class="form-label mb-2">Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelaminLaki"
                                    value="Laki-laki" required>
                                <label class="form-check-label" for="jenisKelaminLaki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisKelamin"
                                    id="jenisKelaminPerempuan" value="Perempuan" required>
                                <label class="form-check-label" for="jenisKelaminPerempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>

                    <!-- Asal Kampus -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="750">
                        <div class="form-group">
                            <label for="asalKampus" class="form-label">Asal Kampus</label>
                            <input type="text" class="form-control" id="asalKampus" name="asalKampus" required>
                        </div>
                    </div>

                    <!-- Jurusan -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="800">
                        <div class="form-group">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                        </div>
                    </div>

                    <!-- Semester -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="850">
                        <div class="form-group">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-control custom-semester" id="semester" name="semester" required>
                                <option selected disabled>Pilih Semester</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="900">
                        <div class="form-group">
                            <label for="angkatan" class="form-label">Angkatan</label>
                            <select class="form-control custom-angkatan" id="angkatan" name="angkatan" required>
                                <option selected disabled>Pilih Angkatan</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        </div>
                    </div>

                    <!-- Instagram -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="950">
                        <div class="form-group">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" required>
                        </div>
                    </div>
                </div>

                <!-- Add section titles for better organization -->
                <div class="col-12" data-aos="fade-right" data-aos-delay="200">
                    <h5 class="form-section-title">Dokumen</h5>
                </div>

                <!-- Document uploads -->
                <!-- Foto -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="form-group">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" required>
                    </div>
                </div>

                <!-- Bukti Follow -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="form-group">
                        <label for="follow" class="form-label">Bukti Follow <a
                                href="https://www.instagram.com/kd_computerworks/"
                                class="ig">@kd_computerworks</a></label>
                        <input type="file" class="form-control" id="follow" name="follow" required>
                    </div>
                </div>

                <!-- Add this before the modal-footer div -->
                <div class="row mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-12">
                        <div class="payment-info-container">
                            <h5 class="mb-3">📲 Narahubung</h5>
                            <p class="mb-4">
                                Punya pertanyaan atau butuh info lebih lanjut? Langsung aja klik kontak di bawah ini.
                                Chat aja, jangan sungkan! 😄
                            </p>

                            <div class="row g-3">
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="400">
                                    <a href="https://wa.me/6281324249809" target="_blank"
                                        class="btn btn-outline-success w-100 d-flex align-items-center justify-content-center gap-2 shadow-sm py-3">
                                        <i class="fab fa-whatsapp fa-lg"></i>
                                        <div>
                                            <strong>Graciel</strong><br>
                                            <small>0813-2424-9809</small><br>
                                            <span class="text-muted">Fast respon, santai aja 😎</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="400">
                                    <a href="https://wa.me/62882022422760" target="_blank"
                                        class="btn btn-outline-success w-100 d-flex align-items-center justify-content-center gap-2 shadow-sm py-3">
                                        <i class="fab fa-whatsapp fa-lg"></i>
                                        <div>
                                            <strong>Hilmy</strong><br>
                                            <small>0882-0224-22760</small><br>
                                            <span class="text-muted">Siap bantu kapan aja ✨</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer buttons -->
                <div class="modal-footer" data-aos="fade-up" data-aos-delay="200">
                    <button type="submit" class="btn btn-primary">
                        Daftar
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='index.php'">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="loading-overlay" style="display: none;">
        <div class="loading-content">
            <div class="custom-spinner">
                <div class="spinner-ring"></div>
            </div>
            <p class="mt-3 loading-text">Sedang memproses pendaftaran...</p>
        </div>
    </div>

    <script type="module">
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
        import {
            getFirestore,
            collection,
            addDoc,
            getDoc,
            doc,
            setDoc
        } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-firestore.js";
        import {
            getStorage,
            ref,
            uploadBytesResumable,
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

            try {
                const counterRef = collection(db, 'registration-counter');
                const counterDoc = await getDoc(doc(counterRef, 'lastRegistrationNumber'));

                let nextNumber = 1;
                if (counterDoc.exists()) {
                    nextNumber = counterDoc.data().number + 1;
                }

                // Generate registration number with format: STE/2025/001
                const registrationNumber = `${nextNumber.toString().padStart(3, '0')}`;
                // Show loading overlay
                document.getElementById('loadingOverlay').style.display = 'flex';

                // Validate required fields
                const formData = {
                    noRegistrasi: registrationNumber,
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
                    instagram: document.getElementById('instagram').value,
                    createdAt: new Date()
                };

                if (!formData.nama || !formData.nim || !formData.email || !formData.noHp) {
                    document.getElementById('loadingOverlay').style.display = 'none';
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Mohon lengkapi semua field yang wajib diisi.'
                    });
                    return;
                }

                // Handle file uploads
                const fotoFile = document.getElementById('foto').files[0];
                const followFile = document.getElementById('follow').files[0];

                if (!fotoFile || !followFile) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Mohon unggah semua file yang diperlukan (foto dan bukti follow).'
                    });
                    return;
                }

                // Upload files to Firebase Storage
                const fotoURL = await uploadFile(fotoFile, 'foto');
                const followURL = await uploadFile(followFile, 'follow');

                // Add file URLs to formData
                formData.foto = fotoURL;
                formData.follow = followURL;

                // Save registration data
                await addDoc(collection(db, 'ste_2025'), formData);

                // Update the counter
                await setDoc(doc(counterRef, 'lastRegistrationNumber'), {
                    number: nextNumber
                });

                // Redirect to success page
                window.location.href = `success.php?reg=${registrationNumber}`;

            } catch (error) {
                // Hide loading overlay on error
                document.getElementById('loadingOverlay').style.display = 'none';
                console.error('Error saving data: ', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan saat menyimpan data.'
                });
            }
        });

        async function uploadFile(file, path) {
            const storageRef = ref(storage, `images/${path}/${file.name}`);
            const uploadTask = uploadBytesResumable(storageRef, file);

            return new Promise((resolve, reject) => {
                uploadTask.on('state_changed',
                    (snapshot) => {
                        // Observe state change events such as progress, pause, and resume:
                        // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                        const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                        console.log('Upload is ' + progress + '% done');
                    },
                    (error) => {
                        // Handle unsuccessful uploads
                        console.error("Error uploading file: ", error);
                        reject(error);
                    },
                    () => {
                        // Handle successful uploads on complete
                        // Now you can get the download URL:
                        getDownloadURL(uploadTask.snapshot.ref).then((downloadURL) => {
                            console.log('File available at', downloadURL);
                            resolve(downloadURL);
                        });
                    }
                );
            });
        }

        // Handle "Kembali" button
        function goBack() {
            window.history.back();
        }
    </script>

    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out'
        });
    </script>
</body>

</html>