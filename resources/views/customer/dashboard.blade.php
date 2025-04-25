@extends('customer.layout.master')
@section('content')
  <!-- Main Content -->
  <main class="content w-100">
    <section class="profile-summary mb-5 text-center">
        <h3>{{ Auth::guard('customer')->user()->name }}</h3>
        <p>{{ Auth::guard('customer')->user()->email }}</p>
        <p>{{ Auth::guard('customer')->user()->number }}</p>
        <button class="btn btn-primary">Edit Profile</button>
    </section>

    <section class="order-history mb-5">
        <h3>Order History</h3>
        <ul class="list-group">
            <li class="list-group-item">Order #1234 - <span class="text-success">Delivered</span></li>
            <li class="list-group-item">Order #1235 - <span class="text-warning">Shipped</span></li>
            <li class="list-group-item">Order #1236 - <span class="text-info">Processing</span></li>
        </ul>
    </section>

    <section class="history mb-5">
        <h3>Purchase History</h3>
        <ul class="list-group">
            <li class="list-group-item">Item 1: Purchased on 2025-01-01</li>
            <li class="list-group-item">Item 2: Purchased on 2025-02-15</li>
            <li class="list-group-item">Item 3: Purchased on 2025-03-01</li>
        </ul>
    </section>

    <section class="notifications mb-5">
        <h3>Notifications</h3>
        <p>No new notifications.</p>
    </section>

    <section class="support text-center">
        <h3>Support & Help</h3>
        <button class="btn btn-primary">Contact Support</button>
    </section>
</main>
@endsection