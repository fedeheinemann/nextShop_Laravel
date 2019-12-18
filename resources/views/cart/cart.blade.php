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
                  <button type="submit" class="btn btn-outline-danger btn-sm">Vaciar Carrito</button>                
              </form>
            </div>
          </div>

          <div class="card-body">
            {{-- Mensaje de alerta --}}
            <div class="">
                @if (session('status'))
                    <div class="alert alert-{{session('operation')}}">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
           {{-- Fin mensaje de alerta --}}
           
           {{-- Formulario de visualización del carrito --}}

            <div class="form-login">
             
              <ul class="list-group">
                @forelse ($cart as $item)

                <li class="list-group-item">
                  <span class="font-cart">{{$item->name}} /</span>
                  <span class="font-cart"><strong> ${{number_format($item->price,2,",",".")}} </strong> /</span>
                  <span class="font-cart"><strong> {{$item->pivot->quantity}} Un.</strong> /</span>
                  
                  <span class="font-cart">
                    <?php $subtotal += ($item->price * $item->pivot->quantity) ?>
                    Subtotal: ${{ number_format($item->price * $item->pivot->quantity,2,",",".") }}
                  </span>
                  <br>
                  <hr>
                  <span class="badge">
                  <form method="post" action="/cart/update/{{$item->id}}">
                    @csrf
                      <div class="input-group">
                        <select class="custom-select" name="quantity" id="#" aria-label="">
                          @for ($i = 1; $i < 101; $i++)
                          <option>{{ $i }}</option>
                          @endfor
                        </select>
                          <div class="input-group-append">
                          <button type="submit" class="btn btn-outline-secondary"><i class="fas fa-redo-alt"></i></button>
                          </div>
                      </div>
                  </form>   
                  </span>

                  <span class="badge">
                    {{-- Botón Delete Item--}}
                    <form method="post" action="/cart/delete/{{ $item->id }}" enctype="multipart/form-data">
                      @csrf
                      @method('delete')
                    <input type="hidden" name="id" value="{{ $item->id }}">
                      <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </form>
                  </span>

                </li>

                @empty
                  <h6><span class="label label-warning">No hay productos en tu carrito :(</span></h6>    
                @endforelse
              </ul>
            
              <br>
                <div class="alert alert-dark col-lg-6" role="alert">
                  Total: <strong> ${{number_format($subtotal,2,",",".")}} </strong>
                </div>

            </div>

            {{-- Fin .form-login --}}
            
            <hr>
            {{-- Fin formulario de visualización del carrito --}}
            
            <div>
              <span class="badge"><a href="/" class="btn btn-outline-info btn-sm">
                <i class="fa fa-chevron-circle-left"></i> Seguir comprando
              </a></span>
              <span class="badge"><a href="#" class="btn btn-outline-secondary btn-sm">
                Continuar <i class="fa fa-chevron-circle-right"></i>
              </a></span>
            </div>

            </div>
            {{-- Fin .card-body --}}
          
          
          </div>
            {{-- Fin .card card-outline-secondary my-4 --}}

        </div>
        <!-- /.lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container bg-light-->

@endsection