<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Admin</title>
    <link href="../assets/img/logokedai.png" rel="icon" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, rgb(7, 58, 125), #ACB6E5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 40px 30px;
            max-width: 600px;
            /* Increased from 400px to 600px */
            width: 90%;
            /* Added for responsiveness */
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            text-align: center;
            margin: 0 auto;
            /* Center the container */
        }

        .login-container h2 {
            color: #fff;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-control {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            border: none;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 14px;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .btn-primary {
            background: #fff;
            color: #007bff;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn-primary:hover {
            background: #007bff;
            color: #fff;
        }

        .icon {
            font-size: 45px;
            color: #fff;
            margin-bottom: 10px;
        }

        .alert {
            margin-top: 15px;
            background: rgba(255, 0, 0, 0.3);
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="icon"><i class="fas fa-user-shield"></i></div>
        <h2>Login Admin</h2>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert">
                <?php
                echo htmlspecialchars($_SESSION['error']);
                unset($_SESSION['error']); // Clear the error after displaying
                ?>
            </div>
        <?php endif; ?>

        <form id="loginForm">
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email" required />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password" required />
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
        </form>
    </div>

    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
        import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-auth.js";

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
        const auth = getAuth(app);

        document.getElementById('loginForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Check if email matches allowed admin email
            if (email !== 'ketawadamai@gmail.com') {
                Swal.fire({
                    icon: 'error',
                    title: 'Unauthorized Access',
                    text: 'You are not authorized to access this admin panel'
                });
                return;
            }
            
            try {
                const userCredential = await signInWithEmailAndPassword(auth, email, password);
                
                // Verify the email after successful login
                if (userCredential.user.email === 'ketawadamai@gmail.com') {
                    // Create PHP session
                    const response = await fetch('create_session.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            uid: userCredential.user.uid,
                            email: userCredential.user.email
                        })
                    });

                    if (response.ok) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Successful',
                            text: 'Welcome back, Admin!',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.href = 'index.php';
                        });
                    }
                } else {
                    // Logout if somehow another account was used
                    await auth.signOut();
                    Swal.fire({
                        icon: 'error',
                        title: 'Unauthorized Access',
                        text: 'You are not authorized to access this admin panel'
                    });
                }
            } catch (error) {
                let errorMessage = 'Invalid email or password';
                if (error.code === 'auth/too-many-requests') {
                    errorMessage = 'Too many failed attempts. Please try again later.';
                }
                
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed',
                    text: errorMessage
                });
            }
        });
    </script>
</body>
</html>