<!DOCTYPE html>
<html>
    <head>
        <title>Inloggen</title>

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
                <div class="title">inloggen</div>
                     <header>
            
            </header>
            <table>
            
            <form action="inlogscript.php" method="post">
            <td>
            <labl for="username">Gebruikersnaam</labl><br>    
            <input type="text" id="username" name="username"></td><br>
            <td>
            <label for="password">Wachtwoord</label><br>
            <input type="password" id="password" name="password"></td><br>
            
            <input type="submit" value="inloggen">
                        
            </form>    
            </table>      
            <footer>
            
            </footer>
            </div>
        </div>
    </body>
</html>
