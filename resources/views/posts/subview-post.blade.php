
<div class="card"  >
    <div class="card-body">
        <div class="row">
            <div class="input-group ">
                <h5 style="color:grey" class="card-title col-10">{{ $user->name }}</h5>
                @auth
                    @if($user->id == Auth::user()->id)
                        <div class="col col-lg-1 btn-group ">
                            <a href="{{ route('posts.edit', $post->id)}}" class=" btn btn-primary ">
                                <i title="Editar post" class="fa-solid fa-pen-to-square"></i>
                            </a>
                            {!! Form::open(['route' => ['posts.destroy', $post ->id], 'method' => 'delete']) !!}
                            {!! Form::button('<i class ="fa-solid fa-trash-can "></i>', [
                                'type' => 'submit',
                                'title' => 'Remover post',
                                'class' => 'btn btn-danger ',
                                'onclick' => "return confirm('Esta seguro?')"
                            ]) !!}
                            {!! Form::close() !!}
                        </div>
                    @endif
                @endauth
            </div>

            <p class="card-text">{{ $post->content }}</p>
            <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans()}}</h6>
	        {{-- <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->format('d/m/Y')}}</h6> --}}

        </div>
    </div>
</div>
