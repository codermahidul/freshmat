<section class="content">
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card card-primary">
                <div class="card-header">
                    {{-- <h3 class="card-title">{{ __('Edit') }}"> {{ __('Category') }}</h3> --}}
                    <h3 class="card-title">{{ __('Edit') }} <b class="text-primary">{{ $category->name }}</b> {{ __('Category') }}</h3>
                </div>
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('Category Name') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="question" placeholder="Enter Category" name="name"
                                value="{{ old('name') }}{{ $category->name }}">
                            @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">{{ __('Category Slug') }}</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                id="question" placeholder="Enter Slug" name="slug"
                                value="{{ old('slug') }}{{ $category->slug }}">
                            @error('slug')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
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
                        <button type="submit" class="btn btn-primary">{{ __('Update Category') }}</button>
                </form>
            </div>
        </div>
    </div>
</section>
