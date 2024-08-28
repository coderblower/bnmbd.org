@extends('front-end.layouts.master')
@section('title', 'Contact Us')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid">
        <div class="container text-center py-5">
            {{-- <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1> --}}
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Contact</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-4">
        <div class="container py-4">
            <div class="contact p-4 bg-light">
                <div class="row g-4">
                    <div class="col-xl-5">
                        <h1 class="mb-4">{{ app()->getLocale() == 'bn' ? 'যোগাযোগ করুন' : 'Get in touch' }}</h1>
                        <p class="mb-4">
                            {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($siteSetting->contact_description_bn, 300) : Illuminate\Support\Str::limit($siteSetting->contact_description_en, 300) }}
                        </p>
                        <form action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row gx-4 gy-3">
                                <div class="col-xl-6">
                                    <input type="text" class="form-control bg-white border-0 py-3 px-4"
                                        placeholder="{{ app()->getLocale() == 'bn' ? 'আপনার নাম' : 'Your First Name' }}"
                                        name="name" />
                                </div>
                                <div class="col-xl-6">
                                    <input type="email" class="form-control bg-white border-0 py-3 px-4"
                                        placeholder="{{ app()->getLocale() == 'bn' ? 'আপনার ইমেইল' : 'Your Email' }}"
                                        name="email" required />
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" class="form-control bg-white border-0 py-3 px-4"
                                        placeholder="{{ app()->getLocale() == 'bn' ? 'আপনার ফোন নাম্বার' : 'Your Phone' }}"
                                        name="phone" required />
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" class="form-control bg-white border-0 py-3 px-4"
                                        placeholder="{{ app()->getLocale() == 'bn' ? 'বিষয়' : 'Subject' }}" name="subject"
                                        required />
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0 py-3 px-4" name="message" rows="7" cols="10"
                                        placeholder="{{ app()->getLocale() == 'bn' ? 'আপনার বার্তা' : 'Your Message' }}" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 px-5"
                                        style="background-color: #e82629; border-color: #e82629" type="submit">
                                        {{ app()->getLocale() == 'bn' ? 'জমা দিন' : 'Submit' }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-7">
                        <div>
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="bg-white p-4">
                                        <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                                        <h4>{{ app()->getLocale() == 'bn' ? 'ঠিকানা' : 'Address' }}</h4>
                                        <p class="mb-0">
                                            {{ app()->getLocale() == 'bn' ? $siteSetting->address : $siteSetting->address }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-white p-4">
                                        <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                        <h4>{{ app()->getLocale() == 'bn' ? 'আমাদের মেইল' : 'Mail Us' }}</h4>
                                        <p class="mb-0">
                                            {{ app()->getLocale() == 'bn' ? $siteSetting->email : $siteSetting->email }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-white p-4">
                                        <i class="fa fa-phone-alt fa-2x text-primary mb-2"></i>
                                        <h4>{{ app()->getLocale() == 'bn' ? 'ফোন নাম্বার' : 'Telephone' }}</h4>
                                        <p class="mb-0">
                                            {{ app()->getLocale() == 'bn' ? $siteSetting->phone : $siteSetting->email }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <iframe class="w-100"
                                        style="height: 436px;
                  margin-bottom: -6px;
                  border-radius: 5px;"
                                        src="{{ $siteSetting->map_url }}" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@section('js')
    <script>
        $(document).ready(function() {
            $("#contact").addClass('active');
        });
    </script>
@endsection
