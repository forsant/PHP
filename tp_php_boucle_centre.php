<body>
<h1>TP_PHP_BOUCLE</h1>
<?php
echo "<p>EXERCICE 1</p>";
$i = 77000;
while($i < 78000) {
   echo "<p>".$i."</p>";
   $i++;
}
echo "<hr>";
echo "<p>EXERCICE 2</p>";
$n = 5;
for($i = 1;$i <= 10;$i++) {
   echo "<p>$n x $i = ".($n * $i)."</p>";
}
echo "<hr>";
echo "<p>EXERCICE 3</p>";
for($i = 1;$i <= 5;$i++) {
    for($k = 1;$k <= $i;$k++) {
       echo  $i;
    }
    echo '<br />';
 };
 echo "<hr>";
 echo "<p>EXERCICE 4</p>";
$k = 0;
 while($k <= 20) {
       echo "<p>$k<p>";    
     echo '<br />';
     $k = $k + 2;
 }
?>
</body>

