@extends('layouts/layout-ns')

@section('title')
    nextShop::Formulario de Alta de Productos
@endsection

@section('main')
    
  <div class="container bg-light ">

    <div class="row">

      <div class="col-lg-3">

        <h5 class="my-4">Alta de Productos</h5>

    <!-- Barra de Navegación Izquierda-->

        @include('layouts/leftMenuAdmin')

      </div>

    <!-- Formulario Alta Producto-->

    <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Formulario de Alta de Productos | Por favor complete todos los campos requeridos
          </div>
          <div class="card-body">
            <div class="form-login">

              <form method="post" action="/admin/add" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Ingrese el nombre del producto" name="name" value="{{old('name')}}">
                  @error('name')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="stock">Stock</label>
                  <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" aria-describedby="stockHelp" placeholder="Ingrese la cantidad de unidades" name="stock" value="{{old('stock')}}">
                  @error('stock')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="price">Precio</label>
                  <input type="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Ingrese el precio del producto" name="price" value="{{old('price')}}">
                  @error('price')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="description">Descripción</label>
                  <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Inserte una descripción breve del producto" name="description" value="{{old('description')}}"></textarea>
                  @error('description')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="specifications">Especificaciones técnicas</label>
                  <textarea type="text" class="form-control @error('specifications') is-invalid @enderror" id="specifications" placeholder="Inserte una descripción breve del producto" name="specifications" value="{{old('specifications  ')}}"></textarea>
                  @error('specifications')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-row">
                <div class="col-md-6 mb-6 form-group">
                  <label for="brand_id">Marca</label>
                  <select class="custom-select custom-select-sm" name="brand_id" id="brand_id">
                      <option value="">Seleccione</option>
                @foreach ($brands as $brand)
                    <option value="{{$brand->id}}" {{ ($brand->id == old('brand_id')) ? 'selected' : '' }}>{{$brand->name}}</option>
                @endforeach
                  </select>
                  @error('brand_id')
                      {{ $message }}
                  @enderror
                </div>
                <div class="col-md-6 mb-6 form-group">
                  <label for="category_id">Categoría</label>
                  <select class="custom-select custom-select-sm" name="category_id" id="category_id">
                      <option value="">Seleccione</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{ ($category->id == old('category_id')) ? 'selected' : '' }} >{{$category->name}}</option>
                @endforeach
                  </select>                 
                  @error('category_id')
                      {{ $message }}
                  @enderror
                </div>
                </div>
                <div class="form-row">
                <div class="col-md-6 mb-6 form-group">
                      <label for="image_home">Imagen Listado</label>
                      <input type="file" class="form-control @error('image_home') is-invalid @enderror" id="image_home" name="image_home">
                      @error('image_home')
                          <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                </div>
                <div class="col-md-6 mb-6 form-group">
                      <label for="image_detail">Imagen Detalle</label>
                      <input type="file" class="form-control @error('image_detail') is-invalid @enderror" id="image_detail" name="image_detail">
                      @error('image_detail')
                          <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-danger">Guardar</button>
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