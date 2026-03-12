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
        
        <title> Abrechnungsformular</title>
    </head>
    <body class="container mt-5">
        <div class="headerLogo">
            <div id="siteTitel">
                <h1>Abrechnungsformular - Neuhäusl</h1>
            </div>
            <div>
                <img id="logo" src="assets/img/logo.png">
            </div>
        </div>

        <form method="POST" id="form" action="index.php?page=summary">
            <input type="hidden" name="hutName" value="neuhaeusl">
            <h2 class="margin">Angaben zu verantwortlichen Person</h2>

            <div>
                <div class="nameGrid margin">
                    <div class="col-md-6 displayInput">
                        <label for="firstName">Vorname:</label>
                        <input type="text" class="inputsStyle" name="firstName" id="firstName" required>
                    </div>
                    <div class="col-md-6 displayInput">
                        <label for="lastName">Nachname:</label>
                        <input type="text" class="inputsStyle" name="lastName" id="lastName" required>
                    </div>
                </div>
                <div  class="col-md-12 displayInput margin">
                    <label for="email">Email:</label>
                    <input type="email" class="inputsStyle" name="email" id="email" required>
                </div>

                 <div  class="col-md-3 displayInput margin">
                    <label for="dateOfBirth">Geburtstagsdatum:</label>
                    <input type="date" class="inputsStyle" name="dateOfBirth" id="dateOfBirth" required>
                </div>

                 <h4>Reisezeitraum</h4>
                <div class="nameGrid margin">
                    <div class="col-md-3 displayInput">
                        <label for="arrival">Anreise:</label>
                        <input type="date" class="inputsStyle" name="arrival" id="arrival" required>
                    </div>
                    <div  class="col-md-3 displayInput">
                        <label for="departure">Abreise:</label>
                        <input type="date" class="inputsStyle" name="departure" id="departure" required>
                    </div>
                </div>

                <!-- prices table desktop-->
                <div class="margin" id="prices">
                    <table>
                        <thead>
                        <tr>
                            <th scope="col" class="tableBorder">Jedes Kind <br>unter 6 Jahre</th>
                            <th scope="col" class="tableBorder">Mitglied Kind <br>(6-16 Jahre)</th>
                            <th scope="col" class="tableBorder">Mitglied <br>Erwachsene</th>
                            <th scope="col" class="tableBorder">Gast Kind <br>(6-16 Jahre)</th>
                            <th scope="col" class="tableBorder">Gast <br>Erwachsene</th>
                            <th scope="col" class="tableBorder">Kurtaxe <br>(ab 15 Jahre)</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($prices)): ?>
                                <?php foreach ($prices as $price): ?>
                                    <tr>
                                        <td class="tableBorder"><?php echo number_format($price['child_u6'], 2, ',', '.'); ?> €</td>
                                        <td class="tableBorder"><?php echo number_format($price['member_6to16'], 2, ',', '.'); ?> €</td>
                                        <td class="tableBorder"><?php echo number_format($price['member_adult'], 2, ',', '.'); ?> €</td>
                                        <td class="tableBorder"><?php echo number_format($price['guest_6to16'], 2, ',', '.'); ?> €</td>
                                        <td class="tableBorder"><?php echo number_format($price['guest_adult'], 2, ',', '.'); ?> €</td>
                                        <td class="tableBorder"><?php echo number_format($price['tourist_tax'], 2, ',', '.'); ?> € pro Nacht</td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6">Keine Preise verfügbar</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12 margin">
                    <div class="table-responsive">
                        <div></div>
                        <table>
                            <thead>
                                <tr>
                                <th scope="col">Vorname</th>
                                <th scope="col">Nachname</th>
                                <th scope="col">Alter</th>
                                <th scope="col">Mitglied</th>
                                <th scope="col">Anreise</th>
                                <th scope="col">Abreise</th>
                                <th scope="col">Nächte</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

                <button type="button" class="btn btn-primary col-12 col-md-6 col-lg-3 margin" id="openPopup">
                    Teilnehmer hinzufügen
                </button>

                <h2>Zählenstände</h2>
                <p>Bitte bei der Abreise ablesen und ohne Kommastellen angeben.</p>

                <div>
                    <div>
                        <label for="electricity">Strom (1KFM0900559508):</label>
                        <br>
                        <input type="number" class="col-md-6 inputsStyle" id="electricity" name="electricity" required>
                        <br>
                    </div>
                </div>

                <div>
                    <div>
                        <label for="heating">Heizung (1KFM0900559511):</label>
                        <br>
                        <input type="number" class="col-md-6 inputsStyle" id="heating" name="heating" required>
                        <br>
                    </div>
                </div>

                <div class="margin">
                    <div>
                        <label for="water">Wasser:</label>
                        <br>
                        <input type="number" class="col-md-6 inputsStyle" id="water" name="water" required>
                        <br>
                    </div>
                </div>


                <h2>Checkliste</h2>
                <p>Bitte vor Abfahrt die folgende Dinge kontrollieren und markieren, falls nicht mehr ausreichend vorhanden!</p>
                <div class="margin">
                    <div class="col-md-6">
                        <input type="checkbox" name="checklist[]" id="toiletPaper" value="Klopapier">
                        <label for="toiletPaper">Klopapier</label>
                    </div>
                    <div  class="col-md-6">
                        <input type="checkbox" name="checklist[]" id="kitchenPaper" value="Küchenpapier" >
                        <label for="kitchenPaper">Küchenpapier</label>
                    </div>
                    <div  class="col-md-6">
                        <input type="checkbox" name="checklist[]" id="charcoal" value="Holzkohle" >
                        <label for="charcoal">Holzkohle</label>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="checklist[]" id="matches" value="Streichhölzer" >
                        <label for="matches">Streichhölzer</label>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="checklist[]" id="grillLighter" value="Grillanzünder" >
                        <label for="grillLighter">Grillanzünder</label>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="checklist[]" id="dishwashingLiquid" value="Spülmittel" >
                        <label for="dishwashingLiquid">Spülmittel</label>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="checklist[]" id="wc" value="WC-Reiniger" >
                        <label for="wc">WC-Reiniger</label>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="checklist[]" id="allPurpose" value="Putzmittel(Allzweck)" >
                        <label for="allPurpose">Putzmittel(Allzweck)</label>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="checklist[]" id="trashBags" value="Müllbeutel" >
                        <label for="trashBags">Müllbeutel</label>
                    </div>
                </div>

                <div class="col-md-12 margin">
                    <label for="comments" class="form-label">
                        Festgestellt Mängel?
                    </label>
                    <div class="col-md-6 margin">
                        <textarea class="form-control" id="comments" name="comments" 
                        placeholder="Funktioniert etwas nicht?"></textarea>
                    </div>

                    <button type="submit" id="next" class="btn btn-primary col-12 col-md-6 col-lg-3">
                        Weiter
                    </button>
                </div>
            </div>
        </form>
        <script src="assets/js/main.js"></script>
    </body>
</html>