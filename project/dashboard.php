<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Dashboard | Nails by lili </title>
</head>
<body>
 <aside class="aside">

    <nav class="sidebar">

 <div id="link">
    <img id="logo33" src="images/logo.png" > 
      <p id="sidebar1"> Dashboard </p>
      <a href="book.php" id="sidebar1"> Appointments</a>
      <a href="contact.php" id="sidebar1"> Messages  </a>
      <a href="index.php" id="sidebar1"> Back to website  </a>

</div>

</nav>

  <div id="footer">

    <div id="pjs22">

    <h1 id="db1"> MY DASHBOARD </h1>
    <p id="welcome" > Welcome back! </p>
 

    <div id="tabela1" >
        
    <h4 id="recent" > Recent appointments </h4>
    <table id="table-card"> 
        <tr> 
            <th> id </th>
            <th> Name </th>
            <th> Surname </th>
            <th> Service </th>
            <th> Date </th>
            <th> Time </th>
             <th> Action </th>
        
        </tr>

    </div>
</div>
</div>
    

        <?php

  include_once("config.php");



    $sql= "SELECT *  FROM appointments";
    $getAppointments=$conn->prepare($sql);
  
    $getAppointments->execute();
    $appointments = $getAppointments->fetchAll();


  foreach ($appointments as $appointment) {
    ?>
  <tr> 
    <td><?= $appointment['id'] ?> </td>
    <td><?= $appointment['name'] ?> </td>
    <td><?= $appointment['surname'] ?> </td>
    <td><?= $appointment['service'] ?> </td>
    <td><?= $appointment['appointment_date'] ?> </td>
    <td><?= $appointment['appointment_time'] ?> </td>
  <td>
    <button id="btn90"> <a id="btn90" href="delete.php?id=<?php echo $appointment['id'] ?>"> delete </a> </button>
            <button id="btn90"> <a id="btn90" href="edit.php?id=<?php echo $appointment['id'] ?>"> edit </a> </button>
</td>
  </td>
</tr>
<?php } ?>
</table>









<div id="tabela2" >
        
    <h4 id="recent1" > Recent messages </h4>
    <table id="table-card"> 
        <tr> 
            <th> id </th>
            <th> Name </th>
            <th> Email </th>
            <th> Message </th>
             <th> Action </th>
        
        </tr>

    </div>

    

        <?php

  include_once("config.php");



    $sql= "SELECT *  FROM messages";
      $getMessages=$conn->prepare($sql);
  
 $getMessages->execute();
  $messages =  $getMessages->fetchAll();


  foreach ($messages as $message) {
    ?>
  <tr> 
    <td><?= $message['id'] ?> </td>
    <td><?= $message['customer_name'] ?> </td>
    <td><?= $message['email'] ?> </td>
    <td><?= $message['message'] ?> </td>
  
  <td>
    <button id="btn90"> <a id="btn90" href="delete.php?id=<?php echo $message['id'] ?>"> delete </a> </button>
            
  </td>
</tr>
<?php } ?>
</table>


</body>
</html>


