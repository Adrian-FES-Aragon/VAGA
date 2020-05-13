<?php header("Content-type: text/css");

//Creo un array con varios colores
$color[0]='#3A3A3B';
$color[1]='#636468';


// Elijo un color aleatorio
$i=rand(0);
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
    font-weight: lighter;
}

h2{
    text-align:center;
    font-weight: lighter;
    font-size: 3.56rem;
    line-height: 110%;
    margin: 2.3733333333rem 0 1.424rem 0;
    color: white;
}

.text{    
    font-size: 1.3em;
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #9e9e9e;
    border-radius: 0;
    outline: none;
    height: 3rem;
    width: 100%;
    margin: 0 0 8px 0;
    padding: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-transition: border .3s, -webkit-box-shadow .3s;
    transition: border .3s, -webkit-box-shadow .3s;
    transition: box-shadow .3s, border .3s;
    transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s;
    color: white;
}
.active{
    font-weight: lighter;
    font-size: 1.4em;
    color: white;
}
form{
    width: 40%;
    align: center;
}