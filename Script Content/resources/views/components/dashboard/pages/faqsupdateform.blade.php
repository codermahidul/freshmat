<section class="content p-5">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Edit FAQs') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('faqs.update', $singleFAQS->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="question">{{ __('Question') }}</label>
                            <input type="text" class="form-control @error('question') is-invalid @enderror"
                                id="question" placeholder="Enter Question" name="question"
                                value="{{ old('question') }}{{ $singleFAQS->question }}">
                            @error('question')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Textarea') }}</label>
                            <textarea class="form-control @error('answer') is-invalid @enderror" rows="3" placeholder="Enter Answer"
                                name="answer">{{ old('answer') }}{{ $singleFAQS->answer }}</textarea>
                            @error('answer')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Status') }}</label>
                            <select class="form-control" name="status">
                                <option value="active" {{ $singleFAQS->status == 'active' ? 'selected' : '' }}>
                                    {{ __('Active') }}</option>
                                <option value="deactive" {{ $singleFAQS->status == 'deactive' ? 'selected' : '' }}>
                                    {{ __('Deactive') }}</option>
                            </select>
                        </div>
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

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
