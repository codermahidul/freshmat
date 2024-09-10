<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        /* Base styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .invoice {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .invoice-header,
        .invoice-footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
        }
        .invoice-table th,
        .invoice-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* Print styles */
        @media print {
            body {
                padding: 0;
            }
            .invoice {
                border: none;
                box-shadow: none;
            }
            .invoice-footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #fff;
                border-top: 1px solid #ddd;
                padding: 10px;
            }
            .invoice-header h2 {
                margin-top: 0;
            }
        }
    </style>
</head>
<body>

<div class="invoice">
    <div class="invoice-header">
        <h2>Invoice</h2>
    </div>
    
    <div class="invoice-body">
        <p><strong>Invoice Number:</strong> {{ $invoice->invoiceNumber }}</p>
        <p><strong>Date:</strong> {{ $invoice->created_at }}</p>
        <p><strong>Customer Name:</strong> {{ $name }}</p>
        
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoiceProduct as $product)
                <tr>
                    <td>{{ $product->product->title }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->product->selePrice }}</td>
                    <td>{{ $product->product->selePrice * $product->quantity}}</td>
                </tr>
                @endforeach
                <!-- Add more rows for additional products -->
            </tbody>
        </table>
    </div>
    
    <div class="invoice-footer">
        <p><strong>Subtotal:</strong> ${{ $invoice->subTotal }}</p>
        <p><strong>Discount:</strong> ${{ $invoice->discount }}</p>
        <p><strong>Delivery Charge:</strong> ${{ $invoice->deliveryCharge }}</p>
        <p><strong>Total:</strong> ${{ $invoice->total }}</p>
    </div>
</div>

</body>
</html>
