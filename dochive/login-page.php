<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Dochive</title>
    <link rel="stylesheet" href="css/style-login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
</head>
<body>
    <nav class="navbar" style="background-color: #9DAAF2;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        Dochive
        </a>
    </div>
    </nav>
    <section class="vh-100" style="background-color: #1A2238;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-left">

                <center>
                <h3 class="mb-5">Masuk</h3>
                </center>

                <form method="post" action="submit_login.php">
                <div class="form-outline mb-4">
                <label class="form-label" for="typeEmailX-2">Email</label>
                <input type="email" name="username" class="form-control form-control-lg" placeholder="Masukkan email anda!" />
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="typePasswordX-2">Password</label>
                <input type="password" name="pass" class="form-control form-control-lg" placeholder="Masukkan password anda!" />
                </div>

                              <!-- Submit button -->
                <button type="submit" name="submit" class="submit-button">
                    Masuk
                </button>
                <p class="text-position" style="margin-left: 65px;"><u>Anda belum memiliki akun? </u><a href="register-page.php"><b>Daftar</b></a></p>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <footer class="text-center text-lg-start text-muted" style="background-color: #9DAAF2; ">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    </section>

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Dochive
            </h6>
            <p>
            penyimpanan berbasis online yang membantu anda menyimpan file yang anda miliki  
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Konten
            </h6>
            <p>
                <a href="tentang.php" class="text-reset">Tentang</a>
            </p>
            <p>
                <a href="kontak.php" class="text-reset">Kontak</a>
            </p>
            <p>
                <a href="faqs.php" class="text-reset">FAQs</a>
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Hubungi:</h6>
            <p><i class="fas fa-home me-3"></i>Jl. Tanimbar No.22, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117</p>
            <p>
            <i class="fas fa-envelope me-3"></i>mephistopeles4@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +62 856 0768 9279</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: #000;">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Dochive</a>
    </div>
    <!-- Copyright -->
    </footer>
</body>
</html>