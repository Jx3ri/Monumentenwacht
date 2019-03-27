<?php
session_start();
 if (isset($_GET['OI']) && isset($_GET['DI']) && isset($_GET['DT'])){
        $_SESSION['objectid'] = $_GET['OI'];
        $_SESSION['dienstid'] = $_GET['DI'];
        $_SESSION['monumentlocatie'] = $_GET['LC'];
        $DatumTijd = $_GET['DT'];
        $DatumTijdArray = explode ("_", $DatumTijd);
        $_SESSION['datum'] = $DatumTijdArray[0];
        $_SESSION['tijd'] = $DatumTijdArray[1];
        header('Location: '.$_SERVER['PHP_SELF']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afspraak maken | Noord-Brabant</title>
    <link rel="stylesheet" href="CSS\style.css">
    <link rel="stylesheet" href="CSS\formstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,latin-ext">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="JS/main.js"></script>
    <script src="JS/datepicker.js"></script>
    <script src="JS/timepicker.js"></script>
</head>
<body>

<div class="center-container">
<div class="center cover">
<!-- Het logo -->
<div class="logo-container"><a href="https://mwnb.nl/"><img class='logo' src="Images\Monumentenwacht_NB_logo_DEF-400x250.png" alt="Logo monumentenwacht"></a></div>

<div class="time-container">
<?php /*

date_default_timezone_set('Europe/Amsterdam');
$hour = date('H', time());

    $hour = date("H");
    $datum = date("Y/m/d");
    $tijd = date("m");

    if ($hour < "12") {
        echo "<h1>Goedemorgen,</h1>";
    } else

    if ($hour >= "12" && $hour < "17") {
        echo "<h1>Prettige namiddag,</h1>";
    } else

    if ($hour >= "17" && $hour >= "19") {
        echo "<h1>Goedenavond,</h1>";
    }
  */  
?>

<?php
echo "<h1>De inspectie van uw monument te <span style='text-decoration:underline;text-decoration-color:#DDCCAA'>".$_SESSION['monumentlocatie']."</span> inplannen op  <span style='text-decoration:underline;text-decoration-color:#DDCCAA'>".$_SESSION['datum']."</span> om <span style='text-decoration:underline;text-decoration-color:#DDCCAA'>". $_SESSION['tijd'] ."</span></h1>";
?>

<form method="POST" action="submit.php" name="comment-form" id="comment-form">
    <textarea name="comment" id="comment" placeholder="Laat eventueel nog een opmerking achter..."></textarea>
    <div class="button-container">
        <a href="#" class="btn btn-5" onclick="document.getElementById('comment-form').submit()">Bevestigen</a>
        <!--<a href="#" class="btn btn-5" onclick="ConfirmOn()">Ja</a>
         <a href="#" class="btn btn-5" onclick="VoorstelOn()">Nee</a> -->
    </div>
<form>

<!-- <div id="overlay1">
    <div id="overlay-container">
        <i class="fas fa-times popup-close" onclick="ConfirmOff()"></i>
        <a href="https://mwnb.nl/"><img class='logo' src="Images\Monumentenwacht_NB_logo_DEF-400x250.png" alt="Logo monumentenwacht"></a>

        <div class="time-container confirm-container">
            <span class='confirm-text'>Laat een opmerking achter over uw monument</span>
        </div>

        <form action="submit.php" method="post" id="comment-form">
            <textarea name="comment" id="comment" placeholder="Opmerking.."></textarea>
            <div class="button-container">
                <a class="btn btn-form btn-5" onclick="document.getElementById('comment-form').submit()">Bevestigen</a>
            </div>
        </form>

    </div>
</div> -->

<!--   <div id="overlay2">
      <div id="overlay-container">
          <i class="fas fa-times popup-close" onclick="VoorstelOff()"></i>
          <a href="https://mwnb.nl/"><img class='logo' src="Images\Monumentenwacht_NB_logo_DEF-400x250.png" alt="Logo monumentenwacht"></a>

          <div class="time-container confirm-container">
              <span class='confirm-text'>Laat ons weten welke datum u dan wel uitkomt.</span>
          </div>

          <form action="request.php" method="post" id="request-form">
              <textarea name="request" id="request" placeholder="Opmerking.."></textarea>
              <div class="button-container">
                  <a class="btn btn-form btn-5" onclick="document.getElementById('request-form').submit()">Voorstellen</a>
              </div>
          </form>
      </div>
  </div> -->
  
  
</div>

</div>

</body>
</html>
