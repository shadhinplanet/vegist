@extends('backend.layouts.app')

@section('title', 'Create Slider')
@section('page-title', 'Create Slider')

@section('content')

    <section class="bg-white p-4">
        <div class="text-end">
            <!-- Base Buttons -->
            <a href="{{ route('slider.index') }}" class="btn btn-primary waves-effect waves-light">Back</a>
        </div>


        <form action="{{ route('slider.create') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Basic Input -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <!-- Basic Input -->
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                @error('subtitle')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <!-- Basic Input -->
            <div class="mb-3">
                <label for="btn_text" class="form-label">Button Text</label>
                <input type="text" class="form-control" id="btn_text" name="btn_text" value="{{ old('btn_text') }}">
                @error('btn_text')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <!-- Basic Input -->
            <div class="mb-3">
                <label for="btn_link" class="form-label">Button Link</label>
                <input type="text" class="form-control" id="btn_link" name="btn_link" value="{{ old('btn_link') }}">
                @error('btn_link')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <!-- Basic Input -->
            <div class="mb-3">
                <label for="alignment" class="form-label">Button Link</label>
                <select name="alignment" id="alignment" class="form-select">
                    <option value="none">Select Alignment</option>
                    <option value="left" {{ old('alignment') == 'left' ? 'selected' : '' }}>Left</option>
                    <option value="center" {{ old('alignment') == 'center' ? 'selected' : '' }}>Center</option>
                    <option value="right" {{ old('alignment') == 'right' ? 'selected' : '' }}>Right</option>
                </select>
                @error('alignment')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Default File Input Example -->
            <div class="mb-3">
                <label for="background" class="form-label">Background</label>
                <input class="form-control" type="file" id="background" name="background">
                @error('background')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <hr>
            <div class="">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
            </div>
        </form>

    </section>

@endsection
