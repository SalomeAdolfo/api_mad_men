@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card-header">
        Citas
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 20%;">Fecha de consulta</th>
                    <th style="width: 20%;">Estatus</th>
                    <th style="width: 20%;">Usuario</th>
                    <th style="width: 20%;">Psicologo</th>
                    <th style="width: 20%;"><a class="btn btn-primary btn-sm" title="Crear cita" href="{!! route('citas.create') !!}">Crear</a></th>
                </tr>
                <tbody>
                    @foreach($cita as $cita)
                    <tr>
                        <td>{{ $cita-> fecha_consulta}}</td>
                        <td>{{ $cita-> estatus}}</td>
                        <td>{{ $cita-> usuario_id}}</td>
                        <td>{{ $cita-> psicologo_id}}</td>
                        <td>
                                <a class="btn btn-secondary btn-sm" href="{!! route('citas.edit', $cita->id) !!}" title="Editar producto">Editar</a>
                                &nbsp;
                                <form action="{!! route('citas.destroy', $cita->id) !!}" class="d-inline" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete" />
                                    <button class="btn btn-danger btn-sm" type="submit" title="Borrar">Borrar</button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
</div>
@endsection