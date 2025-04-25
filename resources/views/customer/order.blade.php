@extends('customer.layout.master')
@section('content')
    <!-- Main Content -->
    <main class="content w-100">
        <div class="container">
            <h2 class="mb-4">Order List</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $sale->product->name }}</td>
                            <td>{{ $sale->product->price }}</td>
                            <td>{{ $sale->purchased_quantity }}</td>
                            <td>{{ $sale->total_amount }}</td>
                            <td>ok</td>
                            <td>ok</td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </main>
@endsection