<?php
// dd(Auth::id());
// dd($property[0]['id']);
?>
<div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
    @forelse ($properties['allAgents'] as $agent)
        <div style="padding: 40px">
            <div class="PremierCard PremierAgentCard ">
                <a href="{{ route('real-estate-agent-detail', ['id' => $agent['slug']]) }}">
                    <img class="agent-photo" src="{{ asset('public/images/userdp/'.$agent['user_dp']) }}"
                        alt="team-2">
                </a>
                <div class="agent-details">
                    <div class="details-section">
                        <div class="agent-location">{{$agent['city']}}</div>
                        <h2>
                            <a href="{{ route('real-estate-agent-detail', ['id' => $agent['slug']]) }}">{{ $agent['first_name'] }} {{$agent['last_name']}}</a>
                        </h2>
                    </div>
                    <div class="details-section">
                        <div class="stats-header">
                            <span class="border"></span>
                        </div>
                        <div class="stats-row">
                            <div class="PremierAgentStat">
                                {{-- <div class="stat"> -</div>
                                <div class="description">Deals</div> --}}
                            </div>
                            <div class="btn-box">
                                <a href="{{ route('real-estate-agent-detail', ['id' => $agent['slug']]) }}"
                                    class="theme-btn btn-one">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="details-section">
                        <ul class="agent_review_star">
                            <li>
                                @for ($j = 0; $j < round($agent['review_statistics']['average_rating']); $j++)
                                <i class="reviews fas fa-star filled"></i>
                                @endfor
                                @for ($k = 0; $k < (5 - round($agent['review_statistics']['average_rating'])); $k++)
                                <i class="fas fa-star"></i>
                                @endfor
                            </li>
                            <li style="color: white">
                              {{"(". $agent['review_statistics']['count'].")" }}
                            </li>
                        </ul>
                        <p class="phone-cta">Text or call
                            <a href="tel:{{ $agent['mobile_number'] }}">
                                {{-- {{'(' . substr($agent['mobile_number'], 0, 3) . ') ' . substr($agent['mobile_number'], 3, 3) . '-' . substr($agent['mobile_number'], 6)  }} --}}
                                {{ $agent['mobile_number'] }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @empty
    @endforelse
</div>

<script>
    // loop false owl carousel
</script>
