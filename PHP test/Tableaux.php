<!DOCTYPE html>
<html>
        <head>
            <title>PREMIERS PAS EN PHP</title>

        </head>

        <body> 

    <?php
    
    $tab = array("Lundi", "Mardi", "Mercredi", "Jeudi"); 
    var_dump ($tab, "Vendredi"); 
    
    $tab = array("Lundi", "Mardi", "Mercredi"); 
    $jour = var_dump($tab); 


    $tab = array("Jeudi", "Vendredi"); 
    var_dump($tab, "Lundi", "Mardi", "Mercredi"); 
    
    $tab = array("Jeudi", "Vendredi"); 
    $jour = var_dump($tab); 
    

    $tab = array(array(1, "janvier", "2016"), 
    var_dump(2, "février", "2017"), 
    array(3, "mars", "2018"), 
    array(4, "avril", "2019")
    );
   
    $tab = array(); 

    $tab = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"); 

// Suppression de l'élément 2 (Mercredi)
var_dump($tab[2]);
   
   
   ?> 

    


        </body>
</html>