<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h3 class="card-title">{{ __('Contact Us Page') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('contactUsUpdate') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="img">
                            <span class="d-block text-bold">{{ __('Item One Icon') }}</span>
                            <img src="{{ asset($contents->b1icon) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="b1icon">{{ __('Upload New Icon') }}</label>
                            <input type="file" class="form-control @error('b1icon') is-invalid @enderror" name="b1icon">
                            @error('b1icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b1title">{{ __('Title') }}</label>
                            <input type="text" name="b1title" placeholder="Title" class="form-control @error('b1title') is-invalid @enderror" value="{{ $contents->b1title }}">
                            @error('b1title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b1text">{{ __('Text area (Address)') }}</label>
                            <textarea name="b1text" id="b1text" rows="4" class="form-control @error('b1text') is-invalid @enderror" placeholder="Address">{{ $contents->b1text }}</textarea>
                            @error('b1text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img">
                            <span class="d-block text-bold">{{ __('Item Two Icon') }}</span>
                            <img src="{{ asset($contents->b2icon) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="b2icon">{{ __('Upload New Icon') }}</label>
                            <input type="file" class="form-control @error('b2icon') is-invalid @enderror" name="b2icon">
                            @error('b2icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b2title">{{ __('Title') }}</label>
                            <input type="text" name="b2title" placeholder="Title" class="form-control @error('b2title') is-invalid @enderror" value="{{ $contents->b2title }}">
                            @error('b2title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b2textOne">{{ __('Text area (1)') }}</label>
                            <input type="text" name="b2textOne" placeholder="Text" class="form-control @error('b2textOne') is-invalid @enderror" value="{{ $contents->b2textOne }}">
                            @error('b2textOne')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b2textTwo">{{ __('Text area (2)') }}</label>
                            <input type="text" name="b2textTwo" placeholder="Text" class="form-control @error('b2textTwo') is-invalid @enderror" value="{{ $contents->b2textTwo }}">
                            @error('b2textTwo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img">
                            <span class="d-block text-bold">{{ __('Item Three Icon') }}</span>
                            <img src="{{ asset($contents->b3icon) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="b3icon">{{ __('Upload New Icon') }}</label>
                            <input type="file" class="form-control @error('b3icon') is-invalid @enderror" name="b3icon">
                            @error('b3icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b3title">{{ __('Title') }}</label>
                            <input type="text" name="b3title" placeholder="Title" class="form-control @error('b3title') is-invalid @enderror" value="{{ $contents->b3title }}">
                            @error('b3title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b3textOne">{{ __('Text area (1)') }}</label>
                            <input type="text" name="b3textOne" placeholder="Text" class="form-control @error('b3textOne') is-invalid @enderror" value="{{ $contents->b3textOne }}">
                            @error('b3textOne')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b3textTwo">{{ __('Text area (2)') }}</label>
                            <input type="text" name="b3textTwo" placeholder="Text" class="form-control @error('b3textTwo') is-invalid @enderror" value="{{ $contents->b3textTwo }}">
                            @error('b3textTwo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img">
                            <span class="d-block text-bold">{{ __('Item Four Icon') }}</span>
                            <img src="{{ asset($contents->b4icon) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="b4icon">{{ __('Upload New Icon') }}</label>
                            <input type="file" class="form-control @error('b4icon') is-invalid @enderror" name="b4icon">
                            @error('b4icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b4title">{{ __('Title') }}</label>
                            <input type="text" name="b4title" placeholder="Title" class="form-control @error('b4title') is-invalid @enderror" value="{{ $contents->b4title }}">
                            @error('b4title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b4textOne">{{ __('Text area (1)') }}</label>
                            <input type="text" name="b4textOne" placeholder="Text" class="form-control @error('b4textOne') is-invalid @enderror" value="{{ $contents->b4textOne }}">
                            @error('b4textOne')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b4textUrlOne">{{ __('Url (1)') }}</label>
                            <input type="text" name="b4textUrlOne" placeholder="Text" class="form-control @error('b4textUrlOne') is-invalid @enderror" value="{{ $contents->b4textUrlOne }}">
                            @error('b4textUrlOne')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b4textTwo">{{ __('Text area (2)') }}</label>
                            <input type="text" name="b4textTwo" placeholder="Text" class="form-control @error('b4textTwo') is-invalid @enderror" value="{{ $contents->b4textTwo }}">
                            @error('b4textTwo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="b4textUrlTwo">{{ __('Url (2)') }}</label>
                            <input type="text" name="b4textUrlTwo" placeholder="Text" class="form-control @error('b4textUrlTwo') is-invalid @enderror" value="{{ $contents->b4textUrlTwo }}">
                            @error('b4textUrlTwo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="image">
                    <label class="d-block" for="oldImage">{{ __('Old Image') }}</label>
                    <img src="{{ asset($contents->image) }}" alt="">
                </div>
                <div class="form-group">
                    <label for="image">{{ __('Upload New Image') }}</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="googleMap">{{ __('Google Map') }}</label>
                    <textarea name="googleMap" id="googleMap" rows="6" class="form-control @error('googleMap') is-invalid @enderror" placeholder="googleMap">{{ $contents->googleMap }}</textarea>
                    @error('googleMap')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-primary">{{ __('Update Page') }}</button>
              </form>
            </div>

          </div>

          </div>
        </div>
      </div>
</section>
