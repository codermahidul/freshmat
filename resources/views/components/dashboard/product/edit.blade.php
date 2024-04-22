<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ __('Add New Product') }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('productupdate',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                {{-- Title --}}
                <div class="form-group">
                  <label for="title">{{ __('Product Title') }}</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" name="title" value="{{old('title')}} {{ $product->title }}">
                @error('title')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div> 
                <div class="form-group">
                  <label for="slug">{{ __('Slug') }}</label>
                  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Enter Slug" name="slug" value="{{old('slug')}} {{ $product->slug }}">
                @error('slug')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                <img src="{{ asset($product->thumbnail) }}" alt="" class="img-thumbnail mb-1">
                        <div class="form-group">
                          <label for="exampleInputFile"> {{ __('Change Feature Image') }} </label>
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
                      <div class="form-group">
                          <label>{{ __('Category') }}</label>
                          <select class="form-control" name="categoryId">
                              @foreach ($categories as $category)   
                              <option value="{{$category->id}}" {{ ($category->slug == 'uncategorized') ? 'selected' : '' }} >{{$category->name}}</option>
                              @endforeach
                          </select>
                        </div>
                  {{-- Product Description --}}
                  <div class="form-group">
                    <label for="shortDescription"> {{ __('Short Description') }} </label>
                    <textarea id="shortDescription" class="form-control @error('shortDescription') is-invalid @enderror" rows="3" name="shortDescription">{{old('shortDescription')}} {{ $product->shortDescription }}</textarea>
                  @error('shortDescription')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>
                <div class="form-group">
                  <label for="description"> {{ __('Description') }} </label>
                  <textarea id="postdescription"  name="description">{{old('description')}}{{ $product->description }}</textarea>
                    @error('description')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regularPrice">Regular Price</label>
                            <input class="form-control @error('regularPrice') is-invalid @enderror" type="number" name="regularPrice" id="regularPrice" placeholder="Reqular Price" value="{{ old('regularPrice') }}{{ $product->regularPrice }}">
                        </div>
                            @error('regularPrice')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                            @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="selePrice">Sele Price</label>
                            <input class="form-control @error('selePrice') is-invalid @enderror" type="number" name="selePrice" id="selePrice" placeholder="Sele Price" value="{{ old('selePrice') }}{{ $product->selePrice }}">
                        </div>
                            @error('selePrice')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                            @enderror
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ __('Unit Type') }}</label>
                            <select class="form-control @error('unitType') is-invalid @enderror" name="unitType">
                                <option value="">Select Unit Type</option>
                                <option {{ ($product->unitType == 'pics' ) ? 'selected' : '' }} value="pics">Pics</option>
                                <option {{ ($product->unitType == 'kg' ) ? 'selected' : '' }} value="kg">KG</option>
                                <option {{ ($product->unitType == 'gram' ) ? 'selected' : '' }} value="gram">Gram</option>
                                <option {{ ($product->unitType == 'leter' ) ? 'selected' : '' }} value="leter">Leter</option>
                                <option {{ ($product->unitType == 'dozen' ) ? 'selected' : '' }} value="dozen">Dozen</option>
                            </select>
                            @error('unitType')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                             @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sku">{{ __('SKU') }}</label>
                            <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" placeholder="Enter SKU" name="sku" value="{{old('sku')}}{{ $product->sku }}">
                          @error('sku')
                              <span class="text-danger">
                                  {{$message}}
                              </span>
                          @enderror
                          </div> 
                    </div>
                  </div>

                  <div class="row mb-2">
                    @forelse ($product->productgallery as $item)
                    <div class="col-md-2">
                        <img src="{{ asset($item->photo) }}" class="img-fluid" alt="...">
                        <a href="#">Delete</a>
                    </div>
                    @empty
                            <span class="text-danger ml-2">No photos found!</span>
                    @endforelse
                  </div>

                    <div class="form-group">
                            <label for="exampleInputFile"> {{ __('Gallery Image') }} </label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input @error('photo') is-invalid @enderror" id="photo" name="photo[]" multiple value="{{ old('photo') }}">
                                <label class="custom-file-label" for="photo">Choose file</label>
                              </div>
                            </div>
                            @error('productGallery')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                          </div>
                      <div class="form-group">
                        <label for="tags">{{ __('Tags') }}</label>
                        <input type="text" class="form-control @error('tags') is-invalid @enderror" id="tags" placeholder="Enter Tag: rice,water" name="tags" value="{{old('tags')}}{{ $product->tags }}">
                      @error('tags')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                      @enderror
                      </div> 
                
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="active" {{ ($product->status == 'active' ) ? 'selected' : '' }} >Active</option>
                        <option value="deactive" {{ ($product->status == 'deactive' ) ? 'selected' : '' }}>Deactive</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Product Update</button>
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