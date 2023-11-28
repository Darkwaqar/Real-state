<div class="user-inner-content-title user-inner-content-title-2">
    <h1 id="featuredId" class="title2 mt-4 mb-3 text-center">ARIS360 Prime Agents</h1>
</div>

    <div class="container-fluid">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($Agents['both'] as $agent)
                @if($agent->type == "aris")
                {{-- @if($agent->city == "Seattle" || $agent->city == "seattle") --}}
                <div class="swiper-slide">
                    <div class="PremierCard PremierAgentCard ">
                        <a href="{{ route('real-estate-agent-detail', ['id' => $agent->slug]) }}">
                            <img class="agent-photo" src="{{ asset('public/images/userdp/'.$agent->user_dp) }}" alt="team-2"
                                class="img-fluid">
                        </a>
                        <div class="agent-details">
                            <div class="details-section">
                                <div class="agent-location">{{$agent->city}}</div>
                                <h2>

                                    <a href="{{ route('real-estate-agent-detail', ['id' => $agent->slug]) }}">{{ $agent->first_name }} {{$agent->last_name}}</a>
                                </h2>
                            </div>
                            <div class="details-section">
                                <div class="stats-header">
                                    <span class="border"></span>
                                </div>
                                <div class="stats-row">
                                    <div class="PremierAgentStat">
                                        <div class="stat">{{isset($agent['Question'][0]['deals_completed']) ? $agent['Question'][0]['deals_completed'] : '-'}}</div>
                                        <div class="description">Deals</div>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('real-estate-agent-detail', ['id' => $agent->slug]) }}" class="theme-btn btn-one">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="details-section">
                                <ul class="agent_review_star">
                                    <li>
                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                    </li>
                                </ul>
                                <p class="phone-cta">Text or call
                                    <a href="tel:{{ $agent->mobile_number }}">{{ isset($agent->mobile_number) ? $agent->mobile_number : "N/A" }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- @endif --}}
                @endif
                @endforeach
            </div>
            <div class="swiper-button-next agent_cstm_arrow"><i class="far fa-arrow-right"></i></div>
            <div class="swiper-button-prev agent_cstm_arrow"><i class="far fa-arrow-left"></i></div>
        </div>
    </div>


{{-- Partnered Agent Html Hide Will be in used --}}

    {{-- <div class="user-inner-content-title user-inner-content-title-2">
        <h1 class="title2 mt-4 mb-3 text-center">ARIS360 Partnered Agents</h1>
    </div>
    <div class="row mt-2">
        @foreach ($Agents['both'] as $agent)
            @if ($agent->type == "featured")
                @if($agent->city == "Seattle" || $agent->city == "seattle")
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="PremierCard PremierAgentCard ">
                    <a href="{{ route('real-estate-agent-detail', ['id' => $agent->slug]) }}">
                        <img class="agent-photo" src="{{ asset('public/images/userdp/'.$agent->user_dp) }}" alt="team-2"
                            class="img-fluid">
                    </a>
                    <div class="agent-details">
                        <div class="details-section">
                            <div class="agent-location">{{$agent->city}}</div>
                            <h2>

                                <a href="{{ route('real-estate-agent-detail', ['id' => $agent->slug]) }}">{{ $agent->first_name }} {{$agent->last_name}}</a>
                            </h2>
                        </div>
                        <div class="details-section">
                            <div class="stats-header">
                                <h3>Past year</h3>
                                <span class="border"></span>
                            </div>
                            <div class="stats-row">
                                <div class="PremierAgentStat">
                                    <div class="stat">{{isset($agent['Question'][0]['deals_completed']) ? $agent['Question'][0]['deals_completed'] : '-'}}</div>
                                    <div class="description">Deals</div>
                                </div>
                            </div>
                        </div>
                        <div class="details-section">
                            <ul class="agent_review_star">
                                <li>
                                    <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                </li>
                            </ul>
                            <p class="phone-cta">Text or call
                                <a href="tel:{{ $agent->mobile_number }}">{{ isset($agent->mobile_number) ? $agent->mobile_number : "N/A" }}</a>
                            </p>
                            <div class="btn-box">
                                <a href="{{ route('real-estate-agent-detail', ['id' => $agent->slug]) }}" class="theme-btn btn-one">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="contactModal6{{$agent->id}}" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="border-radius: 20px;">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="agentDetail-askQuestion-sect">
                                <div class="estate-agent-form" style="    padding: 0px 10px;">
                                    <span>
                                        <img src="{{ asset('public/images/userdp/'.$agent->user_dp) }}" class="img-fluid"
                                            alt="">
                                    </span>
                                    <p class="title2">Ask a Question</p>
                                    <p class="para">We’re here to help seven days a week.</p>
                                    <form id="contact_form" action="{{route('add_leads')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input_fields">
                                            <label for="">Name *</label>
                                            <input type="text" name="name" placeholder="Enter your name" required>
                                        </div>
                                        <div class="input_fields">
                                            <label for="">Email *</label>
                                            <input type="email" name="email" placeholder="Enter your email" required>
                                        </div>
                                        <div class="input_fields">
                                            <label for="">Phone *</label>
                                            <input type="text" name="phone"  placeholder="Enter your number" required>
                                        </div>
                                        <div class="input_fields">
                                            <label for="">City *</label>
                                            <input type="text" name="city" placeholder="Enter your city" required>
                                        </div>
                                        <div class="input_fields">
                                            <label for="">What can we help you with? *</label>
                                            <textarea name="question" placeholder="I'm interested in buying, selling or a free consult with a Aris 360 Agent." required></textarea>
                                        </div>
                                        <input type="hidden" name="agent_id" value="{{$agent->id}}" />
                                        <input type="hidden" name="lead_type" value="both"/>
                                        <div class="btn-box">
                                            <button type="submit" class="theme-btn btn-one">Send</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endif
            @endif
        @endforeach




    </div> --}}
