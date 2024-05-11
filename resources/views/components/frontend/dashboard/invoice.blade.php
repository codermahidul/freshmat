<div class="col-xl-9 col-lg-8 wow fadeInRight">
    <div class="dashboard_content">
        <a class="back_btn common_btn" href="dashboard_order.html"><i
                class="far fa-long-arrow-left"></i> Go
            Back <span></span></a>
        <div class="dashboard_order_invoice">
            <div class="dashboard_invoice_logo_area">
                <div class="invoice_logo">
                    <img src="{{ asset('assets') }}/images/logo.png" alt="logo" class="img-fluid w-100">
                </div>
                <div class="text">
                    <h2>invoice</h2>
                    <p>invoice no: {{ $invoice->invoiceNumber }}</p>
                    <p>date: {{ $invoice->created_at }}</p>
                </div>
            </div>
            <div class="dashboard_invoice_header">
                <div class="text">
                    <h2>Bill To</h2>
                    <p>{{ Auth::user()->userProfile->address }}</p>
                    <p>{{ Auth::user()->userProfile->phone }}</p>
                    <p>{{ Auth::user()->email }}</p>
                </div>
                <div class="text">
                    <h2>Ship To</h2>
                    <ul>
                        <li><span>Name:</span> {{ Auth::user()->name }}</li>
                        <li><span>Email:</span> {{ Auth::user()->email }}</li>
                        <li><span>Phone:</span> {{ Auth::user()->userProfile->phone }}</li>
                        <li><span>Address:</span> {{ Auth::user()->userProfile->address }}</li>
                    </ul>
                </div>
            </div>
            <div class="invoice_table dashboard_order">
                <div class="table-responsive">
                    <table>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
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
                                <td colspan="3"><b>Subtotal</b></td>
                                <td><b>${{ $invoice->subTotal }}</b></td>
                            </tr>
                            <tr>
                                <td colspan="3">Delivery Charge</td>
                                <td>{{ $invoice->deliveryCharge }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><b>Total</b></td>
                                <td><b>${{ $invoice->total }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="dashboard_invoice_footer">
                <h4>Notes</h4>
                <p>{{ $invoice->note }}</p>
                <a class="common_btn" href="#"><i class="far fa-print"></i> Print
                    PDF<span></span></a>
            </div>
        </div>
    </div>
</div>