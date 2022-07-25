<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="02-css/css/style.css">
        <link rel="stylesheet" href="02-css/css/style_2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet"> 
        <title>Website profil</title>
    </head>
    <body style = "padding-top : 65px;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand navbar_font" href="<?= base_url() ?>">
                    <img src="/03-img/logo_size_invert-removebg-preview.png" alt="" width="50" height="50">
                    Jake</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <nav class="navbar ms-auto">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link navbar_font" aria-current="page" href="<?= base_url('profil') ?>">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar_font" href="<?= base_url('news') ?>">News</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link navbar_font" href="<?= base_url('projek') ?>">Projek</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link navbar_font bg-transparent" style="border: 0;" href="<?= base_url('contact') ?>">Contact us</a>
                      <li class="nav-item">
                        <a class="nav-link navbar_font" href="<?= base_url(); ?>/logout">Logout</a>
                    </li>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link navbar_font" aria-current="page" href="#profil">Profil</a>
                        <a class="nav-link navbar_font" href="#projek">Projek</a>
                        <button class="nav-link navbar_font bg-transparent" style="border: 0;" href="<?= base_url('contact') ?>">Contact us</button>
                      </div>
                    </li>
                  </ul>
                  </nav>
    
            </div>
            </div>
        </nav>
        <div class="container backgroundbulat2 teksdalam mt-5">
            <div class="pt-3 pe-3 ps-3" id="profil">
                <h1 class="judulisi">Profil saya</h1>
                <p><img src="03-img/Screenshot (1195).png" width="200" height="200" style="float: right; margin-right: 50pt;" class="ps-3"></p>
                Perkenalkan, nama saya Muh. Azhar Tawakkal. Saya merupakan mahasiswa semester 3 di universitas Hasanuddin
                dan memiliki NIM H071201041. Saya berasal dari salah satu daerah yang mungkin masih ada orang belum tahu.
                Saya berasal dari daerah Kendari di Sulawesi Tenggara. Saya memiliki dua orang adik laki-laki. <br>
                Saya merupakan salah satu mahasiswa yang bertipe generalis menurut saya, saya bisa melakukan banyak hal
                secara umum, tapi bisa dibilang hasilnya umum juga. Namun, saya berusaha melakukan suatu hal sebaik mungkin.
                Saya memiliki hobi bermain game, namum menurut saya game yang saya mainkan tidak diminati oleh kalangan umum.
                Game yang saya minati biasanya game game sederhana namun tidak terlalu try hard dalam memainkannya, sebab saya
                tidak begitu menyukai kompetisi. Saya juga senang menonton anime. Namun, sama halnya dengan game, anime yang
                saya senangi justru tidak banyak orang saya jumpai yang juga menyukainya.
                
                </p>
            </div>
        </div>
        

        </div>
        <footer class="mt-3 bg-dark">
        <div> 
          <div class="me-5">
            <div class="d-flex justify-content-center"><h5 class="warnafont ms-3">Contact us!</h5></div>
            <div class="container ms-5 me-5">
            <p class="warnafont"><img src="03-img/output-onlinepngtools.png" width="30" height="30" class="ms-3 me-4">instagram.com/akunazharpalsu</p>
            <p class="warnafont"><img src="03-img/mail_white.png" width="60" height="60" class="me-2">azhartawakkal@gmail.com (akun palsu)</p>
            <p class="warnafont"><img src="03-img/phone_white.png" width="43" height="43" class="ms-2 me-3">081234567890</p>
            <button type="button" class="btn btn-primary mb-3 warnafont border-white" data-bs-toggle="modal" data-bs-target="#modalkontak">Contact Us!</button>
            </div>
        </footer>
        <div class="modal fade" id="modalkontak" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content bg-dark">
              <div class="modal-header">
                <h5 class="modal-title warnafont" id="exampleModalLabel">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background-color: black;">
                <h5 class="warnafont">Apabila ada keluhan atau saran, silahkan sampaikan di form berikut :</h5>
                <div style="width: 100%;">
                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label warnafont">Alamat email</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label warnafont">Nama lengkap</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label warnafont">Pesan yang ingin disampaikan</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary warnafont" data-bs-toggle="modal" data-bs-target="#modalpercobaan">Kirim</button>
              </div>
            </div>
            </div>
          </div>
        </div>
    </body>
</html>