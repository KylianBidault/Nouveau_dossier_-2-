<!DOCTYPE html>
<html lang="fr"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÉPOQUE CONTEMPORAINE</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../image/logo-favicon.jpg" type="image/jpg">
</head>
<body>
    <section class="article">
        <div class="text">
            <h1 id="texth1">Merci d'avoir répondu à la question.</h1>
            <p>Vous avez sélectionné : 
                <?php
                if (isset($_POST["periode"])) {
                    $reponse = $_POST["periode"]; 
                    $periode = "";
                    if ($reponse == "Revolution") {
                        $periode = "La Révolution";
                    } elseif ($reponse == "Mondiale") {
                        $periode = "Les Guerres Mondiales";
                    } elseif ($reponse == "Froide") {
                        $periode = "La Guerre Froide";
                    } /*affichage de la réponse sur la page php*/ 
                    echo $periode;

                    $fichier = "reponse.txt";
                    $ligne = "$periode\n";
                    file_put_contents($fichier, $ligne, FILE_APPEND);/*récupération de données sur un ficher .txt*/
                } 
                ?>
            </p>
        </div>
    </section>
</body>
</html>
