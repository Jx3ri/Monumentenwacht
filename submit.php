<?php
session_start();
include "db_connect.php";

$objectid = $_SESSION['objectid'];
$dienstid= $_SESSION['dienstid'];
$datum = $_SESSION['datum'];
$tijd = $_SESSION['tijd'];
$opmerking = $_POST['comment'];


$sql = "UPDATE tblplanningantwoord SET fldPlanningStatusID=3,fldOpmerking='$opmerking',fldGeantwoord=1 WHERE fldPlanningAntwoordID=".$_SESSION['planningid'];
$stmt= $conn->prepare($sql);
$stmt->execute();
header("Location: confirmed.php");
?>
