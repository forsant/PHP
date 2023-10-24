<body>
<h1>TP_PHP_TEST</h1>
<?php
echo "<hr>";
//Question 1
echo "<p>QUESTION 1</p>";
echo"<br>";
echo "<p>".'$a '.'  $A_'.'  $AAA '.'  $a1 '."</p>";
echo "<hr>";

//Question 2
echo "<p>QUESTION 2</p>";
$note_maths = 15; 
$note_francais = 12; 
$note_histoire_geo = 9; 
$moyenne = ($note_maths+ $note_francais+$note_histoire_geo)/3; 
echo "<p>".'La moyenne est de '.$moyenne.' / 20.'."<p>"; 
echo "<hr>";

//Question 3
echo "<p>QUESTION 3</p>";
$prix_ht = 50; 
$tva = 20; 
$prix_ttc = ($prix_ht*($tva/100)+$prix_ht); 
echo"<p>". 'Le prix TTC du produit est de '.$prix_ttc.' €.'."</p>"; 
echo "<hr>";
//Question 4
echo "<p>QUESTION 4</p>";
$test=42;
var_dump($test);
echo "<hr>";

//Question 5
echo "<p>QUESTION 5</p>";
$sexe="masculin";
if($sexe=="masculin")
echo "<p> Homme </p>";
elseif($sexe=="feminin")
echo "<p> femme </p>";
else
echo "<p> Non reconnu </p>";
echo "<hr>";

//Question 6
echo "<p>QUESTION 6</p>";
$budget = 1553.89;
$achat = 1554.76;
if($achat>=$budget)
echo "<p> Votre achat est supérieur à votre budget </p>";
else
echo "<p> Votre budh=get est sufisant </p>";
echo "<hr>";
//Question 7
echo "<p>QUESTION 7</p>";
$age=16;
if($age>=18)
echo "<p> La personne est majeur</p>";
else
echo"<p> La personne est mineur </p>";
echo "<hr>";
//Question 8
echo "<p>QUESTION 8</p>";
$heure = 16;
   if($heure >= 7 && $heure < 12) :
      echo "<p>l'heure est du matin</p>";
   elseif($heure >= 12 && $heure < 22) :
      echo "<p>l'heure est de l'après midi</p>";
   else :
      echo "<p>l'heure est la nuit.</p>";
   endif;
   echo "<hr>";
?>
</body>
</html>
