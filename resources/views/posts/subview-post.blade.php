<div class="card mb-3" >

    <div class="card-body">
        <div class="text-right">
            <a href="{{ route('posts.edit', $post->id)}}">
                <i title="Editar post" class="fa-solid fa-pen-to-square"></i>
            </a>
            <a href="">
                <i title="Remover post" class="fa-solid fa-trash-can"></i>
            </a>
        </div>
        <h5 class="card-title">{{ $user->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->format('d/m/Y')}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans()}}</h6>
        <p class="card-text">{{ $post->content }}</p>
    </div>
</div>
