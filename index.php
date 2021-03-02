<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/svg" href="assets/img/geek.svg">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Shippori+Mincho&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="lightbox2-2.11.3/dist/css/lightbox.min.css" rel="stylesheet" />
    <script src="lightbox2-2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
    <title>Céline Louvel - Portfolio</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand nameTitle ms-5" href="#">Louvel Céline</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarRightAlignExample">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fontNav" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fontNav" href="#presAnchor">Présentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fontNav" href="#realisationAnchor">Mes Réalisations</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fontNav" href="#skillsAnchor">Mes compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fontNav" href="#contactAnchor">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="backIntro">

        <section class="container column">
            <div class="divColumn">
                <p><img src="assets/img/Photo_Celine_Louvel.jpg" class="blob-one--animated marginImg img-fluid mx-auto" alt="photo Céline Louvel"></p>
                <h1 class="h1Text text-center textImg"><i class="fas fa-code"></i> Développeuse web et web mobile en formation <i class="fas fa-code"></i></h1>
                <h2 class="mt-5 h2Text text-center"><i class="fas fa-exclamation-circle"></i> En recherche d'alternance Conception et développement d'applications du 26 avril 2021 au 3 mai 2022</h2>
            </div>
        </section>

    </div>

    <div id="presAnchor"></div>

    <div class="container">

        <h2 class="mt-5 text-dark text-center titleh2">Présentation</h2>

        <p class="text-center textIntro mt-5">Intéressée depuis plusieurs années aux langages de programmation ,
            J’ai depuis intégré la formation de développeuse web et web mobile à l’école La Manu du Havre en septembre 2020 et ce,
            jusqu’en mars 2021.</p>
        <p class="text-center textIntro">Grâce à ma formation, j'ai pu acquérir une expérience significative dans l'étude des langages informatiques.
            Je souhaite donc pouvoir mettre en pratique le contenu de mes connaissances en intégrant une alternance pour le titre professionnel de concepteur et développeur d'application.</p>

        <p class="text-center container textIntro mt-3">N'hésitez pas à télécharger mon cv pour plus d'informations sur mon parcours :
        <p class="d-flex justify-content-center container textIntro"><a href="assets/img/celineLouvel.pdf"><img src="assets/img/cv.svg" alt="Louvel Céline CV" class="logocv"></a></p>
        </p>
    </div>

    <div id="realisationAnchor"></div>

    <div class="myWork mt-5 text-center">

        <h2 class="text-dark mt-5 mb-5 titleh2">Mes Réalisations</h2>

        <main class=" container page-content">
            <div class="card cardProject">
                <div class="content">
                    <h2 class="title cardTitle">Kansai no Bouken</h2>
                    <p class="copy">Site réalisé pour le passage du titre de développeuse web et web mobile - En cours</p>
                    <button class="btn">Allez sur le site</button>
                </div>
            </div>
            <div class="card cardProject">
                <div class="content">
                    <h2 class="title cardTitle">Sword Shop</h2>
                    <p class="copy">Site WordPress réalisé en formation</p>
                    <a class="btn" href="http://wp-lhp5-clouvel.manusien-ecolelamanu.fr/" target="_blank">Allez sur le site</a>
                </div>
            </div>
            <div class="card cardProject">
                <div class="content">
                    <h2 class="title cardTitle">projet en cours</h2>
                    <p class="copy">Bientôt disponible</p>
                    <button class="btn">Allez sur le site</button>
                </div>
            </div>
            <div class="card cardProject">
                <div class="content">
                    <h2 class="title cardTitle">projet en cours</h2>
                    <p class="copy">Bientôt disponible</p>
                    <button class="btn">Allez sur le site</button>
                </div>
            </div>
        </main>

    </div>

    <!-- <div class="otherWork mt-5 text-center">

        <h3 class="text-dark">Autres réalisations...</h3>

        <div class="row row-cols-1 row-cols-md-2 g-4" data-masonry='{"percentPosition": true }'>
            <div class="col">
                <div class="card bg-image hover-overlay ripple shadow-1-strong rounded" data-mdb-ripple-color="light">
                    <a data-lightbox="galleryPortfolio" href="assets/img/chocolaterie.png" class="card-img-top imgGallery w-100 hover-shadow" alt="site de vente de chocolat">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
            </div>
        </div>

    </div> -->

    <div id="skillsAnchor"></div>

    <div class="container skills mt-5">

        <h2 class="text-dark mt-5 text-center titleh2">Langages informatiques</h2>


        <div class="row d-flex justify-content-center my-5">
            <img src="assets/img/html-5.svg" alt="html5" class="logoLanguages" title="HTML 5">
            <img src="assets/img/css.svg" alt="css" class="logoLanguages mx-5" title="CSS 3">
            <img src="assets/img/javascript.svg" alt="javascript" class="logoLanguages" title="JavaScript">
        </div>

        <div class="row d-flex justify-content-center mb-5">
            <img src="assets/img/php.svg" alt="php" class="logoLanguages me-5" title="PHP">
            <img src="assets/img/mysql.svg" alt="mysql" class="logoLanguages" title="MySQL">
        </div>

        <div class="row d-flex justify-content-center">
            <img src="assets/img/bootstrap.svg" alt="bootstrap" class="logoLanguages" title="Bootstrap">
            <img src="assets/img/wordpress.svg" alt="wordpress" class="logoLanguages mx-5" title="Worpress">
            <img src="assets/img/visual-studio.svg" alt="visualStudioCode" class="logoLanguages" title="VSCode">
        </div>
    </div>

    <div id="contactAnchor"></div>

    <div class="contact mt-5 text-center pb-5">

        <h2 class="text-light pt-5 titleh2">contactez-moi</h2>

        <div class="text-light textIntro pt-5">
            <p>Si vous êtes intéressé par mon profil n'hésitez pas à me contacter par mail : </p>
            <p class="d-flex justify-content-center"><a href="mailto:celine.louvel.76@outlook.fr"><img src="assets/img/e-mail.svg" alt="mail" class="logoMail" title="cliquez pour m'nvoyer un mail"></a></p>
        </div>

    </div>

    <footer class="bg-light text-center ">
        <p class="text-dark textIntro mt-3">Vous pouvez également faire un tour sur mon github ou bien sur mon compte Linkedin !</p>
        <div class="container d-flex justify-content-center p-4 mb-4 pb-0">
            <a href="https://github.com/Celine-chan"><img src="assets/img/github.svg" alt="github" class="logofooter me-5"></a>
            <a href="https://www.linkedin.com/in/c%C3%A9line-louvel/"><img src="assets/img/linkedin.svg" alt="linkedin" class="logofooter"></a>
        </div>

        <div class="text-center text-white p-3" style="background-color: black;">
            © 2021 Louvel Céline
        </div>
    </footer>

    <!-- bootstrap v5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.js"></script>
    <!-- js -->
    <script type="text/javascipt" src="assets/js/script.js"></script>
    <script src="lightbox2-2.11.3/dist/js/lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</body>

</html>