<html>
    <head>
        <link rel='stylesheet' href='{{ url("login.css")}}'>
        <script src='{{url("login.js")}}' defer> </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prigioni - Accedi</title>
    </head>
    <body>
            <h1>Benvenuto in questo sito web</h1>
            <div id='intro'>
            @if(isset($old_username))
            <div class='errore'> Credenziali non valide </div>
            @endif
            <p class='hidden'> Inserisci tutte le credenziali </p> 
            <form name='login' method='post'>
                <!-- Seleziono il valore di ogni campo sulla base dei valori inviati al server via POST -->
                <div class="token">
                <input type='hidden' name='_token' value='{{$csrf_token}}'>
                </div>
                <div class="username">
                    <div><label for='username'>Username</label></div>
                    <div><input type='text' id='username' name='username' value='{{ $old_username}}'></div>
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' id='password' name='password'></div>
                </div>
                <div>
                    <input type='submit' value="Accedi">
                </div>
            </form>
           <div class="signup">Non hai un account? <a href='{{ url("register")}}'>Iscriviti</a>
            </div>
        </body>
</html>