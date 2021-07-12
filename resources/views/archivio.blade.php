<html>
  <head>
    <link rel="stylesheet" href='{{url("archivio.css")}}'>
    <script src='{{url("archivio.js")}}' defer="true"></script>
  </head>
  <body>
        <span class='utente'> @if(isset($username))  {{$username}} 
          @endif
        </span>
        &nbsp<a href='{{url("logout")}}'>Logout</a>
        <a href='{{url("home")}}'>Home</a>
        <form name='invioDato' enctype="multipart/form-data" autocomplete="off">
        <div><label for='let'>Cognome per la ricerca</label></div>
        <input type='text' name='lettera' id='lettera'>
        <div class='bigger'>
        <div class='big'>
            <div id='nome'> Nome</div>
            <div id='cognome'> Cognome</div>
            <div id='penitenziario'> Carcere</div>

        </div>
        </div>
    </body>
    </html>