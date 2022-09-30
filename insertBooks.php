<!DOCTYPE HTML>
<html>
    <?php
    session_start();
    ?>

<link rel="stylesheet" href="style.css">
<body bgcolor="white">

      <p>Hello<?php echo $_SESSION['users']; ?><p>
    <center><h2>Welcome back to Zee-Library!!!</h2></center>
    <br>
 
    <?php
        include("DBConnectionL.php");
        
        $ID=$_POST["ID"];
        $Name= $_POST["Name"]
        $Author=$_POST["Author"];
        $Genre=$_POST["Genre"];
        $Age_group=$_POST["Age_group"];
        $Year= $_POST["Year"];
 
        $query = "insert into book_info(ID,Name,Author,Genre, Age_Group, Year) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
        $result = mysqli_query($db,$query);
    ?>
 