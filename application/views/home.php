<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        #box1{
				width:250px;
				height:200px;
                color: white;
				background:red;
                margin: 90px;
                padding: 12px;
                text-align: center;
        }
        #box2{
				width:250px;
				height:200px;
				background:#00FF00	;
                color: white;
                margin: 90px;
                padding: 12px;
                text-align: center;

        }
        #box3{
				width:250px;
				height:200px;
				background: darkgrey;
                color: white;
                margin: 90px;
                padding: 12px;
                text-align: center;

        }
        a {
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="row" style="width:100%; height:500px; background-color: black; font-size: 30px;">
        <div id="box1"> <br><a> Meninggal</a> <br></div>
        <div id="box2"> <br><a>Sembuh</a> <br></div>
        <div id="box3"> <br><a>Perawatan</a> <br></div>
    </div>

    <div id="tabel"></div>

    <script>
    // const url = 'https://swapi.dev/api/people/1';
    // const url = 'https://covid19.mathdro.id/api/countries/IDN';
    // const url = 'https://api.kawalcorona.com/indonesia/provinsi' 
    const url = 'https://indonesia-covid-19.mathdro.id/api/provinsi'
    const url_today = 'https://indonesia-covid-19.mathdro.id/api'
    // axios.get(url, {
    //     headers: {"Access-Control-Allow-Origin": "http://localhost"}
    // })
	// .then(function (response) {
	// 	console.log(response);
	// })
	// .catch(function (error) {
	// 	console.log(error);
	// });
    $.get(url_today, function(data, status){
        console.log(data)
        $('#box1').append(data.meninggal)
        $('#box2').append(data.sembuh)
        $('#box3').append(data.perawatan)
    });
    $.get(url, function(data, status){
    // alert("Data: " + data + "\nStatus: " + status);
    // console.log(data.data)
    let dt = []
    data.data.forEach((e, i) =>{
        dt.push(
    `<tr>
      <th>${i+1}</th>
      <th>${e.provinsi}</th>
      <td>${e.kasusPosi}</td>
      <td>${e.kasusSemb}</td>
      <td>${e.kasusMeni}</td>
    </tr>`)
    })
    

    $('#tabel').append(`
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Positif</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
            </tr>
        </thead>
         <tbody>
         ${dt}
    </tbody>
    </table>
    `)
    });
    </script>
</body>
</html>