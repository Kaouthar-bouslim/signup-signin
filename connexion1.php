<?php
$conn=mysqli_connect("localhost","root","") or die (mysqli_connect_error());
mysqli_select_db($conn,"users") or die (mysqli_error($conn));

if (isset($_POST['entrer'])) {
    $user=$_POST['user'];
    $pass=$_POST['passwd'];

$a="cnx1.html";
$b="signup1.html";

$req="SELECT * from user WHERE nom='$user' and passwrd='$pass'";
$stmt = mysqli_stmt_init($conn);
$result = mysqli_query($conn, $req);  

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
       
    if($count != 0){  
       header("location:bienvenu.php?nom=$user");  

}
    else{
        echo "<h1>Cet utilisateur n'existe pas <h1><br>";
        echo "<a href='$a' >Retour en arriere <br></a>  ";
        echo "<a href='$b' >Sign up <br></a>  ";

    }
}

?>