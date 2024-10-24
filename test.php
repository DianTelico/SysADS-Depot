 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop-down Utilisateur</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Pour styliser la photo de l'utilisateur */
        .user-photo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        /* Espacement dans le menu */
        .dropdown-item-custom {
            font-size: 14px;
            padding: 10px;
        }
    </style>
</head>
<body>

    <!-- En-tête -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container" style="background-color: #007bff;">
            <a class="navbar-brand" href="#" style="color: #ffff; font-size: 12px;">Africa Digital <br> Services</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto" style="color: #ffff;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
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

                <!-- Menu utilisateur avec drop-down -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Utilisateur
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item dropdown-item-custom">
                            <div class="d-flex align-items-center">
                                <!-- Photo de l'utilisateur -->
                                <img src="https://via.placeholder.com/50" alt="Photo utilisateur" class="user-photo me-2">
                                <!-- Infos utilisateur -->
                                <div>
                                    <p class="mb-0">ID: 12345</p>
                                    <p class="mb-0">Nom: Jean Dupont fk,kls,klkl</p>
                                    <p class="mb-0">Prénom: Jean</p>
                                </div>
                            </div>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <!-- Bouton Modifier le profil -->
                        <li><a class="dropdown-item" href="#">Modifier le profil</a></li>
                        <!-- Bouton Déconnexion -->
                        <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Lien vers Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
