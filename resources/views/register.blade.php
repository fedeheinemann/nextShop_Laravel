<?php

$errorEmail = '';
$errorPassword = '';
$email = '';

?>

@extends('layouts/layout-ns')

@section('title')
    nextShop::Formulario de Registro
@endsection

@section('main')
    
  <div class="container bg-light ">

    <div class="row">

      <div class="col-lg-3">

        <h4 class="my-4">Unite a nextShop</h4>

    <!-- Barra de Navegación Izquierda-->

        <div class="list-group navbarIzq">
            <a class="list-group-item " href="#">Publicidad</a>
            <a class="list-group-item" href="#">Publicidad</a>
            <a class="list-group-item " href="#">Publicidad</a>
        </div>

      </div>

    <!-- Formulario Registro-->

    <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Completá este formulario para registrarte en nuestro sitio | Si estás registrado ingresá <a href="/login">aquí</a>
          </div>
          <div class="card-body">
            <div class="form-login">

              <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Por favor, ingrese su nombre" name="name" value="{{old('name')}}">
                  @error('name')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">Correo electrónico</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Por favor, ingrese su correo electrónico" name="email" value="{{old('email')}}">
                  @error('email')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Por favor, ingrese su contraseña" name="password">
                  @error('password')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password_confirmatio">Confirmar Contraseña</label>
                  <input type="password" class="form-control" id="password_confirmation" placeholder="Por favor, confirme su contraseña" name="password_confirmation">
                </div>
                <div class="form-group">
                  <label for="avatar">Subir Avatar</label>
                  <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" id="avatar" name="avatar">
                  @error('avatar')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
                  <label class="form-check-label" for="terminos">Acepto los Términos y Condiciones</label>
                </div>
                <button type="submit" class="btn btn-secondary">Registrarse</button>
              </form>
            </div>

            <!-- Fin Formulario Registro-->

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