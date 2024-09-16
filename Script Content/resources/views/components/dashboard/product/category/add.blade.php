<section class="content">
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Add New Category') }}</h3>
                </div>
                <form action="{{ route('productCategoryStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('Category Name') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="question" placeholder="Enter Category" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">{{ __('Category Slug') }}</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                id="question" placeholder="Enter Slug" name="slug" value="{{ old('slug') }}">
                            @error('slug')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="icon">{{ __('Category Icon') }}</label>
                            <input type="file" class="form-control @error('icon') is-invalid @enderror"
                                id="icon" name="icon" value="{{ old('icon') }}">
                            @error('icon')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>{{ __('Status') }}</label>
                            <select class="form-control" name="status">
                                <option value="active" selected>{{ __('Active') }}</option>
                                <option value="deactive">{{ __('Deactive') }}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Add Product Category') }}</button>
                </form>
            </div>
        </div>
    </div>
</section>
