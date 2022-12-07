<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Dochive</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
</head>
<body style="background-color: #2E2E2E;">
    <nav>
        <div class="icon" style="color: #fff;">Dochive</div>
        <div class="search_box">
            <input type="search" placeholder="Telusuri...">
            <span class="fa fa-search"></span>
        </div>
        <ol>
            <li><a href="user.php">Beranda</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="kontak.php">Kontak</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ol>
    </nav>
    <center>
    <div class="container-button" style="margin-top: 30px">
            <a href="favorit.php" style = "background-color: #802BB1; border: none; border-radius: 35px; color: #000; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; margin: 4px 2px;"><span class="fa fa-star" style="color: #fff;"></span><b> Favorit</b></a>
            <a href="user.php" style = "background-color: #802BB1; border: none; border-radius: 35px; color: #000; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; margin: 4px 2px;"><span class="fa fa-cloud" style="color: #fff;"></span><b> Semua</b></a>
            <a href="unggah.php" style = "background-color: #802BB1; border: none; border-radius: 35px; color: #000; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; margin: 4px 2px;"><span class="fa fa-upload" style="color: #fff;"></span><b> Unggah</b></a>
    </div>
    </center>

    <div class="container" style="display: flex; margin-bottom: 50px; margin-top: 50px;">
    <div class="card" style="width: 18rem;">
    <img src="images/Nice cake.jpg" class="card-img-top border-radius" alt="...">
    <div class="card-body">
        <h5 class="card-title">Nicecake.jpg</h5>
        <p class="card-text">10,9 KB</p>
        <p class="card-text">23 November 2022</p>
    </div>
    </div>

    <div class="card" style="width: 18rem; margin-left: 75px">
    <img src="images/26907479_2085303828359626_3827142632146144374_n.jpg" class="card-img-top border-radius" alt="Ligas Segoro Kidul" style="image-size: 18rem;">
    <div class="card-body">
        <h5 class="card-title">26907479_2085303828359626_3827142632146144374_n.jpg</h5>
        <p class="card-text">39,1 KB</p>
        <p class="card-text">23 November 2022</p>
    </div>
    </div>

    <div class="card" style="width: 18rem; margin-left: 75px">
    <img src="images/Cowboy bebop.jpg" class="card-img-top border-radius" alt="Ligas Segoro Kidul" style="image-size: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Cowboy bebop.jpg</h5>
        <p class="card-text">22,4 KB</p>
        <p class="card-text">23 November 2022</p>
    </div>
    </div>

    <div class="card" style="width: 18rem; margin-left: 75px">
    <img src="images/WhatsApp Image 2021-09-02 at 4.12.37 PM.jpeg" class="card-img-top border-radius" alt="Ligas Segoro Kidul" style="image-size: 18rem;">
    <div class="card-body">
        <h5 class="card-title">WhatsApp Image 2021-09-02 at 4.12.37 PM.jpeg</h5>
        <p class="card-text">74,6 KB</p>
        <p class="card-text">23 November 2022</p>
    </div>
    </div>
</div>
    <table class="table table-sm" style="color: #fff;">
        <tr>
            <td><img src="images/26907479_2085303828359626_3827142632146144374_n.jpg" alt="Ligas Segoro Kidul" width="70"></td>
            <td>26907479_208530382835.jpg</td>
            <td>39,1 KB</td>
            <td><i class="fa-solid fa-ellipsis-vertical"></i></td>
        </tr>
        <tr>
            <td><img src="images/Nice cake.jpg" alt="Studio Ghibli" width="70"></td>
            <td>Nice cake.jpg</td>
            <td>10,9 KB</td>
            <td><i class="fa-solid fa-ellipsis-vertical"></i></td>
        </tr>
        <tr>
            <td><img src="images/WhatsApp Image 2021-09-02 at 4.12.37 PM.jpeg" alt="Pagar Nusa" width="70"></td>
            <td>WhatsApp Image 2021-09-02 at 4.12.37 PM.jpeg</td>
            <td>74,6 KB</td>
            <td><span class="fa-solid fa-ellipsis-vertical"></span></td>
        </tr>
        <tr>
            <td><img src="images/Cowboy bebop.jpg" alt="Cowboy bebop" width="70"></td>
            <td>Cowboy bebop.jpg</td>
            <td>22,4 KB</td>
            <td><i class="fa-solid fa-ellipsis-vertical"></i></td>
        </tr>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/67c66657c7.js"></script>
</body>
</html>