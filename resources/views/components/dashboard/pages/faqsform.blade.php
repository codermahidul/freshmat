<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 m-auto">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New FAQs</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('faqs.insert')}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="question">Question</label>
                  <input type="text" class="form-control @error('question') is-invalid @enderror" id="question" placeholder="Enter Question" name="question" value="{{old('question')}}">
                @error('question')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
            </div>
                <div class="form-group">
                    <label>Textarea</label>
                    <textarea class="form-control @error('answer') is-invalid @enderror" rows="3" placeholder="Enter Answer" name="answer">{{old('answer')}}</textarea>
                    @error('answer')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                      <option value="active" selected>Active</option>
                      <option value="deactive">Deactive</option>
                    </select>
                  </div>
              </div>

              @if (session('success'))
                <div class="alert alert-success mx-4" role="alert">
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