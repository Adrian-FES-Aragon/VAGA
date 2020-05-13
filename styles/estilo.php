<?php header("Content-type: text/css");

//Creo un array con varios colores
$color[0]='#3A3A3B';
$color[1]='#636468';


// Elijo un color aleatorio
$i=rand(0,1);
$u=rand(5,0);
?>

body { 
    background-color: <?=$color[$i]?>;
}

div{
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;
    display: block;
}

h2{
    text-align:center;
    color: black;
    font-size: 2em;
    font-weight: lighter;
    font-size: 3.56rem;
    line-height: 110%;
    margin: 2.3733333333rem 0 1.424rem 0;
    color: white;
}