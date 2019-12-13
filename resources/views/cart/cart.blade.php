@extends('layouts/layout-ns')

@section('title')
    nextShop::Mi carrito
@endsection

@section('main')
    
  <div class="container bg-light">

    <div class="row">

      <div class="col-lg-3">

        <h5 class="my-4">Carrito de Compras</h5>

    <!-- Barra de Navegación Izquierda-->
        @include('layouts/leftMenuAdmin')

      </div>

    <!-- Listado de Productos -->

    <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Mi carrito
            <div class="buttonAdminList">
                <button type="button" class="btn btn-outline-danger btn-sm"><a href="{{ route('cart-trash') }}">Vaciar Carrito</a></button>                
            </div>
            </div>
          <div class="card-body">

            <div class="form-login">
              <div class="table-cart">
                {{-- @if(count($cart)) --}}
                <div class="table-responsive">
                  <table class="table-striped table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Quitar</th>
                      </tr>  
                    </thead> 
                      <tbody>
                        {{-- @foreach ($cart as $item) --}}
                            <tr>
                            <td><img src="/storage/{{ $item->image_home }}"></td>
                            <td>{{ $item->name }}</td>
                            {{-- <td>${{ number_format($item->price,2) }}</td> --}}
                            <td>${{ $item->price }}</td>
                            {{-- <td>
                              <input 
                                type="number"
                                min="1"
                                max='100'
                                value="{{ $item->quantity }}"
                                id="product_{{ $item->id }}"
                              >  
                              <a 
                                href="#"
                                class="btn btn-warning btn-update-item"
                                data-href="{{ route('cart-update', $item->id) }}"
                                data-id=" {{ $item->id }} "
                              >
                                <i class="fa fa-refresh"></i>
                              </a>
                            </td> --}}
                            <td>${{ number_format($item->price * $item->quantity,2) }}</td>
                            <td>
                              <a href="{{ route('cart-delete', $item->id) }}" class="btn btn-outline">
                                <i class="fas fa-trash-alt"></i>
                              </a>
                            </td>
                            </tr>
                        {{-- @endforeach --}}
                      </tbody>                  
                  </table>   
                </div>
                {{-- @else  --}}
                  <h4><span class="label label-warning">No hay productos en tu carrito.</span></h4>
                {{-- @endif --}}
              </div>
            </div>
            <hr>
            <p>
              <a href="/" class="btn btn-outline-secondary btn-sm">
                <i class="fa fa-chevron-circle-left"></i> Seguir comprando
              </a>
              <a href="#" class="btn btn-outline-secondary btn-sm">
                Continuar <i class="fa fa-chevron-circle-right"></i>
              </a>
            </p>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>

@endsection