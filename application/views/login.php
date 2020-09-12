<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-color:#D3D3D3;
        }
        form{
            width:150px;
				height:350px;
				background:white;
				border-radius: 10px;
                border:solid 1px #D3D3D3;
                box-shadow: 4px 4px 4px rgba(0,0,0,0.8);
        }
    </style>
</head>
<body>
<form class="container-fluid col-5 pd-5" style="margin-top: 130px; padding-top:20px;">
<h2 class="text-center">LOGIN</h2>
  <div class="form-group">
    <label for="exampleInputEmail1" >Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
  </div>
  <div class="form-check">
    <span class="" style="margin-left: 218px;"><a href="<?=base_url('Register')?>">Register</a></span> 
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left: 230px; margin-top:10px;">Submit</button>
</form>
</body>
</html>