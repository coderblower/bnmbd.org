<div class="container-fluid bg-light py-5 team">
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
                <p>No title available.</p>
            @endif
            
        </div>
        <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
            @foreach ($partyMember as $item)
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{ asset($item->image) }}" class="img-fluid w-100 rounded-circle"
                                    alt="" />
                            </div>
                            <div class="team-name text-center pt-3">
                                <h4>
                                    {{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                                </h4>
                                <p class="m-0">
                                    {{ app()->getLocale() == 'bn' ? $item->position->name_bn : $item->position->name_en }}
                                </p>
                                <p>
                                    {{ app()->getLocale() == 'bn' ? $item->party_name_bn : $item->party_name_en }}
                                </p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
            <a href="{{ route('party') }}" class="btn btn-primary" style="background-color: #e82629; border-color: #e82629">{{ app()->getLocale() == 'bn' ? 'আরো দেখুন...' : 'See More...' }}</a>
        </div>
    </div>
</div>