<?php
session_start();
include "db_connect.php";

$objectid = $_SESSION['objectid'];
$diensid= $_SESSION['dienstid'];
$datum = $_SESSION['datum'];


$sql = "INSERT INTO tblplanningantwoord (Objectid, Opmerkingklant, fldPlanningStatusID) VALUES (?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$objectid, $opmerking, $antwoord]);
header("Location: index.php");
?>
