<?php

require "config/fungsi.php";

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
  <link rel="stylesheet" href="assets/css/sponsor.css">
  <link rel="stylesheet" href="assets/css/galeri.css">

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

    .swal2-popup {
      font-size: 12px !important;
      /* Memperkecil ukuran font */
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
      databaseURL: "https://pendaftaran-kedai-default-rtdb.asia-southeast1.firebasedatabase.app",
      projectId: "pendaftaran-kedai",
      storageBucket: "pendaftaran-kedai.appspot.com",
      messagingSenderId: "173578785882",
      appId: "1:173578785882:web:f9e34f6deb6f6886023463",
      measurementId: "G-4TSNPPG0F0"
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
        ttl: document.getElementById('ttl').value,
        jenisKelamin: document.querySelector('input[name="jenisKelamin"]:checked')?.value,
        asalKampus: document.getElementById('asalKampus').value,
        jurusan: document.getElementById('jurusan').value,
        semester: document.getElementById('semester').value,
        angkatan: document.getElementById('angkatan').value,
        instagram: document.getElementById('instagram').value
      };

      // Validate required fields
      if (!formData.nama || !formData.nim || !formData.email || !formData.noHp) {
        alert("Mohon lengkapi semua field yang wajib diisi.");
        return;
      }

      try {
        // Handle file uploads
        const fotoFile = document.getElementById('foto').files[0];
        const followFile = document.getElementById('follow').files[0];
        const pembayaranFile = document.getElementById('pembayaran').files[0]; // Optional file

        if (!fotoFile || !followFile) {
          alert("Mohon unggah semua file yang diperlukan (foto dan bukti follow).");
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
        alert('Pendaftaran berhasil disimpan!');
        document.querySelector('form').reset();

        // Tampilkan link grup WhatsApp
        const whatsappLinkContainer = document.getElementById('whatsapp-link-container');
        whatsappLinkContainer.style.display = 'block';
      } catch (error) {
        console.error('Error saving data: ', error);
        alert('Terjadi kesalahan saat menyimpan data.');
      }
    });
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
          <li><a href="#event">DAFTAR PESERTA</a></li>

        </ul>
      </nav>

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
      <div class="img-gallery owl-carousel owl-theme" id="firebase-gallery" data-aos="zoom-in-up">
        <!-- Gambar dari Firebase akan dimuat di sini -->
      </div>
      <div><br></div>
    </section>

    <script type="module">

      // Ambil data gambar dari koleksi Firestore, misal koleksi 'gallery'
      async function loadGallery() {
        const galleryContainer = document.getElementById('firebase-gallery');
        galleryContainer.innerHTML = '<div>Loading...</div>';

        try {
          const querySnapshot = await getDocs(collection(db, "gallery"));
          let html = '';
          querySnapshot.forEach((doc) => {
            const data = doc.data();
            // Pastikan ada field 'url' dan 'title' pada setiap dokumen
            if (data.url) {
              html += `
                <a href="${data.url}" data-lightbox="gallery" data-title="${data.title || ''}">
                  <img src="${data.url}" alt="${data.title || ''}" />
                </a>
              `;
            }
          });
          galleryContainer.innerHTML = html || '<div>Tidak ada gambar.</div>';
          // Refresh Owl Carousel jika sudah diinisialisasi
          if (typeof $ !== 'undefined' && typeof $.fn.owlCarousel !== 'undefined') {
            $(galleryContainer).trigger('destroy.owl.carousel').removeClass('owl-loaded');
            $(galleryContainer).owlCarousel({
              items: 3,
              margin: 10,
              loop: true,
              nav: true,
              dots: true,
              responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
              }
            });
          }
        } catch (error) {
          galleryContainer.innerHTML = '<div>Gagal memuat gambar.</div>';
          console.error(error);
        }
      }

      loadGallery();
    </script>

    <!-- ======= Testimonials Section ======= -->

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



      <!-- header -->
      <section id="event" class="content-section ">
        <div class="container">
          <div style=" justify-content: center; display: flex;">
            <img src="assets/img/CODE.png" height="400px">
          </div>
          <p class="section-description">
          <h2 class="text-center"> Search To Extract</h2>
          <p class="text-center" style="font-size: 20px;">Search To Extract merupakan agenda penerimaan anggota baru
            <strong class="kedai">KeDai</strong> <strong class="computerworks">Computerworks</strong> yang
            dimana, terbuka untuk seluruh mahasiswa(i) PTN dan PTS. Setiap tahunnya kurang lebih 300 peserta yang
            terdaftar. Bahkan pernah di tahun 2004, peserta Search To Extract mencapai 700 peserta. Hal ini dikarenakan
            banyaknya peminat teknologi informasi di kalangan mahasiswa(i) PTN dan PTS regional Makassar.
          </p>


        </div>
      </section>
      <div>
        <div class="row mt-5 justify-content-center">


          <!-- Card 1 (Pendaftaran  ) -->
          <div class="col-md-4 mb-4">
            <div class="card custom-card shadow-lg border-0 rounded-3">
              <img src="assets/img/CODE.png" class="card-img-top rounded-top" alt="Card image"
                style="height: 400px; object-fit: cover;">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">Pendaftaran Search To Extract</h5>
                <p class="card-text text-muted">
                  Daftarkan diri Anda. Jangan lewatkan kesempatan untuk mendapatkan
                  wawasan dan pengalaman berharga!
                </p>
                <a href="daftarSte.php" class="btn btn-primary px-4">Daftar Sekarang!!!</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tambahkan ini sebelum tag penutup body jika belum -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

      <!-- Modal untuk Promo -->
      <div class="modal fade" id="modalPromo" tabindex="-1" aria-labelledby="modalPromoLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalPromoLabel">Promo Spesial KeDai</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Ikuti promo spesial dari KeDai Computerworks dan dapatkan berbagai keuntungan menarik, mulai dari
                diskon hingga hadiah menarik untuk Anda!</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>


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
      </style>

      <!-- Font Import -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Open+Sans&display=swap"
        rel="stylesheet">

      <!-- Bootstrap 5 JS and Bundle -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

      <!-- SweetAlert2 JS -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <!-- <script>
        // When the form is submitted, show the SweetAlert
        document.querySelector('form').addEventListener('submit', function (e) {
          e.preventDefault(); // Prevent the form from actually submitting

          Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success'
          });

          // Optional: You can also clear the form inputs after the alert
          this.reset();
        });
      </script> -->


      <!-- End Pendaftaran section -->
  </main><!-- End #main -->

  <br>
  <br>

  <!-- <div class="sponsor">
    <div class="slide-track">
      <div class="slide"><img src="img/imgSponsor/COCACOLA.jpg" alt=""></div>
      <div class="slide"><img src="img/imgSponsor/Dove.jpg" alt=""></div>
      <div class="slide"><img src="img/imgSponsor/Wings.png" alt=""></div>
      <div class="slide"><img src="img/imgSponsor/unilever.png" alt=""></div> -->

  <!-- Ulangi lagi untuk efek tak terputus -->
  <!-- <div class="slide"><img src="img/imgSponsor/COCACOLA.jpg" alt=""></div>
  <div class="slide"><img src="img/imgSponsor/Dove.jpg" alt=""></div>
  <div class="slide"><img src="img/imgSponsor/Wings.png" alt=""></div>
  <div class="slide"><img src="img/imgSponsor/unilever.png" alt=""></div>
  </div>
  </div> -->


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


  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-3">
          <div class="contact-info">
            <p><i class='bx bx-current-location'> BTP BLOK L NO.405</i></p>
            <p><i class='bx bxs-phone'> +62 823-5087-9401</i></p>
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
              <a href="https://www.instagram.com/kd_computerworks/" class="instagram"><i
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

  <!--swett alert javascrip untk notifilasi  -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- dataseminar -->


  <script>
    // Fungsi untuk menampilkan/menyembunyikan field berdasarkan pekerjaan
    function toggleFields() {
      const pekerjaan = document.getElementById('pekerjaan').value;
      const nimField = document.getElementById('nimField');
      const tahunMasukField = document.getElementById('tahunMasukField');
      const asalKampusField = document.getElementById('asalKampusField');

      // Menampilkan atau menyembunyikan field berdasarkan pilihan pekerjaan
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

    // Menangani pengiriman form dengan SweetAlert
    document.getElementById('eventForm').addEventListener('submit', function (event) {
      event.preventDefault(); // Mencegah pengiriman form secara langsung

      // Kirim data menggunakan AJAX
      var form = new FormData(this); // Mengambil data dari form
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'config/fungsi.php', true); // Mengirim data ke fungsi.php

      xhr.onload = function () {
        if (xhr.status === 200) {
          // Tampilkan SweetAlert setelah data berhasil dikirim
          // Swal.fire({
          //   position: 'top-end',
          //   icon: 'success',
          //   title: 'Data anda berhasil di input, silakan tunggu anda akan segera di verifikasi ',
          //   showConfirmButton: false,
          //   timer: 1500
          // }).then(() => {
          //   window.location.href = 'index.php'; // Redirect ke index.php setelah selesai
          // });
          Swal.fire({
            title: "Data anda berhasil di input",
            text: "Silakan tunggu anda akan segera di verifikasi",
            icon: "success"
          }).then(() => {
            window.location.href = 'index.php'; // Redirect ke index.php setelah selesai
          });

        } else {
          // Tampilkan SweetAlert jika terjadi kesalahan
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Terjadi kesalahan!',
            showConfirmButton: false,
            timer: 1500
          });
        }
      };

      // Kirim data
      xhr.send(form);
    });
  </script>





  <script>
    // Function to check response from the server
    function handleResponse(response) {
      switch (response) {
        case 'seminar_success':
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Data seminar berhasil disubmit!',
            showConfirmButton: false,
            timer: 1500
          });
          break;
        case 'seminar_error':
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Terjadi kesalahan saat menyimpan data seminar!'
          });
          break;
        case 'team_empty':
          Swal.fire({
            icon: 'warning',
            title: 'Nama tim tidak boleh kosong!',
            text: 'Harap isi nama tim Anda.'
          });
          break;
        case 'player_1_empty':
          Swal.fire({
            icon: 'warning',
            title: 'Nama pemain 1 tidak boleh kosong!',
          });
          break;
        case 'ktm_upload_error_1':
          Swal.fire({
            icon: 'error',
            title: 'Gagal mengupload KTM Pemain 1!',
          });
          break;
        case 'tournament_success':
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Data tournament berhasil disubmit!',
            showConfirmButton: false,
            timer: 1500
          });
          break;
        case 'tournament_error':
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Terjadi kesalahan saat menyimpan data tournament!'
          });
          break;
        default:
          Swal.fire({
            icon: 'error',
            title: 'Terjadi kesalahan!',
            text: 'Data tidak dapat diproses.'
          });
      }
    }

    // Assuming the server will return a "response" value that we check for.
    <?php if (isset($response)): ?>
      handleResponse("<?php echo $response; ?>");
    <?php endif; ?>
  </script>

  <!-- Firebase App (wajib) -->
  <script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-app-compat.js"></script>
  <!-- Firebase Database -->
  <script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-database-compat.js"></script>



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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>