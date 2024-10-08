<div class="row">
    <div class="col-md-12 px-5 pt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">{{ __('All Orders') }}</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped dataTable dtr-inline" id="example1">
                    <thead>
                        <tr>
                            <td>{{ __('#') }}</td>
                            <td>{{ __('Order Id') }}</td>
                            <td>{{ __('Custormer Name') }}</td>
                            <td>{{ __('Quantity') }}</td>
                            <td>{{ __('Discount') }}</td>
                            <td>{{ __('Payable') }}</td>
                            <td>{{ __('Total') }}</td>
                            <td>{{ __('Status') }}</td>
                            <td>{{ __('Payment') }}</td>
                            <td>{{ __('Order Date') }}</td>
                            <td>{{ __('Action') }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $order->invoiceNumber }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>
                                    @php
                                        $quantity = 0;
                                        foreach ($order->invoiceProducts as $products) {
                                            $quantity += $products->quantity;
                                        }
                                        echo $quantity;
                                    @endphp
                                </td>
                                <td>{{ $order->discount }}</td>
                                <td>{{ $order->total - $order->discount }}</td>
                                <td>{{ $order->total }}</td>
                                <td>
                                    @if ($order->status == 'complete')
                                        <span class="badge badge-success">{{ __('Complete') }}</span>
                                    @elseif($order->status == 'cancel')
                                        <span class="badge badge-danger">{{ __('Cancel') }}</span>
                                    @elseif($order->status == 'new')
                                        <span class="badge badge-primary">{{ __('New') }}</span>
                                    @elseif($order->status == 'delevery-in-process')
                                        <span class="badge badge-warning">{{ __('Delevery Processing') }}</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($order->payment == 'success')
                                        <span class="badge badge-success">{{ __('Success') }}</span>
                                    @else
                                        <span class="badge badge-warning">{{ __('Pending') }}</span>
                                    @endif
                                </td>
                                <td>{{ $order->created_at->format('d-M-Y') }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('orderInvoice', $order->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#modal-default-{{ $order->id }}">
                                        <i class="far fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            {{ __('No order found!') }}
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{-- Modal --}}
@foreach ($orders as $order)
    <div class="modal fade" id="modal-default-{{ $order->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Order Status') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('orderStatus', $order->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="payment">{{ __('Payment') }}</label>
                            <select name="payment" id="payment" class="form-control">
                                <option {{ $order->payment == 'pending' ? 'selected' : '' }} value="pending">
                                    {{ __('Pending') }}</option>
                                <option {{ $order->payment == 'success' ? 'selected' : '' }} value="success">
                                    {{ __('Success') }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">{{ __('Order') }}</label>
                            <select name="status" id="status" class="form-control">
                                <option {{ $order->status == 'new' ? 'selected' : '' }} value="new">
                                    {{ __('New') }}</option>
                                <option {{ $order->status == 'delevery-in-process' ? 'selected' : '' }}
                                    value="delevery-in-process">{{ __('Delevery In Process') }}</option>
                                <option {{ $order->status == 'complete' ? 'selected' : '' }} value="complete">
                                    {{ __('Complate') }}</option>
                                <option {{ $order->status == 'cancel' ? 'selected' : '' }} value="cancel">
                                    {{ __('Canceled') }}
                                </option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Save changes') }}</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endforeach
{{-- Modal --}}
