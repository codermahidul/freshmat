<div class="card card-primary card-outline">
    <div class="card-body">
      <div class="row">
        <div class="col-5 col-sm-3">
          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Home Page (One)</a>
            <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Home Page (Two)</a>
            <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Home Page (Three)</a>
            <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">About Us</a>
          </div>
        </div>
        <div class="col-7 col-sm-9">
          <div class="tab-content" id="vert-tabs-tabContent">
            <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
               <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Our Product Section</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('sectionTitleUpdate',1) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="subHeading">Sub Heading</label>
                            <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(1)->subheading }}" name="subheading">
                            @error('subheading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subHeading">Heading</label>
                            <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(1)->heading }}" name="heading">
                            @error('heading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
               </div>
               <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Our Partners Section</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('sectionTitleUpdate',2) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="subHeading">Sub Heading</label>
                            <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(2)->subheading }}" name="subheading">
                            @error('subheading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subHeading">Heading</label>
                            <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(2)->heading }}" name="heading">
                            @error('heading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
               </div>
               <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Our Special Products Section</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('sectionTitleUpdate',3) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="subHeading">Sub Heading</label>
                            <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(3)->subheading }}" name="subheading">
                            @error('subheading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subHeading">Heading</label>
                            <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(3)->heading }}" name="heading">
                            @error('heading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
               </div>
               <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Testimonial Section</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('sectionTitleUpdate',4) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="subHeading">Sub Heading</label>
                            <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(4)->subheading }}" name="subheading">
                            @error('subheading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subHeading">Heading</label>
                            <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(4)->heading }}" name="heading">
                            @error('heading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
               </div>
               <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Blog & News Section</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('sectionTitleUpdate',5) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="subHeading">Sub Heading</label>
                            <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(5)->subheading }}" name="subheading">
                            @error('subheading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subHeading">Heading</label>
                            <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(5)->heading }}" name="heading">
                            @error('heading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
               </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Feature Section</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',6) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(6)->subheading }}" name="subheading">
                                @error('subheading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(6)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Working Process Section</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',7) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(7)->subheading }}" name="subheading">
                                @error('subheading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(7)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Our Product Section</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',8) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(8)->subheading }}" name="subheading">
                                @error('subheading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(8)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Best Seller Product Section</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',9) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(9)->subheading }}" name="subheading">
                                @error('subheading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(9)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Special Product Section</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',10) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(10)->subheading }}" name="subheading">
                                @error('subheading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(10)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Testimonial</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',11) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(11)->subheading }}" name="subheading">
                                @error('subheading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(11)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>                            
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3">{{ sectionTitle(11)->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Blog</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',12) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(12)->subheading }}" name="subheading">
                                @error('subheading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(12)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Partner</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',13) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" value="{{ sectionTitle(13)->subheading }}" name="subheading">
                                @error('subheading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(13)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Category</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',14) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(14)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Product filter</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',18) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(18)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Testimonial</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sectionTitleUpdate',15) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subHeading">Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(15)->heading }}" name="heading">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Blog</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('sectionTitleUpdate',16) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="subHeading">Heading</label>
                                    <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(16)->heading }}" name="heading">
                                    @error('heading')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Product filter</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('sectionTitleUpdate',17) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="subHeading">Heading</label>
                                    <input type="text" class="form-control" placeholder="Heading" value="{{ sectionTitle(17)->heading }}" name="heading">
                                    @error('heading')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card -->
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