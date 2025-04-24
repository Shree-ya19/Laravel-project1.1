@extends('admin.layout.master')

@section('container')

<div class="container mt-5">
    <!-- Add New Record Button -->
    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-primary">
            <a href="{{route('admin.category.create')}}" style="color: white; text-decoration: none;">Add New Record</a>
        </button>
    </div>

    <div class="card shadow p-4">
        <h3 class="mb-4">Catogory</h3>

        <!-- Bootstrap Table -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name </th>
                    <th>Sub Category Name </th>
                    <th>Action</th>
                    

                </tr>
            @forelse($categories as $category)
                <!-- Single Data Row -->
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category?->category?->title}}</td>
                    <td>{{$category->title}}</td>
                  
                    <td>
                        <a href="{{ route('admin.category.edit',$category) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('admin.category.destroy', $category) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                            </form>
                    </td>
                </tr>
                @empty
        <td colspan="6">No data found</td>
        @endforelse
        
                </td>
            
        </table>
    </div>
</div>
@endsection
