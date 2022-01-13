<?php
$conn=mysqli_connect("localhost","root","") or die (mysqli_connect_error());
mysqli_select_db($conn,"users") or die (mysqli_error($conn));

$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['passwd'];

$req="INSERT into user(nom,email,passwrd) values ('$user','$email','$pass')";
$rs=mysqli_query($conn,$req) or die (mysqli_error($conn));

if($rs){
    echo "Cet utilisateur est ajouté";
    header("location:bienvenu.php?nom=$user");
}
?> 