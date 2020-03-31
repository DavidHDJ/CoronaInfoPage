<?php
$geheilt = [0,34,52,64,81,114,118,129];
$tode =  [0];
$krank = [2,2,4,4,4,7,12,14,19,24,33,37,62,76,95,140,153,161,170,183,205,223,238,256,259,285,304];

$heute = strtotime("31.03.2020, 17:00");
?>

<html>
<head>
  <title>Coronainfomationssseite Dortmund (inoffiziell)</title>
  <script async src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <link media="all" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <link media="all" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body align="center">
  <nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Coronainfomationen Stadt Dortmund</span>
</nav>
<div class="card">
  <div class="card-body" align="center">
    Diese Seite dient als Infomationsseite für die aktuelle Lage in der Stadt Dortmund. Alle Quellen sind direkt von der Stadt Dormund. Dies is jedoch keine offizielle Seite. Die Stadt Dortmund gibt nur einmal pro Tag neue Zahlen, deshalb nicht wundern wenn die Zahlen noch von gestern sind.
  </div>
</div>
<div class="card">
  <div class="card-body" id="">
    <canvas id="canvas" width="500" height="400"></canvas>
    <p align="center">
      Zuletzt aktuallisiert: <?php echo date("d.m.Y, H:i", $heute);?> Uhr
    </p>
  </div>
</div>
<div class="card">
  <h5 class="card-title" align="center">Grafik Infomationen:</h5>
  <div class="card-body">
    <img width="500" src="https://pbs.twimg.com/media/ETuuV1gXkAA7O2b?format=jpg&name=4096x4096"/>
    <img width="500" src="https://pbs.twimg.com/media/ET8teRtWsAAyfvs?format=jpg&name=4096x4096"/>
    <img width="500" src="https://pbs.twimg.com/media/EUG_7MrWoAAse4T?format=jpg&name=4096x4096"/>
  </div>
</div>
<div class="card">
  <h5 class="card-title" align="center">Infomationen der Polizei Dortmund </h5>
  <div class="card-body" align="center">
    <p>In verschiedenen Sprachen:</p>
    <a target="_blank" href="https://dortmund.polizei.nrw/sites/default/files/2020-03/Handzettel%20Deutsch.pdf">Deutsch</a>
    <a target="_blank" href="https://dortmund.polizei.nrw/sites/default/files/2020-03/Handzettel%20Englisch.pdf">Englisch</a>
    <a target="_blank" href="http://dortmund.polizei.nrw/sites/default/files/2020-03/Handzettel%20Polnisch.pdf">Polnisch</a>
    <a target="_blank" href="http://dortmund.polizei.nrw/sites/default/files/2020-03/Handzettel%20Russisch.pdf">Russisch</a>
    <a target="_blank" href="http://dortmund.polizei.nrw/sites/default/files/2020-03/Handzettel%20Italienisch.pdf">Itanlienisch</a>
    <a target="_blank" href="http://dortmund.polizei.nrw/sites/default/files/2020-03/Handzettel%20Spanisch.pdf">Spanisch</a>
    <a target="_blank" href="http://dortmund.polizei.nrw/sites/default/files/2020-03/Handzettel%20Franz%C3%B6sisch.pdf">Französisch</a>
  </div>
</div>

<div class="card">
  <h5 class="card-title" align="center">News:</h5>
  <div class="card-body">
    <blockquote class="twitter-tweet"><p lang="de" dir="ltr">OB Sierau macht noch einmal deutlich, dass alle städtischen Veranstaltung bis Pfingsten abgesagt sind. Ein genaues Datum erarbeitet die Stadt mit Blick auf die Lage Corona.</p>&mdash; Stadt Dortmund (@stadtdortmund) <a target="_blank" href="https://twitter.com/stadtdortmund/status/1244929158171557888?ref_src=twsrc%5Etfw">March 31, 2020</a></blockquote>

    <blockquote class="twitter-tweet"><p lang="de" dir="ltr">+++ Vorsicht Betrug! Bitte RT! +++<br><br>Kriminelle nutzen die Angst vor dem <a target="_blank" href="https://twitter.com/hashtag/Corona?src=hash&amp;ref_src=twsrc%5Etfw">#Corona</a> Virus aus. Personen klingeln an der Haustür, um kostenpflichtige <a target="_blank" href="https://twitter.com/hashtag/Corona?src=hash&amp;ref_src=twsrc%5Etfw">#Corona</a>-Tests durchzuführen.<br><br>Fakt ist: Es werden keine unangekündigten Corona-Tests an der Haustür gemacht.<a target="_blank" href="https://t.co/7l9t1RrP1U">https://t.co/7l9t1RrP1U</a> <a target="_blank" href="https://t.co/0NHPkZs1Fn">pic.twitter.com/0NHPkZs1Fn</a></p>&mdash; Polizei NRW DO (@polizei_nrw_do) <a target="_blank" href="https://twitter.com/polizei_nrw_do/status/1244897264616779776?ref_src=twsrc%5Etfw">March 31, 2020</a></blockquote>

    <blockquote class="twitter-tweet"><p lang="de" dir="ltr"><a target="_blank" href="https://twitter.com/hashtag/CoronaDO?src=hash&amp;ref_src=twsrc%5Etfw">#CoronaDO</a>: Positiv Getestete werden so schnell wie möglich telefonisch vom Gesundheitsamt informiert. Bei einem negativen Testergebnis informieren die beauftragten Testlabore. Darauf hat das Gesundheitsamt keinen Einfluss.</p>&mdash; Stadt Dortmund (@stadtdortmund) <a target="_blank" href="https://twitter.com/stadtdortmund/status/1244654723531235328?ref_src=twsrc%5Etfw">March 30, 2020</a></blockquote>


  </div>
</div>





<div class="card">
  <h5 class="card-title" align="center">Quellen:</h5>
  <div class="card-body" align="center">
    <a target="_blank" href="https://dhsh.tk/coronavirus">Allgemeine Coronainfomationen</a>
    <a target="_blank" href="https://twitter.com/stadtdortmund">Twitter - Stadt Dortmund</a>
    <a target="_blank" href="https://twitter.com/landnrw">Twitter - Staatskanzlei NRW</a>
    <a target="_blank" href="https://dortmund.polizei.nrw">Webseite - Polizei Dortmund</a>
    <a target="_blank" href="https://dortmund.de">Webseite - Stadt Dortmund</a>
    <a target="_blank" href="https://www.dortmund.de/de/leben_in_dortmund/nachrichtenportal/alle_nachrichten/nachricht.jsp?nid=622746">Quelle - Stadt Dortmund</a>
  </div>
</div>
<div class="card">
  <h5 class="card-title" align="center">Kontakt:</h5>
  <div class="card-body" align="center">
    <a target="_blank" href="impressum.php">Impressum</a>
    <a target="_blank" href="Datenschutz.php">Datenschutz</a>
  </div>
</div>


<style>

.card{
  margin: auto;
  margin-top: 5px;
  margin-bottom: 5px;
  width:540px;
}
@media (max-width: 576px){
  .card{
    width:100%;
  }
  img{
    width:100%;
  }
}
</style>
<?php
$tag = "";
$krankanz = "";
$geheiltanz = "";
$todeanz = "";
$nochkrank = "";

$ct = 0;
$ch = 0;

$tag = "'".date("d.m", strtotime("-".(count($krank) - 1)." days", $heute))."'";
$krankanz = "'".$krank[0]."'";
$geheiltanz = "'0'";
$todeanz = "'0'";
$nochkrank .= "'".$krank[0]."'";

for($i = 1;count($krank) > $i;$i++){
  $d = count($krank) - $i;
  $tagis = date("d.m", strtotime("-".($d  - 1)." days", $heute));
  $tag .= ",'".$tagis."'";

  $krankanz .= ",'".$krank[$i]."'";
  if((count($krank) - count($geheilt)) > $i){
    $geheiltanz .= ",'0'";
    $nochkrank .= ",'".$krank[$i]."'";
  }else{
    $geheiltanz .= ",'".$geheilt[$ch]."'";
    $nochkrank .= ",'".($krank[$i] - $geheilt[$ch])."'";
    $ch++;
  }
  if((count($krank) - count($tode)) > $i){
    $todeanz .= ",'0'";
  }else{
    $todeanz .= ",'".$tode[$ct]."'";
    $ct++;
  }

}
?>
  <script>
  var config = {
  type: 'line',
  data: {
  labels: [<?php echo $tag;?>],
  datasets: [{
  label: 'Infiziert',
  backgroundColor: "#fe0404",
  borderColor: "#fe0404",
  data: [
              <?php echo $krankanz;?>
  ],
  fill: false,
  }, {
  label: 'Geheilt',
  fill: false,
  backgroundColor: "#2abb12",
  borderColor: "#2abb12",
  data: [
              <?php echo $geheiltanz;?>
  ],
  }, {
  label: 'Tote',
  fill: false,
  backgroundColor: "#000000",
  borderColor: "#000000",
  data: [
              <?php echo $todeanz;?>
  ],
  }, {
  label: 'Erkrankte',
  fill: false,
  backgroundColor: "#2649ff",
  borderColor: "#2649ff",
  data: [
              <?php echo $nochkrank;?>
  ],
  }]
  },
  options: {
  responsive: false,
  title: {
  display: true,
  text: 'Coronastatistik'
  },
  tooltips: {
  mode: 'index',
  intersect: false,
  },
  hover: {
  mode: 'nearest',
  intersect: true
  },
  scales: {
  xAxes: [{
  display: true,
  scaleLabel: {
  display: true,
  labelString: 'Month'
  }
  }],
  yAxes: [{
  display: true,
  scaleLabel: {
  display: true,
  labelString: 'Value'
  }
  }]
  }
  }
  };

  window.onload = function() {
  var ctx = document.getElementById('canvas').getContext('2d');
        if(screen.width > 500){
          document.getElementById('canvas').style.width = 500;
        }else{
          document.getElementById('canvas').style.width = screen.width -40;
        }
  window.myLine = new Chart(ctx, config);
  };


  </script>
</body>
</html>
