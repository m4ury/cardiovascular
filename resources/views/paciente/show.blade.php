@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">Paciente <strong>{{ $paciente->nombres }} {{ $paciente->apellidos }}</strong></div>
        @if(session()->has('info'))
          <div class="alert alert-success">{{ session('info') }}</div>
          @endif
          <div class="card-body">
            @if($familia)
            <a href="{{ url('familias/'.$familia->id) }}">{{ $familia->nombre }}</a>
              @else
              {{ "No asignado a una Familia" }}
              @endif
          </div>
      </div>
    </div>
  </div>
</div>
@endsection