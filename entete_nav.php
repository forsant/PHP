

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entete</title>
    <!-- Boostrap Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Boostrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <!-- Highlight style -->
    <link id="themeChange" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/github-dark.min.css">
    <!-- Highlight script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <!-- Exercution du code Highlight script -->
    <script>hljs.highlightAll();</script>
    
    <style>
        #background {
            background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -9999;
        }
                    html,body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        header {
            z-index: 9999;
        }

        main {
            flex-grow: 1;
        }

        /* Styles pour la partie mobile (pouce) de la barre de défilement */
        ::-webkit-scrollbar-thumb {
            background-color: rgba(150, 150, 255, 1.00);
            /* Couleur de fond du pouce */
            border-radius: 4px;
            /* Bordures légèrement arrondies pour le pouce */
        }

        /* Styles généraux pour la barre de défilement */
        ::-webkit-scrollbar {
            width: 8px;
            /* Largeur de la barre de défilement verticale */
            background-color: #000;
            /* Fond noir pour la barre de défilement */
        }

        /* Styles pour le pouce de la barre de défilement horizontale (pour les scénarios où le défilement est horizontal) */
        ::-webkit-scrollbar-thumb:horizontal {
            border-radius: 4px;
            /* Bordures légèrement arrondies pour le pouce horizontal */
            background-color: rgba(150, 150, 255, 1.00);
            /* Couleur de fond du pouce horizontal */
        }

        /* Styles pour la barre de défilement horizontale */
        ::-webkit-scrollbar:horizontal {
            height: 8px;
            /* Hauteur de la barre de défilement horizontale */
            background-color: #000;
            /* Fond noir pour la barre de défilement horizontale */
        }
    </style>
</head>
<body>

    <header class="position-sticky top-0 start-0">
        <!-- NavBar boostrap -->
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">monSite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PHP cours
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php">Accueil</a></li>
                            <li><a class="dropdown-item" href="lesboucles.php">LesBoucles</a></li>
                            <li><a class="dropdown-item" href="date.php">Date</a></li>
                            <li><a class="dropdown-item" href="test.php">Test</a></li>
                            <li><a class="dropdown-item"  href="structurecontrole.php">Structure</a></li>
                            <li><a class="dropdown-item" href="tableau.php">Tableau</a></li>
                          
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          TP PHP
                          </a>
                          <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="tp_php_date.php">(Tp-PHP-date)</a></li>
                            <li><a class="dropdown-item" href="tp_php_test.php">(Tp-PHP-test)</a></li>
                            <li><a class="dropdown-item" href="tp_php_boucle.php">(Tp-PHP-boucle)</a></li>
                            <li><a class="dropdown-item" href="tp_php_tableau.php">(Tp-PHP-tableau)</a></li>
                          </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Fond d'écran -->
    <div id="background"></div>

</body>
</html>
