    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="NodeTent">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coronavirus Tracker - Covid-19 Rate, Map, Country Data</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../public/assets/images/favicon.png" />
    <link rel="stylesheet" href="../../public/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/assets/css/fontawesome.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/assets/css/app.min.css" type="text/css">
    <link rel="stylesheet" href="../../public/assets/css/dataTables.bootstrap4.min.css" type="text/css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
google.charts.load('current', {
    'packages': ['geochart'],
    'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
});
google.charts.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap() {
    var data = google.visualization.arrayToDataTable([
        ['Country', 'Confirmed Cases', ],
    ]);
    var options = {
        colorAxis: {
            colors: ['#D2E3FC', '#8AB4F8', '#4285F4', '#1967D2', '#174EA6', ]
        },
        backgroundColor: '#2A323C',
        legend: {
            textStyle: {
                color: '#000',
                fontSize: 14
            }
        }
    };
    var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
    chart.draw(data, options);
}
    </script>

    <body class="dark">
        <!-- begin::header -->
        <div class="header">
            <div class="header-left">
                <div class="header-logo">
                    <a href="/">
                        <img class="logo-light" src="../public/assets/images/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
        <!-- end::header -->