<?php
include('db_connect.php');
date_default_timezone_set('Europe/Amsterdam');
$datum = date("Y/m/d");


$datetime1 = new DateTime($datum);
$datetime2 = new DateTime('2009-10-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%a');

$query=$conn->prepare('SELECT * FROM tblplanningantwoord');
$query->execute();
$result=$query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as &$data){
    $TijdstipGecontacteerd = $data['fldTijdstipGecontacteerd'];
    $ReminderTijdstip = date('Y-m-d', strtotime($TijdstipGecontacteerd. ' + 4 days'));
    echo "<br>";
    echo $TijdstipGecontacteerd;
    echo "<br>";
    echo $ReminderTijdstip;

}


?>