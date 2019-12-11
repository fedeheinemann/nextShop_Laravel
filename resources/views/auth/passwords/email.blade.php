@extends('layouts/layout-ns')

@section('title')
    nextShop::Renueva tu contraseña.
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
            {{ __('Renovar Contraseña') }}
          </div>
          <div class="card-body">

            <div class="form-login">

              @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de e-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Renovar contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
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