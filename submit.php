<?php
session_start();
include "db_connect.php";

$objectid = $_SESSION['objectid'];
$dienstid= $_SESSION['dienstid'];
$datum = $_SESSION['datum'];
$tijd = $_SESSION['tijd'];
$opmerking = $_GET['comment'];


$sql = "INSERT INTO tblplanningantwoord(fldObjectID, fldDienstID, fldDatum, fldTijd, fldOpmerking) VALUES (?,?,?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$objectid, $dienstid, $datum, $tijd, $opmerking]);
header("Location: confirmed.php");
?>
