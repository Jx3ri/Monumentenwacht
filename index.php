<?php
 if (isset($_GET['id']) && isset($_GET['datum']) && isset($_GET['tijd'])){
    $datum = $_GET['datum'];
    $tijd = $_GET['tijd'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afspraak maken | Noord-Brabant </title>
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
<?php
 
date_default_timezone_set('Europe/Amsterdam');
$hour = date('H', time());
    
    $hour = date("H");
    $datum = date("Y/m/d");
    $tijd = date("m");

    if ($hour < "12") {
        echo "<h1>Goedemorgen</h1>";
    } else
    
    if ($hour >= "12" && $hour < "17") {
        echo "<h1>Prettige namiddag</h1>";
    } else
    
    if ($hour >= "17" && $hour >= "19") {
        echo "<h1>Goedenavond</h1>";
    }
    echo "<h1>Wilt u een afspraak maken met de Monumentenwacht op <span class='red'>".$datum."</span> om <span class='red'>".$tijd."</span> uur?</h1>";
?>

</div>
    <div class="button-container">
        <a href="#" class="btn btn-5" onclick="ConfirmOn()">Ja</a>
        <a href="#" class="btn btn-5" onclick="VoorstelOn()">Nee</a>
    </div>
</div>

<div id="overlay1">
    <div id="overlay-container">
        <i class="fas fa-times popup-close" onclick="ConfirmOff()"></i>
        <a href="https://mwnb.nl/"><img class='logo' src="Images\Monumentenwacht_NB_logo_DEF-400x250.png" alt="Logo monumentenwacht"></a>
        
        <div class="time-container confirm-container">
            <span class='confirm-text'>Laat een opmerking achter over uw monument</span>
        </div>

        <form action="#sent.php" method="post" id="comment-form">
            <textarea name="comment" id="comment" placeholder="Opmerking.."></textarea>
            <div class="button-container">
                <a class="btn btn-form btn-5">Bevestigen</a>
            </div>
        </form>

    </div>
</div>

<div id="overlay2">
    <div id="overlay-container">
        <i class="fas fa-times popup-close" onclick="VoorstelOff()"></i>
        <a href="https://mwnb.nl/"><img class='logo' src="Images\Monumentenwacht_NB_logo_DEF-400x250.png" alt="Logo monumentenwacht"></a>
         
        <div class="time-container confirm-container">
            <span class='confirm-text'>Laat ons weten welke datum u dan wel uitkomt.</span>
        </div>

        <form action="#sent.php" method="post" id="comment-form">
            <!-- Textbox cannot be empty -->
            <textarea name="comment" id="comment" placeholder="Opmerking.."></textarea>
            <div class="button-container">
                <a class="btn btn-form btn-5">Voorstellen</a>
            </div>
        </form>
    </div>
        
    </div>
</div>

</div>

</body>
</html>
