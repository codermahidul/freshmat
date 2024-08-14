<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">All Orders</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped dataTable dtr-inline" id="example1">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Email Template</td>
                            <td>Subject</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($emailTemplates as $template)
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $template->title }}</td>
                            <td>{{ $template->subject }}</td>
                            <td class="text-center">
                                <a href="{{ route('emailTemplate.edit',$template->id) }}" class="btn-sm btn-primary"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        @empty
                            No email template found!
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
