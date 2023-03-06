<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/transaksi.css')}}">
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
<div class="container mt-4">
<div class="posts0">
<div class="posts1">
<div class="row product-grid-3">
  @foreach ($posts as $post)
  <div class="col-lg-4 col-md-4 col-6 col-sm-6 kartu">
    <div class="card" style="width: 11rem;">
      <img class="card-default" src="{{ asset($post->image) }}" alt="Card image cap">
      <div class="card-body">
        <div class="text-center">
        <h6 class="card-title">{{ $post->name }}</h6>
        <h6><p class="card-text">Rp. {{ $post->price }}</p></h6>
      </div>
      </div>
    </div>
  </div>                                       
  @endforeach
</div>
</div>
<div class="posts2">
  <div class="card-body">
    <div class="text-center">
    <h4 class="card-title text-dark pb-3">Pesanan</h4>
  </div>
      <div class="row pb-2">
        <div class="col p-auto"><img src="{{ asset($post->image) }}" class="img-thumbnail" style="width:70px"  /></div>
        <div class="col p-auto">{{ $post->name }}</div>
        <div class="col p-auto">X1</div>
        <div class="col p-auto text-info">Rp.{{ $post->price }}</div>
      </div>
      <button type="button" class="btn btn-outline-danger w-100 btn-block clear">Clear Cart</button>
  <div class="text-center">            
      <p>      
      <button type="button" class="btn btn-success cart" data-bs-toggle="modal" data-bs-target="#myModal1">
        Save Bill</button>
      <button type="button" class="btn btn-success cart">Print Bill</button>
      </p>
      <button type="button" class="btn btn-primary w-100 clear" data-bs-toggle="modal" data-bs-target="#myModal">
        Charge Rp.{{ $post->price }}
      </button>
</div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-lg">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Detail Pesanan</h4>
            </div>

            <div class="modal-body">
              <div class="container-fluid">
                    <div class="row">
                      <div class="col-8 col-sm-6">
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
                                <td><img src="{{ asset($post->image) }}" class="img-thumbnail" style="width:40px"  /></td>
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
                      <div class="col-4 col-sm-6">
                        <div class="text-center">
                          <h5> Uang Pembeli (RP)</h5>
                        </div>
                        <input type="text" class="form-control" name="price" value="{{ old('price') }}"  placeholder="Price" aria-label="Username" aria-describedby="addon-wrapping">
                        <p>
                          <button type="button" class="btn btn-outline-dark mt-3 h5 mdl" data-bs-dismiss="modal" >Close</button>
                          <button type="button" class="btn btn-info text-light mt-3 h5 mdl">Pay</button></p>
                          <h5 class="kembalian"> Kembalian!! </h5>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</div>
</div>


<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info text-light">
        <h5 class="modal-title">Save Bill</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-light">
        <p>Apakah anda yakin untuk menyimpan pesanan ini ?</p>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-outline-dark">Simpan</button>
      </div>
    </div>
  </div>
</div>

  </body>
</html>