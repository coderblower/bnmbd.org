@extends('front-end.layouts.master')
@section('title', 'Home')
@section('content')

    <!-- Carousel Start -->
    @include('front-end.pages.home.components.slider_single')
    <!-- Carousel End -->

   @include('front-end.pages.home.components.about-us')
   
   <style>
    .join {
        text-align: center;
    }
    .join::after{
        content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgb(183 171 113 / 70%); /* This adds a dark overlay to make text more readable */
    z-index: 1;
    }
   
    .fancy:hover{
        transform: scale(1.2)
    }

    .fancy {
    --offset: 6px;
    background: rgb(2, 2, 2);
    border-radius: 50px;
    position: relative;
    height: 100px;
    width: 500px;
    max-width: 100%;
    overflow: hidden;
    transition: all .5s ease-in;
}

/* Conic gradient */
.fancy::before { 
    content: '';
    background: conic-gradient(transparent 270deg, rgb(192, 131, 0), transparent);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    aspect-ratio: 1;
    width: 100%;
    animation: rotate 2s linear infinite;
}

/* Overlay */
.fancy::after {
    content: '';
    background: inherit;
    border-radius: inherit;
    position: absolute;
    inset: var(--offset);
    height: calc(100% - 2 * var(--offset));
    width: calc(100% - 2 * var(--offset));
}

.fancy input {
    background: transparent;
    color: rgb(243, 222, 32);
    font-size: 2.5rem;
    position: absolute;
    inset: 0;
    z-index: 8;
    padding: 1.5rem;
    border: none;
}

@keyframes rotate {
    from {
        transform: translate(-50%, -50%) scale(3.4) rotate(0turn);
    }

    to {
        transform: translate(-50%, -50%) scale(3.4) rotate(1turn);
    }
}

   </style>
   <div class="join-us" style="position: relative;">
    <div class="container-fluid " style="min-height: 400px;background:#e82629; display:flex;   justify-content: center; align-items: center; background-image: url('{{ asset('frontend/img/join_1.webp') }}'); background-size: cover; background-attachment: fixed; ">
        <div class="row">
           <div class="fancy" style="  ">
            
            <form action="/primary-member">
                <input type="submit" value="বিএনএম এ যোগ দিন ">
            </form>
           </div>
        </div>
    </div>
   </div>
   
   <!-- notic start -->


    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">
                <h1>
                    @if ($siteSetting)
                    {{ app()->getLocale() == 'bn' ? $siteSetting->notice_title_bn : $siteSetting->notice_title_en }}
                        @else
                            <p>No description available.</p>
                        @endif
                </h1>
            </div>
            <div class="row">

                @foreach ($notice as $key => $item)
                    <div class="col-md-6">
                        <div class="blog-card">
                            <div class="description" style="flex-basis: auto;">
                                <h5><a href="{{ route('notice.details', $item->id) }}">
                                        {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                                    </a></h5>
                                <p>
                                    {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 95) : Illuminate\Support\Str::limit($item->description_en, 95) }}
                                </p>
                                {{ app()->getLocale() == 'bn' ? $item->date : $item->date }}

                                <a href="{{ route('notice.details', $item->id) }}"
                                    class="text-primary d-flex justify-content-end"><small>
                                        {{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}</small></a>
                                </h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
                <a href="{{ route('notice-page') }}" class="btn btn-primary"
                    style="background-color: #e82629; border-color: #e82629">
                    {{ app()->getLocale() == 'bn' ? 'আরো দেখুন...' : 'See More...' }}
                </a>
            </div>
        </div>
    </div>
    <!-- notic End -->
    <!-- Forms Start -->
    @include('front-end.pages.home.components.pdfForm')
    <!-- Forms End -->

    <!-- Our Programs Start -->
    @include('front-end.pages.home.components.programs')
    <!-- Our Programs End -->

    <!-- News Start -->
    @include('front-end.pages.home.components.news')
    <!-- News End -->

    <!-- Our Videos Start -->
    @include('front-end.pages.home.components.video')
    <!-- Our Videos End -->

    <!-- Party Start -->
    @include('front-end.pages.home.components.party')
    <!-- party End -->

    <!-- Contact Start -->
    @include('front-end.pages.home.components.contact')
    <!-- Contact End -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#home").addClass('active');
        });
    </script>
@endsection
