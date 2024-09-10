<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">{{ __('About Us Page') }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('aboutUsUpdate') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="shortTitle">{{ __('Short Title') }}</label>
                            <input type="text" name="shortTitle" placeholder="Short Title"
                                class="form-control @error('shortTitle') is-invalid @enderror"
                                value="{{ $contents->shortTitle }}">
                            @error('shortTitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">{{ __('Designation') }}</label>
                            <input type="text" name="title" placeholder="Title"
                                class="form-control @error('title') is-invalid @enderror" value="{{ $contents->title }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea name="description" id="description" rows="4"
                                class="form-control @error('description') is-invalid @enderror" placeholder="Description">{{ $contents->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quote">{{ __('Quote') }}</label>
                            <textarea name="quote" id="description" rows="2" class="form-control @error('quote') is-invalid @enderror"
                                placeholder="quote">{{ $contents->quote }}</textarea>
                            @error('quote')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="image">
                            <label class="d-block" for="oldImage">{{ __('Old Image') }}</label>
                            <img src="{{ asset($contents->image) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="image">{{ __('Upload New Image') }}</label>
                            <input type="file" name="image" id="image"
                                class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="listItemOne">{{ __('List Item One') }}</label>
                                    <input type="text" name="listItemOne" id="listItemOne"
                                        class="form-control @error('listItemOne') is-invalid @enderror"
                                        placeholder="List Item One" value="{{ $contents->listItemOne }}">
                                    @error('listItemOne')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="listItemTwo">{{ __('List Item Two') }}</label>
                                    <input type="text" name="listItemTwo" id="listItemTwo"
                                        class="form-control @error('listItemTwo') is-invalid @enderror"
                                        placeholder="List Item Two" value="{{ $contents->listItemTwo }}">
                                    @error('listItemTwo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="listItemThree">{{ __('List Item Three') }}</label>
                                    <input type="text" name="listItemThree" id="listItemThree"
                                        class="form-control @error('listItemThree') is-invalid @enderror"
                                        placeholder="List Item Three" value="{{ $contents->listItemThree }}">
                                    @error('listItemThree')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="listItemFour">{{ __('List Item Four') }}</label>
                                    <input type="text" name="listItemFour" id="listItemFour"
                                        class="form-control @error('listItemFour') is-invalid @enderror"
                                        placeholder="List Item Four" value="{{ $contents->listItemFour }}">
                                    @error('listItemFour')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img">
                                    <span class="d-block text-bold">{{ __('Old Feature Icon') }}</span>
                                    <img src="{{ asset($contents->f1icon) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="f1icon">{{ __('Upload New Icon') }}</label>
                                    <input type="file" class="form-control @error('f1icon') is-invalid @enderror"
                                        name="f1icon">
                                    @error('f1icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="f1title">{{ __('Feature Title') }}</label>
                                    <input type="text" name="f1title" placeholder="Feature Title"
                                        class="form-control @error('f1title') is-invalid @enderror"
                                        value="{{ $contents->f1title }}">
                                    @error('f1title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="f1description">{{ __('Feture Description') }}</label>
                                    <textarea name="f1description" id="f1description" rows="4"
                                        class="form-control @error('f1description') is-invalid @enderror" placeholder="Feature Description">{{ $contents->f1description }}</textarea>
                                    @error('f1description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="img">
                                    <span class="d-block text-bold">{{ __('Old Feature Icon') }}</span>
                                    <img src="{{ asset($contents->f2icon) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="f2icon">{{ __('Upload New Icon') }}</label>
                                    <input type="file" class="form-control @error('f2icon') is-invalid @enderror"
                                        name="f2icon">
                                    @error('f2icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="f2title">{{ __('Feature Title') }}</label>
                                    <input type="text" name="f2title" placeholder="Feature Title"
                                        class="form-control @error('f2title') is-invalid @enderror"
                                        value="{{ $contents->f2title }}">
                                    @error('f2title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="f2description">{{ __('Feture Description') }}</label>
                                    <textarea name="f2description" id="f2description" rows="4"
                                        class="form-control @error('f2description') is-invalid @enderror" placeholder="Feature Description">{{ $contents->f1description }}</textarea>
                                    @error('f2description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="img">
                                    <span class="d-block text-bold">{{ __('Old Feature Icon') }}</span>
                                    <img src="{{ asset($contents->f3icon) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="f3icon">{{ __('Upload New Icon') }}</label>
                                    <input type="file" class="form-control @error('f3icon') is-invalid @enderror"
                                        name="f3icon">
                                    @error('f3icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="f3title">{{ __('Feature Title') }}</label>
                                    <input type="text" name="f3title" placeholder="Feature Title"
                                        class="form-control @error('f3title') is-invalid @enderror"
                                        value="{{ $contents->f3title }}">
                                    @error('f3title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="f3description">{{ __('Feture Description') }}</label>
                                    <textarea name="f3description" id="f3description" rows="4"
                                        class="form-control @error('f3description') is-invalid @enderror" placeholder="Feature Description">{{ $contents->f3description }}</textarea>
                                    @error('f3description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="w1title">{{ __('Working Process Title (1)') }}</label>
                                    <input type="text" name="w1title" placeholder="Working Process Title"
                                        class="form-control @error('w1title') is-invalid @enderror"
                                        value="{{ $contents->w1title }}">
                                    @error('w1title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="w1description">{{ __('Working Process Description (1)') }}</label>
                                    <textarea name="w1description" id="w1description" rows="4"
                                        class="form-control @error('w1description') is-invalid @enderror" placeholder="Working Process Description">{{ $contents->w1description }}</textarea>
                                    @error('w1description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="w2title">{{ __('Working Process Title (2)') }}</label>
                                    <input type="text" name="w2title" placeholder="Working Process Title"
                                        class="form-control @error('w2title') is-invalid @enderror"
                                        value="{{ $contents->w2title }}">
                                    @error('w2title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="w2description">{{ __('Working Process Description (2)') }}</label>
                                    <textarea name="w2description" id="w2description" rows="4"
                                        class="form-control @error('w2description') is-invalid @enderror" placeholder="Working Process Description">{{ $contents->w2description }}</textarea>
                                    @error('w2description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="w3title">{{ __('Working Process Title (3)') }}</label>
                                    <input type="text" name="w3title" placeholder="Working Process Title"
                                        class="form-control @error('w3title') is-invalid @enderror"
                                        value="{{ $contents->w3title }}">
                                    @error('w3title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="w3description">{{ __('Working Process Description (3)') }}</label>
                                    <textarea name="w3description" id="w3description" rows="4"
                                        class="form-control @error('w3description') is-invalid @enderror" placeholder="Working Process Description">{{ $contents->w3description }}</textarea>
                                    @error('w3description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="w4title">{{ __('Working Process Title (4)') }}</label>
                                    <input type="text" name="w4title" placeholder="Working Process Title"
                                        class="form-control @error('w4title') is-invalid @enderror"
                                        value="{{ $contents->w4title }}">
                                    @error('w4title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="w4description">{{ __('Working Process Description (4)') }}</label>
                                    <textarea name="w4description" id="w4description" rows="4"
                                        class="form-control @error('w4description') is-invalid @enderror" placeholder="Working Process Description">{{ $contents->w4description }}</textarea>
                                    @error('w4description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img">
                                    <span class="d-block text-bold">{{ __('Old Counter Icon') }}</span>
                                    <img src="{{ asset($contents->c1icon) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="c1icon">{{ __('Upload New Icon') }}</label>
                                    <input type="file" class="form-control @error('c1icon') is-invalid @enderror"
                                        name="c1icon">
                                    @error('c1icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="c1number">{{ __('Counter Number') }}</label>
                                    <input type="number" name="c1number" placeholder="Counter Number"
                                        class="form-control @error('c1number') is-invalid @enderror"
                                        value="{{ $contents->c1number }}">
                                    @error('c1number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="c1text">{{ __('Counter Text') }}</label>
                                    <input type="text" name="c1text" placeholder="Counter Text"
                                        class="form-control @error('c1text') is-invalid @enderror"
                                        value="{{ $contents->c1text }}">
                                    @error('c1text')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img">
                                    <span class="d-block text-bold">{{ __('Old Counter Icon') }}</span>
                                    <img src="{{ asset($contents->c2icon) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="c2icon">{{ __('Upload New Icon') }}</label>
                                    <input type="file" class="form-control @error('c2icon') is-invalid @enderror"
                                        name="c2icon">
                                    @error('c2icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="c2number">{{ __('Counter Number') }}</label>
                                    <input type="number" name="c2number" placeholder="Counter Number"
                                        class="form-control @error('c2number') is-invalid @enderror"
                                        value="{{ $contents->c2number }}">
                                    @error('c2number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="c2text">{{ __('Counter Text') }}</label>
                                    <input type="text" name="c2text" placeholder="Counter Text"
                                        class="form-control @error('c2text') is-invalid @enderror"
                                        value="{{ $contents->c2text }}">
                                    @error('c2text')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img">
                                    <span class="d-block text-bold">{{ __('Old Counter Icon') }}</span>
                                    <img src="{{ asset($contents->c3icon) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="c3icon">{{ __('Upload New Icon') }}</label>
                                    <input type="file" class="form-control @error('c3icon') is-invalid @enderror"
                                        name="c3icon">
                                    @error('c3icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="c3number">{{ __('Counter Number') }}</label>
                                    <input type="number" name="c3number" placeholder="Counter Number"
                                        class="form-control @error('c3number') is-invalid @enderror"
                                        value="{{ $contents->c3number }}">
                                    @error('c3number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="c3text">{{ __('Counter Text') }}</label>
                                    <input type="text" name="c3text" placeholder="Counter Text"
                                        class="form-control @error('c3text') is-invalid @enderror"
                                        value="{{ $contents->c3text }}">
                                    @error('c3text')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img">
                                    <span class="d-block text-bold">{{ __('Old Counter Icon') }}</span>
                                    <img src="{{ asset($contents->c4icon) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="c4icon">{{ __('Upload New Icon') }}</label>
                                    <input type="file" class="form-control @error('c4icon') is-invalid @enderror"
                                        name="c4icon">
                                    @error('c4icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="c4number">{{ __('Counter Number') }}</label>
                                    <input type="number" name="c4number" placeholder="Counter Number"
                                        class="form-control @error('c4number') is-invalid @enderror"
                                        value="{{ $contents->c4number }}">
                                    @error('c4number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="c4text">{{ __('Counter Text') }}</label>
                                    <input type="text" name="c4text" placeholder="Counter Text"
                                        class="form-control @error('c4text') is-invalid @enderror"
                                        value="{{ $contents->c4text }}">
                                    @error('c4text')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">{{ __('Update Page') }}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

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
@if (session('error'))
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
            icon: 'error',
            title: "{{ session('error') }}",
        })
    </script>
@endif
