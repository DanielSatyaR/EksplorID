<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>EksplorID</title>
    <link rel="stylesheet" href="css/login.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!------------------ Navbar ------------------------>

<body>


    <x-Navbar> </x-Navbar>

    <!------------------ DB --------------------->

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-------------- KONTEN ---------------->

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
                <a href="{{ route('google-auth') }}">
                    <button type="button" class="google-login">
                        <img src="img/googleicon.png" alt="Google Logo" width="20" height="20"> Login dengan Google
                    </button>
                </a>
            </form>
            <footer>
                <p>Belum punya akun? <a href="/createacc">Daftar akun</a></p>
            </footer>
        </div>
    </div>

</body>

</html>