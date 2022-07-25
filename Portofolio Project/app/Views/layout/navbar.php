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