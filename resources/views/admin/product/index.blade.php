@extends('admin.layout.master')
@section('container')

<div class="container mt-4">
    <!-- Add New Button -->
    <div class="d-flex justify-content-between mb-3">
        <h4>Products</h4>
        <a href="{{route('admin.product.create')}}" class="btn btn-primary">Add New</a>
    </div>

    <!-- Table -->
    <table class="table table-striped table-hover">
       
            <tr>
                <th>ID</th>
                <th>Thumbnail</th>
                <th>Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Category</th>
                <th>Size</th>
                <th>Color</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        @forelse($products as $product)
            <tr>
                <td>{{$product->id}}</td> 
                <td>
                    <img src="{{$product->thumbnail}}" alt="Image" width="50">
                </td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount}}</td>
                <td>{{$product->category?->title}}</td>
                <td>{{$product->size}}</td>
                <td>{{$product->color}}</td>
                <td>{{$product->total_quantity}}</td>
                <td>
                    <a href="{{ route('admin.product.edit',$product) }}" class="btn btn-primary btn-sm">Edit</a>
                    
                    
                    <form action="{{ route('admin.product.destroy', $product) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                            </form>
                </td>
                
            </tr>
        @empty
        <td colspan="6">No data found</td>
        @endforelse
            
    </table>
</div>

<!-- FontAwesome for icons -->
<script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>

@endsection
