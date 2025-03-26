@extends('admin.layout.master')

@section('container')
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4">Add New Record</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title 1 -->
            <div class="mb-3">
                <label for="title" class="form-label">Title </label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">


                <!-- Title 2 -->
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category </label>
                    <select class="form-select" name="category_id" id="category_id" aria-label="Floating label select example">
                        <option value="">Select Category</option> <!-- Default option -->
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Image -->


            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('admin.category.index') }}" type="submit" class="btn btn-primary">Back</a>
        </form>
    </div>
</div>
@endsection