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

              <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="email">{{ __('Correo electrónico') }}</label>

                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                  @enderror
                  
                </div>
                <div class="form-group">
                  <label for="password">{{ __('Contraseña') }}</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Ingresa tu contraseña" name="password" required autocomplete="current-password">
                  
                    @error('password')
                        <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                    @enderror

                </div>
                <div class="form-group form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="mantenerme">{{ __('Dejarme conectado') }}</label>
                </div>
                <button type="submit" class="btn btn-danger">{{ __('Ingresar') }}</button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('¿Olvidaste tu contraseña?') }}</a>
                @endif
                
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