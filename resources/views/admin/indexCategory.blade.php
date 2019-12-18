@extends('layouts/layout-ns')

@section('title')
    nextShop::Administración
@endsection

@section('main')
    
  <div class="container bg-light">

    <div class="row">

      <div class="col-lg-3">

        <h5 class="my-4">Administrador. Categorías.</h5>

    <!-- Barra de Navegación Izquierda-->
        @include('layouts/leftMenuAdmin')

      </div>

    <!-- Listado de Categorías -->

    <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Categorías 
            <div class="buttonAdminList">
                <button type="button" class="btn btn-outline-dark btn-sm"><a href="/admin/category/add">Alta Categoría</a></button>                
            </div>
            </div>
          <div class="card-body">

            <div class="form-login">

                <ul class="list-group">
                    @foreach ($categoriesOrdered as $cat)
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="productList">
                          <span class="badge">#ID: {{ $cat['id'] }} |</span>
                          <small>{{ $cat['name'] }}</small>
                        </div>
                        <div class="buttonAdminList">
                          <span><a class="btn btn-outline-dark btn-sm" href="/admin/category/{{$cat->id}}">Modificar</a></span>
                          <div class="buttonAdminListRadio">
                            <span><small>Visible</small></span>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" {{$cat->visible==1 ? 'checked' : ''}} name="visible{{$cat->id}}" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1"><small>Sí</small></label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" {{$cat->visible==0 ? 'checked' : ''}} name="visible{{$cat->id}}" id="inlineRadio2" value="0">
                                <label class="form-check-label" for="inlineRadio2" required><small>No</small></label>
                              </div>
                          </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
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
<script >
window.onload = function(){
  
}
</script>
@endsection