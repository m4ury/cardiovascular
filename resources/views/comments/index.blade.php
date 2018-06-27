@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section text-center">
            <h2 class="title">comments</h2>
        </div>
        <div class="row">
            <div class="py-3">
                <a href="{{ route('comments.create') }}" class="btn btn-primary btn-round" >Nueva Familia</a>
            </div>
            <div class="table">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>post Id</th>
                        <th>Cuerpo</th>
                        <th>Publicado</th>
                        <th>Modificado</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->post_id }}</td>
                            <td>{{ $comment->body }}</td>
                            <td>{{ $comment->created_at }}</td>
                            <td>{{ $comment->updated_at }}</td>
                            <td class="td-actions text-right">

                                <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                                    {{ method_field('DELETE') }}
                                    @csrf

                                    <a href="{{ url('comments/'. $comment->id) }}" type="button" rel="tooltip"  title="View Profile" class="btn btn-info btn-simple btn-xs">
                                        <i class="fas fa-user-check"></i>
                                    </a>
                                    <a href="{{ url('comments/'.$comment->id.'/edit') }}"  rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
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
                {{ $comments->links() }}
            </div>
        </div>
    </div>
@stop