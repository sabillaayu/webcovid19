<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

</head>
<body>
  <div class="chart-container">
      <canvas id="chart"></canvas>
  </div>

  <script>
  const url = 'https://indonesia-covid-19.mathdro.id/api/provinsi'

    $.get(url, function(d, status){
      console.log(d.data[0].kasusPosi)
    var data = {
    labels: [d.data[0].provinsi, d.data[1].provinsi, d.data[2].provinsi, d.data[3].provinsi, d.data[4].provinsi, d.data[5].provinsi, d.data[6].provinsi, d.data[7].provinsi],
    datasets: [{
      label: "Kasus Positif",
      backgroundColor: "rgba(255,99,132,0.2)",
      borderColor: "rgba(255,99,132,1)",
      borderWidth: 2,
      hoverBackgroundColor: "rgba(255,99,132,0.4)",
      hoverBorderColor: "rgba(255,99,132,1)",
      data: [d.data[0].kasusPosi, d.data[1].kasusPosi, d.data[2].kasusPosi, d.data[3].kasusPosi, d.data[4].kasusPosi, d.data[5].kasusPosi, d.data[6].kasusPosi, d.data[7].kasusPosi],
    }]
  };

  var options = {
    maintainAspectRatio: false,
    scales: {
      yAxes: [{
        stacked: true,
        gridLines: {
          display: true,
          color: "rgba(255,99,132,0.2)"
        }
      }],
      xAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  };

  Chart.Bar('chart', {
    options: options,
    data: data
  });
    })
  </script>
</body>
</html>
<style>
body {  
  /* background: #1D1F20; */
  padding: 16px;
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