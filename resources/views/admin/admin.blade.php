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
                    <li class="list-group-item">
                        <span class="badge">#ID: {{ $prod['id'] }} |</span>
                        <span class="badge">Stock: {{ $prod['stock'] }} |</span>
                        <small>{{ $prod['name'] }}</small>
                      <div class="buttonAdminList">
                        <span class="badge">
                          <a class="btn btn-outline-dark btn-sm" href="/admin/edit/{{$prod->id}}">Modificar</a>
                        </span>
                        <span class="badge">
                          <form method="post" action="/admin/edit/{{$prod->id}}">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
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
            <small class="text-muted">&copy; 2019 nextShop S.A.I.C.e.I.</small>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>

@endsection