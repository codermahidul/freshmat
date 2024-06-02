<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    <strong>Subject: </strong>{{ $message->subject }}
                </h2>
            </div>
            <div class="card-body">
                <strong>Name: </strong>{{ $message->name }}<br>
                <strong>Email: </strong>{{ $message->email }}<br>
                <strong>Message: </strong>{{ $message->message }}<br>
                <a href="{{ route('inbox') }}" class="btn btn-primary mt-3">Back</a>
                <a href="{{ route('messageDelete',$message->id) }}" class="btn btn-danger mt-3">Delete</a>
            </div>
        </div>
    </div>
</div>