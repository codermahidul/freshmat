<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Email Configuration</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('emailConfigUpdate') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mailHost">Mail Host</label>
                                <input type="text" name="mailHost" id="mailHost" class="form-control" placeholder="Mail Host" value="{{ emailConfig('mailHost') }}">
                                @error('mailHost')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ emailConfig('email') }}">
                                @error('email')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="smtpUserName">SMTP User Name</label>
                                <input type="text" name="smtpUserName" id="smtpUserName" class="form-control" placeholder="SMTP User Name" value="{{ emailConfig('smtpUserName') }}">
                                @error('smtpUserName')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="smtpPassword">SMTP Password</label>
                                <input type="text" name="smtpPassword" id="smtpPassword" class="form-control" placeholder="SMTP Password" value="{{ emailConfig('smtpPassword') }}">
                                @error('smtpPassword')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mailPort">Mail Port</label>
                                <input type="text" name="mailPort" id="mailPort" class="form-control" placeholder="Mail Port" value="{{ emailConfig('mailPort') }}">
                                @error('mailPort')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mailEncryption">Mail Encryption</label>
                                <select name="mailEncryption" id="mailEncryption" class="form-control">
                                    <option value="tls" @if(emailConfig('mailEncryption') == 'tls') selected @endif>TLS</option>
                                    <option value="ssl" @if(emailConfig('mailEncryption') == 'ssl') selected @endif>SSL</option>
                                </select>
                                @error('mailEncryption')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
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