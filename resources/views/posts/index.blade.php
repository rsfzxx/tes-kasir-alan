<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
<div class="container">
    <h6>Tambahkan menu Makanan yang ada di resto</h6>
    </div>
        <div id="app">
      <div class="main-wrapper">
        <div class="main-content">
          <div class="container">
            <div class="card mt-5">
              <div class="card-body">
                @if (session('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                  <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <p>
                  <a class="btn btn-primary" href="{{ route('posts.create') }}">Tambah Menu</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Foto</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($posts as $post)
                      <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <td><img src="{{ asset($post->image) }}" class="img-thumbnail" style="width:70px"  /></td>
                        <td>Rp.{{ $post->price }}</td>
                       </tr>
                    @empty
                      <tr>
                        <td colspan="6">
                            No record found!
                        </td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>