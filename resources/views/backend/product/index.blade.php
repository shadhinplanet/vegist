@extends('backend.layouts.app')

@section('title', 'Product')
@section('page-title', 'Product')

@section('content')

    <section class="bg-white p-4">
        <div class="text-end">
            <!-- Base Buttons -->
            <a href="{{ route('product.create') }}" class="btn btn-primary waves-effect waves-light">Create</a>
        </div>
        <!-- Striped Rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($products as $key => $product)
                    <tr>
                        <th scope="row"> {{ $products->perPage() * ($products->currentPage() - 1) + ++$key }}</th>
                        <td>
                            <!-- Rounded Image -->
                            <img class="rounded shadow" alt="" width="80"
                                src="{{ count($product->gallery) > 0 ? getAssetUrl($product->gallery[0]->name, '/uploads/products') : '' }}">
                        </td>
                        <td>{{ $product->title }}</td>
                        <td class="">{{ $product->slug }}</td>
                        <td class="">{{ $product->category->name }}</td>
                        <td>
                            <div class="hstack gap-3 flex-wrap">
                                <a href="{{ route('product.edit', $product->id) }}" class="link-success fs-15"><i
                                        class="ri-edit-2-line"></i></a>

                                <a href="javascript::void(0)" onclick="deleteRecord({{ $product->id }})"
                                    class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>


                                <form id="delete-form-{{ $product->id }}"
                                    action="{{ route('product.delete', $product->id) }}" method="POST"
                                    style="display: none">
                                    @csrf
                                    @method('DELETE')
                                </form>


                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No Product Found!</td>
                    </tr>
                @endforelse


            </tbody>
        </table>
        <div class="mb-4">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </section>

@endsection

@push('js')
    <script>
        function deleteRecord(id) {
            Swal.fire({
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon><div class="mt-4 pt-2 fs-15 mx-5"><h4>Are you Sure ?</h4><p class="text-muted mx-4 mb-0">Are you want to delete?</p></div></div>',
                showCancelButton: !0,
                confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
                confirmButtonText: "Yes, Delete It!",
                cancelButtonClass: "btn btn-danger w-xs mb-1",
                buttonsStyling: !1,
                showCloseButton: false,
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endpush
