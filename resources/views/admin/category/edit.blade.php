@extends('admin.layout.master')

@section('container')
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4">Add New Category</h3>

        <form action="{{ route('admin.category.update',$category) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title 1 -->
            <div class="mb-3">
                <label for="title1" class="form-label">Title </label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$category->title) }}">
            </div>

            <!-- Title 2 -->
            <div class="mb-3">
                <label for="title2" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug',$category->slug) }}">
            </div>
            <div class="mb-3">
                    <label for="category_id" class="form-label">Category </label>
                    <select class="form-select" name="category_id" id="category_id" aria-label="Floating label select example">
                        <option value="">Select Category</option> <!-- Default option -->
                        @foreach($categories as $categoryList)
                        <option value="{{ $categoryList->id }}"{{ old('category_id',$category->category_id) == $categoryList->id ? 'selected':'' }}>{{ $categoryList->title }}</option>
                        @endforeach
                    </select>
                </div>
            <!-- Image -->
            

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="editor" name="description" rows="4">{{ old('description',$category->description) }}</textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
</div>
@endsection
