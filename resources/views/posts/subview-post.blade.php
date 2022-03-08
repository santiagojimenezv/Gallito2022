<div class="card mb-2" >

    <div class="card-body">

        <h5 class="card-title">{{ $user->name }}</h5>
        <p class="card-text">{{ $post->content }}</p>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->format('d/m/Y')}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans()}}</h6>

        <div class="text-right">
            <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-info">
                <i title="Editar post" class="fa-solid fa-pen-to-square"></i>
            </a>

            {!! Form::open(['route' => ['posts.destroy', $post ->id], 'method' => 'delete']) !!}

                {!! Form::button('<i class ="fa-solid fa-trash-can"></i>', [
                    'type' => 'submit',
                    'title' => 'Remover post',
                    'class' => 'btn btn-danger',
                    'onclick' => "return confirm('Esta seguro?')"
                ]) !!}

            {!! Form::close() !!}

            {{-- a href="">
                <i title="Remover post" class="fa-solid fa-trash-can"></i>
            </a> --}}


        </div>
    </div>
</div>
