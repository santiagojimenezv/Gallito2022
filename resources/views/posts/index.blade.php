@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="background-color: lightgray"  class="card-header">Publicaciones de {{ $user->name}}</div>
                @forelse($posts as $post)
                    @include('posts.subview-post')
                @empty
                    <div class="alert alert-info" role="alert">
                        El usuario no ha publicado mensajes
                    </div>
                @endforelse
                <div class="mt-3">
                    {{$posts->links()}}
                </div>
                <div style="background-color: lightgray" class="card-footer text-muted" >
                    Desarrollado en <b>Programación Backend</b> por <b>Santiago Jiménez</b> (c) 2022
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
