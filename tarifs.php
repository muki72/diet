<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets\logo.png" type="image/x-icon">
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/pompiere" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Lisa Mercier - Tarifs</title>
</head>

<body>
    <?php
    include("nav.php");
    ?>
    <div class="container tarifs">
        <h2>Les tarifs</h2>
        <div class="table-container">
            <div class="table">
                <div class="banner">
                    <h3>Suivi nutritionnel : Individuel</h3>
                    <p>Première consultation (1h) : 60€</p>
                    <p>Consultations de suivi (30min) : 50€</p>
                </div>
                <div class="banner">
                    <h3>Suivi nutritionnel : Couple</h3>
                    <p>Première consultation (1h15) : 90€</p>
                    <p>Consultations de suivi (40min) : 85€</p>
                </div>
                <div class="banner">
                    <h3>Bilan corporel : Balance</h3>
                    <p>1 séance (15min) : 25€</p>
                    <p>4 séances : 80€</p>
                </div>
            </div>
        </div>
        <button>Reserver sur Doctolib</button>
        <h2>Qui peut en bénéficier ?</h2>
        <div class="column">
            <h3>Chacun peut tirer profit d’un suivi diététique, car l'alimentation joue un rôle clé dans notre santé à chaque étape de la vie. </h3>
            <p>Que vous souhaitiez améliorer vos habitudes alimentaires, optimiser vos performances sportives, perdre ou prendre du poids de manière durable, ce suivi est conçu pour vous accompagner dans l’atteinte de vos objectifs. Les jeunes, les femmes enceintes et les seniors peuvent également tirer parti d’un suivi diététique, car leurs besoins nutritionnels spécifiques nécessitent des conseils adaptés pour assurer leur santé et leur bien-être. Les personnes confrontées à des problématiques de santé, telles que le diabète, l’hypertension, les troubles digestifs ou les déséquilibres hormonaux, peuvent également tirer un grand bénéfice d'un accompagnement personnalisé pour mieux gérer leur condition.</p>
        </div>
        </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>