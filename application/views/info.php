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
  <h1 style="text-align: center;">Update Informasi Wisma Atlet</h1>
  <br> <br> <br>
  <div class="chart-container">
  <canvas id="oilChart" width="600" height="400"></canvas>
  </div>

  <script>
  const url = 'https://indonesia-covid-19.mathdro.id/api/wisma-atlet'

    $.get(url, function(d, status){
      var oilCanvas = document.getElementById("oilChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var oilData = {
    labels: [
        "IGD",
        "Rawat Inap",
        "Pulang Sembuh",
        "Pulang Meninggal"
    ],
    datasets: [
        {
            data: [d.data.igd, d.data.ranap, d.data.pulang_sembuh, d.data.pulang_meninggal],
            backgroundColor: [
                "#FF6384",
                "#63FF84",
                "#84FF63",
                "#8463FF",
                "#6384FF"
            ]
        }]
};

var pieChart = new Chart(oilCanvas, {
  type: 'pie',
  data: oilData
});
    })
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