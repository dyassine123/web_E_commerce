<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">          
                              ALL Orders       
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>OrderId</th>
                                    <th>Subtotal</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>zipcode</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->subtotal }}</td>
                                        <td>{{ $order->tax }}</td>
                                        <td>{{ $order->total }}</td>
                                        <td>{{ $order->firstname }}</td>
                                        <td>{{ $order->lastname}}</td>
                                        <td>{{ $order->mobile }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->zipcode }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->created_at }}</td>
                                       
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>

