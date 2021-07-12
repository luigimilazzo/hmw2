<html>
  <head>
    <link rel="stylesheet" href='{{url("celle.css")}}'>
    <script src='{{url("celle.js")}}' defer="true"></script>
  </head>
  <body>
          <span class='utente'> @if(isset($username))  {{$username}} 
          @endif
          </span>
        &nbsp<a href='{{url("logout")}}'>Logout</a>
        <a href='{{url("home")}}'>Home</a>
        <form name='invioDato' enctype="multipart/form-data" autocomplete="off">
        <div class='text'><label for='numero'>Numero per la ricerca</label></div>
        <input type='text' name='numero' id='numero'>
        <div class='bigger'>
        <div class='big'>
            <div id='cella'> Cella &nbsp</div>
            <div id='dp'>N_detenuti &nbsp</div>

        </div>
        </div>
   </body>
</html>