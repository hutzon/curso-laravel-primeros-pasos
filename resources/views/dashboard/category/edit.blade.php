@extends('dashboard.layout')

@section('content')
        <h1>Editar Post: {{ $category->title}}</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.update', $category->id)}}" 
        method="post" class="w-full max-w-lg" >
        @method('PUT')

        @include('dashboard.category._form')
  
    </form>
@endsection