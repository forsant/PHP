<body>
<h1>TP_PHP_date</h1>
<div class="contenaire">
<?php

$dateTemps = date("Y-M-j H:i:s");
echo "<a href=\"#\"  id=\"tp1\">Exercice TP1 </a>";
echo "<br>";
echo "Date actuelle: $dateTemps";
setlocale(LC_TIME, "french");

echo "<br>";echo "<br>";
echo "<a href=\"#\" id=\"tp2\">Exercice TP2</a>";
echo "<br>";
echo "Le jour de la semaine est : ".strftime("%A");
echo "<br>";echo "<br>";

echo "<a href=\"#\" id=\"tp3\">Exercice TP3</a>";
echo "<br>";
$dateNaissance = "24-03-1966";
$aujourdhui = date("Y-m-d");
echo "Date de naissance : ". $dateNaissance;
echo "<br>";
echo " Date Actuelle : ". $aujourdhui;
echo "<br>";
$diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
echo 'Votre age est '.$diff->format('%y');
echo "<br>";echo "<br>";

echo"<a href=\"#\" id=\"tp4\">Exercice TP4</a>";
echo "<br>";
$date2 = "24-03-2023";
echo $date2." --> ";
// Création du timestamp à partir du date donnée
$timestamp = strtotime($date2);
// Créer le nouveau format à partir du timestamp
$date2 = date("Y-m-d", $timestamp);
echo $date2; 
echo "<br>";

// ou avec le code suivant

$dateFormatJourMoisAnnee = "24/03/2023"; // Date au format "JJ/MM/AAAA"
$date = DateTime::createFromFormat('d/m/Y', $dateFormatJourMoisAnnee);
$dateAuFormatAAAAMMJJ = $date->format('Y-m-d');
echo $dateFormatJourMoisAnnee." --> ";
echo $dateAuFormatAAAAMMJJ;

?>
</div>
<script>
    let tp1 = document.getElementById("tp1");
    let tp2 = document.getElementById("tp2");
    let tp3 = document.getElementById("tp3");
    let tp4 = document.getElementById("tp4");

    tp1.addEventListener("click",function(){
    alert("$dateTemps = date(\"\Y-M-j H:i:s\"\);\n setlocale(LC_TIME, \"french\");");
});
	 tp2.addEventListener("click",function(){
    alert(".strftime(\"%A\");");
});
	 tp3.addEventListener("click",function(){
    alert("$dateTemps = date(\"\Y-M-j H:i:s\"\);\n setlocale(LC_TIME, \"french\"); \n diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));\n  'Votre age est '.$diff->format('%y');");
	
	
});
	 tp4.addEventListener("click",function(){
    alert("$date2 = \"24-03-2023\";\n $timestamp = strtotime($date2);\n $date2 = date(\"Y-m-d\", $timestamp);");
	
});

    </script>
</body>
</html>