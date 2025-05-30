<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/edit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

                    <div class="col-md-6">
                        <label for="angkatan" class="form-label">Semester</label>
                        <select class="form-select" id="angkatan" name="angkatan">
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
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
        import { getStorage, ref, uploadBytesResumable, getDownloadURL } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-storage.js";

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

                // Handle file uploads
                const fotoFile = document.getElementById('foto').files[0];
                const followFile = document.getElementById('follow').files[0];
                const pembayaranFile = document.getElementById('pembayaran').files[0];

                let fotoURL = document.getElementById('previewFoto').src;
                let followURL = document.getElementById('previewFollow').src;
                let pembayaranURL = document.getElementById('previewPembayaran').src;

                if (fotoFile) {
                    fotoURL = await uploadFile(fotoFile, 'foto');
                }
                if (followFile) {
                    followURL = await uploadFile(followFile, 'follow');
                }
                if (pembayaranFile) {
                    pembayaranURL = await uploadFile(pembayaranFile, 'pembayaran');
                }

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
                        instagram: instagram,
                        foto: fotoURL,
                        follow: followURL,
                        pembayaran: pembayaranURL
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

        async function uploadFile(file, path) {
            const storageRef = ref(storage, `images/${path}/${file.name}`);
            const uploadTask = uploadBytesResumable(storageRef, file);

            return new Promise((resolve, reject) => {
                uploadTask.on('state_changed',
                    (snapshot) => {
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

        // Load data on page load
        document.addEventListener("DOMContentLoaded", loadData);
    </script>
</body>

</html>