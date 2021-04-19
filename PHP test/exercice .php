<!DOCTYPE html>
<html>
        <head>
            <title>PREMIERS PAS EN PHP</title>

        </head>

        <body> 

    <?php
    
 /* $x = 200;
  $y = 30;

  if($x < $y){
      echo "La variable x est inferieure à y";
  } else {
      echo "La variable x n'est pas inferieure à y";
  }*/

// test conditionnels

 /* $note = 15;
  if($note >15){
      echo "Très bien";
  }elseif($note >12){
      echo "Bien !";
  }elseif($note>8){
      echo "Moyen";
  }else {
      echo "Vous devez faire un effort";
  }*/

// les variables booleens

/*$dossier_selectionne = true;

if(!$dossier_selectionne){

    echo "Nous avons le plaisir de vous convoquer a une audition le .....";
} else {
    echo "Nous avons le regret de vous informer que votre dossier n'a pas été retenu";

}*/

// La boucles while avec incrementation

 $x = 0;
 while($x<=20){
     echo 'La valeur de la variable $x est '.$x. '<br>';//<---concatener
    $x++;
 }

 // La boucle for
 //meme exemple que pour WHILE ecrit differement
//$x=0 c'est l'initialisation, $x<=20 c'est la condition et enfin l'incrementation
 /*for($x=0; $x<=20; $x++){
     echo 'La valeur de la variable $x est ' .$x.'<br>';
 }*/

 /*
                            -- OUI --------------------------------------------------- FOR
Savoir a l'avance         -
le nombre d'execution ---
d'un bloc de code         -          --- Le bloc doit s'executer au moins une fois --- DO...
                            -- NON -                                                   WHILE
                                   -
                                     --- Le bloc d'inscription ne doit s'executer  --- WHILE
                                         que si la condition est verifiee
*/  
    ?>



        </body>
</html>