<?php
$reponse = '';
if(isset($_POST["révolution"])){
    $reponse="révolution";
} /*iL vérifie si la variable révolution existe et si elle est pas null*/
if(isset($_POST["mondiale"])){
    $reponse="guerre mondiale";
} /*iL vérifie si la variable mondiale existe et si elle est pas null*/
if(isset($_POST["froide"])){
    $reponse="guerre froide";
} /*iL vérifie si la variable froide existe et si elle est pas null*/
echo $reponse
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>ÉPOQUE CONTEMPORAINE</title>
</head>
<body>
    <section class="article">
        <div class="text">
            <h1 id="texth1">
                <p>Merci d'avoir répondu à la question. vous avez mis <?php
$reponse = '';
if(isset($_POST["Révolution"])){
    $reponse="révolution";
} /*iL vérifie si la variable révolution existe et si elle est pas null*/
if(isset($_POST["mondiale"])){
    $reponse="guerre mondiale";
} /*iL vérifie si la variable mondiale existe et si elle est pas null*/
if(isset($_POST["froide"])){
    $reponse="guerre froide";
} /*iL vérifie si la variable froide existe et si elle est pas null*/
echo $reponse
?></p>
            </h1><!--Phrase de la fin du formulaire PHP-->
        </div>
    </section>
    
</body>
</html>
