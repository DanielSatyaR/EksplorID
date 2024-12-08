<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EksplorID Daftar</title>
    <link rel="stylesheet" href="css/create.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">EksplorID</div>
        <nav>
            <ul>
                <li><a href="/destinasi">Destinasi</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <a href="/login" class="sign-in">Sign in</a>
            <a href="/createacc" class="create-account">Create Account</a>
        </div>
    </header>
    <div class="container">
        <div class="image-container">
            <img src="/img/trip.jpg" alt="Trip">
        </div>
        <div class="form-container">
            <header>
                <h1>DAFTAR</h1>
            </header>
            <form action="#" method="post">
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>
                
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                
                <label for="phone"></label>
                <div class="phone-input">
                    <span>+62</span>
                    <input type="tel" id="phone" name="phone" placeholder="81234567890" required>
                </div>
                
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
                
                <button type="submit">Daftar</button>
                <p>atau Daftar dengan</p>
                <button type="button" class="google-login">
                    <img src="img/googleicon.png" alt="Google Logo" width="20" height="20"> Daftar dengan Google
                </button>
            </form>
            <footer>
                <p>Sudah punya akun? <a href="/login">Login</a></p>
                <div class="rules">
                <p>Dengan membuat akun, kamu menyetujui <a href="#">Kebijakan Privasi</a> dan <a href="#">Syarat & Ketentuan</a> EksplorID</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
