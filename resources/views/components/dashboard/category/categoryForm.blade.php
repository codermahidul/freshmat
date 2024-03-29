<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 m-auto">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('category.insert')}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Category Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="question" placeholder="Enter Category" name="name" value="{{old('name')}}">
                @error('name')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Category Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="question" placeholder="Enter Slug" name="slug" value="{{old('slug')}}">
                  @error('slug')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>

              @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                  </div>
              @endif

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>