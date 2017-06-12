@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading"><h4><b><center>Listado de Usuarios</center></b></h4></div>
              <div class="panel-body">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8">
                              <table class="table table-responsive">
                                  <thead>
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Correo</th>
                                      <th>Acciones</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                      <th>{{ $user->name }}</th>
                                      <th>{{ $user->email}}</th>
                                      <th>
                                      <a href="/eliminar/usuario/{{$user->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o fa-lg"></i> Eliminar</a>
                                      </th>
                                    </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>  
              </div>
          </div>
      </div>
    </div>
</div>











@endsection
