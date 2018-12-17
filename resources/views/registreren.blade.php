<!DOCTYPE html>
<html>
    <head>
        <title>Registreren</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                
            <form action="registreerscript.php" method="post">
            
            <label for="voornaam">Voornam</label><br>
            <input type="text" id="voornaam" name="voornaam"><br>
            
            <label for="achternaam">Achternaam</label><br>
            <input type="text" id="achternaam" name="achternaam"><br>  
            
            <label for="gebruikersnaam">Gebruikersnaam</label><br>
            <input type="text" id="username" name="username"><br>
               
            <label for="password">Wachtwoord</label><br>
            <input type="password" id="password" name="password"><br>
            
            <label for="email">E-mail</label><br>
            <input type="email" id="email" name="email"><br>
            
            <label for="straatnaam">Straatnaam</label><br>
            <input type="text" id="straatnaam" name="straatnaam"><br>
            
            <label for="huisnummer">Huisnummer</label><br>
            <input type="number" id="huisnummer" name="huisnummer"><br>
            
            <label for="postcode">Postcode</label><br>
            <input type="text" id="postcode" name="postcode"><br>
            
            <label for="woonplaats">Woonplaats</label><br>
            <input type="text" id="woonplaats" name="woonplaats"><br>
            
            <input type=submit value="registreren"><br>
            </form>
            </div>
        </div>
    </body>
</html>
