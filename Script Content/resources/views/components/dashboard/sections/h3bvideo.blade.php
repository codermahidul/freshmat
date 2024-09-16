<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">{{ __('Video Section') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('h3bvideoUpdate') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="heading">{{ __('Heading') }}</label>
                            <input type="text" name="heading" id="heading" class="form-control" placeholder="Heading"
                                value="{{ $h3bVideo->heading }}">
                            @error('heading')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea name="description" id="description" rows="2" class="form-control" placeholder="Description">{{ $h3bVideo->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="link">{{ __('Link') }}</label>
                            <input type="text" name="link" id="link" class="form-control"
                                placeholder="Button Link" value="{{ $h3bVideo->link }}">
                            @error('link')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="video">{{ __('YouTube Video Url') }}</label>
                            <input type="text" name="video" id="video" class="form-control"
                                placeholder="YouTube Video Link" value="{{ $h3bVideo->video }}">
                            @error('video')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="img">
                            <label for="backgroundImgP">{{ __('Previous Background Image') }}</label>
                            <img src="{{ asset($h3bVideo->backgroundImg) }}" class="d-block img-fluid">
                        </div>
                        <div class="form-group">
                            <label for="backgroundImg">{{ __('Background Image') }}</label>
                            <input type="file" name="backgroundImg" id="backgroundImg" class="form-control">
                            @error('backgroundImg')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
