<div class="row p-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">{{ __('Add New Testimonial') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('testimonial.insert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" name="name" placeholder="Name"
                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="designation">{{ __('Designation') }}</label>
                        <input type="text" name="designation" placeholder="Designation"
                            class="form-control @error('designation') is-invalid @enderror"
                            value="{{ old('designation') }}">
                        @error('designation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="quote">{{ __('Quote') }}</label>
                        <textarea name="quote" id="quote" rows="4" class="form-control @error('quote') is-invalid @enderror"
                            placeholder="What client say..">{{ old('quote') }}</textarea>
                        @error('quote')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="rating">{{ __('Rating') }} <small>{{ __('(Out of 5)') }}</small></label>
                        <input type="number" step="0.1" name="rating" placeholder="Rating"
                            class="form-control @error('rating') is-invalid @enderror" value="{{ old('rating') }}">
                        @error('rating')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">{{ __('Slider Image') }}</label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Status">{{ __('Status') }}</label>
                        <select name="status" class="form-control">
                            <option value="active" selected>{{ __('Active') }}</option>
                            <option value="deactive">{{ __('Deactive') }}</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">{{ __('Add Testimonial') }}</button>
                </form>
            </div>

        </div>

    </div>
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">{{ __('Slider Item') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>{{ __('Name') }} <br> <span>{{ __('Designation') }}</span></th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Quote') }}</th>
                            <th>{{ __('Rating') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th class="text-center">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($testimonials as $testimonial)
                            <tr>
                                <td> {{ $loop->index + 1 }} </td>
                                <td> {{ $testimonial->name }} <br> <small>{{ $testimonial->designation }}</small>
                                </td>
                                <td>
                                    <img src="{{ asset($testimonial->photo) }}" alt="">
                                </td>
                                <td> {{ $testimonial->quote }} </a></td>
                                <td> {{ $testimonial->rating }} </a></td>
                                <td> {{ $testimonial->status }} </a></td>
                                <td class="text-center">
                                    <a href="{{ route('testimonial.edit', $testimonial->id) }}"
                                        class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('testimonial.delete', $testimonial->id) }}"
                                        class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="py-5">{{ __('No Testimonial Item! Add New') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Pagination -->
        {{ $testimonials->links('pagination.dashboardPagination') }}
    </div>
</div>
