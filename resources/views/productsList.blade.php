@extends('layouts/layout-ns')

@section('title')
    nextShop::Productos::{{ $cat->name }}
@endsection

@section('main')
    
  <!-- Contenido -->

  <div class="container-products container bg-light">

    <div class="row">

      <div class="col-lg-3">

        <h5 class="my-4">{{ $cat->name }}</h5>

<!-- Barra de Navegavión Categorías Notebook Marcas -->
{{-- @foreach ($products->brand as $item)    
            <div class="list-group navbarIzq">
                <a class="list-group-item " href="#">{{$item->name}}</a>
            </div>
@endforeach --}}
            <div class="list-group navbarIzq">
                <a class="list-group-item " href="#">Apple</a>
                <a class="list-group-item" href="#">Asus</a>
                <a class="list-group-item" href="#">Acer</a>
                <a class="list-group-item" href="#">Dell</a>
                <a class="list-group-item" href="detalle-lenovo-ipS145.php">Lenovo</a>
                <a class="list-group-item" href="#">Sony</a>
                <a class="list-group-item" href="#">Positivo BGH</a>
                <a class="list-group-item" href="#">HP</a>
                <a class="list-group-item" href="#">MSI</a>
                <a class="list-group-item" href="#">Silverstone</a>
            </div>
      </div>

      <!-- /.col-lg-3 -->


      <div class="col-lg-9">

          <div class="mainProd row">
@foreach ($products as $prod)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/products/{{ $prod->id }}"><img class="card-img-top" src="/storage/{{ $prod->image_home }}" alt=""></a>
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="/products/{{ $prod->id }}">{{ $prod->name }}</a>
                  </h5>
                <h6>$ {{ $prod->price }} </h6>
                  <small>{{ $prod->description }}</small>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
@endforeach
          </div>
          {{ $products->links() }}
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection