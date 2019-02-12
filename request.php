<?php
session_start();
include "db_connect.php";


$a = $_SESSION['ID'];
$b = $_POST['KamerID'];
$c = $_POST['from'];
$d = $_POST['to'];

$van=date_create($c);
$vanb=date_format($van,"Y-m-d");

$tot=date_create($d);
$totb=date_format($tot,"Y-m-d");

$data = [
    'persid' => $_SESSION['ID'],
    'kamerid' => $b,
];


$sql = "INSERT INTO tblboekingen (fldPersonenID, fldKamerID, fldStartDatum, fldEindDatum) VALUES (:persid, :kamerid, '$vanb', '$totb')";
$stmt= $conn->prepare($sql);
$stmt->execute($data);
header("location:\hotel\index.php");

?>  