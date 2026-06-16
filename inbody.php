<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez la balance professionnelle InBody 120 utilisée par Lisa Mercier pour mesurer précisément votre composition corporelle.">

    <meta property="og:title" content="Balance InBody 120 - Lisa Mercier">
    <meta property="og:description" content="Analyse de composition corporelle avec la balance InBody 120 : masse grasse, musculaire, hydratation et plus encore.">
    <meta property="og:image" content="https://mercier-lisa.xo.je/assets/logo.png">
    <meta property="og:url" content="https://mercier-lisa.xo.je/inbody">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
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

        <div class="inline intro-inb">
            <p class="bg-splash bg-splash--contain">Pour un accompagnement personnalisé et <g>complet</g>, je dispose de la balance professionnelle Inbody 120, équipée d’un <g>impédancemètre haute précision</g>. Elle offre une vision plus complète <g>que celle du simple poids</g>.</p>
            <img class="balance-img" src="assets/balance.png" alt="Balance professionnelle InBody 120">
        </div>

        <h2>Comment ça marche ?</h2>
        <div class="howto-text">
            <p>La balance <g>InBody 120</g> utilise un courant électrique très faible et indolore qui circule dans le corps afin d’analyser la composition corporelle.</p>
            <p>Il suffit de monter pieds nus sur la balance et de tenir les poignées dans les mains, pour assurer un bon contact et une mesure complète.</p>
            <p>La mesure est rapide, simple et réalisée sans nécessairement avoir besoin de se dévêtir.</p>
            <p>La mesure par <g>impédancemétrie</g> est déconseillée chez les personnes porteuses d’un dispositif médical implanté (pacemaker, défibrillateur implantable, neurostimulateur…).</p>
        </div>

        <p>Différents <g>paramètres</g> sont mesurés, en kg ou en L :</p>

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
        <p>On obtient également une vue détaillée de la répartition de la <g>masse musculaire</g> ainsi que de la <g>masse grasse</g> dans le corps :</p>
        <img class="schema-img" src="assets/schéma.png" alt="Schéma de répartition des masses musculaire et grasse dans le corps">
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>