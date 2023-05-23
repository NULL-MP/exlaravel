@extends('layout/plantilla')

@section('tituloPagina',"Crear un nuevo Registro")

@section('contenido')
    <div class="card">
        <div class="card-header">
        Actualizar Usuario
        </div>
        <div class="card-body">
        <p class="card-text">
            <form action="{{route ('personas.update' , $personas->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <label for="">Identificacion</label>
                        <input type="text" name="ide" class="form-control" required value="{{$personas->ide}}" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}" >
                    </div>
                    <div class="col">
                        <label for="">Segundo Nombre</label>
                        <input type="text" name="segNom" class="form-control" required value="{{$personas->segNom}}" >
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <label for="">Apellido Paterno</label>
                        <input type="text" name="paterno" class="form-control" required  value="{{$personas->paterno}}">
                    </div>
                    <div class="col">
                        <label for="">Apellido Materno</label>
                        <input type="text" name="materno" class="form-control" required value="{{$personas->materno}}" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Telefono</label>
                        <input type="number" name="telefono" class="form-control" required value="{{$personas->telefono}}" >
                    </div>
                    <div class="col">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required value="{{$personas->email}}" >
                    </div>
                </div>
                <label for="">Fecha de Nacimiento</label>
                <input type="date" name="fechaNac" class="form-control" required  value="{{$personas->fechaNac}}">
                <hr>
                <a href="{{route ('personas.index')}}" class="btn btn-info">
                    <span><i class='bx bx-caret-left-circle'></i></span> regresar
                </a>
                <button class="btn btn-warning">
                <i class='bx bx-user-check'></i>  Actualizar
                </button>
                
            </form>    
        </p>

        </div>
    </div>
    
@endsection