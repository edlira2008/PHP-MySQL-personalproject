<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Book now!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
 <nav class="navbar">

     <img id="logo" src="images/logo.png"> 
    

    <div class="nav-rights">
        <div class="nav-links">
            <a id="home" href="index.php">Home </a>
            <a href="gallery.php"> Gallery  </a>
            <a href="contact.php"> Contact </a>
          <a id="book1"  href="book.php"> Book now   </a> 

        </div>

    </div>
    </nav>

    <div class="appointment" >

     <div class="text">


   <h1 id="gallery" > Book Your Appointment </h1>
   <p id="p1"> Choose a date, time and service. We'll take care of the rest! </p>
    </div>

<form action="save_appointments.php" method="POST">

    <div class="form22" >

    <label id="full"> Full name </label> 
    <input id="name"  name="name"> 

    <label id="surname1" > Surname </label> 
    <input id="surname" type="surname" name="surname">

  <label id="date" name="date"> Date  </label><br>
    <input id="date" type="date" name="appointment_date" required> 

 <label id="time" name="time" > Time </label><br>
    <input id="time" type="time" name="appointment_time" required> 


    <!-- <div id="options"> -->
    <label id="service" name="service"> Service </label><br>

<select name="service"> 
        <br>
        <option value="Gel polish"> Gel polish</option>
        <option value="Gel nails">Gel nails</option>
        <option value="French tips"> French tips  </option>
        <option value="Chrome"> Chrome</option>
        <option value="Cateye "> Cat eye</option>
        <option value="Ombre">Ombre </option>
        <option value="Solid color"> Solid color </option>
        <option value="Full design">Full design</option>
        <option value="Minimal design"> Minimal design </option>

</select><br>









   


<button id="ms1" > Book now </button> 

</div>
</div>

</form>





</body>
</html>