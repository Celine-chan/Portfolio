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
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Céline Louvel - Portfolio</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Louvel Céline</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarRightAlignExample">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mes Réalisations</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Mes compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
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

    <div class="container">
        <p class="text-center textIntro mt-5">Intéressée depuis plusieurs années aux langages de programmation ,
            J’ai depuis intégré la formation de développeuse web et web mobile à l’école La Manu du Havre en septembre 2020 et ce,
            jusqu’en mars 2021.</p>
        <p class="text-center textIntro">Grâce à ma formation, j'ai pu acquérir une expérience significative dans l'étude des langages informatiques.
            Je souhaite donc pouvoir mettre en pratique le contenu de mes connaissances en intégrant une alternance pour le titre professionnel de concepteur et développeur d'application.</p>

        <p class="text-center container textIntro mt-3">N'hésitez pas à télécharger mon cv pour plus d'informations sur mon parcours :
        <p class="d-flex justify-content-center container textIntro"><a href="assets/img/celineLouvel.pdf"><img src="assets/img/cv.svg" alt="Louvel Céline CV" class="logocv"></a></p>
        </p>
    </div>

    <div class="myWork mt-5 text-center">

        <!-- <div>
            <img src="assets/img/web.svg" alt="web" class="logoWeb mx-auto">
        </div> -->

        <h2 class="text-dark mb-5">Mes Réalisations</h2>


        <main class=" container page-content">
            <div class="card">
                <div class="content">
                    <h2 class="title cardTitle">Kansai no Bouken</h2>
                    <p class="copy">Site réalisé pour le passage du titre de développeuse web et web mobile - En cours</p>
                    <button class="btn">Allez sur le site</button>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title cardTitle">Sword Shop</h2>
                    <p class="copy">Site WordPress réalisé en formation</p>
                    <a class="btn" href="http://wp-lhp5-clouvel.manusien-ecolelamanu.fr/" target="_blank">Allez sur le site</a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title cardTitle">projet en cours</h2>
                    <p class="copy">Bientôt disponible</p>
                    <button class="btn">Allez sur le site</button>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title cardTitle">projet en cours</h2>
                    <p class="copy">Bientôt disponible</p>
                    <button class="btn">Allez sur le site</button>
                </div>
            </div>
        </main>

    </div>

    <div class="otherWork mt-5 text-center">

        <h3 class="text-dark">Autres réalisations...</h3>

        <p class="mt-5">Prochainement...</p>

    </div>

    <div class="container skills mt-5">

        <h2 class="text-dark text-center">Langages informatiques</h2>


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

    <div class="contact mt-5 text-center pb-5">

        <h2 class="text-light pt-5">Formulaire de contact</h2>

        <form class="col-6 container mt-5">
            <div class="form-outline mb-4">
                <input type="text" id="lastname" class="form-control" />
                <label class="form-label" for="lastname">Nom</label>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="firstname" class="form-control" />
                <label class="form-label" for="firstname">Prénom</label>
            </div>

            <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control" />
                <label class="form-label" for="email">E-mail</label>
            </div>

            <div class="form-outline mb-4">
                <textarea class="form-control" id="message" rows="4"></textarea>
                <label class="form-label" for="message">Votre Message</label>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

    </div>


    <footer class="bg-light text-center text-white">
        <div class="container d-flex justify-content-center p-4 mb-4 pb-0">
            <a href="https://github.com/Celine-chan"><img src="assets/img/github.svg" alt="github" class="logofooter me-5"></a>
            <a href="https://www.linkedin.com/in/c%C3%A9line-louvel/"><img src="assets/img/linkedin.svg" alt="linkedin" class="logofooter"></a>
        </div>

        <div class="text-center p-3" style="background-color: black;">
            © 2021 Louvel Céline
        </div>
    </footer>

    <!-- bootstrap v5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.js"></script>
    <!-- js -->
    <script type="text/javascipt" src="assets/js/script.js"></script>
</body>

</html>