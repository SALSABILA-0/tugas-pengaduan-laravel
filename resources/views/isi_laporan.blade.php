<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ISI LAPORAN</title>
</head>
<body>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laporan Pengaduan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         <div class= container>
          <a class="nav-link active" aria-current="page" a href="{{url('table')}}">Back</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>
<style>
  body{
    
    background-color: rgb(250, 215, 151);
  }
</style>
<div class="container" style="margin-top:40px;">
<div class="mb-3">
    <form action="isi_laporan"method="POST" enctype="multipart/form-data">
      @method('POST')
      @csrf
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan Anda</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"name="isi_laporan"></textarea>
  @error('isi_laporan')
      <div>{{$message}}</div>
  @enderror
</div>
<label for="inputGroupFile02" class="form-label">Foto</label>
<div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="foto">
</div>
<button type="submit" class="btn btn-dark" style="padding:6px 40px;">Kirim</button>
</div>
</body>
</html>