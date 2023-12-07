@extends('dashboard.layout')

@section('content')

<a href="{{ route('post.create') }}" class="my-3 btn btn-success">Crear</a>


    <table class="table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Posted</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                <td scope="row">{{ $p->title }}</td>
                <td>{{ $p->category->title }}</td>
                <td>{{ $p->posted }}</td>
                <td class="grid grid-cols-1 gap-2 text-center lg:grid-cols-3">
                    <a href="{{ route('post.edit', $p) }}" class="btn btn-primary">Editar</a>
                    <a href="{{ route('post.show', $p) }}" class="btn btn-primary">Ver</a>
                    <form action="{{ route('post.destroy', $p) }}" method="post">
                        @method('DELETE')
                        @csrf
                    <button type="submit" class="w-full btn btn-danger">Eliminar</button></form>
              
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection