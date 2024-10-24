<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style personnalisé pour centrer la section -->
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa; /* Couleur de fond légère */
        }
        .login-container {
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 900px;
            width: 100%;
            padding: 0;
        }
        .info-section {
            background-color: #007bff; /* Bleu Bootstrap */
            color: white;
            padding: 40px;
            border-radius: 10px 0 0 10px;
        }
         

        .login-box {
            max-width: 400px;
            margin: 50px auto;
            padding: 40px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
         
        .form-group {
            display: flex;
            align-items: left;
        }

        .form-label {
            width: 30%; /* Ajustez la largeur pour les labels */
            text-align: right; /* Alignement à droite pour les labels */
            margin-right: 10px;
        }

        .form-control {
            width: 70%; /* Ajustez la largeur pour les inputs */
        }

        table input
        {
            width: 130%;
            height: 20px;
            padding: 2px;
            outline: none;
            border: none;
            font-family: serif;

        }
         

    </style>
        
</head>
<body>

    <div class="login-container d-flex">
        <!-- Section Informations sur l'entreprise -->
        <div class="info-section col-md-6">
            <h2> AFRICA DIGITAL SERVICES </h2>
            <p>
                Bienvenue chez AFRICA DIGITAL SERVICES. Nous offrons des solutions innovantes
                pour répondre aux besoins de nos clients. Rejoignez-nous et profitez des
                dernières technologies dans votre quotidien professionnel.
            </p>
        </div>

        <!-- Section Connexion -->
         <div class="login-box" style="border: 1px solid #007bff;">
            <h3 class="text-center mb-4">Connexion</h3>
            <form>
                
                <table>
                     <tr>
                           <td><label>Identifiant</label></td>
                           <td><input   type="text" name=""></td>
                     </tr>
                     <tr>
                           <td><label>Mot de passe </label></td>
                           <td><input    type="password" name=""></td>
                     </tr>
                </table>
                <br>

                <!-- Bouton de Connexion -->
                <div class="d-grid" style="margin-bottom: 10px ;
                   font-family: serif;
                ">

                    <button type="submit" class="btn btn-primary" style="font-family: times;">Se connecter</button>
                </div>

                <!-- Mot de passe oublié -->
                <div class="mt-3 text-left">
                    <a href="#"  >Mot de passe oublié?</a>
                </div>
            </form>
    </div>
    </div>

    <!-- Lien vers Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
