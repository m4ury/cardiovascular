@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Posts</h2>
        </div>
        <div class="row">
            <div class="py-3">
                <a href="{{ route('posts.create') }}" class="btn btn-primary btn-round" >Nueva Familia</a>
            </div>
            <div class="table">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Publicado</th>
                        <th>Modificado</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td class="td-actions text-right">

                                <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                                    {{ method_field('DELETE') }}
                                    @csrf

                                    <a href="{{ url('posts/'. $post->id) }}" type="button" rel="tooltip"  title="View Profile" class="btn btn-info btn-simple btn-xs">
                                        <i class="fas fa-user-check"></i>
                                    </a>
                                    <a href="{{ url('posts/'.$post->id.'/edit') }}"  rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
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
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@stop