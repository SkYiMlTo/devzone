<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Old Page</title>
    <meta charset="UTF-8" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--<meta http-equiv="refresh" content="0; URL=https://www.youtube.com/watch?v=dQw4w9WgXcQ" /> -->
</head>

<body>

<div class="container">
    <h1 style="margin-top: 3%; margin-bottom: 5%;">Bienvenue sur l'outil d'analytique des ventes</h1>
    <h3>L'objectif de cette page</h3>
    <p style="margin-bottom: 2%;">Our cool objbectives here.</p>
    <h3 class="mt-3">Autre section si besoin</h3>


    <div id="piechart"></div>

    <canvas id="myCanvas" width="600" height="300" style="border:1px solid black;">
    </canvas>
</div>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="JS/drawPieCharts.js"></script>
<script type="text/javascript" src="./JS/drawCharts.js"></script>
<script>
    window.onload = function(){
        var myLineChart = new LineChart({
            canvasId: "myCanvas",
            minX: 0,
            minY: 0,
            maxX: 20,
            maxY: 100,
            unitsPerTickX: 10,
            unitsPerTickY: 20
        });
        var data = [{
            x: 0,
            y: 0
        }, {
            x: 20,
            y: 10
        },];

        myLineChart.drawLine(data, "blue", 3);

        var data = [{
            x: 10,
            y: 85
        }, {
            x: 20,
            y: 75
        }];

        myLineChart.drawLine(data, "red", 3);

        var data = [{
            x: 10,
            y: 10
        }, {
            x: 20,
            y: 30
        }];

        myLineChart.drawLine(data, "green", 3);
    };
</script>

</html>