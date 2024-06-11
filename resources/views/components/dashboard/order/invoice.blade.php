<div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
        <div class="col-12">
            <h4>
                {{ env('APP_NAME') }}
                <small class="float-right">Date: {{ $invoice->created_at->format('d-M-Y') }}</small>
            </h4>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            From
            <address>
                <strong>{{ env('APP_NAME') }}</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                Phone: (804) 123-5432<br>
                Email: info@almasaeedstudio.com
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            To
            <address>
                <strong>{{ $invoice->user->name }}</strong><br>
                {{ $invoice->user->userProfile->city }}<br>
                {{ $invoice->user->userProfile->address }}<br>
                Phone: {{ $invoice->user->userProfile->phone }}<br>
                Email: {{ $invoice->user->email }}
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Invoice #{{ $invoice->invoiceNumber }}</b><br>
            <br>
            <b>Payment:</b> {{ $invoice->payment }}<br>
            <b>Ammount:</b> ${{ $invoice->total }}<br>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Serial #</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $subtotal = 0;

                    @endphp
                    @foreach ($invoice->invoiceProducts as $product)
                        @php
                            $subtotal +=
                                $product->product->regularPrice == null
                                    ? $product->product->selePrice * $product->quantity
                                    : $product->product->regularPrice * $product->quantity;

                        @endphp
                        <tr>
                            <td>{{ ++$loop->index }} </td>
                            <td>{{ $product->product->title }}</td>
                            <td>{{ $product->product->regularPrice == null ? $product->product->selePrice : $product->product->regularPrice }}
                            </td>
                            <td>{{ $product->quantity }}</td>
                            <td>${{ $product->product->regularPrice == null ? $product->product->selePrice * $product->quantity : $product->product->regularPrice * $product->quantity }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-6">
            <p class="lead">Order Status</p>
            <form action="{{ route('orderStatus', $invoice->id) }}" method="post">

                <div class="form-group">
                    <label for="payment">Payment</label>
                    <select name="payment" id="payment" class="form-control">
                        <option {{ $invoice->payment == 'pending' ? 'selected' : '' }} value="pending">
                            Pending</option>
                        <option {{ $invoice->payment == 'success' ? 'selected' : '' }} value="success">
                            Success</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Order</label>
                    <select name="status" id="status" class="form-control">
                        <option {{ $invoice->status == 'new' ? 'selected' : '' }} value="new">New</option>
                        <option {{ $invoice->status == 'delevery-in-process' ? 'selected' : '' }}
                            value="delevery-in-process">Delevery In Process</option>
                        <option {{ $invoice->status == 'complete' ? 'selected' : '' }} value="complete">
                            Complate</option>
                        <option {{ $invoice->status == 'cancel' ? 'selected' : '' }} value="cancel">Canceled
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save Change</button>
            </form>
        </div>
        <!-- /.col -->
        <div class="col-6">
            <p class="lead">Order date: {{ $invoice->created_at->format('d-M-Y') }}</p>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>${{ $subtotal }}</td>
                    </tr>
                    <tr>
                        <th>Shipping:</th>
                        <td>${{ $invoice->deliveryCharge }}</td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td>${{ $subtotal + $invoice->deliveryCharge }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


</div>
