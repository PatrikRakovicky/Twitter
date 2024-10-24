<div class="mt-3">
    <div class="card">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                    <div>
                           <h5 class="card-title mb-0"><a href="#"> 
                            {{-- -------------------------------------------- --}}
                            {{--{{$post['name']}}--}}
                            Mario
                            {{-- -------------------------------------------- --}}
                            </a></h5> 
                    </div>
                </div>
                {{-- -------------------------------------------- --}}
                <form action="{{ route('post.destroy', $post->id) }}" method="post" >
                    @method('delete')
                    @csrf
                    <a class="mx-2" href="{{ route('post.edit', $post->id)}}">Edit</a>
                    <a class="mx-2" href="{{ route('post.show', $post->id)}}">View</a>
                    <button type="submit">delete</button>
                </form>
                {{-- -------------------------------------------- --}}
            </div>
        </div>
        <div class="card-body">

          @if($editing ?? false)
          
            <form action="{{ route('post.update', $post -> id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <textarea class="form-control" id="content" name="content" rows="3">{{ $post -> content }}</textarea>
                  @error('content')
                        <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="">
                    <button class="btn btn-dark mb-2"> Update </button>
                </div>
            </form>

          @else
            <p class="fs-6 fw-light text-muted">
                {{-- -------------------------------------------- --}}
                {{ $post -> content }}
                {{-- -------------------------------------------- --}}
            </p>
            @endif
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                        {{-- -------------------------------------------- --}}
                        </span> {{ $post -> likes }} </a>
                        {{-- -------------------------------------------- --}}
                </div>
                <div>
                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{-- -------------------------------------------- --}}
                    {{ $post -> created_at }} </span>
                    {{-- -------------------------------------------- --}}
                </div>
            </div>
            <div>
                <div class="mb-3">
                </div>
                <form action="{{ route('post.comments.store', $post->id) }}" method="post">
                    @csrf
                    <div>
                        <textarea class="form-control" name="content" rows="1" required></textarea>
                    </div>
                    <button class="btn btn-primary btn-sm"> Post Comment </button>
                </form> 
                <hr>

                @foreach ($post->comments as $comment)    
                <div class="d-flex align-items-start">
                    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                        alt="Luigi Avatar">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <h6 class="">Luigi
                            </h6>
                            <small class="fs-6 fw-light text-muted"> {{ $comment->created_at }}</small>
                        </div>
                        <p class="fs-6 mt-3 fw-light">
                            {{ $comment->content }}
                        </p>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
    </div>
</div>