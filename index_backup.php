<?php

include('config/fungsi.php');
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KeDai Computerworks</title>
  <meta name="description" content="KeDai Computerworks" />
  <meta name="keywords" content="kedai, kedai computerworks, app, kdcw" />

  <!-- Favicons -->
  <link href="assets/img/logokedai.png" rel="icon">

  <!--   Css -->
  <link href="https://db.onlinewebfonts.com/c/977ee109edb851f6c4a2c401445c74ee?family=Staccato+222" rel="stylesheet">
  <!-- Font -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome/all.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome/fontawesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/lightbox.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <style>
    @import url(https://db.onlinewebfonts.com/c/977ee109edb851f6c4a2c401445c74ee?family=Staccato+222);

    @font-face {
      font-family: "Staccato 222";
      src: url("https://db.onlinewebfonts.com/t/977ee109edb851f6c4a2c401445c74ee.eot");
      src: url("https://db.onlinewebfonts.com/t/977ee109edb851f6c4a2c401445c74ee.eot?#iefix")format("embedded-opentype"),
        url("https://db.onlinewebfonts.com/t/977ee109edb851f6c4a2c401445c74ee.woff2")format("woff2"),
        url("https://db.onlinewebfonts.com/t/977ee109edb851f6c4a2c401445c74ee.woff")format("woff"),
        url("https://db.onlinewebfonts.com/t/977ee109edb851f6c4a2c401445c74ee.ttf")format("truetype"),
        url("https://db.onlinewebfonts.com/t/977ee109edb851f6c4a2c401445c74ee.svg#Staccato 222")format("svg");
    }

    .kedai {
      font-family: Rockwell;

    }

    .computerworks {
      font-family: "Staccato 222";

    }

    .popup-container {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
    }

    .popup {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
      text-align: center;
    }

    .close {
      position: absolute;
      top: 5px;
      right: 10px;
      font-size: 20px;
      cursor: pointer;
    }

    .registration-number {
      font-size: 24px;
      font-weight: bold;
      margin-top: 20px;
    }
  </style>
  <!-- Custom CSS -->
  <style>
    .card {
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card-img-top {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      background-color: #f7f7f7;
      padding: 20px;
      text-align: center;
    }

    .card-title {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 1.3rem;
      margin-bottom: 10px;
      color: #333;
    }

    .card-text {
      font-family: 'Open Sans', sans-serif;
      color: #555;
      font-size: 1rem;
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
      padding: 10px 20px;
      font-size: 1rem;
      border-radius: 30px;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    /* Modal */
    .modal-content {
      border-radius: 15px;
    }

    .custom-modal-width .modal-dialog {
      max-width: 90%;
      /* Lebar default */
    }

    @media (min-width: 768px) {
      .custom-modal-width .modal-dialog {
        max-width: 70%;
        /* Lebar untuk layar lebih besar */
      }
    }

    @media (min-width: 992px) {
      .custom-modal-width .modal-dialog {
        max-width: 50%;
        /* Lebar untuk layar lebih besar lagi */
      }
    }
  </style>

</head>

<body>
  <script type="module">
    import {
      initializeApp
    } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
    import {
      getFirestore,
      collection,
      addDoc,
      doc,
      getDoc,
      setDoc
    } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-firestore.js";
    import {
      getStorage,
      ref as refStorage,
      uploadBytesResumable,
      getDownloadURL
    } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-storage.js";
    import {
      getDocs,
      query,
      where
    } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-firestore.js";

    // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyBl2ZL-IdeiHulplNu1de-avhhzEWaBplo",
      authDomain: "pendaftaran-kedai.firebaseapp.com",
      databaseURL: "https://pendaftaran-kedai-default-rtdb.asia-southeast1.firebasedatabase.app",
      projectId: "pendaftaran-kedai",
      storageBucket: "pendaftaran-kedai.appspot.com",
      messagingSenderId: "173578785882",
      appId: "1:173578785882:web:f9e34f6deb6f6886023463",
      measurementId: "G-4TSNPPG0F0"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);

    // get Firestore
    const db = getFirestore(app);

    // Initialize Firebase Storage
    const storage = getStorage(app);

    // submit form
    document.getElementById('submit').addEventListener('click', async function(e) {
      e.preventDefault();
      const namaPendaftar = document.getElementById('nama').value;
      // Get the file
      const file = document.getElementById('foto').files[0];
      // Rename the file to match the namaPendaftar
      const storageRef = refStorage(storage, 'FotoPeserta/' + namaPendaftar);


      // Create a document with the registrant's name as the ID
      const userDocRef = doc(db, 'users_2024', namaPendaftar);

      // Upload file to Firebase Storage
      const uploadTask = uploadBytesResumable(storageRef, file);
      const email = document.getElementById('email').value;
      const nohp = document.getElementById('nohp').value;

      // Check if name already exists
      const nameExists = (await getDocs(query(collection(db, 'users_2024'), where('nama', '==', namaPendaftar)))).docs.length > 0;

      if (nameExists) {
        alert('Nama sudah digunakan');
        return;
      }

      // Check if email or phone number already exists
      const emailExists = (await getDocs(query(collection(db, 'users_2024'), where('email', '==', email)))).docs.length > 0;
      const phoneExists = (await getDocs(query(collection(db, 'users_2024'), where('nohp', '==', nohp)))).docs.length > 0;

      if (emailExists) {
        alert('Email sudah digunakan');
        return;
      }

      if (phoneExists) {
        alert('Nomor telepon sudah digunakan');
        return;
      }
      // check apakah yang required kosong jika kosong maka tidak bisa submit 
      const requiredFields = ['nama', 'tglahir', 'tempatlahir', 'jkel', 'foto', 'email', 'instagram', 'nohp', 'asalkampus', 'jurusan', 'angkatan', 'semester', 'alasan'];
      for (const field of requiredFields) {
        if (!document.getElementById(field).value) {
          alert('Harap isi semua kolom yang bertanda bintang (*)');
          return;
        }
      }

      uploadTask.on('state_changed',
        (snapshot) => {
          // Progress
          const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
          console.log('Upload is ' + progress + '% done');
        },
        (error) => {
          // Error
          console.error('Error uploading file: ', error);
          alert('Pendaftaran Gagal');
        },
        async () => {
          // Upload complete, get download URL
          const downloadURL = await getDownloadURL(uploadTask.snapshot.ref);

          // Get the last registration number
          const registrationRef = doc(db, 'registration-counter', 'lastRegistrationNumber');
          const registrationDoc = await getDoc(registrationRef);
          let lastRegistrationNumber = 0;
          if (registrationDoc.exists()) {
            lastRegistrationNumber = registrationDoc.data().number;
          }

          // Generate registration number
          const registrationNumber = (lastRegistrationNumber + 1).toString().padStart(3, '0');

          // Save the download URL in the database
          await setDoc(userDocRef, {
            registrationNumber: registrationNumber,
            nama: namaPendaftar,
            ttl: document.getElementById('tempatlahir').value + ', ' + document.getElementById('tglahir').value,
            JenisKelamin: document.getElementById('jkel').value,
            email: document.getElementById('email').value,
            nohp: document.getElementById('nohp').value,
            foto: downloadURL, // Use the download URL as the image URL
            asalkampus: document.getElementById('asalkampus').value,
            jurusan: document.getElementById('jurusan').value,
            angkatan: document.getElementById('angkatan').value,
            semester: document.getElementById('semester').value,
            alasan: document.getElementById('alasan').value
          });

          // Update the last registration number
          await setDoc(registrationRef, {
            number: lastRegistrationNumber + 1
          });

          // Reset the form after successful submission
          document.getElementById('nama').value = '';
          document.getElementById('tglahir').value = '';
          document.getElementById('tempatlahir').value = '';
          document.getElementById('email').value = '';
          document.getElementById('nohp').value = '';
          document.getElementById('foto').value = '';
          document.getElementById('asalkampus').value = '';
          document.getElementById('jurusan').value = '';
          document.getElementById('alasan').value = '';

          // Show popup
          showPopup(registrationNumber);
        }
      );
    });


    function showPopup(registrationNumber) {
      // Implement your popup logic here
      alert('Pendaftaran Berhasil. Nomor Registrasi: ' + registrationNumber);
    }
  </script>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><img src="assets/img/logokedai.png" width="45"
              alt="logo kedai"><span class="kedai" style="margin-left: 20px;"><span
                style="font-weight: bold;">KeDai</span> <span class="computerworks">Computerworks</span></span></a></h1>

      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#home">HOME</a></li>
          <li><a href="#about">TENTANG</a></li>
          <li><a href="#gallery">GALERI</a></li>
          <li><a href="#contact">KONTAK</a></li>
          <li><a href="#testimonials">DOWNLOAD</a></li>
          <li><a href="#event">Event</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="home">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex justify-content-end align-items-center">
          <div data-aos="zoom-out">
            <h1 class="kedai"><span style="font-weight: bold;">KeDai</span> <span
                class="computerworks">Computerworks</span></h1>
            <h2>Sumber Informasi Seputar Teknologi</h2>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/logokedai.png" class="img-fluid animated" width="85%" alt="">
        </div>
      </div>
    </div>

    <svg class="home-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-5" data-aos="fade-right">
            <center>
              <a href="assets/img/gallery/pelantikan.png" data-lightbox="pelantikan"
                data-title="Pelantikan KeDai Computerworks">
                <img src="assets/img/gallery/pelantikan.png" style="margin-top: 60px;" width="80%" alt="">
              </a>

            </center>
          </div>
          <div
            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
            data-aos="fade-left">
            <h2><b class="kedai">KeDai</b> <span class="computerworks">Computerworks</span></h2><br>
            <p>
              <span style="font-weight: bold;" class="kedai">KeDai</span> <span
                class="computerworks">Computerworks</span> adalah salah satu komunitas IT di Universitas Dipa Makassar.
              <br><br> Organisasi ini mulai muncul pada tahun 1998 dan didirikan oleh sekelompok (14 orang “Pelopor”)
              mahasiswa STMIK Dipanegara Makassar ( Universitas Dipa Makassar ) yang peduli bahwa wadah seperti inilah
              yang bisa dijadikan tempat meningkatkan kreatifitas dalam pengembangan Teknologi Informasi.
            </p>
          </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div
            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
            data-aos="fade-left">
            <h2><b class="kedai">KeDaiApp</b></h2><br>
            <p>
              KeDaiApp adalah aplikasi yang ditujukan untuk masyarakat umum terkhusus peminat IT sebagai sumber
              informasi seputar
              teknologi.<br><br> Untuk saat ini konten - konten yang ada di KeDaiApp antara lain berisi berbagai artikel
              dan tutorial IT,
              event atau kegiatan yang diadakan oleh <span style="font-weight: bold;" class="kedai">KeDai</span> <span
                class="computerworks">Computerworks</span>, Ebook pembelajaran, dan fitur pendaftaran STE.
            </p>
          </div>
          <div class="col-md-5" data-aos="fade-right">
            <center>
              <img src="assets/img/human.png" width="70%" alt="">
            </center>
          </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>FITUR</h2>
          <p>Fitur KeDaiApp</p>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-3 card-feature" class="feat">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="bx bxs-news" style="color: #11dbcf;"></i>
              <h3>Blog / Artikel</h3>
            </div>
            <div class="txt-box" class="txt-box" data-aos="zoom-in" data-aos-delay="50">
              <p>Selalu update dengan berbagai macam tutorial dan materi terbaru seputar dunia teknologi.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 card-feature" class="feat">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bxs-calendar-event" style="color:#11dbcf;"></i>
              <h3>Event / Acara</h3>
            </div>
            <div class="txt-box" data-aos="zoom-in" data-aos-delay="150">
              <p>Temukan berbagai macam event menarik dari <span style="font-weight: bold;" class="kedai">KeDai</span>
                <span class="computerworks">Computerworks</span>.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 card-feature" class="feat">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-search-alt" style="color:#11dbcf;"></i>
              <h3>Pendaftaran STE</h3>
            </div>
            <div class="txt-box" data-aos="zoom-in" data-aos-delay="150">
              <p>Lakukan pendaftaran Search To Extract melalui aplikasi KeDaiApp atau Website KeDai Computerworks.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 card-feature" class="feat">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="bx bxs-book" style="color: #11dbcf;"></i>
              <h3>Ebook</h3>
            </div>
            <div class="txt-box" data-aos="zoom-in" data-aos-delay="350">
              <p>Dapatkan berbagai macam buku elektronik yang akan menambah wawasanmu seputar dunia teknologi.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>GALERI</h2>
          <p> <span class="kedai" style="font-weight: bold;">KeDai</span> <span
              class="computerworks">Computerworks</span></p>
        </div>

        <div class="img-gallery owl-carousel owl-theme" data-aos="zoom-in-up">
          <a href="assets/img/gallery/ste.jpg" data-lightbox="gallery" data-title="Search To Extract">
            <img src="assets/img/gallery/ste.jpg" />
          </a>
          <a href="assets/img/gallery/hackathon.png" data-lightbox="gallery" data-title="Hackathon">
            <img src="assets/img/gallery/hackathon.png" />
          </a>
          <a href="assets/img/gallery/pelantikan.png" data-lightbox="gallery" data-title="Pelantikan">
            <img src="assets/img/gallery/pelantikan.png" />
          </a>
          <a href="assets/img/gallery/freerepair.jpg" data-lightbox="gallery" data-title="Free Repair">
            <img src="assets/img/gallery/freerepair.jpg" />
          </a>
          <a href="assets/img/gallery/milad.jpg" data-lightbox="gallery" data-title="Milad">
            <img src="assets/img/gallery/milad.jpg" />
          </a>

        </div>

        <div><br></div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="section bg-gradient">
        <div class="fluid-container">
          <div data-aos="zoom-in">
            <div class="testimonial-item">
              <h2>Dapatkan KeDaiApp Sekarang Juga.</h2>
              <center>
                <a href="https://play.google.com/store/apps/details?id=id.or.kedai.kedaiapp" target="_blank">
                  <img src="assets/img/google-play-badge.png" alt="icon" width="180px" class="gplay-button" />
                </a>
              </center>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Testimonials Section -->

    <!-- Pendaftaran section -->


    <body>

      <style>
        .card:hover {
          transform: translateY(-5px);
        }

        .card-img-top:hover {
          transform: scale(1.05);
        }
      </style>

      <img src="assets/img/logo_event.png" alt="" style="height: 300px;width: 300px;margin-left: 350px;margin-top: 20px;margin-bottom: 10px;">


      <!-- header -->
      <section id="event" class="content-section mt-0">
        <div class="container">
          <p class="section-description">
            Pada tahun ini, <span class="kedai" style="font-weight:bold;">KeDai</span> <span
              class="computerworks">Computerworks</span> dengan bangga mempersembahkan event tahunan yang sangat
            dinantikan, bertajuk <strong>TECH CARNIVAL</strong>. Event spektakuler ini akan menghadirkan berbagai
            kegiatan menarik dan penuh tantangan yang pastinya akan memikat hati para peserta.
          </p>

          <h3 class="subheading"></h3>
          <p class="section-description">
            Salah satu acara unggulan yang akan kami hadirkan adalah <strong>Seminar Teknologi</strong>, yang akan
            dibawakan oleh para pemateri berpengalaman di bidang teknologi, siap memberikan wawasan terbaru yang sangat
            berguna bagi perkembangan Anda di dunia digital. Selain itu, kami juga akan menggelar <strong>Tournament
              Mobile Legends</strong> yang pastinya akan penuh dengan aksi seru dan menegangkan. Tidak hanya itu, masih
            banyak kegiatan menarik lainnya yang pastinya akan membuat Anda semakin terinspirasi dan terhubung dengan
            komunitas teknologi yang berkembang pesat.
          </p>

          <p class="section-description">
            <strong>TECH CARNIVAL</strong> akan berlangsung di Universitas Dipa Makassar, sebuah tempat yang penuh
            dengan semangat dan inovasi. Jangan lewatkan kesempatan emas ini untuk menjadi bagian dari event yang penuh
            dengan pengalaman berharga, bertemu dengan para ahli, dan tentu saja, merasakan serunya setiap kegiatan yang
            telah kami siapkan.
          </p>

          <p class="call-to-action">
            Ayo, <strong>ikuti keseruan event ini</strong> dan jadilah bagian dari perjalanan luar biasa <span
              class="kedai" style="font-weight:bold;">KeDai</span> <span class="computerworks">Computerworks</span>! <a
              href="contact.html" class="cta-link">Hubungi kami</a> untuk informasi lebih lanjut, serta pendaftaran
            event yang pastinya tak boleh Anda lewatkan!
          </p>



        </div>
      </section>
      <div>
        <div class="row mt-5 justify-content-center">
          <!-- Card 1 (Mobile Legends) -->
          <div class="col-md-4 mb-4">
            <div class="card custom-card shadow-lg border-0 rounded-3">
              <img src="img/mobile_legends.png" class="card-img-top rounded-top" alt="Card image" style="height: 250px; object-fit: cover;">
              <div class="card-body text-center">
              <h5 class="card-title fw-bold">Tournament Mobile Legends</h5>
                <p class="card-text text-muted">
                  Bergabunglah dalam turnamen Mobile Legends paling seru di <span class="kedai"
                    style="font-weight: bold;">KeDai</span> <span class="computerworks">Computerworks</span> Tantang
                  skill Anda dan buktikan diri sebagai yang terbaik. Raih hadiah menarik dan jadilah bintang di arena!
                </p>
                <!-- Tambahkan data-bs-target untuk memanggil modal Event -->
                <a href="#" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#modalEvent">Daftar</a>
              </div>
            </div>
          </div>

          <<!-- Card 2 (Seminar) -->
            <div class="col-md-4 mb-4">
              <div class="card custom-card shadow-lg border-0 rounded-3">
                <img src="img/seminar.png" class="card-img-top rounded-top" alt="Card image" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                <h5 class="card-title fw-bold">Pendaftaran Seminar</h5>
                <p class="card-text text-muted">
                  Daftarkan diri Anda untuk seminar yang akan dilaksanakan di kampus Universitas <span
                    style="font-weight: bolder;">Dipa Makassar</span>. Jangan lewatkan kesempatan untuk mendapatkan
                  wawasan dan pengalaman berharga!
                </p>
                  <a href="#" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#modalEvent">Daftar Sekarang</a>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade custom-modal-width" id="modalEvent" tabindex="-1" aria-labelledby="modalEventLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalEventLabel">Event Registration</h5>
                  </div>
                  <div class="modal-body">
                    <!-- Form for submitting data -->
                    <form id="eventForm" action="config/fungsi.php" method="POST">
                      <!-- Pekerjaan Dropdown -->
                      <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <select class="form-select" id="pekerjaan" name="pekerjaan" required onchange="toggleFields()">
                          <option value="" selected disabled>Pilih pekerjaan anda</option>
                          <option value="Mahasiswa">Mahasiswa</option>
                          <option value="Pekerja">Pekerja</option>
                        </select>
                      </div>

                      <!-- NIM Field -->
                      <div class="mb-3" id="nimField" style="display: none;">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                      </div>

                      <!-- Nama Depan -->
                      <div class="mb-3">
                        <label for="nama_depan" class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Masukkan Nama Depan" required>
                      </div>

                      <!-- Nama Belakang -->
                      <div class="mb-3">
                        <label for="nama_belakang" class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Masukkan Nama Belakang" required>
                      </div>

                      <!-- Tanggal Lahir -->
                      <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                      </div>


                      <!-- Nomor Telepon -->
                      <div class="mb-3">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" required pattern="\d{10,15}">
                        <!-- pattern="\d{10,15}" memastikan hanya angka dengan panjang antara 10 hingga 15 digit yang diterima -->
                      </div>



                      <!-- Tahun Masuk -->
                      <div class="mb-3" id="tahunMasukField" style="display: none;">
                        <label for="tahunMasuk" class="form-label">Tahun Masuk</label>
                        <select class="form-select" id="tahunMasuk" name="tahunMasuk">
                          <option value="" selected disabled>Pilih Tahun Masuk</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                        </select>
                      </div>

                      <!-- Asal Kampus -->
                      <div class="mb-3" id="asalKampusField" style="display: none;">
                        <label for="asal_kampus" class="form-label">Asal Kampus</label>
                        <input type="text" class="form-control" id="asal_kampus" name="asal_kampus" placeholder="Masukkan Asal Kampus Anda">
                      </div>

                      <!-- Alamat -->
                      <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
                      </div>

                      <!-- Submit Button -->
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>

            <script>
              function toggleFields() {
                const pekerjaan = document.getElementById('pekerjaan').value;
                const nimField = document.getElementById('nimField');
                const tahunMasukField = document.getElementById('tahunMasukField');
                const asalKampusField = document.getElementById('asalKampusField');

                // Toggle fields based on "pekerjaan" selection
                if (pekerjaan === 'Mahasiswa') {
                  nimField.style.display = 'none';
                  tahunMasukField.style.display = 'block';
                  asalKampusField.style.display = 'block';
                } else {
                  nimField.style.display = 'none';
                  tahunMasukField.style.display = 'none';
                  asalKampusField.style.display = 'none';
                }
              }
            </script>


            <!-- Modal Event -->
            <div class="modal fade custom-modal-width" id="modalEvent" tabindex="-1" aria-labelledby="modalEventLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalEventLabel">Event di KeDai Computerworks</h5>
                  </div>
                  <div class="modal-body">
                    <p>Jangan lewatkan kesempatan untuk bergabung dalam event seru di Kedai KeDai Computerworks, tempat terbaik untuk semua kebutuhan teknologi Anda. Temukan penawaran menarik dan berbagai aktivitas menyenangkan!</p>

                    <!-- Form untuk Penginputan Game -->
                    <form id="mobile_legends">
                      <div class="mb-3">
                        <label for="nama_tim" class="form-label">Nama Tim</label>
                        <input type="text" class="form-control" id="nama_tim" placeholder="Masukkan nama tim anda" required>
                      </div>

                      <!-- Pemain Inputs (Nickname and KTM side by side) -->
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label for="pemain_1" class="form-label">Pemain 1 (Nickname)</label>
                          <input type="text" class="form-control" id="pemain_1" placeholder="nickname (id pemain)" required>
                        </div>
                        <div class="col-md-6">
                          <label for="ktm_1" class="form-label">KTM Pemain 1</label>
                          <input type="file" class="form-control" id="ktm_1" accept="image/*" required>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label for="pemain_2" class="form-label">Pemain 2 (Nickname)</label>
                          <input type="text" class="form-control" id="pemain_2" placeholder="nickname (id pemain)" required>
                        </div>
                        <div class="col-md-6">
                          <label for="ktm_2" class="form-label">KTM Pemain 2</label>
                          <input type="file" class="form-control" id="ktm_2" accept="image/*" required>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label for="pemain_3" class="form-label">Pemain 3 (Nickname)</label>
                          <input type="text" class="form-control" id="pemain_3" placeholder="nickname (id pemain)" required>
                        </div>
                        <div class="col-md-6">
                          <label for="ktm_3" class="form-label">KTM Pemain 3</label>
                          <input type="file" class="form-control" id="ktm_3" accept="image/*" required>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label for="pemain_4" class="form-label">Pemain 4 (Nickname)</label>
                          <input type="text" class="form-control" id="pemain_4" placeholder="nickname (id pemain)" required>
                        </div>
                        <div class="col-md-6">
                          <label for="ktm_4" class="form-label">KTM Pemain 4</label>
                          <input type="file" class="form-control" id="ktm_4" accept="image/*" required>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label for="pemain_5" class="form-label">Pemain 5 (Nickname)</label>
                          <input type="text" class="form-control" id="pemain_5" placeholder="nickname (id pemain)" required>
                        </div>
                        <div class="col-md-6">
                          <label for="ktm_5" class="form-label">KTM Pemain 5</label>
                          <input type="file" class="form-control" id="ktm_5" accept="image/*" required>
                        </div>
                      </div>

                      <!-- Submit Button -->
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>






            <!-- Font Import -->
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Open+Sans&display=swap" rel="stylesheet">

            <!-- Bootstrap 5 JS and Bundle -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

            <!-- SweetAlert2 JS -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




            <!-- End Pendaftaran section -->
  </main><!-- End #main -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title" data-aos="fade-up">

      </div>
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-3">
          <div class="contact-info">
            <p><i class='bx bx-current-location'> BTP BLOK B NO.558</i></p>
            <p><i class='bx bxs-phone'> +62 821-9392-2372</i></p>
            <p><i class='bx bxs-envelope'> ketawadamai@gmail.com</i></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-12">
          <div class="social-links mt-3">
            <div class="col-lg-12 col-md-12 d-flex justify-content-center mb-3">
              <h6>Berdiri Sama Tinggi</h6>
            </div>
            <div class="col-lg-12 col-md-12 d-flex justify-content-center mb-3">
              <h6>Duduk Sama Rendah</h6>
            </div>
            <div class="col-lg-12 col-md-12 d-flex justify-content-center">
              <h6>Ketawa Sama-Sama</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="social-links mt-3">
            <div class="col-lg-12 col-md-12 d-flex justify-content-center">
              <h6>Kunjungi Kami Di :</h6>
            </div>
            <div class="col-lg-12 col-md-12 ml-2 d-flex justify-content-center">
              <a href="https://kedai.or.id" class="website"><i class="bx bx-globe"></i></a>
              <a href="https://www.instagram.com/kdcomputerworks/" class="instagram"><i
                  class="bx bxl-instagram"></i></a>
              <a href="https://twitter.com/ketawa_damai" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.youtube.com/kedaicomputerworks" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="https://www.facebook.com/KDComputerworks" class="facebook"><i class="bx bxl-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        <p>
          COPYRIGHT © 2024.
          <a href="https://kedai.or.id"><span class="kedai">KeDai</span> <span
              class="computerworks">Computerworks</span> </a></small>
        </p>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class='bx bx-up-arrow'></i></a>
  <div id="preloader"></div>


  <script>
    function toggleFields() {
      const pekerjaan = document.getElementById('pekerjaan').value;

      // Show or hide fields based on pekerjaan selection
      if (pekerjaan == 'Mahasiswa') {
        document.getElementById('nimField').style.display = 'block';
        document.getElementById('tahunMasukField').style.display = 'block';
        document.getElementById('asalKampusField').style.display = 'block';
      } else {
        document.getElementById('nimField').style.display = 'none';
        document.getElementById('tahunMasukField').style.display = 'none';
        document.getElementById('asalKampusField').style.display = 'none';
      }
    }
  </script>

  <script>
    $(document).ready(function() {
      // Ketika form disubmit
      $('#promoForm').on('submit', function(e) {
        e.preventDefault(); // Mencegah form submit biasa

        // Ambil semua data form
        const formData = new FormData(this);

        // Kirim data ke PHP menggunakan AJAX
        $.ajax({
          url: 'data_seminar.php', // File PHP yang akan menangani data
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function(response) {
            // Tampilkan pesan sukses
            alert('Data berhasil dikirim!');
            // Kamu bisa menambahkan logika lain seperti menutup modal atau reset form
            $('#promoForm')[0].reset();
            $('#modalPromoLainnya').modal('hide'); // Menutup modal setelah submit berhasil
          },
          error: function() {
            alert('Terjadi kesalahan. Data tidak terkirim.');
          }
        });
      });
    });
  </script>




  <!-- SweetAlert JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- <script>
        // When the form is submitted, show SweetAlert
        document.getElementById('promoForm').addEventListener('submit', function(e) {
          e.preventDefault(); // Prevent the form from actually submitting

          Swal.fire({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success"
          });

          // Optional: Clear the form inputs after the alert
          this.reset();
        });
      </script> -->


  <!-- Tambahkan ini sebelum tag penutup body jika belum -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/fontawesome/all.min.js"></script>
  <script src="assets/vendor/fontawesome/fontawesome.min.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>