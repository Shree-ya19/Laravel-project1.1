@extends('admin.layout.master')

@section('container')
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4">Add New Record</h3>

        <form action="{{ route('admin.about.update',$about) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title 1 -->
            <div class="mb-3">
                <label for="title1" class="form-label">Title 1</label>
                <input type="text" class="form-control" id="title1" name="title1" value="{{old('title',$about->title1)}}">
            </div>

            <!-- Title 2 -->
            <div class="mb-3">
                <label for="title2" class="form-label">Title 2</label>
                <input type="text" class="form-control" id="title2" name="title2"  value="{{ old('title2',$about->title2) }}">
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*"  value="{{ old('image',$about->image) }}">
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="editor" name="description" rows="4" >{{ old('description',$about->description) }}</textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
