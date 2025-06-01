document.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const file = document.getElementById('foto').files[0];

  if (!file) {
    alert("Mohon unggah foto terlebih dahulu.");
    return;
  }

  // Buat path dan upload ke storage
  const storageRef = storage.ref('ste2025/' + Date.now() + '_' + file.name);
  const uploadTask = storageRef.put(file);

  uploadTask.on('state_changed',
    null,
    function(error) {
      alert("Gagal upload foto: " + error.message);
    },
    function() {
      // Dapatkan URL download
      uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
        // Setelah dapat URL, simpan data ke Realtime Database
        const data = {
          nama: document.getElementById('nama').value,
          nim: document.getElementById('nim').value,
          email: document.getElementById('email').value,
          noHp: document.getElementById('noHp').value,
          noOrtu: document.getElementById('noOrtu').value,
          alamat: document.getElementById('alamat').value,
          ttl: document.getElementById('ttl').value,
          jenisKelamin: document.getElementById('jenisKelamin').value,
          asalKampus: document.getElementById('asalKampus').value,
          jurusan: document.getElementById('jurusan').value,
          semester: document.getElementById('semester').value,
          angkatan: document.getElementById('angkatan').value,
          instagram: document.getElementById('instagram').value,
          riwayatPenyakit: document.getElementById('riwayatPenyakit').value,
          foto: downloadURL // ganti dengan URL hasil upload
        };

        submitFormToFirebase(data)
          .then(() => {
            alert("Data berhasil dikirim!");
            document.querySelector('form').reset();
            const modal = bootstrap.Modal.getInstance(document.getElementById('modalPromoLainnya'));
            modal.hide();
          })
          .catch((error) => {
            alert("Gagal menyimpan data: " + error.message);
          });
      });
    }
  );
});
