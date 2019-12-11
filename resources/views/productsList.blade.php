<<<<<<< HEAD
@extends('layouts/layout-ns')

@section('title')
    nextShop::Productos
@endsection

@section('main')
    
  <!-- Contenido -->

  <div class="container bg-light">

    <div class="row">

      <div class="col-lg-3">

        <h4 class="my-4">Notebooks | Lenovo</h4>

<!-- Barra de Navegavión Categorías Notebook Marcas -->

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
                <a href="#"><img class="card-img-top" src="/storage/{{ $prod['image_home'] }}" alt=""></a>
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="#">{{ $prod['name'] }}</a>
                  </h5>
                <h6>$ {{ $prod['price'] }} </h6>
                  <small>{{ $prod['description'] }}</small>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
@endforeach
            {{-- <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/artB-artHome-700x400.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Two</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/artC-artHome-700x400.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Three</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/artD-artHome-700x400.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Four</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/artE-artHome-700x400.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Five</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/artF-artHome-700x400.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Six</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div> --}}

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
=======
Prueba Lista de Productos
>>>>>>> master
