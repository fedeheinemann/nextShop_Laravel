@extends('layouts/layout-ns')

@section('title')
    nextShop::Administración
@endsection

@section('main')
    
  <div class="container bg-light">

    <div class="row">

      <div class="col-lg-3">

        <h5 class="my-4">Administrador. Productos.</h5>

    <!-- Barra de Navegación Izquierda-->
        @include('layouts/leftMenuAdmin')

      </div>

    <!-- Listado de Productos -->

    <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Productos 
            <div class="buttonAdminList">
                <button type="button" class="btn btn-outline-dark btn-sm"><a href="admin/add">Alta Producto</a></button>                
            </div>
            </div>
          <div class="card-body">

            <div class="form-login">

                <ul class="list-group">
                    @foreach ($products as $prod)
                    {{-- @dd($products); --}}
                    <li class="list-group-item d-flex justify-content-between align-items-left">
                        <div class="productsList">
                        <span class="badge">#ID: {{ $prod['id'] }} |</span>
                        <span class="badge">Stock: {{ $prod['stock'] }} |</span>
                        <small>{{ $prod['name'] }}</small>
                        </div>          
                        <div class="buttonAdminList">
                        <span><a class="btn btn-outline-dark btn-sm" href="/admin/edit/{{$prod->id}}">Modificar</a></span>
                        <span>

                          <form method="post" action="/admin/edit/{{$prod->id}}">
                          <div class="form-group">
                            @csrf
                            
                            <div class="form-goup">
                            <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                            </div>
                          </div>
                          </form>


                        </span>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
            <hr>
            <div class="form-login">
              {{ $products->links() }}
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>

@endsection