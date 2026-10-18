<?php 
include_once("config.php");

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
  

$sql= "INSERT INTO messages ( customer_name, email , message) VALUES (:name, :email , :message)";

$statement = $conn ->prepare($sql);

$statement->execute([
    ":name" => $name,
    ":email" => $email,
    ":message" => $message

]);

echo 'Message sent successfully!';
header ("Location: contact.php?id=");
exit;

?>