 <!-- About Start -->
 <div class="container-fluid py-5 " style="padding:70px 0 0 0; ">
        

 </br>
 <div class="container">
     <div class="row g-5">
         <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
             <div class="h-100 position-relative">
                 @if ($about_us)
                     @if ($about_us->image2)
                         <img src="{{ asset($about_us->image2) }}" class="img-fluid w-75 rounded" alt=""
                             style="margin-bottom: 25%" />
                     @endif

                     @if ($about_us->image1)
                         <div class="position-absolute w-75" style="top: 25%; left: 25%">
                             <img src="{{ asset($about_us->image1) }}" class="img-fluid w-100 rounded"
                                 alt="" />
                         </div>
                     @endif
                 @endif
             </div>
         </div>
         <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
             <h5 style="color: #39b44b">
                 @if ($siteSetting)
                     {{ app()->getLocale() == 'bn' ? $siteSetting->about_subtitle_bn :$siteSetting->about_subtitle_en }}
                 @else
                     <p>No subtitle available.</p>
                 @endif
             </h5>
             <h1 class="mb-4">
                 @if ($siteSetting)
                 {{ app()->getLocale() == 'bn' ? $about_us->title_bn : $about_us->title_en }}
                 @else
                     <p>No Title available.</p>
                 @endif

             </h1>
             <p style="color: black">
                 @if ($siteSetting)
                 {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($about_us->description_bn, 1250) : Illuminate\Support\Str::limit($about_us->description_en, 1250) }}
                 @else
                     <p>No description available.</p>
                 @endif
             </p>
             <a href="{{ route('abouts') }}"
                 class="btn btn-style rounded-pill px-5 py-3">{{ app()->getLocale() == 'bn' ? __('আরো বিস্তারিত') : __('More Details') }}</a>
         </div>
     </div>
 </div>
</div>
<!-- About End -->