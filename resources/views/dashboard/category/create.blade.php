@extends('dashboard.layout')

@section('content')
        <h1>Crear Category</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.store')}}" method="post" class="w-full max-w-lg" enctype="multipart/form-data">
        @include('dashboard.category._form')
  
    </form>
@endsection