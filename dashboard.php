<?php
include_once 'connectdb.php';
session_start();


//



//
$select=$pdo->prepare("SELECT SUM(cases) as VBICOL FROM mytable WHERE Region = 'REGION V-BICOL REGION';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$VBICOL=($row->VBICOL);

//
$select=$pdo->prepare("SELECT SUM(cases) as IIICENTRALLUZON FROM mytable WHERE Region = 'REGION III-CENTRAL LUZON';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$IIICENTRALLUZON=($row->IIICENTRALLUZON);

//
$select=$pdo->prepare("SELECT SUM(cases) as IICAGAYANVALLEY FROM mytable WHERE Region = 'Region II-CAGAYAN VALLEY';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$IICAGAYANVALLEY=($row->IICAGAYANVALLEY);

//
$select=$pdo->prepare("SELECT SUM(cases) as IVACALABARZON FROM mytable WHERE Region = 'REGION IV-A-CALABARZON';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$IVACALABARZON=($row->IVACALABARZON);

//
$select=$pdo->prepare("SELECT SUM(cases) as IILOCOS FROM mytable WHERE Region = 'Region I-ILOCOS REGION';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$IILOCOS=($row->IILOCOS);

//
$select=$pdo->prepare("SELECT SUM(cases) as IVBMIMAROPA FROM mytable WHERE Region = 'REGION IVB-MIMAROPA';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$IVBMIMAROPA=($row->IVBMIMAROPA);

//
$select=$pdo->prepare("SELECT SUM(cases) as VIWESTERNVISAYAS FROM mytable WHERE Region = 'REGION VI-WESTERN VISAYAS';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$VIWESTERNVISAYAS=($row->VIWESTERNVISAYAS);

//
$select=$pdo->prepare("SELECT SUM(cases) as VIICENTRALVISAYAS FROM mytable WHERE Region = 'REGION VII-CENTRAL VISAYAS';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$VIICENTRALVISAYAS=($row->VIICENTRALVISAYAS);
//
//
//
//
$select=$pdo->prepare("SELECT SUM(cases) as VIIEASTERNVISAYAS FROM mytable WHERE Region = 'REGION VII-EASTERN VISAYAS';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$VIIEASTERNVISAYAS=($row->VIIEASTERNVISAYAS);

//
$select=$pdo->prepare("SELECT SUM(cases) as IXZAMBOANGAPENINSULA FROM mytable WHERE Region = 'REGION IX-ZAMBOANGA PENINSULA';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$IXZAMBOANGAPENINSULA=($row->IXZAMBOANGAPENINSULA);

//
$select=$pdo->prepare("SELECT SUM(cases) as XNORTHERNMINDANAO FROM mytable WHERE Region = 'REGION X-NORTHERN MINDANAO';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$XNORTHERNMINDANAO=($row->XNORTHERNMINDANAO);

//
$select=$pdo->prepare("SELECT SUM(cases) as REGIONXIDAVAOREGION FROM mytable WHERE Region = 'REGION XI-DAVAO REGION';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$REGIONXIDAVAOREGION=($row->REGIONXIDAVAOREGION);

//
$select=$pdo->prepare("SELECT SUM(cases) as CAR FROM mytable WHERE Region = 'CAR';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$CAR=($row->CAR);

//
$select=$pdo->prepare("SELECT SUM(cases) as CARAGA FROM mytable WHERE Region = 'CARAGA';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$CARAGA=($row->CARAGA);

//
$select=$pdo->prepare("SELECT SUM(cases) as BARMM FROM mytable WHERE Region = 'BARMM';");

$select->execute();

$row=$select->fetch(PDO::FETCH_OBJ);

$BARMM=($row->BARMM);









 ?>
 <html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.7 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->


  <!-- Theme style -->

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->






  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->





  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body>
<!--

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>


        <strong></strong>
        <small></small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

        <div class="row">
          <div class="d-flex justify-content-center">


          <div class="col-md-8" style="
    margin-right: 20px;">
            <div class="card">
              <div class="card-header with-border border-primary">
                <h3 class="box-title">THE TOTAL NUMBER OF DENGUE CASES WITHIN REGIONS I TO VII</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="height:400px"></canvas>
                </div>
                <div class="card-footer with-border border-success">
                  <h3>The line chart shows the number of dengue cases within all the regions of the Philippiens. The x-axis is labeled with the regions, and the y-axis is labeled with the number of dengue cases. The line on the chart shows that Region VII-Central Visayas has the highest number of dengue cases with 29,908 cases while BARMM shows the lowest number of cases with 305 cases.</h3>

                </div>
              </div>


            </div>





          </div>

          <div class="col-md-2">
          <div class="card">
            <div class="card-header with-border border-info">
              <h5 class="box-title">TOP 5 REGIONS WITH THE HIGHEST DENGUE CASES</h5>
            </div>

          <table class="table">

            <tr>
              <td class="col-6"><strong>REGION</strong></td>
              <td class="col-6"><strong>CASES</strong></td>
            </tr>
            <tr>
              <td class="col-6">Region VII-CENTRAL VISAYAS</td>
              <td class="col-6">29908</td>

            </tr>


            <tr>
              <td class="col-6">Region VI-WESTERN VISAYAS</td>
              <td class="col-6">26251</td>

            </tr>
            <tr>
              <td class="col-6">REGION IV-A-CALABARZON</td>
              <td class="col-6">24516</td>

            </tr>
            <tr>
              <td class="col-6">REGION III-CENTRAL LUZON</td>
              <td class="col-6">21384</td>

            </tr>
            <tr>
              <td class="col-6">REGION X-NORTHERN MINDANAO</td>
              <td class="col-6">17837</td>

            </tr>
            <tr>
              <td class="col-6">REGION XI DAVAO REGION</td>
              <td class="col-6">12263</td>

            </tr>
            <tr>
                <td class="col-6">REGION I ILOCOS REGION</td>
                <td class="col-6">8311</td>

            </tr>
            <tr>
              <td class="col-6">REGION IX-ZAMBOANGA PENINSULA</td>
              <td class="col-6">7278</td>

            </tr>
            <tr>
              <td class="col-6">REGION VII-EASTERN VISAYAS</td>
              <td class="col-6">5404</td>

            </tr>
            <tr>
                <td class="col-6">REGION IVB-MIMAROPA</td>
                <td class="col-6">4036</td>

            </tr>
            <tr>
                <td class="col-6">REGION II-CAGAYAN VALLEY</td>
                <td class="col-6">3895</td>

            </tr>
            <tr>
              <td class="col-6">CAR</td>
              <td class="col-6">3294</td>

            </tr>
            <tr>
              <td class="col-6">REGION V-BICOL REGION</td>
              <td class="col-6">2567</td>

            </tr>
            <tr>
              <td class="col-6">CARAGA</td>
              <td class="col-6">1782</td>
            </tr>
            <tr>

              <td class="col-6">BARMM</td>
              <td class="col-6">305</td>

            </tr>

          </table>
          </div>
          </div>


        </div>






          <!-- ./col -->
        </div>


    </section>
    <!-- ChartJS -->
    <script src="bower_components/chart.js/Chart.js"></script>
    <!-- FastClick -->

    <script>
      $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------


        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
        // This will get the first returned node in the jQuery collection.
        var areaChart       = new Chart(areaChartCanvas)

        var areaChartData = {
          labels  : ['REGION V-BICOL REGION', 'REGION III-CENTRAL LUZON', 'Region II-CAGAYAN VALLEY', 'REGION IV-A-CALABARZON', 'Region I-ILOCOS REGION', 'REGION IVB-MIMAROPA', 'REGION VI-WESTERN VISAYAS', 'REGION VII-CENTRAL VISAYAS', 'REGION VII-EASTERN VISAYAS', 'REGION IX-ZAMBOANGA PENINSULA', 'REGION X-NORTHERN MINDANAO', 'REGION XI-DAVAO REGION', 'CAR', 'CARAGA', 'BARMM'],
          datasets: [

            {
              label               : 'Dengue cases',
              fillColor           : 'rgba(60,141,188,0.9)',
              strokeColor         : 'rgba(60,141,188,0.8)',
              pointColor          : '#3b8bba',
              pointStrokeColor    : 'rgba(60,141,188,1)',
              pointHighlightFill  : '#fff',
              pointHighlightStroke: 'rgba(60,141,188,1)',
              data                : [<?php echo $VBICOL; ?>,<?php echo $IIICENTRALLUZON; ?> , <?php echo $IICAGAYANVALLEY; ?>, <?php echo $IVACALABARZON; ?>, <?php echo $IILOCOS; ?>, <?php echo $IVBMIMAROPA; ?>, <?php echo $VIWESTERNVISAYAS; ?>, <?php echo $VIICENTRALVISAYAS; ?>, <?php echo $VIIEASTERNVISAYAS; ?>, <?php echo $IXZAMBOANGAPENINSULA; ?>, <?php echo $XNORTHERNMINDANAO; ?>, <?php echo $REGIONXIDAVAOREGION; ?>, <?php echo $CAR; ?>, <?php echo $CARAGA; ?>, <?php echo $BARMM; ?>]
            }


          ]

        }
			var config ={
		  type: 'areaChart',
		  areaChartData,
		options: {


			  scales: {
				  y: {
					  beginAtZero: true,
					  ticks: {
						  stepSize: 5000
					  }
				  }
			  }
		  }
	  };

        var areaChartOptions = {

          //Boolean - If we should show the scale at all
          showScale               : true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines      : false,
          //String - Colour of the grid lines
          scaleGridLineColor      : 'rgba(0,0,0,.05)',
          //Number - Width of the grid lines
          scaleGridLineWidth      : 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines  : true,
          //Boolean - Whether the line is curved between points
          bezierCurve             : false,
          //Number - Tension of the bezier curve between points
          bezierCurveTension      : 0.3,
          //Boolean - Whether to show a dot for each point
          pointDot                : true,
          //Number - Radius of each point dot in pixels
          pointDotRadius          : 4,
          //Number - Pixel width of point dot stroke
          pointDotStrokeWidth     : 1,
          //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          pointHitDetectionRadius : 20,
          //Boolean - Whether to show a stroke for datasets
          datasetStroke           : true,
          //Number - Pixel width of dataset stroke
          datasetStrokeWidth      : 2,
          //Boolean - Whether to fill the dataset with a color
          datasetFill             : false,
          //String - A legend template
          legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
          //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio     : true,
          //Boolean - whether to make the chart responsive to window resizing
          responsive              : true


        }


        //Create the line chart
        areaChart.Line(areaChartData, areaChartOptions)

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
        var lineChart                = new Chart(lineChartCanvas)
        var lineChartOptions         = areaChartOptions
        lineChartOptions.datasetFill = false
        lineChart.Line(areaChartData, lineChartOptions)


      })
    </script>

    <!-- /.content -->
  </div>
  </body>
  <html lang="en" dir="ltr">


  <!-- /.content-wrapper -->
  <?php



 ?>
