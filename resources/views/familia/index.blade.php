@extends('layouts.app')
@section('content')
<div class="container">
  <div class="section text-center">
    <h2 class="title">Familias</h2>
  </div>
  <div class="row">
    @if(session()->has('info'))
      <div class="alert alert-success">{{ session('info') }}</div>
      @endif
      <div class="table">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Tipo Familia</th>
              <th>Etapa Ciclo Vital</th>
              <th>Sector</th>
              <th>Direccion</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($familia as $familias)
            <tr>
              <td>{{ $familias->nombre }}</td>
              <td>{{ $familias->tipo_familia }}</td>
              <td>{{ $familias->etapa_ciclo_vital }}</td>
              <td>{{ $familias->sector }}</td>
              <td>{{ $familias->direccion }}</td>
              <td class="td-actions text-right">

                <form method="POST" action="{{ route('familias.destroy', $familias->id) }}">
                  {{ method_field('DELETE') }}
                  @csrf

                  <a href="{{ url('familias/'. $familias->id) }}" type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                        <i class="fas fa-user-check"></i>
                                    </a>
                  <a href="{{ url('familias/'.$familias->id.'/edit') }}" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>

                  <button type="submit" rel="tooltip" title="Delete" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>

                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="py-3">
          <a href="{{ route('familias.create') }}" class="btn btn-success">Nuevo <i class="fas fa-users"></i></a>
        </div>
        {{ $familia->links() }}
      </div>
  </div>
</div>
@stop