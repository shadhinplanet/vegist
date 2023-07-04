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

                    <!-- Basic Input -->
                    <div class="mb-3 border border-secondary p-3">
                        <div class="d-inline-flex justify-content-between w-100 align-items-center">
                            <label for="custom_options" class="form-label">Custom Options <small>(optional)</small></label>
                            <button type="button" id="addRows" class="btn-dark">Add Option</button>
                        </div>

                        <div class="mb-2 mt-3">
                            <ul id="option_box">
                                <li id="row0" class="border border-success mb-3 option_item p-3 rounded"
                                    style="display: none">
                                    <div class="d-flex justify-content-between gap-2" id="option_title_box">
                                        <input type="text" value="" class="form-control option_title_input"
                                            placeholder="Title">

                                    </div>
                                    <ul class="my-2" id="option_item_box">
                                        <li id="option_item_row0" style="display: none" class="single_item_box">
                                            <input type="text" placeholder="Option"
                                                class="form-control my-2 option_item_input">
                                            <span id="option_item_remove_box"></span>
                                        </li>
                                    </ul>
                                    <div class="text-end mt-2">
                                        <button type="button" class="btn-sm btn-info" id="addItemRows">Add Item</button>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        @error('custom_options')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Default File Input Example -->
                    <div class="mb-3">
                        <label for="gallery" class="form-label">Gallery</label>
                        <input class="form-control filepond" type="file" id="gallery" name="gallery[]" multiple
                            accept="image/png, image/jpeg, image/gif">
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


        $(function() {
            var $mainBox = $("#option_box"),
                $firstRow = $("#row0").clone();
            $idVal = 1;
            $("#addRows").on('click', function() {
                var copy = $firstRow.clone();
                copy.hide();
                var newId = 'row' + $idVal;
                copy.attr('id', newId);
                copy.find('.option_title_input').attr('name', 'option[' + $idVal + '][]');

                copy.children('#option_title_box').append(
                    '<button type="button" class="btn-sm btn-danger option-delete" data-id="' + $idVal +
                    '" data-row="' + newId +
                    '">Remove</button>');
                $idVal += 1;
                setTimeout(() => {
                    copy.slideDown();
                }, 50);
                // copy.children('.input-group').each(function(i, td) {
                //     if( i > 0 && i < 4 ){
                //         $(td).find('input').val('');
                //     }
                // });

                $mainBox.append(copy);
            });
            // Remove Row
            $(document).on('click', '.option-delete', function() {

                var row = $(this).data('row');
                $("#" + row).hide('fast', function() {
                    $("#" + row).remove();
                });
            });

            var $main_option_items = $("#option_item_box"),
                $firstItem = $("#option_item_row0").clone();
            $itemId = 1;
            $(document).on('click', '#addItemRows', function() {
                var row = $(this).closest('.option_item').find('.option-delete').data('id');
                var parentRow = $(this).closest('.option_item').find('.option-delete').data('row');


                var len = $('#' + parentRow + ' .single_item_box').length;


                var copy = $firstItem.clone();
                copy.hide();
                var newItemId = 'option_item_row' + len;
                copy.attr('id', newItemId);



                copy.find('.option_item_input').attr('name', 'option[' + row + '][' + len + ']').attr(
                    'data-parent', row);

                copy.children('#option_item_remove_box').append(
                    '<button type="button" class="btn-sm btn-danger option-item-delete" data-row="' +
                    newItemId +
                    '"><i class="ri-delete-back-2-fill fs-15"></i></button>');

                setTimeout(() => {
                    copy.slideDown();
                }, 50);
                $('#' + parentRow + ' #option_item_box').append(copy);
            });

            // Remove option item Row
            $(document).on('click', '.option-item-delete', function() {
                var row = $(this).data('row');
                var parentRow = $(this).data('parent');
                $('#' + parentRow + " #" + row).hide('fast', function() {
                    $('#' + parentRow + " #" + row).remove();
                });
            });
        });
    </script>
@endpush
