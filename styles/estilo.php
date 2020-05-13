<?php header("Content-type: text/css");

//Creo un array con varios colores
$color[0]='#FF5733';
$color[1]='#33E0FF';
$color[2]='#8D33FF';
$color[3]='#FFCA33';
$color[4]='#90FF33';
$color[5]='#335BFF';

// Elijo un color aleatorio
$i=rand(0,5);
$u=rand(5,0);
?>

body { 
    background-color: <?=$color[$i]?>;
}

h2{
    text-align:center;
    color: black;
    font-size: 2em;
    font-weight: lighter;
    font-size: 3.56rem;
    line-height: 110%;
    margin: 2.3733333333rem 0 1.424rem 0;
}