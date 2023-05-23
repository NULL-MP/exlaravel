@extends('layout/plantilla')

@section('tituloPagina',"Crear un nuevo Registro")

@section('contenido')
    <div class="card">
        <div class="card-header">
        Eliminar Usuario
        </div>
        <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">Estas Seguro de eliminar este Registro
                <hr>
            <table class="table table-sm table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de Nacimiento</th>
                </thead>
                <tbody>
                    <td>{{$personas->nombre}}</td>
                    <td>{{$personas->paterno}}</td>
                    <td>{{$personas->materno}}</td>
                    <td>{{$personas->fechaNac}}</td>
                </tbody>
            </table>
            <hr>
            <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route ('personas.index')}}" class="btn btn-info"><span><i class='bx bx-caret-left-circle'></i></span> regresar</a>
                <button class="btn btn-danger">
                <i class='bx bx-trash'></i> Eliminar</button>
            </form>
        </div>
        </p>

        </div>
    </div>
    
@endsection