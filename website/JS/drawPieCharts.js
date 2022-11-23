// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Number of cald sold', 'Number per Day'],
        ['Carte Avantage Jeune', 8],
        ['Carte Avantage Adulte', 12],
        ['Carte Avantage Senior', 2],
        ['Carte liberté', 2],
        ['Forfait National, hebdomadaire ou mensuel', 2],
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {'title':'Nombre de titres vendus le XX/XX/XXXX', 'width':550, 'height':400};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}