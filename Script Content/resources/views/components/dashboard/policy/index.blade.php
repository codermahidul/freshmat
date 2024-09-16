<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">{{ __('Policy') }}</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('htpolicyUpdate') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img">
                                    <label>{{ __('Previous Icon') }}</label>
                                    <img src="{{ asset(htPolicy(1)->icon) }}" class="d-block">
                                </div>
                                <div class="form-group">
                                    <label for="icon1">{{ __('Icon') }}</label>
                                    <input type="file" name="icon1" id="icon1" class="form-control">
                                    @error('icon1')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="heading1">{{ __('Heading') }}</label>
                                    <input type="text" name="heading1" id="heading1" class="form-control"
                                        placeholder="Heading" value="{{ htPolicy(1)->heading }}">
                                    @error('heading1')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="subheading1">{{ __('Sub Heading') }}</label>
                                    <input type="text" name="subheading1" id="subheading1" class="form-control"
                                        placeholder="Sub Heading" value="{{ htPolicy(1)->subheading }}">
                                    @error('subheading1')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="img">
                                    <label>{{ __('Previous Icon') }}</label>
                                    <img src="{{ asset(htPolicy(2)->icon) }}" class="d-block">
                                </div>
                                <div class="form-group">
                                    <label for="icon2">{{ __('Icon') }}</label>
                                    <input type="file" name="icon2" id="icon2" class="form-control">
                                    @error('icon2')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="heading2">{{ __('Heading') }}</label>
                                    <input type="text" name="heading2" id="heading2" class="form-control"
                                        placeholder="Heading" value="{{ htPolicy(2)->heading }}">
                                    @error('heading2')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="subheading2">{{ __('Sub Heading') }}</label>
                                    <input type="text" name="subheading2" id="subheading2" class="form-control"
                                        placeholder="Sub Heading" value="{{ htPolicy(2)->subheading }}">
                                    @error('subheading2')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="img">
                                    <label>{{ __('Previous Icon') }}</label>
                                    <img src="{{ asset(htPolicy(3)->icon) }}" class="d-block">
                                </div>
                                <div class="form-group">
                                    <label for="icon3">{{ __('Icon') }}</label>
                                    <input type="file" name="icon3" id="icon3" class="form-control">
                                    @error('icon3')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="heading3">{{ __('Heading') }}</label>
                                    <input type="text" name="heading3" id="heading3" class="form-control"
                                        placeholder="Heading" value="{{ htPolicy(3)->heading }}">
                                    @error('heading3')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="subheading3">{{ __('Sub Heading') }}</label>
                                    <input type="text" name="subheading3" id="subheading3" class="form-control"
                                        placeholder="Sub Heading" value="{{ htPolicy(3)->subheading }}">
                                    @error('subheading3')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class=" btn btn-primary">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
