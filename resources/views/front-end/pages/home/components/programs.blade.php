<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">

            @if ($siteSetting)
                <h5 class="text-primary">
                    {{ app()->getLocale() == 'bn' ? $siteSetting->program_subtitle_en : $siteSetting->program_subtitle_en }}
                </h5>
            @else
                <p>No subTitle available.</p>
            @endif

            @if ($siteSetting)
                <h1>
                    {{ app()->getLocale() == 'bn' ? $siteSetting->program_title_bn : $siteSetting->program_title_en }}
                </h1>
            @else
                <p>No Title available.</p>
            @endif

        </div>
        <div class="row">

            @foreach ($program as $key => $item)
                <div class="col-md-6">
                    <div class="blog-card">
                        <div class="meta">
                            <div class="photo"
                                style="
              background-image: url({{ asset($item->image) }});
            ">
                            </div>
                            <ul class="details">
                                <li class="date">
                                    {{ app()->getLocale() == 'bn' ? $item->date : $item->date }}
                                </li>
                            </ul>
                        </div>
                        <div class="description">
                            <h5><a href="{{ route('program.details', $item->id) }}">
                                    {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                                </a></h5>

                            <h2 class="date" style="color: black">
                                {{ app()->getLocale() == 'bn' ? $item->date : $item->date }}
                            </h2>
                            <p style="color: black">
                                {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 100) : Illuminate\Support\Str::limit($item->description_en, 100) }}
                            </p>
                            <p class="read-more">
                                <a href="{{ route('program.details', $item->id) }}">
                                    {{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
            <a href="{{ route('program-page') }}" class="btn btn-primary"
                style="background-color: #e82629; border-color: #e82629">
                {{ app()->getLocale() == 'bn' ? 'আরো দেখুন...' : 'See More...' }}
            </a>
        </div>
    </div>
</div>
