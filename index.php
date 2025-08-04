<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site dédié au suivi nutritionnel, bilans InBody et consultations diététiques. Prenez soin de votre santé.">

    <meta property="og:title" content="Suivi diététique personnalisé">
    <meta property="og:description" content="Prenez soin de votre santé avec un accompagnement nutritionnel adapté.">

    <!-- Changer quand Online -->
    <meta property="og:image" content="http://localhost/diet/assets/logo.png">
    <meta property="og:url" content="http://localhost/diet/accueil">

    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="assets\logo.png" type="image/x-icon">
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/pompiere" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>Lisa Mercier - Acceuil</title>
</head>

<body>
    <?php
    include("nav.php");
    ?>
    <header>
        <h1>Parce que chaque parcours est unique, votre nutrition aussi</h1>
    </header>
    <div class="container">

        <div class="profil">
            <img src="assets\face.jpeg" alt="Lisa Mercier">
            <div class="infos">
                <h2>Lisa Mercier</h2>
                <p>Diététicienne Nutritionniste diplômée</p>
                <p>En cabinet à Savigné l’Evêque et à votre domicile</p>
                <button class="slide-in">Reserver sur Doctolib</button>
            </div>
        </div>
        <div class="intro">
            <h2>Qui suis-je ?</h2>

            <p>Passionnée par l’accompagnement humain, je suis titulaire d’un BTS ESF depuis 2016, ce qui m’a permis d’acquérir une solide expérience dans le domaine social, auprès de publics variés.

                Intéressée depuis toujours par la nutrition, j’ai complété mon parcours en 2022 avec un BTS Diététique, pour associer mes compétences sociales à celles de l’alimentation.</p>

            <p>Je me suis également formée à l’alimentation en pleine conscience, une approche qui aide à se reconnecter à ses sensations, mieux comprendre ses besoins, et retrouver une relation apaisée avec la nourriture.

                Aujourd’hui, je vous reçois au cabinet ou me déplace à domicile avec ma balance professionnelle. En individuel ou en duo (couple, parent/enfant...), je propose un accompagnement personnalisé et adapté à vos besoins.</p>
        </div>
        <div class="review">
            <h2>Les avis Google</h2>
            <!-- Elfsight Google Reviews | Untitled Google Reviews -->
            <script src="https://static.elfsight.com/platform/platform.js" async></script>
            <div class="elfsight-app-5449fafa-ad30-4589-bb6d-b6e64a31a9da slide-in" data-elfsight-app-lazy></div>
        </div>
        <div class="reservation">
            <h2>Réservation</h2>
            <div class="btn-actions slide-in">
                <button>Individuel</button>
                <button>Couple</button>
                <button>Bilan corporel</button>
            </div>
        </div>
        <h2>Le cabinet</h2>
        <div class="place">
            <div class="inline">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.599631250852!2d0.29540891241573847!3d48.07937045509113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e28a820e0568bb%3A0xb14492b0a40ff21b!2s5%20Rte%20de%20Beaufay%2C%2072460%20Savign%C3%A9-l&#39;%C3%89v%C3%AAque!5e0!3m2!1sfr!2sfr!4v1753714580826!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="address">
                    <h3>5 route de Beaufay 72460 Savigné l’Evêque</h3>
                    <p>Le cabinet est accessible pour les personnes en situation de handicap.
                        Un parking est disponible sur place.</p>
                </div>
                <img src="assets\desk.jpeg" alt="Lisa Mercier">
            </div>
        </div>
        <div class="contact">
            <h2>Contact</h2>
            <div class="inline infos">
                <div class="inline">
                    <i class="fa-solid fa-phone"></i>
                    <p>06 45 81 03 91</p>
                </div>
                <div class="inline">
                    <i class="fa-solid fa-envelope"></i>
                    <p>contact@lisamercierdieteticienne.fr</p>
                </div>
                <button>Reserver sur Doctolib</button>
            </div>
        </div>

    </div>
    <?php
    include("footer.php");
    ?>
    <script src="script.js"></script>
</body>

</html>