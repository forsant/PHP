<body>
<main>
<?php
    echo "Paul"; // J'affiche le prénom
    echo "<br>"; // je saute une ligne
    echo "ochon"; // j'affiche le nom
    #ceci est aussi un commentaire
    echo "<br> paul ochon";
      /**
     * les commentaire vous aideront lorsque vous reviendrez dans 6 mois et que vous aurez tout oublié.
     */
    echo "<br> super";
    echo "<br>";
    /* si vous souhaitez voir les caractères qui sont utilisé pour entourer les mots */
    echo "j\'écris à l\'encre de chine ";
    echo "<br> j'envoie des lettres à \"Ma dulcinéé\"";

    /*Les variables*/
    /*Une variable est un contenueur, qui contient une information temporaire numérique ,date ,objet ou alphanumérique ...
    Le nom d'une variable doit commercer par le $ suivi d'une lettre ou le ligne_ 
    le nom des variables sont sensible à la casse (MAJUSCULE-minuscule
    le signe = seret à affecter une valeure et non à une comparaison pour la comparaison il faut utiliser ==*/
    $largeur=5;
    echo $largeur;/*Affiche la variable"*/
   

    $prenom="téo";
    $nom="Durant";

    $prenom_nom =$prenom." ".$nom;/* Points à la place des virgules*/
    echo '<br>'.$prenom_nom;

    /**
     * Fonctions qui s'appliquent aux variables
     * 
     * strlen(variable): renvoie la longueur d'une chaine de caractère.
     * sustr(variable, début, longueur): renvoie une partie de la chaine de caractères.
     * trim(variable): supprime les espaes (ou d'autres caractères) en début et en fin de chaine.
     * number_format(variable "point ou point virgule", "caratères pour les milliers).
     * round(variable, nombre de décimale): arrondit le nombre.
     */
    $nom2 = "Marie Rose";
    echo strlen($nom2);// affiche 10 à cause des espace
    echo "<br>";
    var_dump($nom);//affiche string (10) "Marie Rose"
    echo "<br>";
    echo trim($nom2); //afffiche marie rose sans espace
    echo "<br>";
    echo substr($nom2,3,5);
    echo "<br>";
    echo $prix = 2050900.7854;
    echo "<br>";
    echo number_format($prix,2,","," ");// affiche 2 decimales après un point et un espace comme separateur des miliers
    echo "<br>";
    echo number_format($prix,2,"."," ");
    echo "<br>";
    echo "<br>";
    echo round($prix,1); //arrondi à une décimale
    echo "<br>";

    //Affectation de Variables par Valeur ou par Alias

    //Pour affecter une allias à une autre valeure un utlise (&)

    $v1 ="Jacques Chirac<br>";
    $alias = &$v1; //crée un alias vers $v1
    $alias = "Mon nom est $alias";
    echo $alias;

    $prenom2 = "Alain";
    echo " Salut les gars mon nom est : ".$prenom2. " Sébastien" ;
    
    ?>
    </main>
</body>