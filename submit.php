<?php
session_start();
include "db_connect.php";

$objectid = 1034;
$opmerking = $_POST['comment'];
$antwoord = 3;


$sql = "INSERT INTO tblplanningantwoord (Objectid, Opmerkingklant, fldPlanningStatusID) VALUES (?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$objectid, $opmerking, $antwoord]);
header("Location: index.php");
?>
