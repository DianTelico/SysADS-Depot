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

        #navMenu
        {
             background-color: rgb(240,240,240);
        }

        #navMenu .nav-link
        {
           
            text-align : left ;
            border : 2px solid white;
            font-family: serif ;
            font-weight: bold ;
           
        }

        #tabStatic
        {
             
        }

        
         /* Media query pour centrer le menu utilisateur sur mobile */
        @media (max-width: 768px) {
            .user-menu {
                display: flex;
                justify-content: center;
                width: 100%;
            }
        }

        /* Media query pour les grands écrans : alignement à droite */
        @media (min-width: 769px) {
            .user-menu {
                 
                 position: relative;
                 right: 200px;
            }
        }

         .dropdown  li
        {
            background-color: rgb(240,240,240);
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
                     <!-- Menu utilisateur avec drop-down -->
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Utilisateur
                             </button>
    
                            <div class="dropdown  user-menu ">
                                
                                <ul class="dropdown-menu  p-2 mt-3" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item dropdown-item-custom ">
                                        <div class="d-flex align-items-center">
                                            <!-- Photo de l'utilisateur -->
                                            <img src="image/LogoADS.jpg" alt="Photo utilisateur" class="user-photo me-2" 
                                            style="width:50px; height: 50px; border: 1px solid blue; padding: 5px;">
                                            <!-- Infos utilisateur -->
                                            <div>
                                                <p class="mb-0"><strong>ID: </strong>12345</p>
                                                <p class="mb-0">Jean Dupont  </p>
                                            </div>

                                        </div>
                                    </li>
                                    <li><hr class="dropdown-divider "></li>
                                    <!-- Bouton Modifier le profil -->
                                    <li><a class="dropdown-item" href="#">Editer le profile</a></li>
                                    <!-- Bouton Parametre -->
                                    <li><a class="dropdown-item" href="#">Parametre</a></li>
                                    <!-- Bouton Déconnexion -->
                                    <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                                </ul>
                            </div>

                </div>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container mt-1" >
         <div class="d-flex align-items-start" >
            <div id="navMenu" class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        Tableau de Bord 
                </button>
                 <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                         Distribution Internet
                </button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        Transfer d'argent
                </button>
                <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">
                        Prestation Digital
                </button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        Formations
                </button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        Vente
                </button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                        
                </div>
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                       <div  id="">
                          
                       </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
            </div>
        </div>
    </div>

    <!-- Lien vers Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
