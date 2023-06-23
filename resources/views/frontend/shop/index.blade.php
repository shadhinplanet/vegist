@extends('frontend.layouts.master')

@section('title', 'Shop')

@section('content')

    <x-frontend.breadcrumb title="Shop" />

    <!-- grid-list start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="grid-list-banner" style="background-image: url({{ asset('frontend/image/slider17.jpg') }});">
                        <div class="grid-banner-content">
                            <h4>Bestseller</h4>
                            <p>Praesent dapibus, neque id cursus Ucibus, tortor neque egestas augue, eu vulputate magna eros
                                eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, facilisis luc...</p>
                        </div>
                    </div>
                </div>
            </div>
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
                            {{-- <ul class="grid-list">
                            <li class="colloction-icn"><a href="grid-list-2.html"><i class="ti-layout-list-thumb"></i></a></li>
                            <li class="colloction-icn"><a href="grid-list-3.html"><i class="ti-layout-grid2"></i></a></li>
                            <li class="colloction-icn three-grid"><a href="grid-list.html" class="active"><i class="ti-layout-grid3"></i></a></li>
                            <li class="colloction-icn four-grid"><a href="grid-list-4.html"><i class="ti-layout-grid4"></i></a></li>
                        </ul> --}}
                            {{-- <ul class="grid-list-selector">
                            <li>
                                <label>Sort by</label>
                                <select>
                                    <option>Featured</option>
                                    <option>Best selling</option>
                                    <option>Alphabetically,A-Z</option>
                                    <option>Alphabetically,Z-A</option>
                                    <option>Price, low to high</option>
                                    <option>Price, high to low</option>
                                    <option>Date new to old</option>
                                    <option>Date old to new</option>
                                </select>
                            </li>
                        </ul> --}}
                        </div>
                        <div class="grid-pro">
                            <ul class="grid-product">
                                @foreach ($products as $product)
                                    <li class="grid-items">
                                       <x-frontend.product-item :product="$product"/>
                                    </li>


                                
                                @endforeach

                                {{-- <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-2.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-02.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Fresh & healty food</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$126.00 USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-3.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-03.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-discount">-20%</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Fresh apple</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$130.00 USD</span>
                                        <span class="old-price"><del>$150.00 USD</del></span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-4.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-04.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Fresh litchi 100% organic</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$117.00 USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-5.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-05.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-discount">-12%</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Vegetable tomato fresh</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star b-star"></i>
                                        <i class="fa fa-star b-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$133.00 USD</span>
                                        <span class="old-price"><del>$145.00 USD</del></span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-6.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-06.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-discount">-21%</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Natural grassbean</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$139.00 USD</span>
                                        <span class="old-price"><del>$160.00 USD</del></span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-7.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-07.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-discount">-10%</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Fresh dryed almod (50gm)</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$580.00 USD</span>
                                        <span class="old-price"><del>$590.00 USD</del></span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-8.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-08.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Orange juice (5ltr)</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star b-star"></i>
                                        <i class="fa fa-star b-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$93.00 USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-9.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-09.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-discount">-12%</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Organic coconet (5ltr) juice</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$167.00 USD</span>
                                        <span class="old-price"><del>$179.00 USD</del></span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-10.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-010.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Shrimp jumbo (5Lb)</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$230.00 USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-11.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-011.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Sp.red fresh guava</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$45.00 USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="product.html">
                                            <img class="img-fluid" src="image/pro/pro-img-12.jpg" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="image/pro/pro-img-012.jpg" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-discount">-25%</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Fresh mussel (500g)</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$245.00 USD</span>
                                        <span class="old-price"><del>$270.00 USD</del></span>
                                    </div>
                                </div>
                            </li> --}}
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
