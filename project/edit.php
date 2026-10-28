<?php

 include_once("config.php");


 $id = $_GET['id'];

  $sql="SELECT * FROM appointments WHERE id=:id";
  $prep=$conn->prepare($sql);
  $prep->bindParam(":id",$id);
  $prep->execute();


  $appointments=$prep->fetch();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page <?php  echo $appointments['id'] ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <form id="form88" action="update.php" method="post">
  <p id="editadd"> Edit/add </p> 
       <input type="hidden"  name="id" value="<?php echo $appointments['id']?>"><br>
        <input type="text" id="name88" name="name" placeholder="name" value="<?php echo $appointments['name']?>"><br>
        <input type="text" name="surname" id="surname88" placeholder="surname" value="<?php echo $appointments['surname']?>"><br>
        <input  name="service" placeholder="service" id="service88" value="<?php echo $appointments['service']?>"><br>
        <input  name="appointment_date" placeholder="date" id="date88" value="<?php echo $appointments['appointment_date']?>"><br>
        <input  name="appointment_time" placeholder="time" id="time88" value="<?php echo $appointments['appointment_time']?>"><br>


        
        <button id="btn90" type="submit" name="submit" placeholder="submit"> Add </button>

</form>
</body>
</html>