<?php
$conn=mysqli_connect('localhost','root','','gestioncontact') or die(mysqli_error())
$NOM=$_POST['nom'];
$EMAIL=$_POST['email'];
$MESSAGE=$_POST['message'];
$req="INSERT INTO contact (nom,email,message) values ('$nom','$email','$message')";
$res=mysqli_query($conn,$req);

/>