{{ Form::open([ 'url' => $url, 'method' => $method, 'action' => $action]) }}

@csrf

<div class="form-group">
  {!! Form::label('nombre', 'Nombre') !!} {!! Form::text('nombre', $familia->nombre, ['class' => 'form-control'.($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese nombre', 'autofocus']) !!}
  @if ($errors->has('nombre'))
  <span class="invalid-feedback">
      <strong>{{ $errors->first('nombre') }}</strong>
  </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('direccion', 'Direccion') !!} {!! Form::text('direccion', $familia->direccion, ['class' => 'form-control'.($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese direccion']) !!}
  @if ($errors->has('direccion'))
  <span class="invalid-feedback">
      <strong>{{ $errors->first('direccion') }}</strong>
  </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('sector', 'Sector') !!} {!! Form::select('sector', ['Celeste' => 'Celeste', 'Naranjo' => 'Naranjo', 'Blanco' => 'Blanco' ], $familia->sector, ['class' => 'form-control'.($errors->has('sector') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione
  Sector']) !!}
  @if ($errors->has('sector'))
  <span class="invalid-feedback">
      <strong>{{ $errors->first('sector') }}</strong>
  </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('tipo_familia', 'Tipo Familia') !!} {!! Form::select('tipo_familia', ['Nuclear' => 'Nuclear', 'Nuclear Biparental' => 'Nuclear Biparental', 'Nuclear Monoparental' => 'Nuclear Monoparental', 'Reconstituida' => 'Reconstituida', 'Extendidada'
  => 'Extendidada', 'Unipersonal' => 'Unipersonal' ], $familia->tipo_familia, ['class' => 'form-control'.($errors->has('tipo_familia') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Tipo de Familia']) !!}
  @if ($errors->has('tipo_familia'))
  <span class="invalid-feedback">
      <strong>{{ $errors->first('tipo_familia') }}</strong>
  </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('etapa_ciclo_vital', 'Etapa Ciclo vital') !!} {!! Form::select('etapa_ciclo_vital', ['Formacion de Pareja ' => 'Formacion de Pareja ', 'Crianza Inicial' => 'Crianza Inicial', 'Con hijos Preescolares' => 'Con hijos Preescolares', 'Con hijos
  Escolares' => 'Con hijos Escolares', 'Con hijos Adolecesntes' => 'Con hijos Adolecesntes', 'Plataforma de Lanzamiento' => 'Plataforma de Lanzamiento', 'Nido Vacio' => 'Nido Vacio', 'Etapa de disolucion' => 'Etapa de disolucion' ], $familia->etapa_ciclo_vital,
  ['class' => 'form-control'.($errors->has('etapa_ciclo_vital') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Etapa ciclo vital']) !!}
  @if ($errors->has('etapa_ciclo_vital'))
  <span class="invalid-feedback">
      <strong>{{ $errors->first('etapa_ciclo_vital') }}</strong>
    </span>
  @endif
</div>
<div class="form-group">
  {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
</div>
{{ Form::close() }}