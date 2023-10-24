
<body>
<main>
    <div class="content">
        <h1>Structure de Contrôle PHP</h1>
        <?php
    //test if
    $a = 7;
    if($a>1){
        echo "La variable $a est plus Grande que 1.";// " prend la variable comme variable et simple ' prend la variable comme chaine de caractaire
    }
    echo "<br>";   echo "<br>";
// test if ... else
echo "TEST : IF ... ELSE";
echo "<br>";
$b = 5;
$c = 7;
if($b > $c){
    echo "La variable $b est plus grand que $c.";
} else {
    echo " La $b est plus petit ou égale a $c";
}
echo "<br>";echo "<br>";
// test elseif
echo "TEST : ELSEIF";
echo "<br> <br>";
$d =6;
$e= 6;
if($d <$e){
    echo "La variable $d est plus petite que $e";
}elseif($d > $e){
    echo "La variable $d est plus grande $e";
}else {
    echo "La variable $d est égale à $e";
}
echo "<br> <br>";
// Operateurs de comparaison var_dump() pour observer le comortement de test
// renvoie une valeur boolenn (True ou False).
echo " OPERATEUR DE COMPARAISON <br>";

$nbre = 5;
$nbre2 = 10;

echo "<br>";
echo "La condition 1 est : " ;echo($nbre ==  $nbre2);
echo "<br>";
echo "La condition 2 est : " ; echo($nbre !=  $nbre2);
echo "<br>";
echo "La condition 3 est : " ; echo($nbre > $nbre2);
echo "<br>";
echo "La condition 4 est : " ; echo($nbre >=  $nbre2);
echo "<br>";
echo "La condition 5 est : " ; echo($nbre <=  $nbre2);
echo "<br>";
echo "La condition est : " ; echo($nbre ==  $nbre2);

// Operateurs Logiques

echo "<br> <br>";
echo " OPERATEURS LOGIQUES<br>";
$nb = 15;
$nb1 = 8;
$nb2 = 1;

if($nb && $nb1 && $nb2)
    echo "Les variables $nb, $nb1, $nb2 contiennent des valeurs différentes <br>";
else
echo "Une des variables contient false comme valeur <br>";

if($nb>=10 || $nb1>=10 || $nb2>=10)
echo "La variable $nb2 a une valeur équivalente à false";
echo "<br>";

if(!$nb2)
 echo "La variable $nb2 a une variable équivalente à false.";
else
echo "La variable $nb2 a une valeur équivalente à true";

?>
</main>

</body>
</html>