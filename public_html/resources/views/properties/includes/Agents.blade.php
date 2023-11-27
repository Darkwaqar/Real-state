@foreach ($Agents as  $agent)
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="team-2 df-box">
        <div class="team-photo">
            <a href="#">
                <img src="public/assets/images/agents/toprated-agent4.jpg" alt="team-2" class="img-fluid">
            </a>
        </div>



        <div class="team-details">
            <h5><a href="{{route('real-estate-agent-detail')}}">{{$agent->first_name}}</a></h5>
            <p class='para m-0'>{{$agent->job_title}}</p>
            <p class='para m-0'>{{ $agent->license_number }}</p>
            {{-- <p class="m-0">{{$agent->email}}</p> --}}
            <div class="reviewSect">
                <a href="#!">4.6
                    <span class="reviewStars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        5 Reviews
                    </span>
                </a>
            </div>
            <div class="agentsProfile-basicInfcontat">
                <a href="#!" data-toggle="modal" data-target="#contactModal">{{$agent->mobile_number}}</a>
            </div>
            <p class="para_comment"><span class="para_commentBold">Mike H says: </span> dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>
        </div>

        <div class="sellside">Aris 360 Buyer's Agent</div>
    </div>
</div>
@endforeach