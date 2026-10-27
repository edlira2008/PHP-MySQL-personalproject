<?php    
  include_once('config.php');


if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $service=$_POST['service'];
    $appointment_date=$_POST['appointment_date'];
    $appointment_time=$_POST['appointment_time'];
  

    $sql="UPDATE appointments SET name='$name', surname='$surname', service='$service' , appointment_date='$appointment_date' , appointment_time='$appointment_time'  WHERE id=$id";

      $prep=$conn->prepare($sql);
      $prep->execute();
      echo 'new record created succesfully!';

      header ("Location: index.php");

}



?>