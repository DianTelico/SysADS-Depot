 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <!-- Lien vers Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">    
    <link rel="stylesheet" href="./style.css">
        
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
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Services.php">Services</a>
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
    <div class="container mt-5">
        <h1>Bienvenue sur MonSite !</h1>
        <p>Ceci est votre page d'accueil. Ajoutez ici du contenu intéressant.</p>
    </div>

    <!-- Lien vers Bootstrap JS -->
<script src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.bundle.min.js"></script>
</body>
</html>
