<div class="card">
    <form action="{{ route('privacyPolicy.update') }}" method="POST">
        @csrf
      <div class="card-body">
          {{-- Post Description --}}
        <div class="form-group">
          <label for="description"> {{ __('Page Content') }} </label>
          <textarea id="postdescription"  name="content">{{old('content')}}{{ $content->content }}</textarea>
            @error('content')
            <span class="text-danger">
                {{$message}}
            </span>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <div>
    </form>

</div>
</div>
</div>
