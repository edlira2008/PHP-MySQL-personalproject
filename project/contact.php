<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact </title>
    <link rel="stylesheet" href="./style.css">
   
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

    <div id="pjs1"> 
<h1 id="contact" > Contact Us </h1>
<p id="touch"> Get in touch with us!  </p>  
</div>

<div id="info">
    <div class="tdhana">

<div id="info1">
    
    <h4> Location </h4>
    <span id="span0"> 📌 Obiliq , Kosova </span>
</div>

<div id="info2">

    <h4> Phone </h4>
    <span id="span0"> 📞 +38345839577 </span>
</div>


<div id="info3">
   
 <h4> Instagram </h4>
    <span id="span0"> 🔗 @nailssbylili </span>



</div>

</div>

</div>

<form action="send_message.php" method="POST" class="form1">
    <input id="name1" type="name" name="name" placeholder="Name" autocomplete="on"><br>
    <input id="email" type="email" name="email" placeholder="Email" autocomplete="off" ><br>

    <textarea id="text" name="message" placeholder="Message" required> </textarea>

    <button id="ms" type="submit"> Send message </button>

</form>
    


</body>
</html>