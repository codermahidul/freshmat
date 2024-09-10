<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12 p-5">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Add New Post') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('blog.insert') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        {{-- Title --}}
                        <div class="form-group">
                            <label for="title">{{ __('Post Title') }}</label>
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
                                    <label for="exampleInputFile"> {{ __('Thumbnail') }} </label>
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
                        {{-- Post Description --}}
                        <div class="form-group">
                            <label for="description"> {{ __('Post Description') }} </label>
                            <textarea id="postdescription" name="description">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="seotitle"> {{ __('SEO Ttile') }} </label>
                            <input type="text" class="form-control @error('seotitle') is-invalid @enderror"
                                id="seotitle" placeholder="Enter SEO Title" name="seotitle"
                                value="{{ old('seotitle') }}">
                            @error('seotitle')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="seodescription"> {{ __('SEO Description') }} </label>
                            <textarea id="seodescription" class="form-control" rows="3" name="seodescription">{{ old('seodescription') }}</textarea>
                            @error('seodescription')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Status') }}</label>
                            <select class="form-control" name="status">
                                <option value="publish" selected>{{ __('Publish') }}</option>
                                <option value="draft">{{ __('Draft') }}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Add Post') }}</button>
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
