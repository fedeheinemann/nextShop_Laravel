@extends('layouts/layout-ns')

@section('title')
  ¡Bienvenido a nextShop!
@endsection

@section('main')

    <div class="row">

      <!-- /.col-lg-3 -->

      <div class="col-lg-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="/img/lenovo_ideapad_s145_900x350.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class=" d-block w-100 img-fluid" src="/img/acerGamerDeskPredator_950x600.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="/img/amd_razen_5_900x350.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
<<<<<<< HEAD
              @foreach ($products as $prod)
                        <div class="col-lg-4 col-md-6 mb-4">
                          <div class="card h-100">
                          <a href="/products/{{ $prod['id'] }}"><img class="card-img-top" src="/storage/{{ $prod['image_home'] }}" alt=""></a>
                            <div class="card-body">
                              <h5 class="card-title">
                                <a href="#">{{ $prod['name'] }}</a>
                              </h5>
                              <h6>$ {{ $prod['price'] }}</h6>
                              <small>{{ $prod['description']}}</small>
                            </div>
                            <div class="card-footer">
                              <span><a class="btn btn-outline-secondary btn-sm" href="#">Comprar</a></span>
                            </div>
                          </div>
                        </div>
              @endforeach
=======

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/img/artA-artHome-700x400.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="detalle.php">Item One</a>
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
              <a href="#"><img class="card-img-top" src="/img/artB-artHome-700x400.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="detalle.php">Item Two</a>
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
              <a href="#"><img class="card-img-top" src="/img/artC-artHome-700x400.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="detalle.php">Item Three</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

>>>>>>> master
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-12 -->

    </div>
    <!-- /.row -->

@endsection
