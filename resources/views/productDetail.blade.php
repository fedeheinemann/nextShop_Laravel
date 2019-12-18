@extends('layouts/layout-ns')

@section('title')
    nextShop::Detalle

@endsection

@section('main')

<!-- Contenido -->

  <div class="container bg-light ">

    <div class="row">

      <div class="col-lg-3">

          @foreach ($categories as $cat)
          @if ($cat->id === $products->category_id)
          <h5 class="my-4">{{ $cat->name }}</h5> 
          @endif 
          @endforeach
        
<!-- Barra de Navegavión Categorías Notebook Marcas -->

          <div class="list-group navbarIzq">
            @foreach ($brands as $brand)
            @if ($brand->id === $products->brand_id)
                <a class="list-group-item" href="#">{{ $brand->name }}</a> 
            @endif  
            @endforeach
          </div>

      </div>

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="/storage/{{ $products->image_detail }}" alt="">
          <div class="card-body">
          <h4 class="card-title">{{ $products->name }}</h4>
            <h5>${{ number_format($products->price,2,",",".")}}</h5>
            <p class="card-text">{{ $products['description'] }}</p>
            
            <div class="align-items-center">
            
            <span class="badge">
                <form method="post" action="/cart/add/{{ $products['id'] }}">
                <div class="form-group">
                  @csrf
                  <div class="form-goup">
                  <button type="submit" class="btn btn-danger btn-sm">Comprar</button>
                  </div>
                </div>
                </form>
            </span>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9734; &#9734;</span>
            3 estrellas
            </div>

            <!-- Tech Specs Accordion Format -->

            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Especificaciones Técnicas
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <!-- Tech Specs -->

                    {{ $products['specifications'] }}

                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Productos Relacionados
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Combos Disponibles
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Opiniones sobre el producto
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non!</p>
            <small class="text-muted">Posted by Pepito on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Sarasa on 3/1/17</small>
            <hr>
            <p>Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Lo'que'sea on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-outline-success btn-sm">Dejanos tu opinión</a>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
@endsection