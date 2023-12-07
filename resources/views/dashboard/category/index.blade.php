@extends('dashboard.layout')

@section('content')

<a href="{{ route('category.create') }}" class="my-3 btn btn-success">Crear</a>


    <table class="table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr>
                <td scope="row">{{ $c->title }}</td>
                <td class="grid grid-cols-1 gap-2 text-center md:grid-cols-3">
                    <a href="{{ route('category.edit', $c) }}" class=" btn btn-primary">Editar</a>
                    <a href="{{ route('category.show', $c) }}" class="btn btn-primary">Ver</a>
                    <form action="{{ route('category.destroy', $c) }}" method="post">
                        @method('DELETE')
                        @csrf
                    <button type="submit" class="w-full btn btn-danger">Eliminar</button></form>
              
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection