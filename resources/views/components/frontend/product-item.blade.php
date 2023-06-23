@props(['product'])
<div class="tred-pro">
    <div class="tr-pro-img">
        <a href="{{ route('front.shop.single', $product->slug) }}">
            <img class="img-fluid"
                src="{{ count($product->gallery) > 0 ? getAssetUrl($product->gallery[0]->name, 'uploads/products') : '' }}"
                alt="{{ $product->title }}">
            <img class="img-fluid additional-image"
                src="{{ count($product->gallery) > 1 ? getAssetUrl($product->gallery[1]->name, 'uploads/products') : '' }}"
                alt="{{ $product->title }}">
        </a>
    </div>
    {!! productLabel($product) !!}
    <div class="pro-icn">
        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
        <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
            data-bs-target="#product-{{ $product->id }}-Modal"><i class="fa fa-eye"></i></a>
    </div>
</div>
<div class="caption">
    <h3><a href="{{ route('front.shop.single', $product->slug) }}">{{ $product->title }}</a>
    </h3>
    <div class="rating">
        <i class="fa fa-star c-star"></i>
        <i class="fa fa-star c-star"></i>
        <i class="fa fa-star c-star"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <div class="pro-price">
        <span class="new-price">${{ number_format($product->price, 2) }} USD</span>
    </div>
</div>

<!-- quick veiw start -->
<section class="quick-view">
    <div class="modal fade" id="product-{{ $product->id }}-Modal" tabindex="-1"
        aria-labelledby="product-{{ $product->id }}-Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="product-{{ $product->id }}-Label">
                        Product quickview
                    </h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ion-close-round"></i></a>
                </div>
                <div class="quick-veiw-area">
                    <div class="quick-image">
                        <div class="tab-content">
                            @foreach ($product->gallery as $key => $image)
                                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                                    id="image-{{ $image->id }}">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{ getAssetUrl($image->name, 'uploads/products') }}"
                                            class="img-fluid" alt="{{ $image->name }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                            @foreach ($product->gallery as $key => $image)
                                <li class="nav-item items">
                                    <a class="nav-link " data-bs-toggle="tab" href="#image-{{ $image->id }}"><img
                                            src="{{ getAssetUrl($image->name, 'uploads/products') }}" class="img-fluid"
                                            alt="{{ $image->name }}"></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="quick-caption">
                        <h4>{{ $product->title }}</h4>
                        <div class="quick-price">
                            <span class="new-price">${{ number_format($product->price, 2) }}
                                USD</span>
                            {{-- <span class="old-price"><del>$399.99 USD</del></span> --}}
                        </div>
                        <div class="quick-rating">
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-description">
                            <p>{{ $product->excerpt }}</p>
                        </div>
                        {{-- <div class="pro-size">
                                <label>Size: </label>
                                <select>
                                    <option>1 ltr</option>
                                    <option>3 ltr</option>
                                    <option>5 ltr</option>
                                </select>
                            </div> --}}
                        <div class="plus-minus">
                            <span>
                                <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                <input type="text" name="name" value="1">
                                <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                            </span>
                            <a href="cart.html" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                            <a href="wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quick veiw end -->
