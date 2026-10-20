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
 

</div> 




<div id="options">
    <label id="service" name="service"> Service </label><br>

<select> 
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

<label id="date" name="date"> Date  </label><br>

<select> 
     <option  value="1"> Select date </option>

     <option value="1"> 1 </option>
     <option value="1"> 2 </option>
     <option value="1"> 3 </option>
     <option value="1"> 4 </option>
     <option value="1"> 5 </option>
     <option value="1"> 6 </option>
     <option value="1"> 7 </option>
     <option value="1"> 8 </option>
     <option value="1"> 9 </option>
     <option value="1"> 10 </option>
     <option value="1"> 11 </option>
     <option value="1"> 12 </option>
     <option value="1"> 13 </option>
     <option value="1"> 13 </option>
     <option value="1"> 14 </option>
     <option value="1"> 15 </option>
     <option value="1"> 16 </option>
     <option value="1"> 17 </option>
     <option value="1"> 18 </option>
     <option value="1"> 19 </option>
     <option value="1"> 20 </option>
     <option value="1"> 21</option>
     <option value="1"> 22</option>
     <option value="1"> 23</option>
     <option value="1"> 24  </option>
     <option value="1"> 25 </option>
     <option value="1">26 </option>
     <option value="1"> 27 </option>
     <option value="1"> 28</option>
     <option value="1"> 29</option>
     <option value="1"> 30</option>
     <option value="1"> 31 </option>

</select>  <br>

<label id="time" name="time" > Time </label><br>

<select>
    <option value="" > Select time  </option>

    <option value="8:00AM" > 8:00AM </option>
    <option value="10:0AM" > 10:00AM </option>
    <option value="12:00PM" > 12:00PM </option>
    <option value="14:00PM" > 14:00PM </option>
    <option value="17:00PM" > 17:00PM </option>
    <option value="18:30PM" > 18:30PM </option>
    <option value="20:00PM" > 20:00PM </option>

</select> <br>
    
<button id="ms1" > Book now </button> 
</div>

    
      

</div>

</form>





</body>
</html>