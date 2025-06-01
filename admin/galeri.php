<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Gambar Galeri</title>
    <!-- Tambahkan stylesheet atau library CSS sesuai kebutuhan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Tambah Gambar Galeri</h1>
    <form id="tambahGaleriForm">
        <label for="title">Judul:</label><br>
        <input type="text" id="title" name="title"><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi"></textarea><br><br>

        <label for="gambar">Gambar:</label><br>
        <input type="file" id="gambar" name="gambar"><br><br>

        <button type="submit">Simpan</button>
    </form>

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

        document.getElementById('tambahGaleriForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const title = document.getElementById('title').value;
            const deskripsi = document.getElementById('deskripsi').value;
            const gambarFile = document.getElementById('gambar').files[0];

            if (!gambarFile) {
                alert("Mohon pilih gambar.");
                return;
            }

            try {
                const url = await uploadFile(gambarFile, 'gallery');

                await addDoc(collection(db, 'gallery'), {
                    title: title,
                    deskripsi: deskripsi,
                    url: url
                });

                alert("Gambar berhasil ditambahkan ke galeri!");
                document.getElementById('tambahGaleriForm').reset();
            } catch (error) {
                console.error("Error adding document: ", error);
                alert("Gagal menambahkan gambar ke galeri.");
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
                        console.error("Error uploading file: ", error);
                        reject(error);
                    },
                    () => {
                        getDownloadURL(uploadTask.snapshot.ref).then((downloadURL) => {
                            console.log('File available at', downloadURL);
                            resolve(downloadURL);
                        });
                    }
                );
            });
        }
    </script>
</body>

</html>