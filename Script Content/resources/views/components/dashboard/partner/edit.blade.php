<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Edit Partner') }}</h3>
                </div>
                <div class="card-body">
                    <div class="img">
                        <label class="d-block">{{ __('Parner Old Logo') }}</label>
                        <img src="{{ asset($partner->logo) }}" alt="">
                    </div>
                    <form action="{{ route('partner.update', $partner->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="logo">{{ __('New Logo') }}</label>
                            <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                            @error('logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">{{ __('Status') }}</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ $partner->status == 'active' ? 'selected' : '' }}>
                                    {{ __('Active') }}</option>
                                <option value="deactive" {{ $partner->status == 'deactive' ? 'selected' : '' }}>
                                    {{ __('Deactive') }}</option>
                            </select>
                        </div>
                        <button class="btn btn-primary">{{ __('Update Partner') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
