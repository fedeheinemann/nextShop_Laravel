@extends('layouts/layout-ns')

@section('title')
    nextShop::Ingresa a nuestro sitio
@endsection

@section('main')
    
  <div class="container bg-light ">

    <div class="row">

      <div class="col-lg-3">

        <h4 class="my-4">Bienvenido</h4>

    <!-- Barra de Navegación Izquierda-->

        <div class="list-group navbarIzq">
            <a class="list-group-item " href="#">Publicidad</a>
            <a class="list-group-item" href="#">Publicidad</a>
            <a class="list-group-item " href="#">Publicidad</a>
        </div>

      </div>

    <!-- Formulario Login-->

    <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Ingresá a nextShop | Si no tenés una cuenta registrate <a href="/register">aquí</a>
          </div>
          <div class="card-body">

            <div class="form-login">

                <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Dashboard</div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    You are logged in!
                                </div>
                            </div>
                        </div>
                </div>

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