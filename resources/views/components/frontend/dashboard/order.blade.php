<div class="col-xl-9 col-lg-8 wow fadeInRight">
    <div class="dashboard_content">
        <h2 class="dashboard_title">Order History</h2>
        <div class="dashboard_order">
            <div class="table-responsive">
                <table>
                    <tbody>
                        <tr>
                            <th>Order</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($orders as $order)
                        <tr>
                            <td>#{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>${{ $order->total }}</td>
                            <td><span class="{{ ($order->status == 'completed') ? 'complete' : '' }} {{ ($order->status == 'active') ? 'active' : '' }} {{ ($order->status == 'cancel') ? 'cancel' : '' }}">{{ $order->status }}</span></td>
                            <td><a href="dashboard_order_invoice.html">View Details</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>