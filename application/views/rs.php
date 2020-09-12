<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>


</head>
<body>
  <div class="conten">
  </div>

  <script>
  const url = 'https://dekontaminasi.com/api/id/covid19/hospitals'

    $.get(url, function(d, status){
      var dt = []
      console.log(d)
    })
  axios.get(url, {
        headers: {"Access-Control-Allow-Origin": "http://localhost"}
    })
	.then(function (response) {
		console.log(response);
	})
	.catch(function (error) {
		console.log(error);
	});
  </script>
</body>
</html>
<style>
body {  
  /* background: #1D1F20; */
  /* padding: 16px; */
}

canvas {
  /* border: 1px dotted red; */
}

.chart-container {
  /* position: relative; */
  margin: auto;
  height: 80vh;
  width: 80vw;
}

</style>