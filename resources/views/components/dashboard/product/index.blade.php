<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">Product List</h3>
          <a href="{{ route('productadd') }}" class="btn btn-primary ml-auto">Add New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Product Title</th>
                <th>Category</th>
                <th>Thumbnail</th>
                <th>Price</th>
                <th>Unit Type</th>
                <th>Status</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                  @forelse ($products as $product)
                  <tr>
                    <td> {{$loop->index +1}} </td>
                    <td> {{$product->title}} </td>
                    <td> {{$product->productcategories->name}} </td>
                    <td width="10">
                        <img width="80px" src="{{ asset($product->thumbnail) }}" alt="">
                    </td>
                    <td> <del>{{ $product->regularPrice }}</del> {{$product->selePrice}} </td>
                    <td> {{ $product->unitType }} </td>
                    <td> {{$product->status}} </td>
                    <td class="text-center">
                        <a href="{{route('productcategoryedit',$product->id)}}" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{route('productcategorydelete',$product->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @empty
                      <tr align="center">
                        <td colspan="10" class="py-5">No Product Category Found <a href="{{ route('productCategoryAdd') }}">Add New</a></td>
                      </tr>
                  @endforelse
            </tbody>
          </table>
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
      </div>
        <!-- Pagination -->
        {{ $products->links('pagination.dashboardPagination') }}
      </div>
    </div>
  </div>