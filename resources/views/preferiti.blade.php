
<html>
  <head>
    <meta charset="utf-8">
    <title>Prigioni preferite</title>
    <link rel="stylesheet" href='{{url("preferiti.css")}}'>
    <script src='{{url("preferiti.js")}}' defer="true"></script>
  </head>
  <body>
  <span> @if(isset($username)) {{$username}}
    @endif
          </span>
    <a href='{{url("logout")}}'>Logout</a>
    <a href='{{url("home")}}'>Home</a>
    <h1 id="pr" class="hidden">Preferiti</h1>
    <div id="pre" class="hidden">
    </div>
    <div class="intro">
    <h1> Tutti i carceri </h1>
    <p>Cerca</p>
    <input type="text" id="ricerca">
    </div>
    <div id="griglia">
    </div>
</body>
  </html>