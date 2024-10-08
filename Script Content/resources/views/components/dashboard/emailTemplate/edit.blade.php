<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('Variable') }}</th>
                                <th scope="col">{{ __('Meaning') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($emailTemplate->id == 1)
                                <tr>
                                    <td>&#123;&#123;{{ __('name') }}&#125;&#125;
                                    <th scope="row">{{ __('User Name') }}</th>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&#123;&#123;{{ __('email') }}&#125;&#125;</td>
                                    <th scope="row">{{ __('User email') }}</th>
                                </tr>
                                <tr>
                                    <td>&#123;&#123;{{ __('phone') }}&#125;&#125;</td>
                                    <th scope="row">{{ __('User Phone Number') }}</th>
                                </tr>
                                <tr>
                                    <td>&#123;&#123;{{ __('subject') }}&#125;&#125;</td>
                                    <th scope="row">{{ __('Subject of email') }}</th>
                                </tr>
                                <tr>
                                    <td>&#123;&#123;{{ __('message') }}&#125;&#125;</td>
                                    <th scope="row">{{ __('Message') }}</th>
                                </tr>
                            @endif
                            @if ($emailTemplate->id == 2)
                                <tr>
                                    <td>&#123;&#123;{{ __('user_name') }}&#125;&#125;
                                    <th scope="row">{{ __('User Name') }}</th>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&#123;&#123;{{ __('total_amount') }}&#125;&#125;
                                    <th scope="row">{{ __('Total Amount') }}</th>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&#123;&#123;{{ __('payment_method') }}&#125;&#125;
                                    <th scope="row">{{ __('Payment Method') }}</th>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&#123;&#123;{{ __('payment_status') }}&#125;&#125;
                                    <th scope="row">{{ __('Payment Status') }}</th>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&#123;&#123;{{ __('order_status') }}&#125;&#125;
                                    <th scope="row">{{ __('Order Status') }}</th>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&#123;&#123;{{ __('order_date') }}&#125;&#125;
                                    <th scope="row">{{ __('Order Date') }}</th>
                                    </td>
                                </tr>
                            @endif
                            @if ($emailTemplate->id == 3)
                                <tr>
                                    <td>&#123;&#123;{{ __('user_name') }}&#125;&#125;
                                    <th scope="row">{{ __('User Name') }}</th>
                                    </td>
                                </tr>
                            @endif

                            @if ($emailTemplate->id == 4)
                                <tr>
                                    <td>&#123;&#123;{{ __('user_name') }}&#125;&#125;
                                    <th scope="row">{{ __('User Name') }}</th>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __($emailTemplate->title) }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('emailTemplate.update', $emailTemplate->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        {{-- Title --}}
                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                id="title" placeholder="Enter Title" name="title"
                                value="{{ $emailTemplate->title }}">
                            @error('title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="seotitle"> {{ __('Subject') }} </label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                id="subject" placeholder="Subject" name="subject"
                                value="{{ $emailTemplate->subject }}">
                            @error('subject')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        {{-- Post Description --}}
                        <div class="form-group">
                            <label for="description"> {{ __('Description') }} </label>
                            <textarea class="summernote" name="description">{!! $emailTemplate->content !!}</textarea>
                            @error('description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </form>
            </div>
        </div>
    </div>
</section>
