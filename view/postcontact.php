<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Céline Louvel - Portfolio</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="container text-center mt-5">
        <p class="note note-success">
            <strong>Note success:</strong> Votre message a bien été envoyé !
        </p>

    </div>

    <div class="container text-center">
        <img src="../assets/img/expedie.svg" alt="message envoyé" class="logosend">
    </div>

    <div class="container text-center">
        <p>Vous allez être redirigé sur la page d'accueil automatiquement.</p>
        <p>Sinon cliquez ici</p>
    </div>

    <!-- <footer class="bg-light text-center mt-5">
        <div class="text-center text-white p-3" style="background-color: black;">
            © 2021 Louvel Céline
        </div>
    </footer> -->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <script type="text/javascript">
        setTimeout('Redirect()', 2000);

        function Redirect() {
            location.href = '../index.php';
        }
    </script>
</body>

</html>