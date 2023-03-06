<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/main.css')}}">
  </head>
  <body>
    <nav class="navbar bg-info h4">
      <div class="container">
        <a class="navbar-brand text-light" href="#">Alan Resto</a>
      </div>
    </nav>    
    <nav class="navbar2">
          <div class="container">
            <ul class="list-group list-group-horizontal h1">
                <li class="list-group"><a class="hover1" href="{{ route('posts.index') }}">          
                    Food
                  </a></li>          
              <li class="list-group"> <a class="hover1" href="{{ route('posts.transaksi') }}">
                    Transaksi
                  </a></li>
            </ul>
          </div>
    </nav>
    <h1> Charge </h1>
 </body>
</html>