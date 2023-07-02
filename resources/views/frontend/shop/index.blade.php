@extends('frontend.layouts.master')

@section('title', 'Shop')

@section('content')

    <x-frontend.breadcrumb title="Shop" />

    <!-- grid-list start -->
    <section class="section-tb-padding">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="all-filter">
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Categories</h4>
                            <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Categories
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-option collapse" id="category-filter">
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Baker's rack <span class="grid-items">(4)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Bestseller<span class="grid-items">(6)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Breakfast <span class="grid-items">(8)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Dairy & chesse <span class="grid-items">(7)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Dairy & chesse <span class="grid-items">(3)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Deal collection <span class="grid-items">(10)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Dinner <span class="grid-items">(12)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Featured product <span class="grid-items">(11)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Fresh fruits <span class="grid-items">(16)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Fresh meat <span class="grid-items">(18)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Fresh vegetable <span class="grid-items">(16)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Green seafood <span class="grid-items">(12)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Lunch <span class="grid-items">(14)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">New product <span class="grid-items">(20)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Organic dryfruit <span class="grid-items">(21)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Organic juice <span class="grid-items">(23)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Organic wine <span class="grid-items">(17)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Sea & fish <span class="grid-items">(1)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Special product <span class="grid-items">(5)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Starters <span class="grid-items">(9)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="price-filter">
                            <h4 class="filter-title">Filter by price</h4>
                            <a href="#price-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by price
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-price collapse" id="price-filter">
                                <price-range class="price-range">
                                    <div class="price-range-group group-range">
                                        <input type="range" class="range" min="0" max="89"
                                            value="0" id="range1">
                                        <input type="range" class="range" min="0" max="89"
                                            value="89" id="range2">
                                    </div>
                                    <div class="price-input-group group-input">
                                        <div class="price-range-input input-prefix">
                                            <label class="input-prefix-label">From</label>
                                            <span class="input-prefix-value">$ <span id="demo1"></span></span>
                                        </div>
                                        <span class="price-range-delimeter">-</span>
                                        <div class="price-range-input input-prefix">
                                            <label class="input-prefix-label">To</label>
                                            <span class="input-prefix-value">$ <span id="demo2"></span></span>
                                        </div>
                                    </div>
                                </price-range>
                            </ul>
                        </div>
                        <div class="pro-size">
                            <h4 class="filter-title">Filter by size</h4>
                            <a href="#size-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by size
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-size collapse" id="size-filter">
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>10kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>10ltr</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>1kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>1ltr</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>2kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>3kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>5kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>5ltr</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-tag">
                            <h4 class="filter-title">Filter by tags</h4>
                            <a href="#tags-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by tags
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-tag collapse" id="tags-filter">
                                <li class="tag"><a href="product.html">Almond</a></li>
                                <li class="tag"><a href="product.html">Banana</a></li>
                                <li class="tag"><a href="product.html">Bitrrot</a></li>
                                <li class="tag"><a href="product.html">Blackberry</a></li>
                                <li class="tag"><a href="product.html">Chikoo</a></li>
                                <li class="tag"><a href="product.html">Coconet</a></li>
                                <li class="tag"><a href="product.html">Guava</a></li>
                                <li class="tag"><a href="product.html">juice</a></li>
                                <li class="tag"><a href="product.html">Ladiesfinger</a></li>
                                <li class="tag"><a href="product.html">Litchi</a></li>
                                <li class="tag"><a href="product.html">Minirrot</a></li>
                                <li class="tag"><a href="product.html">Mussel</a></li>
                                <li class="tag"><a href="product.html">Onion</a></li>
                                <li class="tag"><a href="product.html">Organic-food</a></li>
                                <li class="tag"><a href="product.html">Potato</a></li>
                                <li class="tag"><a href="product.html">Shrimp</a></li>
                                <li class="tag"><a href="product.html">Tomato</a></li>
                            </ul>
                        </div>
                        <div class="vendor-filter">
                            <h4 class="filter-title">Filter by vendor</h4>
                            <a href="#vendor" data-bs-toggle="collapse" class="filter-link"><span>Filter by vendor
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-vendor collapse" id="vendor">
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Fargglad</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Flisat</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Kyrre</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Lustigt</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Sundvik</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-banner">
                            <a href="grid-list.html" class="grid-banner">
                                <img src="image/grid-banner.jpg" class="img-fluid" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">

                    <div class="grid-list-area">
                        <div class="grid-list-select">

                        </div>
                        <div class="grid-pro">
                            <ul class="grid-product">
                                @foreach ($products as $product)
                                    <li class="grid-items">
                                        <x-frontend.product-item :product="$product" />
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="list-all-page">
                        {{ $products->links('pagination::bootstrap-5') }}
                        {{-- <span class="page-title">Showing 1 - 17 of 17 result</span>
                    <div class="page-number">
                        <a href="grid-list.html" class="active">1</a>
                        <a href="grid-list-2.html">2</a>
                        <a href="grid-list-3.html">3</a>
                        <a href="grid-list-4.html">4</a>
                        <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div> --}}
                    </div>
                </div>
            </div>
    </section>
    <!-- grid-list start -->


   


@endsection

@push('css')
    <style>
        .grid-list-area .grid-pro ul.grid-product li.grid-items {
            width: calc(50% - 30px);
        }
    </style>
@endpush


@push('js')
    <script>
        
    </script>
@endpush
