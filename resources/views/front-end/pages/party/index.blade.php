
@extends('front-end.layouts.master')
@section('title', 'Party')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid">
        <div class="container text-center py-5">
            {{-- <h1 class="display-2 text-white mb-1 animated slideInDown">Party</h1> --}}
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Party</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container-fluid py-4 team">
        <div id="" class="" data-bs-ride="">
            <div class="carousel-inner">
              <div class="container-fluid p-0">
                <img src="{{asset('uploads/banner/1.png')}}" class="img-fluid" style="height: auto; height: 100%; width: 100%;" alt="...">
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
            <div class="mx-auto pb-5 wow fadeIn" style="max-width: 600px;">
            </br></br>
                <b>৮. ১। সদস্য পদ লাভরে যোগ্যতাঃ-</b>
                <br>
                <p>১৮ বছর বা তদুর্ধ বয়সী বাংলাদশের যেকোন নাগরিক যারা এই গঠনতন্ত্রের অনুচ্ছেদ-২ ও ৩ কে ধারন করে তাঁরা নিচের শর্তসমূহ পূরন সাপেক্ষে বএিনএম -এর প্রাথমিক সদস্যপদ গ্রহন করতে পারবে-</p>
                <ul>
                    <li>তিনি এমন কোন সংগঠনের সদস্য নয় যার লক্ষ্য, আদর্শ এবং কর্মপদ্ধতি বএিনএম এর উদ্দ্যেশ্যের সাথে সাংঘর্ষিক।</li>
                    <li>তিনি বাংলাদেশের অন্যকোন রাজনৈতিক দলের বর্তমান সদস্য নয়।</li>
                </ul>
                <b>(খ) সদস্যের স্তর ঃ</b>
                <ul>
                    <li>প্রাথমিক সদস্য- যারা প্রাথমিক সদস্যপদ পূরন করে, নির্ধারিত চাঁদা পরিশোধ করেছে।</li>
                    <li>পদপ্রাপ্ত সদস্য- প্রাথমিক সদস্য হিসাবে ৩০ দিন অতিবাহিত করেছে, অথবা কোন আহŸবায়ক কমিটির সদস্য- এমন ব্যক্তিবর্গ সংশ্লিষ্ট কমিটির সভাপতি দ্বারা নির্ধারিত চাঁদা পরিশোধ সাপেক্ষে যেকোন পদে মনোনীত হতে পারে।</li>
                </ul>
                <b>(গ) সদস্যলাভ প্রক্রিয়া ঃ</b>
                <ul>
                    <li>যে কেউ তাঁর জাতীয় পরিচয়পত্রের ঠিকানা ও তথ্য প্রদানের মাধ্যমে বএিনএম এর প্রাথমিক সদস্য পদ গ্রহন করতে পারবেন তবে শর্ত থাকে যে, কেউ এক সাথে একের অধিক স্থান/ কমিটির সদস্য হতে পারবে না।</li>
                    <li>পদপ্রাপ্ত কোন সদস্য তাঁর বর্তমান আবাসস্থলের ঠিকানা পরিবর্তন করলে ৭ (সাত) কার্যদিবসের মধ্যে সংশ্লিষ্ট কমিটিকে লিখিতভাবে অবহিত করতে হবে। যে কোন নির্বাচনের তফসিল ঘোষনার সাথে সাথে সংশ্লিষ্ট এলাকার বএিনএম এর সদস্যপদ গ্রহন কার্যক্রম স্থগিত থাকবে।</li>
                </ul>
                <b>৮.২। সদস্যপদ রহিতকরন ঃ</b>
                <ul>
                    <li>মৃত্যু</li>
                    <li>পদত্যাগ- পদপ্রাপ্ত যে কোন সদস্য সংশ্লিষ্ট কমিটির সভাপতির নিকট লিখিত পদত্যাগ পত্র জমা দিলে; দলের যেকোন কমিটির সভাপতি/সাধারন সম্পাদক এবং জাতীয় নির্বাহী পরিষদের যে কোন স্তরের সদস্য দলের চেয়ারম্যানে নিকট লিখিত আবেদন পত্র জমা দিলে</li>
                    <li>সদস্যপদ নবায়ন চাঁদা প্রদান না করলে</li>
                    <li>অন্যকোন রাজনৈতিক সংগঠনে যোগদান করলে</li>
                </ul>
                <b>৮.৩। সদস্যপদ থকেে পদত্যাগ-</b>
                <ul>
                    <li>দলরে যে কোন সদস্য দলরে চযে়ারম্যান, কো-চযে়ারম্যান, মহাসচবি এর কাছে লখিতি ভাবে পদত্যাগ করতে পারবনে। পদত্যাগ পত্র গ্রহনরে ৬০ দনিরে মধ্যে উল্লখেতি পদ শুন্য ঘোষণা করতে হবে কংবা ৬১ তম দনিে ঐ পদটি শূন্য বলে গন্য হব।ে</li>
                    <li>দল র্কতৃক মনোনীত কোন সংসদ সদস্য যদি সংসদে দলীয় নতোর সম্মতি ছাড়া নজিরে নর্দিষ্টি আসন পরর্বিতন করনে বা অন্য দলরে সাথে জোট বাঁধনে বা ফ্লোরক্রস করনে অথবা সংসদে দলরে অবস্থানরে পরপিন্থী কোন কাজ করনে, তাহলে উপরোক্ত যে কোন র্কমকান্ডে উক্ত সংসদ সদস্য তাৎক্ষণকিভাবে নজি দল হতে পদত্যাগ করছেনে বলে গণ্য হবনে।</li>
                </ul>
                <b>৮.৪। সাংগঠকি বন্যিাস-</b>
                <ul>
                    <li>স্থানীয় পর্যায়ে বএিনএম এর সাংগঠনিক কাঠামো নিম্নরূপঃ</li>
                    <ul>
                        <li>ইউনিয়ন ওয়ার্ড কমিটি / ইউনয়িন কমটিি</li>
                        <li>উপজেলা/ থানা কমিটি</li>
                        <li>পৌরসভা কমিটি</li>
                        <li>জেলা কমিটি</li>
                        <li>পৌর/ মহানগর ওয়ার্ড কমিটি</li>
                        <li>পৌর/ মহানগর কমিটি</li>
                    </ul>
                    <li>জাতীয় পর্যায়ে বএিনএম এর কমিটি</li>
                    <ul>
                        <li>জাতীয় নির্বাহী পরিষদ</li>
                        <ul>
                            <li>কেন্দ্রীয় নির্বাহী কমিটি</li>
                            <li>স্থায়ী কমিটি</li>
                        </ul>
                        <li>জাতীয় কাউন্সিল</li>
                        <li>সংসদীয় বোর্ড</li>
                        <li>সংসদীয় দল</li>
                        <li>উপদেষ্টা পরিষদ</li>
                    </ul>
                    <li>ইউনিয়ন ওয়ার্ড কমিটিঃ</li>
                    <ul>
                        <li>প্রতটিি ইউনয়িনরে একটি ওয়ার্ডের অধীনে নূন্যতম ৬১ জন বএিনএম এর প্রাথমিক সদস্য থাকতে হবে</li>
                        <li>প্রাথমিক আহŸবায়ক কমিটি সম্মেলনের মাধ্যমে ৩৩ সদস্য বিশিষ্ট পূর্ণাঙ্গ ইউনিয়ন ওয়ার্ড কমিটি নির্বাচিত করবে যার কাঠামো হবে নিম্নরূপঃ</li>
                        <ul class="text-center">
                            <li>সভাপতি ১</li>
                            <li>সহ-সভাপতি ৩</li>
                            <li>সাধারন সম্পাদক ১</li>
                            <li>যুগ্ম সাধারন সম্পাদক ২</li>
                            <li>সাংগঠনিক সম্পাদক ১</li>
                            <li>কোষাধ্যক্ষ ১</li>
                            <li>দপ্তর সম্পাদক ১</li>
                            <li>নির্বাহী সদস্য ২৩</li>
                        </ul>
                        <li>সংশ্লিষ্ট ইউনিয়ন কমিটির অধীনে প্রতিটি ইউনিয়ন ওয়ার্ড কমিটি থাকবে এবং ওয়ার্ডের সম্মেলন অনুষ্ঠিত হবার পর পূর্নাঙ্গ ওয়ার্ড কমিটির কার্যকারিতা ঘোষনা করবে।</li>
                        <li>ইউনিয়ন ওয়ার্ড কমিটির সভাপতি ও সাধারন সম্পাদক পদাধিকারবলে সংশ্লিষ্ট ইউনিয়ন কমিটির নির্বাহী সদস্য হিসাবে থাকবে।</li>
                        <li>ইউনিয়ন কমিটি এবং ইউনিয়ন ওয়ার্ড কমিটি নির্বাচন কার্যক্রম যথাযথ নিয়মে শেষ হওয়ার ৬০ দিনের মধ্যে উপজেলা/ থানা কমিটি গঠন করতে হবে।</li>
                    </ul>
                </ul>
                <b>৮.৫। উপজেলা/ থানা কমিটিঃ</b>
                <ul>
                    <li>প্রতিটি উপজেলা/ থানায় নূন্যতম ৫১ জন প্রাথমিক সদস্য থাকতে হবে</li>
                    <li>ইউনিয়ন/ ওয়ার্ড কমিটির মাধ্যমে নির্বাচিত সদস্যদের মাধ্যমে ৩৩ সদস্য বিশিষ্ট উপজেলা/ থানা কমিটি গঠন করতে হবে</li>
                    <ul class="text-center">
                        <li>সভাপতি ১</li>
                        <li>সহ-সভাপতি ৩</li>
                        <li>সাধারন সম্পাদক ১</li>
                        <li>যুগ্ম সাধারন সম্পাদক ২</li>
                        <li>সাংগঠনিক সম্পাদক ১</li>
                        <li>কোষাধ্যক্ষ ১</li>
                        <li>দপ্তর সম্পাদক ১</li>
                        <li>নির্বাহী সদস্য ২১</li>
                    </ul>
                    <li>উপজেলা/ থানার সম্মেলন শেষ হওয়ার ৩০ দিনের মধ্যে জেলা কমিটি গঠন করতে হবে।</li>
                </ul>
                <b>৮.৬। পৌর/ মহানগর কমিটি ঃ</b>
                <ul>
                    <li>প্রতিটি পৌরসভা/ মহানগরিতে নূন্যতম ৭১ জন প্রাথমিক সদস্য থাকতে হবে</li>
                    <li>উপজেলা/ থানার কমিটি থেকে নির্বাচিত সদস্যদের মাধ্যমে ৩৩ সদস্য বিশিষ্ট পৌর/ মহানগর কমিটি গঠন করতে হবে</li>
                    <ul class="text-center">
                        <li>সভাপতি ১</li>
                        <li>সহ-সভাপতি ৩</li>
                        <li>সাধারন সম্পাদক ১</li>
                        <li>যুগ্ম সাধারন সম্পাদক ২</li>
                        <li>সাংগঠনিক সম্পাদক ১</li>
                        <li>কোষাধ্যক্ষ ১</li>
                        <li>দপ্তর সম্পাদক ১</li>
                        <li>নির্বাহী সদস্য ২১</li>
                    </ul>
                    <li>পৌর/ মহানগরের সম্মেলন শেষ হওয়ার ৩০ দিনের মধ্যে জেলা কমিটি গঠন করতে হবে।</li>
                </ul>
                <b>৮.৭। জেলা কমিটি ঃ</b>
                <ul>
                    <li>প্রতিটি জেলার জেলা কমিটি থাকবে, যা সিটি কর্পোরেশন/ মহানগরের ৩৩ সদস্য বিশিষ্ট জেলা কমিটি গঠন করবে</li>
                    <ul class="text-center">
                        <li>সভাপতি ১</li>
                        <li>সহ-সভাপতি ৩</li>
                        <li>সাধারন সম্পাদক ১</li>
                        <li>যুগ্ম সাধারন সম্পাদক ২</li>
                        <li>সাংগঠনিক সম্পাদক ১</li>
                        <li>কোষাধ্যক্ষ ১</li>
                        <li>দপ্তর সম্পাদক ১</li>
                        <li>নির্বাহী সদস্য ২১</li>
                    </ul>
                    <li>জেলা কমিটি গঠনের ৬০ দিনের মধ্যে পৌর/ মহানগর কমিটি গঠন করতে হবে।</li>
                </ul>
                <b>৮.৮। জাতীয় নির্বাহী পরিষদ ঃ</b>
                <ul>
                    <li>জাতীয় নির্বাহী পরিষদ নিম্নলিখিত সদস্যদের দ্বারা গঠিত হবে:</li>
                    <ul class="text-center">
                        <li>চেয়ারম্যান ১</li>
                        <li>কো-চেয়ারম্যান ১</li>
                        <li>মহাসচিব ১</li>
                        <li>যুগ্ম মহাসচিব ২</li>
                        <li>সাংগঠনিক সম্পাদক ১</li>
                        <li>কোষাধ্যক্ষ ১</li>
                        <li>দপ্তর সম্পাদক ১</li>
                        <li>নির্বাহী সদস্য ২১</li>
                    </ul>
                    <li>জাতীয় কাউন্সিলের সভা শেষে ৩০ দিনের মধ্যে জাতীয় নির্বাহী পরিষদ গঠন করতে হবে।</li>
                </ul>
            </div>
        </div>
        
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">

                @if ($siteSetting)
                    <h5 class="text-primary">
                        {{ app()->getLocale() == 'bn' ? $siteSetting->member_subtitle_bn : $siteSetting->member_subtitle_en }}
                    </h5>
                @else
                    <p>No subtitle available.</p>
                @endif

                @if ($siteSetting)
                    <h1>
                        {{ app()->getLocale() == 'bn' ? $siteSetting->member_title_bn : $siteSetting->member_title_en }}
                    </h1>
                @else
                    <p>No subtitle available.</p>
                @endif

            </div>
            
            <div> 
            
            
            </div> 
    
            
            <div class="row g-4 wow mb-5 fadeIn" data-wow-delay=".5s">
                <div class="col-md-3 mb-1">

                </div>
                <!-- Repeat the col-md-3 mb-1 div for each additional team member -->
                <div class="col-md-3 mb-1">
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                  
                                     <img src="{{ asset($charmenPartyMember[0]->image) }}" class="img-fluid w-100 rounded-circle" alt="" />
                                </div>
                                <div class="team-name text-center pt-3">
                                    
                                @if ($charmenPartyMember)
                                    <h4 class=""><!--Shah Mohammad Abu Zafar-->
                                     {{ app()->getLocale() === 'bn' ? $charmenPartyMember[0]->name_bn : $charmenPartyMember[0]->name_en }}
                                    </h4>
                                    <p class="m-0"><!--Chairman-->
                                     {{ app()->getLocale() === 'bn' ? $charmenPartyMember[0]->position->name_bn : $charmenPartyMember[0]->position->name_en }}
                                    
                                    </p>
                                    <p>{{ app()->getLocale() === 'bn' ? $charmenPartyMember[0]->party_name_bn : $charmenPartyMember[0]->party_name_en }}</p>
                                    
                                @endif
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    {{-- <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-3 mb-1">
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('frontend/img/team-2.jpg') }}" class="img-fluid w-100 rounded-circle"
                                        alt="" />
                                </div>
                                <div class="team-name text-center pt-3">
                                    <h4 class="">Shah Mohammad Abu Zafar</h4>
                                    <p class="m-0">Chairman</p>
                                    <p>Bangladesh Nationalist Movement- BNM</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    {{-- <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                
            </div>
            <div class="row g-4 wow fadeIn" data-wow-delay=".5s">
                 @foreach ($partyMember as $item)
                <div class="col-md-3 mb-1">
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset($item->image) }}" class="img-fluid w-100 rounded-circle"
                                        alt="" />
                                </div>
                                <div class="team-name text-center pt-3">
                                    <h4 class=""><!--Shah Mohammad Abu Zafar-->
                                      {{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                                      
                                    
                                    </h4>
                                    <p class="m-0">{{ app()->getLocale() == 'bn' ? $item->position->name_bn : $item->position->name_en }}</p>
                                    <p> {{ app()->getLocale() == 'bn' ? $item->party_name_bn : $item->party_name_en }}</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    {{-- <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
                
            </div>
        </div>
    </div>



@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#party").addClass('active');
        });
    </script>
@endsection
