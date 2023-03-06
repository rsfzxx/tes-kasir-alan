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
    <div id="app">
      <div class="main-wrapper">
        <div class="main-content">
          <div class="container">
            <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="card mt-5">
                <div class="container">
                  <h5>Tambahkan Menu</h5>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <div class="alert-title"><h4>Maaf</h4></div>
                Ada Kesalahan saat melakukan input,Silahkan ulangi
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div> 
                    @endif

                    @if (session('success'))
                      <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                      <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <div class="mb-3">
                      <label class="form-label">Nama Menu</label>
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}"  placeholder="Name">
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Foto Menu</label>
                      <input class="form-control" type="file" style="height:100px" name="image" id="formFile">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Harga Menu</label>
                      <div class="input-group flex-nowrap">
                        <span class="input-group-text text-light bg-primary" id="addon-wrapping">Rp.</span>
                        <input type="text" class="form-control" name="price" value="{{ old('price') }}"  placeholder="Price" aria-label="Username" aria-describedby="addon-wrapping">
                      </div>
                    </div>
                    <div class="text-end">
                    <button class="btn btn-success btn-block" style="width:170px" type="submit">Simpan</button>
                  </div>
                </div>                
              </div>       
            </form>            
          </div>
        </div>
      </div>
    </div>
  </body>
</html>