<?php
include('db_connect.php');
date_default_timezone_set('Europe/Amsterdam');
$datum = date("Y/m/d");


$query=$conn->prepare('SELECT * FROM tblplanningantwoord');
$query->execute();
$result=$query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as &$data){
    $TijdstipGecontacteerd = $data['fldTijdstipGecontacteerd'];
    $ReminderTijdstip = date('Y-m-d', strtotime($TijdstipGecontacteerd. ' + 4 days'));
    
    $datetime1 = new DateTime($datum);
    $datetime2 = new DateTime($ReminderTijdstip);
    $interval = $datetime1->diff($datetime2);
    $DateDifference = $interval->format('%a');
    echo $DateDifference;

    if ($DateDifference = 0) {
        
    }
}

?>