import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBl2ZL-IdeiHulplNu1de-avhhzEWaBplo",
  authDomain: "pendaftaran-kedai.firebaseapp.com",
  databaseURL: "https://pendaftaran-kedai-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "pendaftaran-kedai",
  storageBucket: "pendaftaran-kedai.appspot.com",
  messagingSenderId: "173578785882",
  appId: "1:173578785882:web:b9f1266a54cc069f023463",
  measurementId: "G-KS30C1P817"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const storage = firebase.storage();

const tampilData = async () => {
    const querySnapshot = await getDocs(collection(db, "pendaftaran"));
    const tbody = document.getElementById("dataTabel");
    let no = 1;

    querySnapshot.forEach((doc) => {
      const data = doc.data();
      const row = document.createElement("tr");

      row.innerHTML = `
        <td>${no++}</td>
        <td>${data.nama || '-'}</td>
        <td>${data.nim || '-'}</td>
        <td>${data.email || '-'}</td>
        <td>${data.ttl || '-'}</td>
        <td>
          <button class="btn btn-success btn-sm" onclick="editData('${doc.id}')">Edit</button>
          <button class="btn btn-danger btn-sm" onclick="hapusData('${doc.id}')">Hapus</button>
        </td>
      `;
      tbody.appendChild(row);
    });
  };

  tampilData();