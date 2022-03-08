@extends('layouts.app')

@section('content')

    <div class="container">
        <h2> Crear una nueva Pubicacion</h2>

        {!! Form::open(['route' => 'posts.store','method' => 'post']) !!}

        @include('layouts.subview-form-errors')

        @include('posts.subview-post-fields')

        <button type="submit" class="btn btn-primary">Crear</button>

        {!! Form::close() !!}

    </div>

@endsection
