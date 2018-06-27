@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">Familia <strong>{{ $familia->nombre }}</strong></div>
        @if(session()->has('info'))
          <div class="alert alert-success">{{ session('info') }}</div>
          @endif
          <div class="card-body">
            <table class="table table-responsive-md">
              <thead>
                <tr>
                  <th>Rut</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Edad</th>
                  <th>Sexo</th>
                  <th>Fecha Nacimiento</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pacientes as $paciente)
                <tr>
                  <td>{{ $paciente->rut }}</td>
                  <td>{{ $paciente->nombres }}</td>
                  <td>{{ $paciente->apellidos }}</td>
                  <td>{{ $paciente->edad }}</td>
                  <td>{{ $paciente->sexo }}</td>
                  <td>{{ $paciente->fecha_nacimiento }}</td>
                </tr>
                <tr>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="pull-right">
              <a class="btn btn-success" href="{{ route('familias.edit', ['familia_id' => $familia->id]) }}">
                <i class="fas fa-plus"></i>
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection