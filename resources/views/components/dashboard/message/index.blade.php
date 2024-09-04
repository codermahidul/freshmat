<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">{{ __('Message Setting') }}</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('contactMessageSetingUpdate') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">{{ __('Receive contact message email') }}</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" value="{{ setting('messageReceiveEmail') }}">
                        @error('email')
                            <span class="text-danger d-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dbsave">{{ __('Want to save email in database?') }}</label>
                        <select name="dbsave" id="dbsave" class="form-control">
                            <option value="yess" @if(setting('messageSaveOnDB') == 'yess') selected @endif>{{ __('Yess') }}</option>
                            <option value="no" @if(setting('messageSaveOnDB') == 'no') selected @endif>{{ __('No') }}</option>
                        </select>
                        @error('dbsave')
                          <span class="text-danger d-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">{{ __('Message') }}</h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-secondary">
            <thead>
              <tr>
                <th style="width: 4%">{{ __('#') }}</th>
                <th style="width: 30%">{{ __('Name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Message') }}</th>
                <th>{{ __('Time') }}</th>
                <th class="text-center">{{ __('Action') }}</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($messages as $message)
              <tr class="@if($message->status == 'read') table-light @endif">
                <td>{{ ++$loop->index }}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->created_at->diffForHumans() }}</td>
                <td class="text-center">
                    <a href="{{ route('messageView',$message->id) }}" class="btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('messageDelete',$message->id) }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
              @empty
                  {{ __('No record found!') }}
              @endforelse
            </tbody>
          </table>
        </div>
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
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
