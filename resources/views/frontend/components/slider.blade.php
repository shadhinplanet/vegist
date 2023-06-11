<!--home page slider start-->
<section class="slider">
    <div class="home-slider owl-carousel owl-theme">

        @foreach ($sliders as $slider)
            @php
                $position = 'slide-c-l';
                if ($slider->alignment == 'center') {
                    $position = 'slide-c-c';
                }
                if ($slider->alignment == 'right') {
                    $position = 'slide-c-r';
                }
            @endphp
            <div class="items">
                <div class="img-back" style="background-image:url({{ getAssetUrl($slider->background) }});">
                    <div class="h-s-content {{ $position }}">
                        <span>{{ $slider->subtitle }}</span>
                        <h1>{!! $slider->title !!}</h1>
                        @if ($slider->btn_text != '')
                            <a href="{{ $slider->btn_link }}" class="btn btn-style1">{{ $slider->btn_text }}</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <div class="items">
            <div class="img-back" style="background-image:url({{ asset('frontend') }}/image/slider1.jpg);">
                <div class="h-s-content slide-c-l">
                    <span>Summer vage sale</span>
                    <h1>Fresh fruits<br>&vegetable</h1>
                    <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                </div>
            </div>
        </div>


        <div class="items">
            <div class="img-back" style="background-image:url({{ asset('frontend') }}/image/slider2.jpg);">
                <div class="h-s-content slide-c-r">
                    <span>Organic indian masala</span>
                    <h1>Prod of indian<br>100% pacaging</h1>
                    <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                </div>
            </div>
        </div>
        <div class="items">
            <div class="img-back" style="background-image:url({{ asset('frontend') }}/image/slider3.jpg);">
                <div class="h-s-content slide-c-c">
                    <span>Top selling!</span>
                    <h1>Fresh for your health</h1>
                    <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!--home page slider start-->
