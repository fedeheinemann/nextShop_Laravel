@extends('layouts/layout-ns')

@section('title')
    nextShop::Formulario de Alta de Marcas
@endsection

@section('main')
    
  <div class="container bg-light ">

    <div class="row">

      <div class="col-lg-3">

        <h5 class="my-4">Alta de Marcas</h5>

    <!-- Barra de Navegación Izquierda-->

        @include('layouts/leftMenuAdmin')

      </div>

    <!-- Formulario Alta Categoría-->

    <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Formulario de Alta de Marcas | Por favor complete todos los campos requeridos
          </div>
          <div class="card-body">

            <div class="form-login">

              <form method="post" action="">
                @csrf
                <div class="form-group">
                  <label for="name">Nombre</label>

                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Ingrese el nombre de la marca" name="name" value="{{old('name')}}">
                  @error('name')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                  
                </div>

                <hr>
                <button type="submit" class="btn btn-danger">{{ __('Guardar') }}</button>
                
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