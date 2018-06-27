@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de Establecimientos</h2>
        </div>
        <div class="row">
            <div class="py-3">
                <a href="{{ route('establecimientos.create') }}" class="btn btn-primary btn-round" >Nuevo Establecimiento</a>
            </div>
            <div class="table">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Creacion</th>
                        <th>Modificado</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($estabs as $estabss)
                        <tr>
                            <td>{{ $estabss->nombre }}</td>
                            <td>{{ $estabss->created_at }}</td>
                            <td>{{ $estabss->updated_at }}</td>
                            <td class="td-actions text-right">

                                <form method="POST" action="{{ route('establecimientos.destroy', $estabss->id) }}">
                                    {{ method_field('DELETE') }}
                                    @csrf

                                    <a href="{{ url('establecimientos/'. $estabss->id) }}" type="button" rel="tooltip"  title="View Profile" class="btn btn-info btn-simple btn-xs">
                                        <i class="fas fa-user-check"></i>
                                    </a>
                                    <a href="{{ url('establecimientos/'.$estabss->id.'/edit') }}"  rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
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
                {{ $estabs->links() }}
            </div>
        </div>
    </div>
@stop