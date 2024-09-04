<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    <strong>{{ __('Subject') }}: </strong>{{ $message->subject }}
                </h2>
            </div>
            <div class="card-body">
                <strong>{{ __('Name') }}: </strong>{{ $message->name }}<br>
                <strong>{{ __('Email') }}: </strong>{{ $message->email }}<br>
                <strong>{{ __('Message') }}: </strong>{{ $message->message }}<br>
                <a href="{{ route('inbox') }}" class="btn btn-primary mt-3">{{ __('Back') }}</a>
                <a href="{{ route('messageDelete',$message->id) }}" class="btn btn-danger mt-3">{{ __('Delete') }}</a>
            </div>
        </div>
    </div>
</div>
