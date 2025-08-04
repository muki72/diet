<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site dédié au suivi nutritionnel, bilans InBody et consultations diététiques. Prenez soin de votre santé.">
    <link rel="shortcut icon" href="assets\logo.png" type="image/x-icon">
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/pompiere" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Lisa Mercier - Balance Inbody</title>
</head>

<body>
    <?php
    include("nav.php");
    ?>
    <div class="container inb">
        <h2>Balance Inbody 120</h2>
        <p>Pour un accompagnement personnalisé et complet, je dispose de la balance professionnelle Inbody 120, dotée d’un impédancemètre à haute précision.
            Elle permet d’obtenir une vision plus complète que le simple poids.

            Différents paramètres de la composition corporel sont mesurés :</p>

        <div class="table-container">
            <div class="table">
                <div class="banner">
                    <h3>Masse grasse</h3>
                    <p>Pour évaluer la proportion de graisses dans le corps</p>
                </div>
                <div class="banner">
                    <h3>Masse maigre</h3>
                    <p>Ensemble des muscles, essentiels pour le tonus et métabolisme</p>
                </div>
                <div class="banner">
                    <h3>Protéines</h3>
                    <p>Indispensable au bon fonctionnement des muscles</p>
                </div>
                <div class="banner">
                    <h3>Graisse viscérale</h3>
                    <p>Se loge autour des organes et peut avoir un impact sur la santé</p>

                </div>
                <div class="banner">
                    <h3>Minéraux</h3>
                    <p>Donne une indication sur la solidité du squelette</p>

                </div>
                <div class="banner">
                    <h3>Eau corporelle</h3>
                    <p>Indispensable au bon fonctionnement de l’organisme</p>

                </div>
            </div>
        </div>
        <p>Avec cette analyse performante, on obtient également une vue détaillée de la répartition de la masse grasse ainsi que de la masse maigre dans le corps</p>
        <img src="assets\schéma.png" alt="schéma" >
        <p>Dans l’objectif d’un suivi diététique, le bilan corporel est proposé à chaque consultation, compris dans le tarif de cette dernière.
            Il est également possible de réaliser un bilan corporel unique, hors cadre d’un suivi diététique, pour les personnes désireuses de suivre leurs évolutions.</p>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>