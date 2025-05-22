<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="css/index.css">
	<script type="module">
		import {
			initializeApp
		} from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
		import {
			getFirestore,
			collection,
			getDocs
		} from "https://www.gstatic.com/firebasejs/10.10.0/firebase-firestore.js";

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

		async function loadData() {
			const tableBody = document.getElementById("table-body");
			tableBody.innerHTML = ""; // Kosongkan tabel sebelum memuat data

			try {
				const querySnapshot = await getDocs(collection(db, "ste_2025")); // Ganti "ste_2025" dengan nama koleksi Anda
				let no = 1;

				querySnapshot.forEach((doc) => {
					const data = doc.data();

					// Tambahkan baris ke tabel
					const row = `
					<tr>
						<td>${no++}</td>
						<td>${data.nama || "-"}</td>
						<td>${data.nim || "-"}</td>
						<td>${data.email || "-"}</td>
						<td>${data.noHp || "-"}</td>
						<td>${data.noOrtu || "-"}</td>
						<td>${data.alamat || "-"}</td>
						<td>${data.tempat || "-"}</td>
						<td>${data.tanggalLahir || "-"}</td>
						<td>${data.jenisKelamin || "-"}</td>
						<td>${data.asalKampus || "-"}</td>
						<td>${data.jurusan || "-"}</td>
						<td>${data.semester || "-"}</td>
						<td>${data.angkatan || "-"}</td>
						<td>${data.instagram || "-"}</td>
						<td><a href="${data.foto}" target="_blank"><img src="${data.foto}" alt="Foto"></a></td>
						<td><a href="${data.follow}" target="_blank"><img src="${data.follow}" alt="Bukti Follow"></a></td>
						<td>${data.pembayaran ? `<a href="${data.pembayaran}" target="_blank"><img src="${data.pembayaran}" alt="Bukti Pembayaran"></a>` : "-"}</td>
						<td>
							<a href="edit.php?id=${doc.id}" class="btn btn-primary">
								<i class="fa fa-pencil"></i> Edit
							</a>
							<a href="hapus.php?id=${doc.id}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
								<i class="fa fa-trash"></i> Hapus
							</a>
						</td>
					</tr>
				`;
					tableBody.innerHTML += row;
				});
			} catch (error) {
				console.error("Error loading data: ", error);
			}
		}

		// Panggil fungsi loadData saat halaman dimuat
		document.addEventListener("DOMContentLoaded", loadData);
	</script>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar">
		<a class="navbar-brand" href="#">
			<p> <img src="../assets/img/logokedai.png" alt=""><span class="kedai">KeDai</span> <span
					class="computerworks">Computerworks</span></p>
		</a>
	</nav>

	<!-- Table Container -->
	<div class="container table-container">
		<h3 class="text-center mb-4">
			<i class="fas fa-table me-2"></i>Data Pendaftaran Search To Extract XXI
		</h3>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>NIM</th>
					<th>Email</th>
					<th>No Hp</th>
					<th>Nomor HP Orang Tua</th>
					<th>Alamat</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Asal Kampus</th>
					<th>Jurusan</th>
					<th>Semester</th>
					<th>Angkatan</th>
					<th>Instagram</th>
					<th>Foto</th>
					<th>Bukti Follow</th>
					<th>Bukti Pembayaran</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody id="table-body">
				<!-- Data akan dimuat di sini -->
			</tbody>
		</table>
	</div>
</body>

</html>
<?php
// Close the PHP tag at the end of the file
?>