<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Contact Us</title> <!--head contains meta data or the website-->
        
        <div class = "container">
            <img src ="ASSETS/eye_background.jpg" alt="eye_background image" width="100%" height="200">   
            <div class ="menubar">
                <ul class="menu_ul">
                    <li><a href ="home.html">Home Page</a></li>
                    <li><a href ="Staff.html">Staff page</a></li>
                    <li><a href ="aboutus.html">About Us</a></li>
                    <li><a class="active" href ="contactus.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <script src="JS/myScript.js"></script>
        <link rel="stylesheet" href="CSS/styles.css">
    
    </head>
    <body><!--Container for a ll visible content-->

        <h1 style="text-align: center;">Get in Touch</h1>
        <div style= "text-align: center; position: relative;">
            <div style="position:relative; top: 88px; right: 25%;">
                <img src="ASSETS/location_icon.png" alt="facebook" style="position:absolute; bottom: 110%; left: 49%; width: 50px;">
                <p>ADDRESS<br>VISUS PERFECTUS EYE CLINIC, AKOBO, IB. <br>(Comfort Pharmacy Building)</p>
                
            </div>
            <div style="position:relative; top: 28px;">
                <img src="ASSETS/phone_icon.png" alt="facebook" style="position:absolute; bottom: 110%; right: 49%; width: 50px;">
                <p>PHONE<br>+234 8075010723</p>
            </div>
            <div style="position:relative; bottom: 25px; left: 25%;">
                <img src="ASSETS/mail_icon.png" alt="facebook" style="position:absolute; bottom: 110%; right: 48.5%; width: 50px;">
                <p>EMAIL<br>visusperfectus@gmail.com</p>
            </div>
        </div>

        <hr>

        <div style="position:relative; background-color: aquamarine; width: 2650px; height: 400px;">
            <h3 style="position:absolute; top:-28px;left:615px; font-size: 80px;">Request a Consultation</h3>
            <p style="position: absolute; top: 546px; left:65px; font-size: 30px; width:509px; text-align: center;">Opening hours:
                <br>
                Monday to Friday: 9am to 6pm
                <br>
                Saturday and public holidays: 9am to 1pm
            </p>
            <p style="position: absolute; margin-left: 30px; top: 25%; left:585px; width: 823px; font-size: 40px;">Are you in need of accessible, affordable and quality eye care service within Ibadan? Then Visus Perfectus specialist eye clinic is your answer.</p>
            
            <form class="" style=" position:absolute; right: 1000px; top:124px;" action="send.php" method="post">
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
        </div><!--https://google-map-generator.com/-->
        <hr>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="1080" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=comfort%20pharmacy%20ibadan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
                <a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a>
                <br>
                <style>
                    .mapouter{position:relative;left:700px;text-align:right;height:400px;width:1080px;}
                </style>
                <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                <style>
                    .gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1080px;}
                </style>
            </div>
        </div>

       
        <div>
            <img src="ASSETS/facebook_icon.png" alt="facebook" style="position:fixed; bottom: 25px; right: 35px; width: 50px;">
            <a class= "socialmedia_facebook" href = "https://www.facebook.com/visus.perfectus?mibextid=ZbWKwL">Link to facebook</a>
        </div>
        <div>
            <img src="ASSETS/twitter_icon.png" alt="twitter" style="position:fixed; bottom: 20px; right: 128px; width:60px;">
            <a class= "socialmedia_twitter" href = "https://twitter.com/visusperfectus?t=J3UoB0t1eF9nAgS9Xnu8nQ&s=09">Link to twitter</a> 
        </div>
    </body>
</html>