@extends('admin.layout.master')
@section('container')

<style>
    .form-container {
        max-width: 700px;
        margin: 40px auto;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    label {
        display: block;
        margin-top: 15px;
        margin-bottom: 5px;
        font-weight: 600;
        color: #444;
    }

    input[type="text"],
    input[type="file"],
    input[type="numeric"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
        font-size: 14px;
    }

    textarea {
        resize: vertical;
    }

    .alert {
        padding: 10px;
        margin-bottom: 20px;
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
        border-radius: 6px;
    }

    .btn-primary {
        margin-top: 20px;
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .mb-3 {
        margin-top: 15px;
    }
</style>

<div class="form-container">
    <h2>Products</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">

        <label for="thumbnail">Thumbnail:</label>
        <input type="file" id="thumbnail" name="thumbnail">

        <div class="mb-3">
            <label class="form-label">Product Images:</label>
            <input type="file" name="files[]" id="files" class="form-control" multiple>
        </div>

        <label for="price">Price:</label>
        <input type="numeric" id="price" name="price" value="{{ old('price') }}">

        <label for="total_quantity">Quantity:</label>
        <input type="numeric" id="total_quantity" name="total_quantity" value="{{ old('total_quantity') }}">

        <label for="discount">Discount:</label>
        <input type="text" id="discount" name="discount" value="{{ old('discount') }}">

        <div class="mb-3">
            <label class="form-label">Category:</label>
            <select name="category_id" class="form-control">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="" disabled>{{ $category->title }}</option>
                    @foreach ($category->categories as $subCategory)
                        <option value="{{ $subCategory->id }}">{{ $subCategory->title }}</option>
                    @endforeach
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Size:</label>
            <select name="size" class="form-control">
                <option value="">Select Size</option>
                @foreach(\App\Enum\SizeEnum::cases() as $size)
                    <option value="{{ $size->value }}">{{ $size->label() }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Color:</label>
            <select name="color" class="form-control">
                <option value="">Select Color</option>
                @foreach(\App\Enum\ColorEnum::cases() as $color)
                    <option value="{{ $color->value }}">{{ $color->label() }}</option>
                @endforeach
            </select>
        </div>

        <label for="detail">Detail:</label>
        <textarea id="detail" name="detail" rows="4">{{ old('detail') }}</textarea>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
