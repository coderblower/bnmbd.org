<div class="container-fluid" style="padding:0; margin-bottom:115px;">
    <div class="">
        <div class="bg-primary text-center"
            style="
        top: 119px;
        position: fixed;
        z-index: 9;
        width:100%;
        box-shadow:0 2px 4px rgb(91 94 91 / 70%)">
            <div class="ticker">
                <!--<div class="news-title">-->
                <!--    <h5>ব্রেকিং নিউজ</h5>-->
                <!--</div>-->
                <div class="news">
                    <marquee class="news-content">
                        <p>
                            বাংলাদেশ জাতীয়তাবাদী আন্দোলন - বি এন এম জাতীয়তাবাদের বিশ্বাসে অটল এবং অনড় - তারুণ্যের
                            শক্তিতে পরিচালিত, দলের ৫০ ভাগ তরুণদের দ্বারা পরিচালিত হবে।
                        </p>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-0 custom-carousel" style="">



    <div id="carouselId" class="carousel slide" style="" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($sliders as $key => $item)
                <li data-bs-target="#carouselId" data-bs-slide-to="{{ $key }}"
                    class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $key + 1 }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @if ($sliders && $sliders->count() > 0)
                @foreach ($sliders as $key => $item)
                    <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                        <img src="{{ asset($item->image) }}" class="img-fluid" alt="Slide {{ $key + 1 }}">

                    </div>
                @endforeach
            @else
                <p>No slides available.</p>
            @endif

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
