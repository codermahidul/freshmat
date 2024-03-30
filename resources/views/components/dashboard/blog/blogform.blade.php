<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 m-auto">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Post</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('blog.insert')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                {{-- Title --}}
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" name="title" value="{{old('title')}}">
                @error('title')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div> 
                  {{-- Post Description --}}
                <div class="form-group">
                  <label for="description">Post Description</label>
                  <textarea id="postdescription" style="display: none;" name="description">{{old('description')}}</textarea>
                    @error('description')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Enter Slug" name="slug" value="{{old('slug')}}">
                  @error('slug')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>
                <div class="form-group">
                    <label for="seotitle">SEO Ttile</label>
                    <input type="text" class="form-control @error('seotitle') is-invalid @enderror" id="seotitle" placeholder="Enter SEO Title" name="seotitle" value="{{old('seotitle')}}">
                  @error('seotitle')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="seodescription">SEO Description</label>
                    <textarea id="seodescription" style="display: none;" name="seodescription">{{old('seodescription')}}</textarea>
                  @error('seodescription')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputFile">Thumbnail</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" value="{{ old('thumbnail') }}">
                                <label class="custom-file-label" for="thumbnail">Choose file</label>
                              </div>
                            </div>
                            @error('thumbnail')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="categoryId">
                                @foreach ($categories as $category)   
                                <option value="{{$category->id}}" {{ ($category->slug == 'uncategorized') ? 'selected' : '' }} >{{$category->name}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option value="publish" selected>Publish</option>
                                <option value="draft">Draft</option>
                            </select>
                          </div>
                    </div>
                  </div>

              @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                  </div>
              @endif

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Post</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>