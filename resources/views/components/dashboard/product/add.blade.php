<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12 p-5">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Add New Product') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('productinsert') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        {{-- Title --}}
                        <div class="form-group">
                            <label for="title">{{ __('Product Title') }}</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                id="title" placeholder="Enter Title" name="title" value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">{{ __('Slug') }}</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                id="slug" placeholder="Enter Slug" name="slug" value="{{ old('slug') }}">
                            @error('slug')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile"> {{ __('Feature Image') }} </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('thumbnail') is-invalid @enderror"
                                                id="thumbnail" name="thumbnail" value="{{ old('thumbnail') }}">
                                            <label class="custom-file-label"
                                                for="thumbnail">{{ __('Choose file') }}</label>
                                        </div>
                                    </div>
                                    @error('thumbnail')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
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
                            </div>
                        </div>
                        {{-- Product Description --}}
                        <div class="form-group">
                            <label for="shortDescription"> {{ __('Short Description') }} </label>
                            <textarea id="shortDescription" class="form-control @error('shortDescription') is-invalid @enderror" rows="3"
                                name="shortDescription">{{ old('shortDescription') }}</textarea>
                            @error('shortDescription')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description"> {{ __('Description') }} </label>
                            <textarea id="postdescription" name="description">{{ old('description') }}</textarea>
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
                                        type="number" name="regularPrice" id="regularPrice" placeholder="Reqular Price"
                                        value="{{ old('regularPrice') }}">
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
                                    <input class="form-control @error('selePrice') is-invalid @enderror" type="number"
                                        name="selePrice" id="selePrice" placeholder="Sele Price"
                                        value="{{ old('selePrice') }}">
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
                                        <option value="pics">{{ __('Pics') }}</option>
                                        <option value="kg">{{ __('KG') }}</option>
                                        <option value="gram">{{ __('Gram') }}</option>
                                        <option value="leter">{{ __('Leter') }}</option>
                                        <option value="dozen">{{ __('Dozen') }}</option>
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
                                        value="{{ old('sku') }}">
                                    @error('sku')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
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
                            </div>
                        </div>

                        <div class="form-group">
                            <label>{{ __('Status') }}</label>
                            <select class="form-control" name="status">
                                <option value="active" selected>{{ __('Active') }}</option>
                                <option value="deactive">{{ __('Deactive') }}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Add Product') }}</button>
                </form>
            </div>
            @if (session('success'))
                <script>
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-right',
                        iconColor: 'white',
                        customClass: {
                            popup: 'colored-toast',
                        },
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                    })

                    Toast.fire({
                        icon: 'success',
                        title: "{{ session('success') }}",
                    })
                </script>
            @endif
        </div>
    </div>
</section>
