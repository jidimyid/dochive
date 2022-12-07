<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dochive</title>
    <link rel="stylesheet" href="css/style-register.css">
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
<section class="background-radial-gradient overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 75%)">
          Simpan kenangan anda!<br />
        </h1>
        <p class="mb-4 opacity-70" style="color: #fff">
        penyimpanan berbasis online yang membantu anda menyimpan file yang anda miliki  
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="post" action="submit_register.php">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3" style="color: #fff;">Email</label>
                <input type="email" name="username" class="form-control" />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4" style="color: #fff; padding-top: 30px">Password</label>
                <input type="password" name="pass1" class="form-control" />
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4" style="color: #fff; padding-top: 30px">Ulangi Password</label>
                <input type="password" name="pass2" class="form-control" />
              </div>

              <!-- Submit button -->
              <button type="submit" class="submit-button">
                Daftar
              </button>
              <p class="text-position" style="color: #fff; margin-top: 50%; margin-left: 20%;"><u>Anda sudah memiliki akun? </u><a href="login-page.php"><b>Masuk</b></a></p>
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