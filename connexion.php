<?php
if (isset($_POST['entrer'])) {
    $user=$_POST['user'];
    $pass=$_POST['passwd'];
    if(($file= @fopen('./user.csv','r+'))){
    $login=0;
    while (!feof($file)) {
        $ligne = fgets($file,255);
        $tab = explode(';',$ligne);
            if($tab[0]==$user && $tab[1]==$pass) 
            {
                echo "Bienvenu $user";
                $login=1;
            }
        }
        fclose($file);
        if(!$login) echo "Nom utilisateur ou mot de passe incorrect<a href='index.html'> Réessayez</a>";
        }else {echo "Fichier des users non existant <a href='index.html'> Réessayez</a>";}
    }
?>