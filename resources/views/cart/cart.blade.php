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
              <form action="/cart/trash" method="post">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Vaciar Carrito</button>                
              </form>
            </div>
            </div>
          <div class="card-body">

            <div class="">
                @if (session('status'))
                    <div class="alert alert-{{session('operation')}}">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
           
            <div class="form-login">
              <ul class="list-group">
                 @forelse ($cart as $item)
                      <li class="list-group-item d-flex justify-content-between align-items-left">
                          <div class="productsList">
                          <small>{{$item->name}}</small>
                          <span class="badge">Precio: {{$item->price}} |</span>
                          <span class="badge">Cantidad: {{$item->pivot->quantity}} |</span>
                          <span class="badge">Subtotal: {{number_format($item->pivot->quantitiy * $item->price,2)}}</span>

                          </div>          
                          <div class="d-flex buttonAdminList">
                          <span><a class="btn btn-outline-dark btn-sm" href="#"><i class="fas fa-redo-alt"></i></a></span>
                          <span>
                            <form method="post" action="/cart/delete/{{ $item->id }}" enctype="multipart/form-data">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                          </span>
                          </div>
                      </li>
                  @empty
                        <h4><span class="label label-warning">No hay productos en tu carrito.</span></h4>    
                  @endforelse
              </ul>

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