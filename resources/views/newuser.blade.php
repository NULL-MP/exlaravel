@extends('layout/plantilla')

@section('tituloPagina',"Crear un nuevo Registro")

@section('contenido')
    <div class="card">
        <div class="card-header">
        Agregar Nuevo Usuario
        </div>
        <div class="card-body">
        <p class="card-text">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Identificacion</label>
                    <input type="number" name="ide" class="form-control" required>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="">Seg. Nombre</label>
                        <input type="text" name="segNom" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Apellido Paterno</label>
                <input type="text" name="paterno" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="">Apellido Materno</label>
                        <input type="text" name="materno" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Telefono</label>
                        <input type="number" name="telefono" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div> 
                
                <label for="">Fecha de Nacimiento</label>
                <input type="date" name="fechaNac" class="form-control" required>
                <hr>
                <a href="{{route ('personas.index')}}" class="btn btn-info"><span><i class='bx bx-caret-left-circle'></i></span> regresar</a>
                <button class="btn btn-primary"><i class='bx bx-user-plus'></i> Agregar</button>
                
            </form>    
        </p>

        </div>
    </div>
    
@endsection