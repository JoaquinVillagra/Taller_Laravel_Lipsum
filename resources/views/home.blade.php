@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading"><h4><b><center>Listado de Asignaturas dictadas</center></b></h4></div>
              <div class="panel-body">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8">
                              <table class="table table-stiper">
                                  <thead>
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Profesor</th>
                                      <th>Nivel</th>
                                      <th>Acciones</th>
                                    </tr>
                                  </thead>
                                  <tbody>

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
