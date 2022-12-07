<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah | Dochive</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

    <div class="position-absolute top-50 start-50 translate-middle">
    <input type="file" name="nama_file" id="nama_file" style="display: none;" onchange="loadFile()">
    <label for="nama_file" class="btn btn-round btn-warning" >Pilih File</label>
    </div>

    <?php
    include "koneksi.php";
    function store(Request $request) {
        $target_file = $request["nama_file"];
        $t_draft_naskah = "SELECT * FROM tb_files";
        if (!is_null($target_file)) {
           $t_draft_naskah->nama_file = $target_file->getClientOriginalName(); 
           $t_draft_naskah->file_data = base64_encode(file_get_contents($target_file->getRealPath()));
           $t_draft_naskah->tipe_file = $target_file->getMimeType();
           $t_draft_naskah->ukuran = $target_file->getSize();
        }
        $t_draft_naskah->save();
     }
    ?>

    <script src="loadfile.js"></script>
</body>
</html>