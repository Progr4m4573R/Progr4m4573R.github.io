<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Contact Us</title> <!--head contains meta data or the website-->
        
        <div class = "container">
            <img src ="ASSETS\eye_background.jpg" alt="eye_background image" width="100%" height="200">   
            <div class ="menubar">
                <ul>
                    <li><a href ="home.php">Home Page</a></li>
                    <li><a href ="Staff.html">Staff page</a></li>
                    <li><a href ="aboutus.html">About Us</a></li>
                    <li><a class="active" href ="index.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <script src="JS/myScript.js"></script>
        <link rel="stylesheet" href="CSS\styles.css">
    
    </head>
    <body><!--Container for a ll visible content-->

        <h1 style="text-align: center;">Get in Touch</h1>
        <div style= "text-align: center; position: relative;">
            <div style="position:relative; top: 88px; right: 25%;"><p>ADDRESS<br>VISUS PERFECTUS (VP) EYE CLINIC, AKOBO, IB.</p></div>
            <div style="position:relative; top: 28px;"><p>PHONE<br>+234 8075010723</p></div>
            <div style="position:relative; bottom: 25px; left: 25%;"><p>EMAIL<br>visusperfectus@gmail.com</p></div>
        </div>

        <hr>

        <div style="position:absolute; background-color: aquamarine; width: 100%; height: 31%;">
            <h3 style="position: relative; top:-28px;left:615px; font-size: 80px;">Request a Consultation</h3>
            <p style="position: relative; margin-left: 30px; top: -23%; left:585px; width: 823px; font-size: 40px;">Are you in need of an accessible, affordable and quality eye care service within ibadan? Then Visus perfectus specialist eye clinic is your answer.</p>
            
            <form class="" style=" position:absolute; right: 19%; top:32%;" action="send.php" method="post">
                <label style = "position: absolute; top: -37%; left:-174px;" for="fname">First name:</label><br>
                <input style = "position: absolute; top: -26%; left:-174px;" type="text" id="fname" name="fname" value="John"><br>
                <label style = "position: absolute; top: -37%; right:-83px ;" for="lname">Last name:</label><br>
                <input style = "position: absolute; top: -26%; right: -181px; " type="text" id="lname" name="lname" value="Doe"><br>
                <label style = "position:absolute; top:-12%; right:132px;" for   = "email">Email:</label><br>
                <input style = "position:absolute;top:-1%; width: 353px; right:-184px" type="email" id="email" name="email" value="shiift13@gmail.com"></input><br><!--Email adderss you want to send the mail to-->
                <label style = "position:absolute; top: 14%; right:-24px; width: 200px; " for   = "message"> Short description of problem:</label><br>
                <input style = "position:absolute; top:25%; width: 356px; height: 98px; right:-188px;" type="text" id="message" name="message" value="Please briefly decribe the problem"><br/><br/>
                <input style = "position: absolute; right: -28px; top:155px;" type="submit" name = "send" value="Submit">
            </form>
        </div>
 
        <img style=" position:relative; bottom: -420px;" src ="ASSETS\eye_background.jpg" alt="eye_background image" width="100%" height="400">   <!--Replace image with google map location of business-->
        
        <hr>
        <div>
            <img src="ASSETS/facebook_icon.png" alt="facebook" style="position:absolute; bottom: 3%; right: 2%; width: 50px;">
            <a class= "socialmedia_facebook" href = "https://www.facebook.com/visus.perfectus?mibextid=ZbWKwL">Link to facebook</a>
        </div>
        <div>
            <img src="ASSETS/twitter_icon.png" alt="twitter" style="position:absolute; bottom: 2.5%; right: 7%; width:60px;">
            <a class= "socialmedia_twitter" href = "https://twitter.com/visusperfectus?t=J3UoB0t1eF9nAgS9Xnu8nQ&s=09">Link to twitter</a> 
        </div>
    </body>
</html>