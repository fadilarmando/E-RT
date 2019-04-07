
<nav class="navbar navbar-expand-lg navbar-dark bg-success text-white">
  <a class="navbar-brand" href="<?php echo base_url('user/berita'); ?>">ERT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/berita'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('pro_user');?>">Keluarga</a>
          <a class="dropdown-item" href="<?= base_url('pro_user/pendidikan');?>">Pendidikan</a>
          <a class="dropdown-item" href="<?= base_url('pro_user/pekerjaan');?>">Pekerjaan</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Form Kependudukan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('pro_user/kelahiran');?>">Kelahiran</a>
          <a class="dropdown-item" href="#">Demografi Profesi</a>
          <a class="dropdown-item" href="#">Peta Perumahan</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lihat Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Demografi Usia</a>
          <a class="dropdown-item" href="#">Demografi Profesi</a>
          <a class="dropdown-item" href="#">Peta Perumahan</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/input_berita'); ?>">Input Berita<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
