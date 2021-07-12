<html>
  <head>
    <link rel="stylesheet" href='{{url("impieghi.css")}}'>
    <script src='{{url("impieghi.js")}}' defer="true"></script>
  </head>
    <body>
    <span>
    @if(isset($username))  {{$username}} 
        @endif
    </span>
    <a href='{{url("logout")}}'>Logout</a>
    <a href='{{url("home")}}'>Home</a>
    <span class='intro'>Qui puoi visualizzare i tuoi impieghi (passati e presenti) </span>
    </body>
</html>