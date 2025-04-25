@extends('admin.layout.master')

@section('container')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="text-2xl font-semibold mb-6">Product List</div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="px-5 py-3">S.No</th>
                            <th class="px-5 py-3">Product Name</th>
                            <th class="px-5 py-3">Price</th>
                            <th class="px-5 py-3">Quantity</th>
                            <th class="px-5 py-3">Total Amount</th>
                            <th class="px-5 py-3">Status</th>
                            <th class="px-5 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="px-5 py-3">{{ $index + 1 }}</td>
                            <td class="px-5 py-3">{{ $product->name }}</td>
                            <td class="px-5 py-3">Rs. {{ $product->price }}</td>
                            <td class="px-5 py-3">{{ $product->quantity }}</td>
                            <td class="px-5 py-3">Rs. {{ $product->price * $product->quantity }}</td>
                            <td class="px-5 py-3">
                                @if($product->status == 'available')
                                    <span class="text-green-600 font-semibold">Available</span>
                                @else
                                    <span class="text-red-600 font-semibold">Unavailable</span>
                                @endif
                            </td>
                            <td class="px-5 py-3 space-x-2">
                                <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-400 text-white px-3 py-1 rounded">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @if($products->isEmpty())
                        <tr>
                            <td colspan="7" class="text-center py-4 text-gray-500">No products found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
