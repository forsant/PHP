<main>
<hr>
<h1>TP PHP Tableau</h1>
<hr>

<?php

echo "<b>Exo1: Création et Accès aux Tableaux</b><br><br>";
echo "Créez un tableau en PHP contenant les noms de cinq fruits.<br>";
echo '<img src="creation tableau.png" alt="mon image" />';
$table1[1] = "orange";
$table1[2] = "pomme";
$table1[3] = "poire";
$table1[4] = "fraise";
$table1[5] = "abricot";
echo "<br><br>";
echo "Affichez le deuxième élément du tableau.";
echo "<br>";
echo '<img src="deuxieme.png" alt="mon image" /><br>';
echo  "<b>".$table1[2]."</b>";

echo "<br><br>";
echo "Ajoutez un nouveau fruit à la fin du tableau.";
echo "<br>";
echo '<img src="ajout au tableau.png" alt="mon image" /><br>';
//$table1[] = "mangue"; [] vide prend la prochaine case
array_push($table1,"mangue");
echo $table1[6];
echo "<br><br>";
echo "Affichez la taille totale du tableau.";
echo "<br>";
echo '<img src="taille tableau.png" /><br>';
echo "<b>".count($table1)."</b>";
echo "<br><br>";
echo "Parcourez le tableau et affichez chaque élément sur une nouvelle ligne.";
echo "<br>";
echo '<img src="boucle affichage des éléments du tableau.png" /><br>';
for ($i=1;$i<=count($table1);$i++){
    echo "Cellule ".$i." de la Table1 = ".$table1[$i]."<br>";
}

echo "<br><br>";

echo "<b>Exo2: Manipulation de Tableaux</b><br><br>";
echo "Créez un tableau associatif en PHP contenant les noms des étudiants et leurs notes (par exemple, 'Alice' => 18, 'Bob' => 15, etc.).<br>";
$Notes = [
    'Paul'=>15,
    'Marie'=>14,
    'Romeo'=>8,
    'Paula'=>16,
    'Stephane'=>12
    ];
    echo '<img src="Notes.png" /><br><br>';
   
echo "Affichez la note de l'étudiant 'Marie'.<br>";
echo '<img src="note marie.png" /><br>';
echo "<b>Marie</b> à la note de  : ".$Notes['Marie']."<br><br>";

echo "Modifiez la note de 'Romeo' à 17.<br>";
$Notes =[ 'Romeo'=>17];
echo '<img src="Nlle note.png" /><br>';
echo "Nouvelle Note de Roméo : "."<b>".$Notes['Romeo']."</b><br><br>";

echo "Ajoutez un nouvel étudiant 'Charlie' avec une note de 16.<br>";
$Notes=['Charlie'=>16];
echo "Nouvel Etudiant <b>Charlie</b> avec une note de : "."<b>".$Notes ['Charlie']."</b><br>";
echo '<img src="Nl2.png" /><br><br>';
echo "Calculez la moyenne des notes des étudiants et affichez-la.<br>";

$Moyenne=array_sum($Notes)/count($Notes);
echo '<img src="Moyenne.png" /><br>';
echo "Moyenne des Notes : <b>".$Moyenne."</b><br>";



?>
</main>