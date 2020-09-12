<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        #navbar{
            color: white;
            font-size: 20px;
            margin-left: 750px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">INFOCOVID</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('Beranda')?>">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('Chart')?>">Grafik</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('Edukasi')?>">Edukasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('Laporan')?>">Lapor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('Info')?>">Informasi Wisma Altet</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?=base_url('rs')?>">Rumah Sakit Rujukan</a>
      </li> -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Data Provinsi</a>
          <a class="dropdown-item" href="#">Maps</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Grafik Persebaran</a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>

<?php $this->load->view($content); ?>

</body>
</html>