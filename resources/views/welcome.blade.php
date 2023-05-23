@extends('layout.plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')
<br></br>
    <div class="card">
        <div class="card-header"> CRUD Personas </div>
        <div class="card-body">
         <div class="row">
            <div class="col-sm-12">

                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $mensaje }}
                </div> 
                @endif

            </div>
            </div>   
        <h5 class="card-title text-center">Listado de personas</h5>
        <p>
            <a href="{{route("personas.create")}}" class="btn btn-primary">
            <span><i class='bx bx-book-add'></i></span>    
            Agregar nueva persona</a>
        </p>
        <hr>

        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-small-sm table-bordered">
                    <thead>
                        <th>Identificacion</th>
                        <th>Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Fecha de nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                        <tr>
                            <td>{{$item->ide}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->segNom}}</td>
                            <td>{{$item->paterno}}</td>
                            <td>{{$item->materno}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->fechaNac}}</td>
                            <td>
                                <form action="{{route ('personas.edit',$item->id)}}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                    <span><i class='bx bx-edit-alt'></i></span>
                                </button>
                            </form>
                                
                            </td>
                            <td>
                                <form action="{{route ('personas.show',$item->id)}}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span><i class='bx bx-trash-alt' ></i></span>
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </p>
        </div>
  </div>

@endsection