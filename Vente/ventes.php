     <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page services</title>
        <!-- Lien vers Bootstrap CSS -->
        <link rel="stylesheet" href="../bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">    
        <link rel="stylesheet" href="../style.css">
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
                            <a class="nav-link" href="../home.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                         
                    </ul>
                    <div class="d-flex">
                     <!-- Menu utilisateur avec drop-down -->
                           <?php
                                   require '../dropdownUser.php';
                           ?>

                    </div>
                </div>
            </div>
        </nav>

        <!-- Contenu principal -->
        <div class="container mt-1" >
            <div class="d-flex align-items-start" >
                    <div class="col-3">
                    
                    <div id="navMenu" class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                       
                        <a class="nav-link" href="../Services.php"id="v-pills-home-tab">
                                Tableau de Bord 
                        </a>

                        <a class="nav-link " href="../DistributionInternet/DistributionInternet.php" id="">
                                Distribution Internet
                        </a>

                        <a class="nav-link" href="../TransferArgent/transfers.php" id="">
                                Transfert d'argent
                        </a>
                        <a class="nav-link   " href="../PrestationServices.php" id="">
                                Prestation Digital
                        </a>
                        <a class="nav-link " href="../Formation/formations.php" id="">
                                Formations
                        </a>
                        <a class="nav-link active" href="#" id="">
                                Vente
                        </a>

                    </div> 


                </div>

                <div class="col-9">
                        <div id="menu_tab">
                            <div class="row">
                            </div>
                            <div class="row">
                                   <h3>Bienvenue a la page Ventes  </h3>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- Lien vers Bootstrap JS -->
        
    <script src="../bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
