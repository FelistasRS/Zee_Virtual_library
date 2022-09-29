<!DOCTYPE HTML>
<html>
 


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">


    <center><h2>Welcome back Zee-Librarian!</h2></center>
    <center><h1>Bringing adventures anywhere and everywhere<center><h1>

    <center><h3>sign-in below<h3></center>
    <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
    <div class="text">
        <div class= "background">
    <form action="InsertBooks.php" method="post">
 
        <table border="2" align="center" cellpadding="5" margin= "5" cellspacing="5">
            
            <tr>
           
            <td> <input type="text" placeholder= "Enter Your name" name="name" size="48" required> </td>
            </tr>
            <tr>
            
            <td> <input type="text" placeholder= "Enter Last Name" name="lastname" size="48" required> </td>
            </tr>
            <tr>
           
            <td> <input type="email" placeholder= "Enter email" name="email" size="48" required> </td>
            </tr>
            <tr>
            <td> <input type="text" name="password" placeholder= "Enter your password" size="48" required> </td>
            </tr>
            <tr>
           
            <td></td>
            <td>
            <input type="submit" value="submit">
            <input type="reset" value="Reset">
            </td>
            </tr>
        </table>
</div>
</div>
    </form>
  
    <a class= "SignUp" href="SignUp.php"> No account? Create one </a>
    <br>
    <br>
    <a class= "newbook" href= "fPassword.php"> Forgot Password? </a>
</body>
</html>
