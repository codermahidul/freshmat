<div class="row p-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">{{ __('Edit Testimonial') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('testimonial.update', $testimonial->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" name="name" placeholder="Name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }} {{ $testimonial->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="designation">{{ __('Designation') }}</label>
                        <input type="text" name="designation" placeholder="Designation"
                            class="form-control @error('designation') is-invalid @enderror"
                            value="{{ old('designation') }} {{ $testimonial->designation }}">
                        @error('designation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="quote">{{ __('Quote') }}</label>
                        <textarea name="quote" id="quote" rows="4" class="form-control @error('quote') is-invalid @enderror"
                            placeholder="What client say..">{{ old('quote') }} {{ $testimonial->quote }}</textarea>
                        @error('quote')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="rating">{{ __('Rating') }} <small>{{ __('(Out of 5)') }}</small></label>
                        <input type="number" step="0.1" name="rating" placeholder="Rating"
                            class="form-control @error('rating') is-invalid @enderror"
                            value="{{ $testimonial->rating }}">
                        @error('rating')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="image">
                        <label for="oldPhoto" class="d-block">{{ __('Old Photo') }}</label>
                        <img src="{{ asset($testimonial->photo) }}" alt="">
                    </div>

                    <div class="form-group mt-2">
                        <label for="image">{{ __('Upload Image') }}</label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Status">{{ __('Status') }}</label>
                        <select name="status" class="form-control">
                            <option value="active">{{ __('Active') }}</option>
                            <option value="deactive" {{ $testimonial->status == 'deactive' ? 'selected' : '' }}>
                                {{ __('Deactive') }}</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">{{ __('Update Testimonial') }}</button>
                </form>
            </div>

        </div>

    </div>
</div>
</div>
