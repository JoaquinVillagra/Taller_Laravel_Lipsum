@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de una nueva asignatura</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/asignaturas/create">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="user_id" value="{{ Auth::user->id }}">
                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre" autofocus required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nivel</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nivel" autofocus required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Descripcion</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="descrpcion" autofocus required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
