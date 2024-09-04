<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title">{{ __('Coupon List') }}</h2>
                <a href="{{ route('couponadd') }}" class="btn btn-primary ml-auto">Add New</a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Discount') }}</th>
                            <th>{{ __('Type') }}</th>
                            <th>{{ __('Minimum Order Amount') }}</th>
                            <th>{{ __('Maximum Order Amount') }}</th>
                            <th>{{ __('Limit') }}</th>
                            <th>{{ __('Expire Date') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($coupons as $coupon)
                            <tr>
                                <td> {{ $loop->index + 1 }} </td>
                                <td> {{ $coupon->name }} </td>
                                <td> {{ $coupon->discount }} </td>
                                <td> {{ $coupon->type }} </td>
                                <td> {{ $coupon->minOrder }} </td>
                                <td> {{ $coupon->maxOrder }} </td>
                                <td> {{ $coupon->limit }} </td>
                                <td> {{ $coupon->expireDate }} </td>
                                <td> {{ $coupon->status }} </td>
                                <td class="text-center">
                                    <a href="{{ route('couponedit', $coupon->id) }}" class="btn-sm btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{ route('coupondelete', $coupon->id) }}"
                                        class="btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr align="center">
                                <td colspan="10" class="py-5">{{ __('No Coupon Found!') }} <a
                                        href="{{ route('couponadd') }}">{{ __('Add New') }}</a></td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



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
                            mthod: 'GET',
                            url: url,
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: data.message,
                                        icon: "success"
                                    });
                                    window.location.reload();
                                }
                                else if (data.status == 'error') {
                                  Swal.fire({
                                        title: "error!",
                                        text: data.message,
                                        icon: "error"
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                              Swal.fire({
                                        title: "error!",
                                        text: 'An error occurred while processing your request.',
                                        icon: "error"
                                    });
                            }
                        });
                    }
                });
            })

        })
    </script>
@endpush
