<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<body>
        
    <div class="container">
        <div style="text-align:center">
            <h2> <font color="white"> Contact Us </font></h2>
        </div>

        <div class="row">
            <div class="container1">
            <div class="column">
            <img src="Asset/galery/6.jpg" style="width:100%">
            <div class="footer">&copy; Copyright Achmad Bany Majesty</div>
        </div>
        <div class="column">
            <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="country">Country</label>

                <select id="country" name="country">
                    <option value="indonesia">Indonesia</option>
                    <option value="palestina">Palestina</option>
                    <option value="turki">Turki</option>
                </select>

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>