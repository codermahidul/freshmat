<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="card-title">{{ __('FAQs List') }}</h2>
                    <a href="{{ route('faqs.add') }}" class="btn btn-primary ml-auto">{{ __('Add New') }}</a>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Question') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($faqs as $faq)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $faq->question }}</td>
                                    <td class="text-center"><a href="{{ route('status', $faq->id) }}"
                                            class="btn-sm btn btn-danger<?php if ($faq->status == 'deactive') {
                                                echo 'btn btn-success';
                                            } ?> ">{{ $faq->status == 'active' ? 'Deactive' : 'Active' }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('faqs.edit', $faq->id) }}" class="btn-sm btn-primary"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ route('faqs.delete', $faq->id) }}" class="btn-sm btn-danger"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr align="center">
                                    <td colspan="10" class="py-5">{{ __('No FAQs Found!') }} <a
                                            href="{{ route('faqs.add') }}">{{ __('Add New') }}</a></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
