<?php
include_once("config.php");


 $id=$_GET['id'];

$statement="DELETE FROM appointments WHERE id=:id";
$deleteAppointment= $conn->prepare($statement);

$deleteAppointment-> bindParam(':id', $id);
$deleteAppointment-> execute();





include_once("config.php");


 $id=$_GET['id'];

$statement="DELETE FROM  messages WHERE id=:id";
$deleteMessages= $conn->prepare($statement);

$deleteMessages-> bindParam(':id', $id);
$deleteMessages-> execute();

      header ("Location: dashboard.php");


      ?>