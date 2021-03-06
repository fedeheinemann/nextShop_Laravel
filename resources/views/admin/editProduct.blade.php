@extends('layouts/layout-ns')

@section('title')
    nextShop::Formulario de Edición de Productos
@endsection

@section('main')
{{-- @dd($products); --}}
  <div class="container bg-light ">

    <div class="row">

      <div class="col-lg-3">

        <h6 class="my-4">Administrador. Editar Producto</h6>
        
    <!-- Barra de Navegación Izquierda-->
        @include('layouts/leftMenuAdmin')
      </div>

    <!-- Formulario Registro-->
{{-- {{$errors}} --}}
    <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Formulario de Edición de Productos | Por favor modifique todos los campos requeridos
          </div>
          <div class="card-body">
            <div class="form-login">

              <form method="post" action="/admin/edit/{{ $products->id }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Ingrese el nombre del producto" name="name" value="{{old('name', $products->name)}}">
                  @error('name')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="stock">Stock</label>
                  <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" aria-describedby="stockHelp" placeholder="Ingrese la cantidad de unidades" name="stock" value="{{old('stock', $products->stock)}}">
                  @error('stock')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="price">Precio</label>
                  <input type="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Ingrese el precio del producto" name="price" value="{{old('price', $products->price)}}">
                  @error('price')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="description">Descripción</label>
                  <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Inserte una descripción breve del producto" name="description">{{old('description', $products->description)}}</textarea>
                  @error('description')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="specifications">Especificaciones técnicas</label>
                  <textarea type="text" class="form-control @error('specifications') is-invalid @enderror" id="specifications" placeholder="Inserte una descripción breve del producto" name="specifications" >{{old('specifications', $products->specifications)}}</textarea>
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
                    <option value="{{$brand->id}}"
                      {{ $products->brand_id == $brand->id ? 'selected=selected' : ''}}
                       {{ ($brand->id == old('brand_id')) ? 'selected' : '' }} >{{$brand->name}}</option>
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
                    <option value="{{$category->id}}" {{ $products->category_id == $category->id ? 'selected=selected' : ''}}
                      {{ ($category->id == old('category_id')) ? 'selected' : '' }} >{{$category->name}}</option>
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
                      <div class="col-md-6 mb-6 form-group">
                      <img src="/storage/{{ $products->image_home }}" alt="" width='100%'>
                      </div>
                      <input type="file" id="image_home" name="image_home">
                      @error('image_home')
                          <div class="invalid-feedback">{{$message}}</div>
                      @enderror

                </div>
                <div class="col-md-6 mb-6 form-group">

                      <label for="image_detail">Imagen Detalle</label>
                      <div class="col-md-6 mb-6 form-group">
                      <img src="/storage/{{ $products->image_detail }}" alt="" width='100%'>
                      </div>
                      <input type="file" class="@error('image_detail') is-invalid @enderror" id="image_detail" name="image_detail">
                      @error('image_detail')
                          <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-secondary">Guardar</button>
              </form>
            </div>

            <!-- Fin Formulario Registro-->

            <hr>
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