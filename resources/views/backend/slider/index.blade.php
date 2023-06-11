@extends('backend.layouts.app')

@section('title', 'Slider')
@section('page-title', 'Slider')

@section('content')

    <section class="bg-white p-4">
        <div class="text-end">
            <!-- Base Buttons -->
            <a href="{{ route('slider.create') }}" class="btn btn-primary waves-effect waves-light">Create</a>
        </div>
        <!-- Striped Rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">BG</th>
                    <th scope="col">Title</th>
                    <th scope="col">Alignment</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($sliders as $key => $slider)
                    <tr>
                        <th scope="row"> {{ $sliders->perPage() * ($sliders->currentPage() - 1) + ++$key }}</th>
                        <td>
                            <img src="{{ getAssetUrl($slider->background) }}" alt="{{ $slider->background }}"
                                class="rounded avatar-lg shadow">
                        </td>
                        <td>{{ $slider->title }}</td>
                        <td class="text-capitalize">{{ $slider->alignment }}</td>
                        <td>
                            <div class="hstack gap-3 flex-wrap">
                                <a href="javascript:void(0);" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                <a href="javascript:void(0);" class="link-danger fs-15"><i
                                        class="ri-delete-bin-line"></i></a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No Slider Found!</td>
                    </tr>
                @endforelse


            </tbody>
        </table>
    </section>

@endsection
