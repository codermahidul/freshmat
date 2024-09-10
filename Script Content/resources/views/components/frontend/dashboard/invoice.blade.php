<div class="col-xl-9 col-lg-8 wow fadeInRight">
    <div class="dashboard_content">
        <a class="back_btn common_btn" href="{{ route('userOrder') }}"><i
                class="far fa-long-arrow-left"></i> {{ __('Go
            Back') }} <span></span></a>
        <div class="dashboard_order_invoice">
            <div class="dashboard_invoice_logo_area">
                <div class="invoice_logo">
                    <img src="{{ asset('assets') }}/images/logo.png" alt="logo" class="img-fluid w-100">
                </div>
                <div class="text">
                    <h2>{{ __('invoice') }}</h2>
                    <p>{{ __('invoice no') }}: {{ $invoice->invoiceNumber }}</p>
                    <p>{{ __('date') }}: {{ $invoice->created_at }}</p>
                </div>
            </div>
            <div class="dashboard_invoice_header">
                <div class="text">
                    <h2>{{ __('Bill To') }}</h2>
                    <p>{{ Auth::user()->userProfile->address }}</p>
                    <p>{{ Auth::user()->userProfile->phone }}</p>
                    <p>{{ Auth::user()->email }}</p>
                </div>
                <div class="text">
                    <h2>{{ __('Ship To') }}</h2>
                    <ul>
                        <li><span>{{ __('Name') }}:</span> {{ Auth::user()->name }}</li>
                        <li><span>{{ __('Email') }}:</span> {{ Auth::user()->email }}</li>
                        <li><span>{{ __('Phone') }}:</span> {{ Auth::user()->userProfile->phone }}</li>
                        <li><span>{{ __('Address') }}:</span> {{ Auth::user()->userProfile->address }}</li>
                    </ul>
                </div>
            </div>
            <div class="invoice_table dashboard_order">
                <div class="table-responsive">
                    <table>
                        <tbody>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Price') }}</th>
                                <th>{{ __('Quantity') }}</th>
                                <th>{{ __('Total') }}</th>
                            </tr>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>${{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>${{ $product->price * $product->quantity }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3"><b>{{ __('Subtotal') }}</b></td>
                                <td><b>${{ $invoice->subTotal }}</b></td>
                            </tr>
                            <tr>
                                <td colspan="3">{{ __('Delivery Charge') }}</td>
                                <td>{{ $invoice->deliveryCharge }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><b>{{ __('Total') }}</b></td>
                                <td><b>${{ $invoice->total }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="dashboard_invoice_footer">
                <h4>{{ __('Notes') }}</h4>
                <p>{{ $invoice->note }}</p>
            </div>
        </div>
    </div>
</div>
