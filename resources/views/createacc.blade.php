<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>EksplorID</title>
    <link rel="stylesheet" href="css/create.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- NAVBAR -->

<body>

    <x-Navbar> </x-Navbar>

    <!-- DB -->

    <!-- KONNTEN -->

    <div class="container">
        <div class="image-container">
            <img src="/img/trip.jpg" alt="Trip">
        </div>
        <div class="form-container">
            <header>
                <h1>DAFTAR</h1>
            </header>
            <form action="/createacc" method="post">

                @csrf

                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" autofocus required>

                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>

                <label for="phone"></label>
                <div class="phone-input">
                    <span>+62</span>
                    <input type="tel" id="noHp" name="noHp" placeholder="81234567890" required>
                </div>

                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>

                <button type="submit">Daftar</button>
                <p>atau Daftar dengan</p>
                <a href="{{ route('google-auth') }}">
                    <button type="button" class="google-login">
                        <img src="img/googleicon.png" alt="Google Logo" width="20" height="20"> Login dengan Google
                    </button>
                </a>
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