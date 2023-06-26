@extends('frontend.layouts.master')

@section('title', $product->title)

@section('content')

    <x-frontend.breadcrumb :title="$product->title" />

    <!-- product info start -->
    <section class="section-tb-padding pro-page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row pro-image">
                        <div class="col-xl-5 col-lg-6 col-md-6 col-12 larg-image">
                            <div class="tab-content">
                                @foreach ($product->gallery as $key => $image)
                                    <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}"
                                        id="image-{{ $image->id }}">
                                        <a href="javascript:void(0)" class="long-img">
                                            <figure class="zoom" onmousemove="zoom(event)"
                                                style="background-image: url({{ getAssetUrl($image->name, 'uploads/products') }})">
                                                <img src="{{ getAssetUrl($image->name, 'uploads/products') }}"
                                                    class="img-fluid" alt="{{ $image->name }}">
                                            </figure>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                            <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                                @foreach ($product->gallery as $key => $image)
                                    <li class="nav-item items">
                                        <a class="nav-link {{ $key === 0 ? 'active' : '' }}" data-bs-toggle="tab"
                                            href="#image-{{ $image->id }}"><img
                                                src="{{ getAssetUrl($image->name, 'uploads/products') }}" class="img-fluid"
                                                alt="{{ $image->name }}"></a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6 col-12 pro-info product_data">
                            <h4>{{ $product->title }}</h4>
                            <div class="rating">
                                <i class="fa fa-star d-star"></i>
                                <i class="fa fa-star d-star"></i>
                                <i class="fa fa-star d-star"></i>
                                <i class="fa fa-star d-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-availabale">
                                <span class="available">Availability:</span>
                                <span class="pro-instock"><i class="ti-check-box"></i> In stock</span>
                            </div>
                            <div class="pro-price">
                                <span class="new-price">${{ number_format($product->price, 2) }} USD</span>
                                {!! productLabel($product) !!}
                            </div>
                            <span class="pro-details">Hurry up! only <span class="pro-number">7</span> products left in
                                stock!</span>
                            <p>{{ $product->excerpt }}</p>
                            {{-- <div class="pro-items">
                                <span class="pro-size">Size:</span>
                                <ul class="pro-wight">
                                    <li><a href="javascript:void(0)" class="active">5KG</a></li>
                                    <li><a href="javascript:void(0)">1KG</a></li>
                                </ul>
                            </div>
                            <div class="product-color">
                                <span class="color-label">Color:</span>
                                <span class="color">
                                    <a href="javascript:void(0)" class="active"><span></span></a>
                                    <a href="javascript:void(0)"><span></span></a>
                                    <a href="javascript:void(0)"><span></span></a>
                                </span>
                            </div> --}}
                            <div class="pro-qty">
                                <span class="qty">Quantity:</span>
                                <div class="plus-minus">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <input type="text" name="quantity" class="quantity" value="1">
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                                </div>
                            </div>
                            <div class="pro-btn">
                                <input type="hidden" class="product_id" name="product_id" value="{{ $product->id }}">
                                <a href="wishlist.html" class="btn btn-style1"><span><i class="fa fa-heart"></i></span></a>
                                <a href="javascript::void(0)" class="btn btn-style1 add-to-cart-btn"><span><i
                                            class="fa fa-shopping-bag"></i> Add
                                        to cart</span></a>
                                <a href="checkout-1.html" class="btn btn-style1"><span>Buy now</span></a>
                            </div>
                            <div class="share">
                                <span class="share-lable">Share:</span>
                                <ul class="share-icn">
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="pay-img">
                                <a href="checkout-1.html">
                                    <img src="{{ asset('frontend/image/pay-image.jpg') }}" class="img-fluid"
                                        alt="pay-image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product info end -->
    <!-- product page tab start -->
    <section class="section-b-padding pro-page-content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pro-page-tab">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-1">
                                {!! $product->description !!}

                            </div>
                            <div class="tab-pane fade show" id="tab-2">
                                <h4 class="reviews-title">Customer reviews</h4>
                                <div class="customer-reviews t-desk-2">
                                    <span class="p-rating">
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                    </span>
                                    <p class="review-desck">Based on 2 reviews</p>
                                    <a href="#add-review" data-bs-toggle='collapse'>Write a review</a>
                                </div>
                                <div class="review-form collapse" id="add-review">
                                    <h4>Write a review</h4>
                                    <form>
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Enter your name">
                                        <label>Email</label>
                                        <input type="text" name="mail" placeholder="Enter your Email">
                                        <label>Rating</label>
                                        <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <label>Review title</label>
                                        <input type="text" name="mail" placeholder="Review title">
                                        <label>Add comments</label>
                                        <textarea name="comment" placeholder="Write your comments"></textarea>
                                    </form>
                                </div>
                                <div class="customer-reviews">
                                    <span class="p-rating">
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h4 class="review-head">He also good and high product see like look</h4>
                                    <span class="reviews-editor">Kelin patel <span class="review-name">on</span> fab 5,
                                        2021</span>
                                    <p class="r-description">He also good and high product see like look</p>
                                </div>
                                <div class="customer-reviews">
                                    <span class="p-rating">
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h4 class="review-head">He also good and fresh fruit organic product see like look
                                    </h4>
                                    <span class="reviews-editor">Melvin louis <span class="review-name">on</span> fab 5,
                                        2021</span>
                                    <p class="r-description">He also good and fresh fruit organic product see like look
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product page tab end -->


    <!-- releted product start -->
    <section class="section-b-padding pro-releted">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title3">
                        <h2><span>Related Product</span></h2>
                    </div>
                    <div class="releted-products owl-carousel owl-theme">
                        @foreach ($product->category->products as $item)
                            @if ($product->id != $item->id)
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('front.shop.single', $item->slug) }}">
                                                <img class="img-fluid"
                                                    src="{{ count($item->gallery) > 0 ? getAssetUrl($item->gallery[0]->name, 'uploads/products') : '' }}"
                                                    alt="{{ $item->title }}">
                                                <img class="img-fluid additional-image"
                                                    src="{{ count($item->gallery) > 1 ? getAssetUrl($item->gallery[1]->name, 'uploads/products') : '' }}"
                                                    alt="{{ $item->title }}">
                                            </a>
                                        </div>
                                        {!! productLabel($item) !!}
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                                data-bs-target="#product-{{ $item->id }}-Modal"><i
                                                    class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a
                                                href="{{ route('front.shop.single', $item->slug) }}">{{ $item->title }}</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">${{ number_format($item->price, 2) }} USD</span>
                                        </div>
                                    </div>

                                </div>
                            @endif
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- releted product end -->

@endsection

@push('js')
    <script>
        function zoom(e) {
            var zoomer = e.currentTarget;
            e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
            e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
            x = offsetX / zoomer.offsetWidth * 100
            y = offsetY / zoomer.offsetHeight * 100
            zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }


        $(document).ready(function() {
            cartload();
            // Add To cart via cookie
            $('.add-to-cart-btn').click(function(e) {
                e.preventDefault();

                var product_id = $(this).closest('.product_data').find('.product_id').val();
                var quantity = $(this).closest('.product_data').find('.quantity').val();


                $.ajax({
                    url: '{{ route('front.cart.store') }}',
                    method: "POST",
                    data: {
                        'quantity': quantity,
                        'product_id': product_id,
                    },
                    success: function(response) {
                        toast(response.message);
                        cartload();
                    },
                });
            });
        });

       
    </script>
@endpush
