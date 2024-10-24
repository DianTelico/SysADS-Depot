 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page services</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px; /* Espace pour l'en-tête fixe */
        }
        .navbar-brand {
            font-weight: bold; /* Met en gras le nom de la marque */
        }

         /* Ajouter une bande de fond lors du survol */
        .navbar-nav .nav-link:hover {
            background-color: #f1f1f1; /* Couleur de la bande de survol */
            color: #333;               /* Changer la couleur du texte sur survol */
        }

        .navbar ul a
        {
           font-size: 12px;
           color: white;
           font-weight: bold;
           font-family: serif;
           border-left: 2px solid white;
           padding-left: 2px;
           margin-bottom: 5px;
        }

        #submenu a
        {
           font-size: 14px;
           background-color: #007bff;
           font-weight: bold;
           color: white;
           font-family: serif;
           margin-bottom: 2px;
           padding: 2px;
           
        }

        /* Utilisation de media query pour gérer la largeur en version mobile */

         @media (max-width: 768px) {
            #submenu{
                width: 100%; /* Occupe toute la largeur sur les petits écrans */
            }
        }

        /* Pour les grands écrans, occupe un quart de la largeur */
        @media (min-width: 769px) {
            #submenu{
                width: 25%; /* Occupe 25% sur les grands écrans */
            }
        }
        

    </style>
</head>
<body>

    <!-- En-tête -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
        <div class="container" style="background-color: #007bff;">
            <a class="navbar-brand" href="#" style="color: #ffff; font-size: 12px;">Africa Digital <br> Services</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"  id="navbarNav">
                <ul class="navbar-nav me-auto" style="color: #ffff;">
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn btn-secondary" style="
                    background-color: white; color:#007bff; font-family: serif;

                    ">Utilisateur</a>

                </div>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container mt-1">
          <div id="submenu" class="bg-light py-2">
                <a href="#" class="nav-link">Distribution Internet</a>
                <a href="#" class="nav-link">Transfer d'argent</a>
                <a href="#" class="nav-link">Prestation Digital</a>
                <a href="#" class="nav-link">Formation</a>
                <a href="#" class="nav-link">Vente</a>
          </div>
    </div>

    <!-- Lien vers Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
