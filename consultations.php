<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site dédié au suivi nutritionnel, bilans InBody et consultations diététiques. Prenez soin de votre santé.">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/pompiere" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Lisa Mercier - Consultations</title>
</head>

<body>
    <?php
    include("nav.php");
    ?>
    <div class="container consult">
        <h2>Les consultations</h2>
        <div class="column">
            <h3>Première consultation</h3>
            <p>La première consultation est un moment d’échange privilégié. Elle me permet de mieux vous connaître, d’explorer votre parcours, vos comportements alimentaires, ainsi que vos éventuelles préoccupations de santé. Nous passerons ensemble en revue vos habitudes alimentaires afin de définir vos objectifs nutritionnels. Un dossier diététique vous sera remis à la fin de la consultation, résumant tout ce que nous aurons vu ensemble, et il pourra être complété par des recettes et d’autres conseils au fil du temps. Nous réalisons également un bilan corporel avec la balance InBody, pour avoir une vision complète de votre composition corporelle.</p>
        </div>
        <div class="column">
            <h3>Consultations de suivi</h3>
            <p>Les consultations de suivi sont un temps précieux pour accompagner votre progression. Elles permettent de faire le point sur vos avancées, de suivre les indicateurs définis ensemble (poids, confort digestif, paramètres de santé…) et d’identifier les ajustements nécessaires pour continuer à progresser. Ces rendez-vous réguliers sont également l’occasion de partager vos ressentis, de discuter des difficultés rencontrées et de consolider les évolutions en cours, afin de maintenir une dynamique positive et durable. Nous réalisons également un bilan corporel avec la balance InBody, pour suivre vos progrets.</p>
        </div>
        <div class="column">
            <h3>Bilan corporel</h3>
            <p>Ce bilan, réalisé avec à la balance professionnelle InBody 120, permet d’obtenir une vision complète de votre composition corporelle. Différents paramètres essentiels sont mesurés pour évaluer votre santé et votre condition physique, suivre vos progrès et mieux comprendre l’impact de votre alimentation et de votre activité physique sur votre corps. Dans le cadre d’un suivi diététique, le bilan corporel est réalisé à chaque consultation et inclus dans le tarif. Il est également possible de bénéficier d’un bilan corporel unique, hors suivi diététique, pour les personnes désireuses de suivre leurs évolutions.</p>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>