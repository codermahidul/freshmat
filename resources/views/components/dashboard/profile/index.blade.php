 <div class="card">
     <div class="card-header p-2">
         <ul class="nav nav-pills">
             <li class="nav-item"><a class="nav-link active" href="#profileSetting" data-toggle="tab">Profile</a></li>
             <li class="nav-item"><a class="nav-link" href="#passwordSetting" data-toggle="tab">Password</a></li>
         </ul>
     </div><!-- /.card-header -->
     <div class="card-body">
         <div class="tab-content">
             <div class="tab-pane active" id="profileSetting">
                 <form class="form-horizontal" action="{{ route('profileUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group row w-50">
                         <label for="name" class="col-sm-2 col-form-label">Photo</label>
                         <div class="col-sm-10">
                             <img src="{{ asset(Auth::user()->userProfile->photo) }}" alt="">
                         </div>
                     </div>                     
                     <div class="form-group row">
                         <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                         <div class="col-sm-10">
                             <input type="file" class="form-control" id="photo" name="photo">
                         </div>
                     </div>                    
                      <div class="form-group row">
                         <label for="name" class="col-sm-2 col-form-label">Name</label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="email" class="col-sm-2 col-form-label">Email</label>
                         <div class="col-sm-10">
                             <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ Auth::user()->email }}">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                         <div class="col-sm-10">
                             <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{ Auth::user()->userProfile->phone }}">
                         </div>
                     </div>                    
                      <div class="form-group row">
                         <label for="city" class="col-sm-2 col-form-label">City</label>
                         <div class="col-sm-10">
                             <input type="text" name="city" class="form-control" id="city" placeholder="City" value="{{ Auth::user()->userProfile->city }}">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="address" class="col-sm-2 col-form-label">Address</label>
                         <div class="col-sm-10">
                             <textarea class="form-control" name="address" id="address" placeholder="Address">{{ Auth::user()->userProfile->address }}</textarea>
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="offset-sm-2 col-sm-10">
                             <button type="submit" class="btn btn-primary">Update</button>
                         </div>
                     </div>
                 </form>
             </div>
             <div class="tab-pane" id="passwordSetting">
                <form class="form-horizontal" action="{{ route('passwordUpdate') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Current Password">
                        @error('current_password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="password" placeholder="New Password">
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                        @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
             <!-- /.tab-pane -->
         </div>
         <!-- /.tab-content -->
     </div><!-- /.card-body -->
 </div>
