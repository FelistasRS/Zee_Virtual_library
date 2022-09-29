<!DOCTYPE HTML>
<html>
    
<?php 
require "SignUpClass.php";
?>


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <title> African Hotels</title>
    <link rel="stylesheet" href="style.css">

<body bgcolor="white">
    <center><h2>Join the Zee-Fam and create an account!!</h2></center>

    <center><h3> sign-up below<h3></center>
    <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
    <div class="text">
        <div class= "background">
    <form action="echo.php" method="post">
 
        <table border="2" align="center" cellpadding="5" margin= "5" cellspacing="5">
            
            <tr>
           
            <td> <input type="text" placeholder= "Enter Your name" name="name" size="48" required> </td>
            </tr>
            <tr>
            
            <td> <input type="text" placeholder= "Enter Last Name" name="lastname" size="48" required> </td>
            </tr>
            <tr>
           
            <td> <input type="text" name="email" placeholder= "Enter your e-mail" size="48" required> </td>
            </tr>
            <tr>

            <td> <input type="text" name="password" placeholder= "Create password" size="48" required> </td>
            </tr>
            <tr>
           
            <td></td>
            <td>

            <p><?php
          echo @$user ->error
         ?></p>
        <p><?php
          echo @$user ->success
         ?></p>

            <input type="submit" value="submit">
            <input type="reset" value="Reset">
            </td>
            </tr>
        </table>

</div>
</div>
    </form>
    <p>Already have an account? <a href="index.php">Sign in!!</a></p><br><br>

</body>
</html>