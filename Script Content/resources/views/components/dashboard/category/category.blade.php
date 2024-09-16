<section class="content">
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="card-title">{{ __('Blog Category List') }}</h2>
                    <a href="{{ route('category.add') }}" class="btn btn-primary ml-auto">{{ __('Add New') }}</a>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Slug') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td> {{ $loop->index + 1 }} </td>
                                    <td> {{ $category->name }} </td>
                                    <td> {{ $category->slug }} </a></td>
                                    <td class="text-center">
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn-sm btn-primary"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ route('category.delete', $category->id) }}" class="btn-sm btn-danger delete-item"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="py-5">{{ __('No Category Found!') }} <a
                                            href="{{ route('category.add') }}">{{ __('Add New') }}</a></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
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
                    title:"{{ __('Are you sure?') }}",
                    text: "{{ __('You won\'t be able to revert this!') }}",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "{{ __('Yes, delete it!') }}"
                }).then((result) => {
                    if (result.isConfirmed) {
                      let url = $(this).attr('href');

                      $.ajax({
                        method: 'GET',
                        url: url,
                        success: function(data){
                          if (data.status == 'success') {
                            Swal.fire({
                            title: "{{ __('Deleted!') }}",
                            text: data.message,
                            icon: "success"
                            }).then(() => {
                              window.location.reload();
                            });
                          } else if(data.status == 'have'){
                            Swal.fire({
                            title: "{{ __('Warning!') }}",
                            text: data.message,
                            icon: "warning"
                            });
                          }else if(data.status == 'error'){
                            Swal.fire({
                            title: "{{ __('Error!') }}",
                            text: data.message,
                            icon: "error"
                            })
                          }
                        },error: function(xhr, status, error){
                        Swal.fire({
                            title: "{{ __('Error!') }}",
                            text: "{{ __('An error occurred while processing your request.') }}",
                            icon: "error"
                        });
                        }
                      })

                    }
                });
            })
        })
    </script>
@endpush
