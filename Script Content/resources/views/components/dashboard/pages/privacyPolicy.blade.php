<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">{{ __('Privacy Policy Page') }}</h3>
                  </div>
                <div class="card-body">
                    <form action="{{ route('privacyPolicy.update') }}" method="POST">
                        @csrf
                      <div class="card-body">
                          {{-- Post Description --}}
                        <div class="form-group">
                          <label for="description"> {{ __('Page Content') }} </label>
                          <textarea id="postdescription"  name="content">{{old('content')}}{{ $content->content }}</textarea>
                            @error('content')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        <div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
