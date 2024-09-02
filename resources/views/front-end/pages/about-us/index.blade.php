@extends('front-end.layouts.master')
@section('title', 'About Us')
@section('content')
    <!-- Page Header Start -->
    {{-- <div class="container-fluid page-header" id="stats-section" style=" margin-top:82px;
    background-image: url('{{asset('frontend/img/counter-bg.jpg')}}');
    background-size: cover;
    background-attachment: fixed;
  ">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div> --}}
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div id="" class="" data-bs-ride="">
            <div class="carousel-inner">
              <div class="">
                <img src="//bnmbd.org/uploads-image/sliders/1723464041.png" class="d-block w-100"   alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
            </div>
        </div>
        <div class="container">

            <div class="row g-5 mt-3">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="{{ asset($about_us->image2) }}" class="img-fluid w-75 rounded" alt=""
                            style="margin-bottom: 25%" />
                        <div class="position-absolute w-75" style="top: 25%; left: 25%">
                            <img src="{{ asset($about_us->image1) }}" class="img-fluid w-100 rounded" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 style="color: #39b44b">
                        {{ app()->getLocale() == 'bn' ? $siteSetting->about_subtitle_bn : $siteSetting->about_subtitle_en }}
                    </h5>
                    <h1 class="mb-4">
                        {{ app()->getLocale() == 'bn' ? $about_us->title_bn : $about_us->title_bn }}
                    </h1>
                    <p style="color: black">
                        {{ app()->getLocale() == 'bn' ? $about_us->description_bn : $about_us->description_en }}
                    </p>
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row g-5 mt-3">
                @foreach ($about_items as $key => $item)
                    <div class="col-lg-6 col-xl-6 mb-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="card">
                            <img src="{{ asset($item->image) }}" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h2 class="card-title">{{ $key + 1 }}.
                                    {{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                                </h2>
                                <p class="card-text">{!! app()->getLocale() == 'bn' ? $item->description_bn : $item->description_en !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <style>
            .card {
                height: 30rem; /* Fixed card height */
                display: flex;
                flex-direction: column;
            }
            .card-img-top {
                height: 12rem; /* Fixed image height */
                width: 100%;
                object-fit: contain; /* Ensures the whole image is visible, maintaining aspect ratio */
            }
            .card-body {
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                overflow: hidden;
            }
            .card-title {
                font-size: 1.25rem;
                font-weight: bold;
                margin-bottom: 0.5rem;
            }
            .card-text {
                flex-grow: 1;
                overflow-y: auto; /* Makes the text scrollable if it overflows */
                max-height: 10rem; /* Limits the height of the text area */
            }
        </style>

    </div>
    <!-- About End -->

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#about").addClass('active');
        });
    </script>
@endsection
