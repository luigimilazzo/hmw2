<html>
    <head>
        <link rel='stylesheet' href='{{ url("signup.css")}}'>
        <script src='{{ url("signup.js")}}' defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prigioni - Registrati</title>
    </head>
    <body>
            <h1>Inserisci qui i tuoi dati</h1>
            <div id="contenuto">
            <form name='signup' method='post' enctype="multipart/form-data" autocomplete="off">
                <input type='hidden' name='_token' value='{{$csrf_token}}'>
                <div class="nomi">
                    <div class="nome">
                        <div><label for='name'>Nome</label></div>
                        <!-- Se il submit non va a buon fine, il server reindirizza su questa stessa pagina, quindi va ricaricata con 
                            i valori precedentemente inseriti -->
                        <div><input type='text' name='name'></div>
                    </div>
                    <div class="surnames">
                        <div><label for='surname'>Cognome</label></div>
                        <div><input type='text' name='surname'></div>
                    </div>
                </div>
                <div class='codFisc'>
                <div><label for='codice'>Codice fiscale</label></div>
                    <div><input type='text' name='cod'></div>
                </div>
                <div class='dataN'>
                <div><label for='data'>Data Nascita</label></div>
                    <div><input type='text' name='dataNa'></div>
                </div>
                <div class="username">
                    <div><label for='username'>Nome utente</label></div>
                    <div><input type='text' name='username'></div>
                </div>
                <div class="emails">
                    <div><label for='email'>Email</label></div>
                    <div><input type='text' name='email'></div>
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password'></div>
                </div>
                <div class="confermaPassword">
                    <div><label for='confirm_password'>Conferma Password</label></div>
                    <div><input type='password' name='confermaPassword'></div>
                </div>
                <div class="submit">
                    <input type='submit' value="Registrati" name="submit" disabled>
                </div>
                <div id = 'error'>
                        <div id ="nameError" class= 'hidden' class ='error'></div>
                        <div id="dataError" class='hidden' class='error'></div>
                        <div id ="surnameError" class= 'hidden' class ='error'></div>
                        <div id ='checkPassword' class = 'hidden' class ='error'>Password non valida</div>
                        <div id='emailError' class ='hidden' class ='error'>Email non valida</div>
                        <div id='codError' class ='hidden' class ='error'></div>  
                        <div id='usernameError' class='hidden' class='error'></div>
                       
                </div>  
                </form>
            <div class="signup">Hai già un account? <a href='{{ url("login")}}'>Accedi</a>
        </div>
        </body>
</html>