    <!DOCTYPE html> 
    <html>
        <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="proba.css">
            
        </head> 
        <body>

        <div class="container registracija">
                    <h2>Registrujte se</h2>

                        <form action="medjufajl.php" method="post">
                            <input name="first-name" id="ime" class="form-control" type="text" autocomplete="off" placeholder="Vaše ime">
                            <input name="last-name" id="prezime" class="form-control" type="text" autocomplete="off" placeholder="Vaše prezime">
                            <input name="email" id="email" class="form-control" type="text" autocomplete="off" placeholder="Vaša email adresa">
                            <input name="username" id="korisnicko" class="form-control" type="text" autocomplete="off" placeholder="Vaše korisničko ime">
                            <input name="password" id="lozinka" class="form-control" type="text" autocomplete="off" placeholder="Vaša lozinka">
                            <button type="submit" name="submit"> Registrujte se </button>
                             
                        </form>
                        
                </div>
    </body>
    </html>
        
