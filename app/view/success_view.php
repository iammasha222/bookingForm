<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
        <link rel="icon" id="favicon" href="assets/img/favicon-16x16.png" type="image/x-icon">
        <link rel="icon" href="assets/img/favicon-32x32.png" type="image/png">

        <title> Danke!</title>
    </head>
    <body class="container mt-5">
        <div class="headerLogo">
            <div id="siteTitel">
                <h1>Danke!</h1>
            </div>
            <div>
                <img id="logo" src="assets/img/logo.png">
            </div>
        </div>

        <div>
            <h2>Abrechnung wurde erfolgreich abgeschickt!</h2>
            <p>Sie erhalten per E-Mail ein PDF mit Ihren Buchungsinformationen.</p>
            <p>Vielen Dank!</p>
        </div>

        <form method="POST" id="backHome" action="index.php?page=neuhaeusl">
            <button type="submit" id="backHome" class="btn btn-primary col-12 col-md-6 col-lg-3">
                Fertig
            </button>
        </form>
    </body>
</html>