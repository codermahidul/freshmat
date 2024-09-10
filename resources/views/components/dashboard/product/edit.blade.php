<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 p-5">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Edit Product') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('productupdate', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            {{-- Title --}}
                            <div class="form-group">
                                <label for="title">{{ __('Product Title') }}</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" placeholder="Enter Title" name="title"
                                    value="{{ old('title') }} {{ $product->title }}">
                                @error('title')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="slug">{{ __('Slug') }}</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    id="slug" placeholder="Enter Slug" name="slug"
                                    value="{{ old('slug') }} {{ $product->slug }}">
                                @error('slug')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <img src="{{ asset($product->thumbnail) }}" alt="" class="img-thumbnail mb-1">
                            <div class="form-group">
                                <label for="exampleInputFile"> {{ __('Change Feature Image') }} </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input @error('thumbnail') is-invalid @enderror"
                                            id="thumbnail" name="thumbnail" value="{{ old('thumbnail') }}">
                                        <label class="custom-file-label" for="thumbnail">Choose file</label>
                                    </div>
                                </div>
                                @error('thumbnail')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Category') }}</label>
                                <select class="form-control" name="categoryId">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->slug == 'uncategorized' ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- Product Description --}}
                            <div class="form-group">
                                <label for="shortDescription"> {{ __('Short Description') }} </label>
                                <textarea id="shortDescription" class="form-control @error('shortDescription') is-invalid @enderror" rows="3"
                                    name="shortDescription">{{ old('shortDescription') }} {{ $product->shortDescription }}</textarea>
                                @error('shortDescription')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description"> {{ __('Description') }} </label>
                                <textarea id="postdescription" name="description">{{ old('description') }}{{ $product->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="regularPrice">{{ __('Regular Price') }}</label>
                                        <input class="form-control @error('regularPrice') is-invalid @enderror"
                                            type="number" name="regularPrice" id="regularPrice"
                                            placeholder="Reqular Price"
                                            value="{{ old('regularPrice') }}{{ $product->regularPrice }}">
                                    </div>
                                    @error('regularPrice')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="selePrice">{{ __('Sele Price') }}</label>
                                        <input class="form-control @error('selePrice') is-invalid @enderror"
                                            type="number" name="selePrice" id="selePrice" placeholder="Sele Price"
                                            value="{{ old('selePrice') }}{{ $product->selePrice }}">
                                    </div>
                                    @error('selePrice')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Unit Type') }}</label>
                                        <select class="form-control @error('unitType') is-invalid @enderror"
                                            name="unitType">
                                            <option value="">{{ __('Select Unit Type') }}</option>
                                            <option {{ $product->unitType == 'pics' ? 'selected' : '' }}
                                                value="pics">{{ __('Pics') }}</option>
                                            <option {{ $product->unitType == 'kg' ? 'selected' : '' }}
                                                value="kg">{{ __('KG') }}</option>
                                            <option {{ $product->unitType == 'gram' ? 'selected' : '' }}
                                                value="gram">{{ __('Gram') }}</option>
                                            <option {{ $product->unitType == 'leter' ? 'selected' : '' }}
                                                value="leter">{{ __('Leter') }}</option>
                                            <option {{ $product->unitType == 'dozen' ? 'selected' : '' }}
                                                value="dozen">{{ __('Dozen') }}</option>
                                        </select>
                                        @error('unitType')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sku">{{ __('SKU') }}</label>
                                        <input type="text" class="form-control @error('sku') is-invalid @enderror"
                                            id="sku" placeholder="Enter SKU" name="sku"
                                            value="{{ old('sku') }}{{ $product->sku }}">
                                        @error('sku')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                @forelse ($product->productgallery as $item)
                                    <div class="col-md-2">
                                        <img src="{{ asset($item->photo) }}" class="img-fluid" alt="...">
                                        <a class="delete-item"
                                            href="{{ route('productgalleryimagedel', $item->id) }}">{{ __('Delete') }}</a>
                                    </div>
                                @empty
                                    <span class="text-danger ml-2">{{ __('No photos found!') }}</span>
                                @endforelse
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile"> {{ __('Gallery Image') }} </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input @error('photo') is-invalid @enderror"
                                            id="photo" name="photo[]" multiple value="{{ old('photo') }}">
                                        <label class="custom-file-label"
                                            for="photo">{{ __('Choose file') }}</label>
                                    </div>
                                </div>
                                @error('productGallery')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>{{ __('Status') }}</label>
                                <select class="form-control" name="status">
                                    <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>
                                        {{ __('Active') }}</option>
                                    <option value="deactive"
                                        {{ $product->status == 'deactive' ? 'selected' : '' }}>{{ __('Deactive') }}
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Product Update') }}</button>
                    </form>
                </div>

            </div>
        </div>
</section>


@push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete-item', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = $(this).attr('href');
                        $.ajax({
                            method: 'GET',
                            url: url,
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: data.message,
                                        icon: "success"
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                } else if (data.status == 'have') {
                                    Swal.fire({
                                        title: "Warning!",
                                        text: data.message,
                                        icon: "warning"
                                    });
                                } else {
                                    Swal.fire({
                                        title: "Error!",
                                        text: data.message,
                                        icon: "error"
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                Swal.fire({
                                    title: "Error!",
                                    text: "An error occurred while processing your request.",
                                    icon: "error"
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
