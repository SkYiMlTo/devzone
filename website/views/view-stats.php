<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Old Page</title>
    <meta charset="UTF-8" />
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--<meta http-equiv="refresh" content="0; URL=https://www.youtube.com/watch?v=dQw4w9WgXcQ" /> -->
</head>

<body>
<?php
include "../utilities/navbar-views.php"
?>
<div class="container">
    <div id="piechart"></div>

    <canvas id="myCanvas" width="600" height="300" style="border:1px solid black;">
    </canvas>
</div>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="../js/drawPieCharts.js"></script>
<script type="text/javascript" src="../js/drawCharts.js"></script>
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