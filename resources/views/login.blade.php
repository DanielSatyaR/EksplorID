<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EksplorID Login</title>
    <link rel="stylesheet" href="css/login.css">
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
            <a href="#" class="sign-in">Sign in</a>
            <a href="/createacc" class="create-account">Create Account</a>
        </div>
    </header>
    <div class="container">
        <div class="image-container">
            <img src="img/sea.jpg" alt="Sea">
        </div>
        <div class="form-container">
            <header>
                <h1>LOGIN</h1>
            </header>
            <form action="/login" method="post">

                @csrf

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Masukkan e-mail" autofocus required>

                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>

                <button type="submit">Continue</button>
                <p>atau login dengan</p>
                <button type="button" class="google-login">
                    <img src="img/googleicon.png" alt="Google Logo" width="20" height="20"> Login dengan Google
                </button>
            </form>
            <footer>
                <p>Belum punya akun? <a href="/createacc">Daftar akun</a></p>
            </footer>
        </div>
    </div>
</body>

</html>