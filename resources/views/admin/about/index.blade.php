@extends('admin.layout.master')

@section('container')

<div class="container mt-5">
    <!-- Add New Record Button -->
    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-primary">
            <a href="{{route('admin.about.create')}}" style="color: white; text-decoration: none;">Add New Record</a>
        </button>
    </div>

    <div class="card shadow p-4">
        <h3 class="mb-4">About</h3>

        <!-- Bootstrap Table -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title 1</th>
                    <th>Title 2</th>
                    <th>Image</th>
                    <th>Action</th>
                    

                </tr>
            @forelse($abouts as $about)
                <!-- Single Data Row -->
                <tr>
                    <td>{{$about->id}}</td>
                    <td>{{$about->title1}}</td>
                    <td>{{$about->title2}}</td>
                    <td>
                    <img src="{{$about->image}}" alt="Image" width="50">
                </td>
                    <td>
                        <a href="{{ route('admin.about.edit',$about) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                @empty
        <td colspan="6">No data found</td>
        @endforelse
            
        </table>
    </div>
</div>
@endsection
