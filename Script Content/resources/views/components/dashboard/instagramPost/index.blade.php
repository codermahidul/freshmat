<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">{{ __('Add New Image') }}</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('instagramPostInsert') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">{{ __('Image') }}</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link">{{ __('Link') }}</label>
                            <input type="text" name="link" id="link" class="form-control" placeholder="Link">
                            @error('link')
                                <span class="text-danger d-block">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Add New') }}</button>
                    </form>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="card-title">{{ __('Instagram Post Image List') }}</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 4%">{{ __('#') }}</th>
                            <th style="width: 30%">{{ __('Image') }}</th>
                            <th>{{ __('Link') }}</th>
                            <th class="text-center">{{ __('Action') }}</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($instagramPosts as $post)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>
                                    <img src="{{ asset($post->image) }}" class="img-fluid w-50">
                                </td>
                                <td>
                                   @if ($post->link == null)
                                        {{ __('NO LINK') }}

                                    @else
                                    <a class="btn btn-secondary btn-sm" href="$post->link"><i class="fas fa-link"></i></a>
                                   @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('instagramPostDelete',$post->id) }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                              </tr>
                            @empty
                                {{ __('No post image found!') }}
                            @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>
