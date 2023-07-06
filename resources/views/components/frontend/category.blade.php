@props(['categories', 'title' => 'Shop Categories'])

<!-- Category image slide -->
<section class="category-img1 section-t-padding section-b-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>{{ $title }}</h2>
                </div>
                <div class="home-category owl-carousel owl-theme">

                    @forelse ($categories as $category)
                        <div class="items">
                            <div class="h-cate">
                                <div class="c-img">
                                    <a href="javascript:void(0)" class="home-cate-img">
                                        <img class="img-fluid" src="{{ getAssetUrl($category->thumbnail) }}"
                                            alt="cate-image">
                                        <span class="cat-title">{{ $category->name }}</span>
                                    </a>
                                </div>
                                <span class="cat-num">{{ count($category->products) }} Items</span>
                            </div>
                        </div>
                    @empty
                        <div class="items">
                            <div class="h-cate">
                                <div class="c-img">
                                    <a href="grid-list.html" class="home-cate-img">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/image/category-image/home-1/cat1.jpg"
                                            alt="cate-image">
                                        <span class="cat-title">Fresh fruits</span>
                                    </a>
                                </div>
                                <span class="cat-num">19 Items</span>
                            </div>
                        </div>
                        <div class="items">
                            <div class="h-cate">
                                <div class="c-img">
                                    <a href="grid-list.html" class="home-cate-img">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/image/category-image/home-1/cat2.jpg"
                                            alt="cate-image">
                                        <span class="cat-title">Dairy & chesse</span>
                                    </a>
                                </div>
                                <span class="cat-num">19 Items</span>
                            </div>
                        </div>
                        <div class="items">
                            <div class="h-cate">
                                <div class="c-img">
                                    <a href="grid-list.html" class="home-cate-img">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/image/category-image/home-1/cat3.jpg"
                                            alt="cate-image">
                                        <span class="cat-title">Sea & fish</span>
                                    </a>
                                </div>
                                <span class="cat-num">19 Items</span>
                            </div>
                        </div>
                        <div class="items">
                            <div class="h-cate">
                                <div class="c-img">
                                    <a href="grid-list.html" class="home-cate-img">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/image/category-image/home-1/cat4.jpg"
                                            alt="cate-image">
                                        <span class="cat-title">Organic dryfruit</span>
                                    </a>
                                </div>
                                <span class="cat-num">19 Items</span>
                            </div>
                        </div>
                        <div class="items">
                            <div class="h-cate">
                                <div class="c-img">
                                    <a href="grid-list.html" class="home-cate-img">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/image/category-image/home-1/cat5.jpg"
                                            alt="cate-image">
                                        <span class="cat-title">Green seafood</span>
                                    </a>
                                </div>
                                <span class="cat-num">19 Items</span>
                            </div>
                        </div>
                        <div class="items">
                            <div class="h-cate">
                                <div class="c-img">
                                    <a href="grid-list.html" class="home-cate-img">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/image/category-image/home-1/cat6.jpg"
                                            alt="cate-image">
                                        <span class="cat-title">Organic juice</span>
                                    </a>
                                </div>
                                <span class="cat-num">19 Items</span>
                            </div>
                        </div>
                        <div class="items">
                            <div class="h-cate">
                                <div class="c-img">
                                    <a href="grid-list.html" class="home-cate-img">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/image/category-image/home-1/cat7.jpg"
                                            alt="cate-image">
                                        <span class="cat-title">Summer fruit</span>
                                    </a>
                                </div>
                                <span class="cat-num">19 Items</span>
                            </div>
                        </div>
                        <div class="items">
                            <div class="h-cate">
                                <div class="c-img">
                                    <a href="grid-list.html" class="home-cate-img">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/image/category-image/home-1/cat8.jpg"
                                            alt="cate-image">
                                        <span class="cat-title">Fresh vegetable</span>
                                    </a>
                                </div>
                                <span class="cat-num">19 Items</span>
                            </div>
                        </div>
                        <div class="items">
                            <div class="h-cate">
                                <div class="c-img">
                                    <a href="grid-list.html" class="home-cate-img">
                                        <img class="img-fluid"
                                            src="{{ asset('frontend') }}/image/category-image/home-1/cat9.jpg"
                                            alt="cate-image">
                                        <span class="cat-title">Fresh meat</span>
                                    </a>
                                </div>
                                <span class="cat-num">19 Items</span>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category image slide -->
