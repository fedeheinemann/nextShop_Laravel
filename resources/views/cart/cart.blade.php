@extends('layouts/layout-ns')

@section('title')
    nextShop::Mi carrito
@endsection

@section('main')
<?php
$subtotal = 0;
?>
  <div class="container bg-light">

    <div class="row">

      <div class="col-lg-3">

        <h5 class="my-4">Carrito de Compras</h5>

    <!-- Barra de Navegación Izquierda-->
      <div class="list-group navbarIzq">
            <a class="list-group-item " href="#">Publicidad</a>
            <a class="list-group-item" href="#">Publicidad</a>
            <a class="list-group-item " href="#">Publicidad</a>
        </div>

      </div>

    <!-- Listado de Productos -->

    <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Mi carrito
            <div class="buttonAdminList">
              <form action="/cart/vaciarCarrito" method="post">
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
                          <span class="badge">Precio: ${{number_format($item->price,2)}}</span>
                          <span class="badge">Cantidad: {{$item->pivot->quantity}} U.</span>

                          {{-- Selector de cantidad --}}
                          <div class="d-flex buttonAdminList"> 
                          <span class="badge">
                          
                          <form method="post" action="/cart/update/{{$item->id}}">
                              <div class="form-group">
                                @csrf
                              <label for="comprar"></label>
                                <select class="form-control" name="quantity" id="#">
                                @for ($i = 1; $i < 101; $i++)
                                    <option>{{ $i }}</option>
                                @endfor
                                </select>
                                <div class="form-goup">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-redo-alt"></i></button>
                                </div>
                              </div>
                          </form>
                        </span>
                      </div>

                            <span class="badge">
                              <?php $subtotal += ($item->price * $item->pivot->quantity) ?>
                              Subtotal: ${{ number_format($item->price * $item->pivot->quantity,2,",",".") }}
                            </span>  
                          <div class="d-flex buttonAdminList"> 
                          <span class="badge">
                            {{-- Botón Delete Item--}}
                            <form method="post" action="/cart/delete/{{ $item->id }}" enctype="multipart/form-data">
                              @csrf
                              @method('delete')
                            <input type="hidden" name="id" value="{{ $item->id }}">
                              <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                          </span>
                          </div>
                          </div>
                      </li>
                      
                  @empty
                        <h4><span class="label label-warning">No hay productos en tu carrito :(</span></h4>    
                  @endforelse
              </ul>
              </div>
            <div class="form-group">

              <small>Total a pagar: {{number_format($subtotal,2,",",".")}}</small> 

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
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

@endsection