<html>
  <head>
    <link rel="stylesheet" href='{{url("inserisci.css")}}'>
    <script src='{{url("inserisci.js")}}' defer="true"></script>
  </head>
    <body>
    
    <span>@if(isset($username)) {{$username}}
    @endif
          </span>
          <a href='{{url("logout")}}'>Logout</a>
          <a href='{{url("home")}}'>Home</a>
          <p id='intro'>Inserisci qui il carcere in cui lavori tra quelli suggeriti </p>
          <div id='padre'>
            <div id='penitenziario'> Carcere</div>
          </div>

    </body>
</html>