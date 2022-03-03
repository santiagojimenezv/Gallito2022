@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> Crear una nueva Pubicacion</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(['route' => 'posts.store','method' => 'post']) !!}

        <div class="mb-3">
            <label for="content" >Contenido</label>
            {!! Form::textarea('content', '', ['class' => "form-control", 'rows' => 3])!!}
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>

        {!! Form::close() !!}

    </div>

@endsection
