<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">{{ __('Home One Video Gallery') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('hovgUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="shortTitle">{{ __('Short Title') }}</label>
                            <input type="text" class="form-control" placeholder="Short Title" name="shortTitle"
                                value="{{ $hovg->shortTitle }}">
                            @error('shortTitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="offerText">{{ __('Offer Text') }}</label>
                            <input type="text" class="form-control" placeholder="Offer Text" name="offerText"
                                value="{{ $hovg->offerText }}">
                            @error('offerText')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea name="description" class="form-control" rows="4">{{ $hovg->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link">{{ __('Button Link') }}</label>
                            <input type="text" class="form-control" placeholder="Button Link" name="link"
                                value="{{ $hovg->link }}">
                            @error('link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="thumbnail">
                            <img src="{{ asset($hovg->thumbnail1) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="thumbnail1">{{ __('Thumbnail (1)') }}</label>
                            <input type="file" class="form-control" name="thumbnail1">
                            @error('thumbnail1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="video1">{{ __('Video 1 (Link)') }}</label>
                            <input type="text" class="form-control" placeholder="Youtube Video Link" name="video1"
                                value="{{ $hovg->video1 }}">
                            @error('video1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="thumbnail">
                            <img src="{{ asset($hovg->thumbnail2) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="thumbnail2">{{ __('Thumbnail (2)') }}</label>
                            <input type="file" class="form-control" name="thumbnail2">
                            @error('thumbnail2')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="video2">{{ __('Video 2 (2)') }}</label>
                            <input type="text" class="form-control" placeholder="Youtube Video Link" name="video2"
                                value="{{ $hovg->video2 }}">
                            @error('video2')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="thumbnail">
                            <img src="{{ asset($hovg->thumbnail3) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="thumbnail3">{{ __('Thumbnail (3)') }}</label>
                            <input type="file" class="form-control" name="thumbnail3">
                            @error('thumbnail3')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="video3">{{ __('Video 3 (Link)') }}</label>
                            <input type="text" class="form-control" placeholder="Youtube Video Link" name="video3"
                                value="{{ $hovg->video3 }}">
                            @error('video3')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="thumbnail">
                            <img src="{{ asset($hovg->thumbnail4) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="thumbnail4">{{ __('Thumbnail (4)') }}</label>
                            <input type="file" class="form-control" name="thumbnail4">
                            @error('thumbnail4')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="video4">{{ __('Video 4 (Link)') }}</label>
                            <input type="text" class="form-control" placeholder="Youtube Video Link" name="video4"
                                value="{{ $hovg->video4 }}">
                            @error('video4')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary">{{ __('Update Section') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
