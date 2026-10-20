<?php
include_once("config.php");

$name=$_POST["name"];
$surname=$_POST["surname"];

$sql  = "INSERT INTO appointments ( name , email ) VALUES ( :name , :email )";


$statement = $conn ->prepare ($sql);

$statement->execute([
    ":name" => $name,
    ":surname" => $surname

]);

header("Location:book.php?id=");
exit;

?>