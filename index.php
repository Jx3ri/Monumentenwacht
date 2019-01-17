<?php
if (isset($_GET['id'])){
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,latin-ext">
</head>
<body>
<div class="center">
<!-- Het logo -->
    <div class="logo-container">
        <img class='logo' src="Monumentenwacht_NB_icon_DEF_transparant.png" alt="Logo monumentenwacht">
    </div>
    
    <div class="info-container">
<?php
date_default_timezone_set('Europe/Amsterdam');
$hour = date('H', time());
    
    $hour = date("H");
    
    if ($hour < "12") {
        echo "<h1>Goedemorgen!</h1>";
    } else
    
    if ($hour >= "12" && $time < "17") {
        echo "<h1>Prettige namiddag!</h1>";
    } else
    
    if ($hour >= "17" && $time >= "19") {
        echo "<h1>Goedenavond!</h1>";
    }
    echo "<h1>Is het OK dat wij op inspectie komen op  om " . $hour . " uur?</h1>";
?>
    </div>

    <div class="btn-container">
        <a href="#" class="btn btn-5">Ja</a>
        <a href="#" class="btn btn-5">Nee</a>
    </div>
</div>

</body>
</html>
