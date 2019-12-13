@extends('layouts/layout-ns')

@section('title')
    nextShop::Administración
@endsection

@section('main')
    
  <div class="container bg-light">

    <div class="row">

      <div class="col-lg-3">

        <h5 class="my-4">Administrador. Marcas.</h5>

    <!-- Barra de Navegación Izquierda-->
        @include('layouts/leftMenuAdmin')

      </div>

    <!-- Listado de Categorías -->

    <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Marcas 
            <div class="buttonAdminList">
                <button type="button" class="btn btn-outline-dark btn-sm"><a href="/admin/brand/add">Alta Marcas</a></button>                
            </div>
            </div>
          <div class="card-body">

            <div class="form-login">

                <ul class="list-group">
                    @foreach ($brands as $brand)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="productList">
                        <span class="badge">#ID: {{ $brand['id'] }} |</span>
                        <small>{{ $brand['name'] }}</small>
                        </div>
                        <div class="buttonAdminList">
                        <span><a class="btn btn-outline-dark btn-sm" href="/admin/brand/{{$brand->id}}">Modificar</a></span>
                        <span><a class="btn btn-outline-dark btn-sm" href="#">Eliminar</a></span>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
            <hr>
            <div class="form-login">
              {{ $brands->links() }}
            </div>
            <hr>
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