<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 m-auto">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ __('Comment Reply') }}</h3>
            </div>
                <div class="p-4">
                    <h5>{{ __('Comment') }}</h5>
                    <p><b>{{$comment->username}}: </b>{{$comment->content}}</p>
                    <h5 class="ml-4">{{ __('Previus Reply') }}</h5>
                    @foreach ($commentreplies as $replies)
                      <p class="ml-4"><b>{{$replies->username}}:</b> {{$replies->reply}}</p>
                    @endforeach
                </div>
            <form action="{{route('blog.comment.reply',$comment->id)}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="reply">{{ __('Reply') }}</label>
                    <textarea name="reply" class="form-control" id="reply" rows="4"></textarea>
                  @error('reply')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>
              @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                  </div>
              @endif
                <button type="submit" class="btn btn-primary">{{ __('Reply Comment') }}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
