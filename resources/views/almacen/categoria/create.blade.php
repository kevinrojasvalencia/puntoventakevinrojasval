@extends('layouts.admin')
@section('contenido')

    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Crear Nueva Categoría</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('categoria.store') }}" method="POST" class="form">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="categoria">Nombre</label>
                        <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Ingrese el nombre de la categoría">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese la descripción">
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success me-1 mb-1">Guardar</button>
                        <button type="button" class="btn btn-danger me-1 mb-1" onclick="window.location.href='{{ route('categoria.index') }}'">Cancelar</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.row -->
@endsection