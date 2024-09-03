@extends('front-end.layouts.master')
@section('title', 'Party')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header" id="stats-section"
        style="margin-top:82px; background-image: url('{{ asset('frontend/img/counter-bg.jpg') }}'); background-size: cover; background-attachment: fixed; height: 600px; display: flex; align-items: center; justify-content: center;">
        <div class="container text-center">
            <h1 class="display-2 text-white mb-1 animated slideInDown">
                {{ app()->getLocale() == 'bn' ? 'গঠনতন্ত্র' : 'Constitution' }}
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Constitution Sections Start -->
    <div class="container my-5">
        <div class="row">
            <!-- Section 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('frontend/img/section1.jpg') }}" class="card-img-top" alt="Section 1">
                    <div class="card-body">
                        <h5 class="card-title">{{ app()->getLocale() == 'bn' ? 'অধ্যায় ১' : 'Chapter 1' }}</h5>
                        <p class="card-text">
                            {{ app()->getLocale() == 'bn' ? 'এখানে অধ্যায় ১ সম্পর্কে কিছু বিস্তারিত তথ্য প্রদান করুন।' : 'Here you can provide some detailed information about Chapter 1.' }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('frontend/img/section2.jpg') }}" class="card-img-top" alt="Section 2">
                    <div class="card-body">
                        <h5 class="card-title">{{ app()->getLocale() == 'bn' ? 'অধ্যায় ২' : 'Chapter 2' }}</h5>
                        <p class="card-text">
                            {{ app()->getLocale() == 'bn' ? 'এখানে অধ্যায় ২ সম্পর্কে কিছু বিস্তারিত তথ্য প্রদান করুন।' : 'Here you can provide some detailed information about Chapter 2.' }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('frontend/img/section3.jpg') }}" class="card-img-top" alt="Section 3">
                    <div class="card-body">
                        <h5 class="card-title">{{ app()->getLocale() == 'bn' ? 'অধ্যায় ৩' : 'Chapter 3' }}</h5>
                        <p class="card-text">
                            {{ app()->getLocale() == 'bn' ? 'এখানে অধ্যায় ৩ সম্পর্কে কিছু বিস্তারিত তথ্য প্রদান করুন।' : 'Here you can provide some detailed information about Chapter 3.' }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Add more sections similarly -->
        </div>
    </div>
    <!-- Constitution Sections End -->

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#party").addClass('active');
        });
    </script>
@endsection
