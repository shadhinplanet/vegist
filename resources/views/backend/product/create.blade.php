@extends('backend.layouts.app')

@section('title', 'Create Product')
@section('page-title', 'Product')

@section('content')

    <section class="bg-white p-4">
        <div class="text-end">
            <!-- Base Buttons -->
            <a href="{{ route('product.index') }}" class="btn btn-primary waves-effect waves-light">Back</a>
        </div>


        <form action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-8">
                    <!-- Basic Input -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Basic Input -->
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug"
                            value="{{ old('slug') }}">
                        @error('slug')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Basic Input -->
                    <div class="mb-3">
                        <label for="excerpt" class="form-label">Excerpt</label>
                        <textarea type="text" class="form-control" id="excerpt" rows="5" name="excerpt">{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Basic Input -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <x-tinymce-editor name="description" />
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <!-- Basic Input -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" step="0.1" class="form-control" id="price" name="price"
                            value="{{ old('price') }}">
                        @error('price')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Basic Input -->
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select name="category_id" id="category_id" class="form-select">
                            <option value="none">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    <!-- Default File Input Example -->
                    <div class="mb-3">
                        <label for="gallery" class="form-label">Gallery</label>
                        <input class="form-control filepond" type="file" id="gallery" name="gallery[]" multiple accept="image/png, image/jpeg, image/gif">
                        @error('gallery')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>



            <hr>
            <div class="">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
            </div>
        </form>

    </section>

@endsection


@push('js')
    <script>
        $(document).ready(function() {

            $('input#title').keyup(function() {
                let val = $(this).val();
                $('input#slug').val(val.toLowerCase().replace(/ /g, "-").replace(/[^\w-]+/g, ""));
            });
        });

    </script>
@endpush
