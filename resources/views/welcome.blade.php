@extends('layouts.app')

@section('content')

<div class="container">
    <h4>¡Bienvenidos!</h4>
    <h4>Estos son los usuarios registrados en Gallito: </h4>
    @forelse($users as $user)
        <ul>
            <li>
                <a href="{{ route('u.index',$user->id)}}" class="">
                    <h5> {{ $user->name }}</h5>
                </a>
            </li>
        </ul>
    @empty
        <div class="alert alert-info" role="alert">
                No hay usuarios
        </div>
    @endforelse
</div>
@endsection
