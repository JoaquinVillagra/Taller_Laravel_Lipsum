Clase 2
 => home.blade.php =>
                                  @foreach ($asignaturas as $asignatura)
                                  <tr>
                                    <td>{{$asignatura->nombre}}</td>
                                    <td>{{$asignatura->profesor}}</td>
                                    <td>{{$asignatura->nivel}}</td>
                                    <td><a href="/ver/asignatura/{{$asignatura->id}}" class="btn btn-primary btn-sm" ><i class="fa fa-eye" aria-hidden="true"></i> Ver </a>
                                    <a href="/editar/asignatura/{{$asignatura->id}}"class="btn btn-warning btn-sm"><i class="fa fa-edit" aria-hidden="true"> Editar </i></a>
                                    <a href="/eliminar/asignatura/{{$asignatura->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o fa-lg"></i> Eliminar</a></td>
                                  </tr>
                                  @endforeach
