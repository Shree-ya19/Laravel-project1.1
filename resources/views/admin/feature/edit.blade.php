@extends('admin.layout.master')
@section('container')
<div class="container mt-4">
    <h4>Add New Record</h4>
    
    <!-- Form -->
    <form action="{{route('admin.feature.update',$feature)}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$feature->title) }}"required>
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" placeholder="e.g. fas fa-tree"value="{{ old('icon',$feature->icon) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description',$feature->deccription) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection