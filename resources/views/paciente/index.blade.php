@extends('layouts.app')
@section('content')
<div class="container">
  <div class="section text-center">
    <h2 class="title">Listado de Pacientes</h2>
  </div>
  <div class="row">
    <div class="table">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Rut</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Fecha Nacimiento</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($paciente as $pacientes)
          <tr>
            <td>{{ $pacientes->rut }}</td>
            <td>{{ $pacientes->nombres }}</td>
            <td>{{ $pacientes->apellidos }}</td>
            <td>{{ $pacientes->edad }}</td>
            <td>{{ $pacientes->sexo }}</td>
            <td>{{ $pacientes->fecha_nacimiento }}</td>
            <td class="td-actions text-right">
              <form method="POST" action="{{ route('pacientes.destroy', $pacientes->id) }}">
                {{ method_field('DELETE') }}
                @csrf

                <a href="{{ url('pacientes/'. $pacientes->id) }}" type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                        <i class="fas fa-user-check"></i>
                                    </a>
                <a href="{{ url('pacientes/'.$pacientes->id.'/edit') }}" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>

                <button type="submit" rel="tooltip" title="Delete" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-trash"></i>
                                    </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="py-3">
        <a href="{{ route('pacientes.create') }}" class="btn btn-success">Nuevo <i class="fas fa-user"></i></a>
      </div>
      {{ $paciente->links() }}
    </div>
  </div>
</div>
@stop