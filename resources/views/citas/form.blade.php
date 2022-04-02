@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <?php echo $cita->exists ? 'Editar' : 'Crear' ?> cita
        </div>
        <div class="card-body">
            {{ html()->modelForm($cita, $cita->exists ? 'put' : 'post', $cita->exists ? route('citas.update', $cita->id) : route('citas.store'))->attributes(['id' => 'formulario'])->open() }}

            <div class="mb-3">
                <label for="usuario_id" class="form-label">Usuario</label>
                {{ html()->select('usuario_id', $usuario)->placeholder('Selecciona el usuario')->class('form-control form-control-sm') }}
            </div>

            <div class="mb-3">
                <label for="psicologo_id" class="form-label">Psicologo</label>
                {{ html()->select('psicologo_id', $psicologo)->placeholder('Selecciona el psicologo')->class('form-control form-control-sm') }}
            </div>
            <div class="mb-3">
                <label for="fecha_consulta" class="form-label">Fecha de la consulta</label>
                <input type="date" name="fecha_consulta" id="fecha_consulta" class="form-control @error('fecha_consulta') is-invalid @enderror" value="{{ old('fecha_consulta') }}" required>
            </div>

            <div class="mb-3">
                <label for="estatus0" class="form-label">Estatus</label>
                <div>
                    <div class="form-check form-check-inline">
                        {!! html()->radio('estatus', 'activa' == $cita->estatus, 'activa')->class('form-check-input')->attributes(['id' => 'estatus0']) !!}
                        <label class="form-check-label" for="estatus0">activa</label>
                    </div>
                    <div class="form-check form-check-inline">
                        {!! html()->radio('estatus', 'inactiva' == $cita->estatus, 'inactiva')->class('form-check-input')->attributes(['id' => 'estatus1']) !!}
                        <label class="form-check-label" for="estatus1">inactiva</label>
                    </div>
                </div>
            </div>
            {!! html()->button('<i class="fa fa-save"></i> Guardar')->type('submit')->class('btn btn-primary btn-sm') !!}

            {{ html()->closeModelForm() }}
        </div>
    </div>
</div>

@endsection