<?php
include_once("config.php");

$name=$_POST["name"];
$surname=$_POST["surname"];
$date=$_POST["appointment_date"];
$time=$_POST["appointment_time"];
$service=$_POST["service"];





$sql = "INSERT INTO appointments (   name , surname , appointment_date , appointment_time , service  ) VALUES (  :name , :surname , :appointment_date , :appointment_time , :service  )";


$statement = $conn ->prepare ($sql);

$statement->execute([
    ":name" => $name,
    ":surname" => $surname,
    ":appointment_date" => $date,
    ":appointment_time" => $time,
    ":service" => $service


    
]);

header("Location:book.php?id=");
exit;

?>