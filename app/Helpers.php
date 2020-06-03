<?php 


// On va se creée une fonction getprice que l'on peut utilisé sur toute notre application

function getprice($priceInDecimal) {
// Vu que l'on va lutilisé par la suite un float il faudra le mettre dans une variable que l'on va utilisé prochainement 
  

   $prices = floatval($priceInDecimal) / 100; 

    return number_format($prices, 2, ',','').' €' ; 


}
 

?>