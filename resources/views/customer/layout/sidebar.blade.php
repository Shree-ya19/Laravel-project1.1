<aside class="sidebar d-flex flex-column align-items-center p-3">
    <div class="profile text-center">
        <img src="{{ Auth::guard('customer')->user()->image }}" alt="Profile Picture" class="img-fluid rounded-circle mb-2" style="width: 100px; height: 100px;">
        <h3>{{ Auth::guard('customer')->user()->name }}</h3>
    </div>
    <nav class="w-100 mt-4">
        <ul class="w-100">
            <li class="mb-3"><i class="bi bi-heart"></i> Wishlist</li>
            <li class="mb-3"><i class="bi bi-cart"></i> Cart</li>
            <li class="mb-3">
                <a href="{{ route('customer.order.index') }}" class="text-decoration-none">
                  <i class="bi bi-box"></i> Orders
                </a>
              </li>

            <li class="mb-3"><i class="bi bi-gear"></i> Settings</li>
            <li class="mb-3 text-danger"><i class="bi bi-box-arrow-right"></i> Logout</li>
        </ul>
    </nav>
</aside>