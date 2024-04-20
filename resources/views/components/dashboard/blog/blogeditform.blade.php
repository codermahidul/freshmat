<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ __('Edit Post') }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('blog.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                {{-- Title --}}
                <div class="form-group">
                  <label for="title">{{ __('Post Title') }}</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" name="title" value="{{old('title')}}{{$post->title}}">
                @error('title')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div> 
                <div class="form-group">
                  <label for="slug">{{ __('Slug') }}</label>
                  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Enter Slug" name="slug" value="{{old('slug')}}{{$post->slug}}">
                @error('slug')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                  {{-- Post Description --}}
                <div class="form-group">
                  <label for="description"> {{ __('Post Description') }} </label>
                  <textarea id="postdescription"  name="description">{{old('description')}}{{$post->description}}</textarea>
                    @error('description')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                  <div class="row">
                    <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputFile"> {{ __('Thumbnail') }} </label>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ __('Category') }}</label>
                            <select class="form-control" name="categoryId">
                                @foreach ($categories as $category)   
                                <option value="{{$category->id}}" {{ ($category->id == $post->categoryId) ? 'selected' : '' }} >{{$category->name}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="seotitle"> {{ __('SEO Ttile') }} </label>
                    <input type="text" class="form-control @error('seotitle') is-invalid @enderror" id="seotitle" placeholder="Enter SEO Title" name="seotitle" value="{{old('seotitle')}}{{$post->seoTitle}}">
                  @error('seotitle')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="seodescription"> {{ __('SEO Description') }} </label>
                    <textarea id="seodescription" class="form-control" rows="3" name="seodescription">{{old('seodescription')}}{{$post->seoDescription}}</textarea>
                  @error('seodescription')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="publish" {{ ($post->status == 'publish' ) ? 'selected' : '' }}>Publish</option>
                        <option value="draft" {{ ($post->status == 'draft' ) ? 'selected' : '' }}>Draft</option>
                    </select>
                  </div>
              
                <button type="submit" class="btn btn-primary">Update Post</button>
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
    </div>
  </section>