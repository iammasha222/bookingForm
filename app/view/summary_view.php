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

        <title> Zusammenfassung</title>
    </head>
    <body class="container mt-5">
        <div class="headerLogo">
            <div id="siteTitel">
                <h1>Zusammenfassung</h1>
            </div>
            <div>
                <img id="logo" src="assets/img/logo.png">
            </div>
        </div>

        <form method="POST" id="summary" action="index.php?page=success">

            <!-- Table for personen -->
            <div>
                <div>
                    <h2>Personen</h2>
                    <table class="table" id="participantsSummaryTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Alter</th>
                                <th>Mitglied</th>
                                <th>Zeitraum</th>
                                <th>Nächte</th>
                                <th>Kurtaxe</th>
                                <th>Übernachtung</th>
                                <th>Summe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <div>
                <div>Gesamtpreis Übernachtungen: </div>
                <div> €</div>
                </div>
                <div>
                <div>Gesamtpreis Kurtaxe: </div>
                <div> €</div>
                </div>
                <div>
                <div>Summe: </div>
                <div> €</div>
                </div>
            </div>

            <!-- table electricity, heating, water -->
            <div>
                <h2>Zählenstände </h2>
                <table class="table">
                <thead>
                    <tr>
                    <th>Strom</th>
                    <th>Heizung</th>
                    <th>Wasser</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                    </tr>
                    
                </tbody>
                </table>
            </div>

            <!-- checklist -->
            <div>
                <h2>Checkliste </h2>
                <table class="table">
                <thead>
                    <tr>
                    <th>Festgestellt Mängel, Fehlmengen, etc.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td></td>
                    </tr>
                </tbody>
                </table>
            </div>


            <!-- liability -->
            <p><b>Der Unterzeichner haftet für:</b></p>
                
            <div>
                <div class="alignment">
                    <input type="checkbox" name="one" required>
                    <label for="one" class="form-label" >Richtigkeit der Angaben des Gästeblattes und Abgabe bei der
                    Gemeinde. Für etwaige Folgen,
                    z.B. Nachzahlung der Kurtaxe kommt der Unterzeichner selbst auf.
                    </label>
                </div>

                <div class="alignment">
                    <input type="checkbox" id="two" name="two" required>
                    <label for="two" class="form-label">Die von ihm bzw. seiner Gruppe verursachten Schäden.</label>
                </div>

                <div class="alignment">
                    <input type="checkbox" id="three" name="three" required>
                    <label for="three" class="form-label">Richtigkeit der Zählerstände.</label>
                </div>

                <div class="alignment">
                    <input type="checkbox" id="four" name="four" required>
                    <label for="four" class="form-label">Einhaltung der Hüttenordnung.</label>
                </div>

                <div class="alignment">
                    <input type="checkbox" id="five" name="five" required>
                    <label for="five" class="form-label">Schlüssel erhalten und Hüttenordnung gelesen.</label>
                </div>

                <!-- sent button -->
                <button type="submit" class="btn line btn-primary col-12 col-md-6 col-lg-3 margin" name="send" id="send">
                    Abschicken
                </button>
            </div>
        </form>

        <!-- change button -->
        <form id="changeForm" method="POST" action="index.php?page=form">
            <button type="submit" class="btn btn-primary col-12 col-md-6 col-lg-3 margin" id="changeButton" name="changeButton">
                Ändern
            </button>
        </form>
        <script src="assets/js/main.js"></script>
    </body>
</html>