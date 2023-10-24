<?php
/**
     * Pour manipuler les dates on utilise un groupe date/heure aussi appelé times-stamp qui est issu de la notation UNIX.
     * PHP utilise le fuseau horaire qui défini par défaut dans la rubrique [Date] du fichier php.ini.Ce fichier regroupe tous les paramètres de base. 
     * On peut ouvrir ce fichier avec n'importe quel éditeur.
     */
    $fuseau = date_default_timezone_get();
    echo $fuseau;

    /*

   */

   echo date("j m y")."<br>"; // affiche la date au format 17 10 23
   echo date("j m Y")."<br>";// affiche la date complete
echo date("j M Y")."<br>"; //affiche le 17 oct 2023
// setlocale(LC_TIME, "fr_FR");//en français
echo strftime("%A")."<br>";
echo date("D F Y")."<br>";
echo date("D d M Y")."<br>";

// Diférent paramètres de la fonction Date

/* a :  am ou pm
   A :  AM ou PM
   d :  Le jour du mois sur 2 chiffres
   D :  Le jour de la semaine en Anglais sur 3 lettres
   F :  Le nom du mois en anglais
   j :  Le jour sur un chiffre
   m :  Le numéro du mois sur deux chiffres
   M :  Le numéro du mois en anglais sur 3 chiffres;
   n :  Le numéro du mois sur un chiffre
   y :  L'année sur 2 chiffres
   Y :  L'année sur 4 chiffres
   A :  Le numéro du jour de la semaine (0 à 6 en commençant par le dimanche)
   

   Il est à noter que pour afficher les dates au format local, par exemple en français, il faut utiliser
   l'instruction "strftime avec les paramètres
   */
  echo strftime("%A")."<br>";
  setlocale(LC_TIME, "fr_FR");// on définit le Français
  setlocale(LC_TIME, "french");
  echo strftime("%A")."<br>";//affiche mardi

  echo strftime("%a")."<br>";//affiche mar
  echo strftime("%A %d %B %Y")."<br>";
  echo strftime("%d/%m/%Y")."<br>";//en format 17/10/2023
  echo strftime("%d-%m-%Y")."<br>";//en format 17-10-2023

  /* comparaison de deux dates*/
  

  $Date1 = "15-09-2023";
  $Date2 = "09-09-2023";

  //je transforme les en timestamp

  $t1 = strtotime($Date1);
  echo "le 15/09/2023 est égale à  : ".$t1." secondes<br>";

  $t2 = strtotime($Date2);
  echo "le 09/09/2023 est égale à  : ".$t2." secondes<br>";
echo "<br>";
  if($t1 < $t2){
    echo "La première date est bien avant la 2ème date <br>";
   } else{
    echo "La deuxième date est bien avant la 1ère <br>";
  }


  /* tester la validité d'une date, d'une manière générale 

  PHP est employé pour répondre à une interraction d'un client qui envoie ses informations

  vers un serveur par l'intermédiaire d'un formulaire. Si la personne transfère des dates, le PHP devra les

  valider avant de les utiliser.PHP possède une fonction qui peut aider a tester les dates à traiter.

  dates à traiter : checkdate().

  fonction booléen renvoie true ou false.
  valeurs a rentrer le jour ,le mois et al date
  les mois entre 1 et 12, et les années entre 1 et 32767.
  les années bisxextiles sont pris en compte

*/

echo checkdate (12,25,2022);
echo "<br>";
if(checkdate(13,25,2021)==false){//mauvaise date car le mois 13 n'existe pas 
    echo "mauvaise date";
}


//Calculer, qelles étaient les années bissextiles de 1800 à nos jours
echo "<br>";
for($i = 1800; $i<2024; $i++ ){
    if(checkdate (02,29,$i)==true){
    echo $i." est une année bissectile"."<br>";
    }
}

// Date et temps

$dateTemps = date("Y-m-d H:i:s");
echo "<br>";
echo "Date actuelle: $dateTemps";

?>