<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website profil</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="02-css/css/style.css" type="text/css">
    <link rel="stylesheet" href="02-css/css/style_2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet"> 
</head>


<body>
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
            <div class="container judul" style="margin-top: 80pt; margin-bottom: 60pt;">
              <div class="row">
                <div class=" col-sm-6 justify-content-center"><img src="03-img/learn-coding.png" width="500" height="400" class="img-fluid"></div>
                <div class="col-sm-6 justify-content-center"><p>Selamat Datang di Portofolio</p></div>
            </div>
            </div>
        </div>
		<div class="container my-5 justify-content-center">
          <div class="justify-content-center ">
              <div class="mt-5 ">
                  <div class="card mt-3 ">
                      <div class="layer"></div>
                      <div class="content">
                          <div class="card-header text-center border-0">
                              <div class="row justify-content-center my-4">
                                  <div class="col">
                                      <div class="d-flex flex-lg-row flex-column-reverse no-gutters justify-content-center">
                                          <div class="col pr-lg-5"><img class=" img-1 mr-lg-5 "src="03-img/Screenshot (851).png"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card-body text-center pb-3 ">
                              <div class="row justify-content-center">
                                  <div class="col text-center justify-content-center ">
                                      <p class="bold text-center px-md-3 text-black teksdalam2" style="font-size: 17pt;"> "Ini merupakan website pertama yang saya bisa buat, harapannya ini dapat memberikan pemahanman yang baik
                                        mengenai bagaimana kinerja saya. Harapannya kedepannya saya bisa membuat website yang lebih baik dari ini.
                                        Jika ada saran mengenai website tugas saya ini, mohon bantuannya. Sekian dan terima kasih"</p>
                                  </div>
                              </div>
                          </div>
                          <hr class="mt-auto mb-4">
                          <div class="card-footer text-center border-0 mt-0 pt-0 mb-3">
                              <div class="row text-center name mt-auto ">
                                  <div class="col">
                                      <h4 class="mb-0 text-black teksdalam2">Azhar</h4> <small class="mt-0 text-black teksdalam2">Pembuat website</small>
                                      <p><span class="fa fa-star text-warning mr-1"></span><span class="fa fa-star text-warning mr-1"></span><span class="fa fa-star-o text-warning mr-1"></span><span class="fa fa-star-o text-warning mr-1"></span><span class="fa fa-star-o text-warning mr-1"></span></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
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
            </div>
			<div class="modal-footer">
                <button type="button" class="btn btn-primary warnafont" data-bs-toggle="modal" data-bs-target="#modalpercobaan">Kirim</button>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>