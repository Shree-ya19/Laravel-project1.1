@extends('admin.layout.master')
@section('container')

<div class="container mt-4">
    <!-- Add New Button -->
    <div class="d-flex justify-content-between mb-3">
        <h4>Features</h4>
        <a href="{{route('admin.feature.create')}}" class="btn btn-primary">Add New</a>
    </div>

    <!-- Table -->
    <table class="table table-striped table-hover">
       
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Icon</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        @forelse($features as $feature)
            <tr>
                <td>{{$feature->id}}</td>
                <td>{{$feature->title}}</td>
                <td>{{$feature->icon}}</td>
                <td>{{$feature->description}}</td>
                <td>
                    <a href="{{ route('admin.feature.edit',$feature) }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
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
