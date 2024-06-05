<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Footer</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('footerUpdate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="shortInfo">About Company</label>
                        <textarea name="shortInfo" class="form-control" id="shortInfo" rows="5" placeholder="Write about your company">{{ footer()->shortInfo }}</textarea>
                        @error('shortInfo')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ footer()->email }}">
                        @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>       
                    <div class="form-group">
                        <label for="copyright">Copyright Text</label>
                        <textarea name="copyright" class="form-control" id="copyright" rows="2" placeholder="Write about your company">{{ footer()->copyrightText }}</textarea>
                        @error('copyright')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>    
                    <div class="image">
                        <label for="previousImage">Previous Image</label>
                        <img src="{{ asset(footer()->paymentGetwayImage) }}" alt="" class="img-fluid d-block">
                    </div>                
                    <div class="form-group">
                        <label for="paymentGetwayImage">Payment Getway Image</label>
                        <input type="file" name="paymentGetwayImage" class="form-control" id="paymentGetwayImage">
                        @error('paymentGetwayImage')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
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