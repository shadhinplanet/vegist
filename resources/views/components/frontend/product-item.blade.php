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
        <a href="javascript:addToCart({{ $product->id }}, 1)" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
        <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
            data-bs-target="#product-quickview-modal" data-product="{{ $product->slug }}"><i class="fa fa-eye"></i></a>
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


