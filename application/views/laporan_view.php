<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form role="form " method="post" action="<?=base_url('insertLaporan')?>" class="container-fluid col-5" style="margin-top: 50px;">
    <h3 CLASS="text-center">LAPOR SIGAP COVID</h3>
    <div class="mt-5">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="Email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">No Telepon</label>
            <input type="number" name="no_hp" class="form-control" id="inputPassword4" placeholder="No Telepon">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nama Lengkap</label>
            <input type="text" name="fullname" class="form-control" id="inputEmail4" placeholder="Nama Lengkap">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Gejala</label>
          <input type="text" name="symptoms" class="form-control" id="inputAddress2" placeholder="Gejala yang dialami">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Alamat</label>
          <input type="text" class="form-control" name="Address" id="inputAddress2" placeholder="Jalan Rumah, No rumah, Apartemen">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Kota</label>
            <input type="text" name="city" class="form-control" id="inputCity" placeholder="Kota">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">Provinsi</label>
            <input type="text" name="province" class="form-control" id="inputCity" placeholder="Provinsi">
          </div>
        </div>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-primary">Masukkan Data</button>
        </div>
    </form>
    <iframe src="https://experience.arcgis.com/experience/bf4eb5d76e98423c865678e32c8937d4" frameborder="0"></iframe>
</body>
</html>