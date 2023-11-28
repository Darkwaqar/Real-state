<section class="category-section centred">

    <div class="sec-title centred">

        <h2 class="red-aris">Categories</h2>

    </div>

    <div class="auto-container">

        <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">

            <ul class="row d-flex justify-content-center mb-lg-4">
                @forelse ( $properties['cat'] as  $value )
                    @if (!empty($value->structure_icon))
                        <li class="col-md-4 col-sm-6 col-12">
                            <div class="category-block-one">
                                <div class="inner-box inner-box-2">
                                    <div class="icon-box">
                                        <i class="{{$value->structure_icon}}"></i>
                                    </div>
                                    <h5>
                                        <a href="{{route('home.our-community', ['type' => $value->StructureTypeName ])}}">{{ $value->StructureTypeName }} </a>
                                    </h5>
                                    <span>{{ $value->count}} </span>
                                </div>
                            </div>
                        </li>
                    @endif
                @empty
                    Data is not exist.
                @endforelse

                {{-- @forelse ( $properties['premier'] as  $value )
                <li class="col-lg-3 col-md-3 col-sm-6 col-12">
                    @if (!empty($value->structure_icon))
                    <div class="category-block-one">
                            <div class="inner-box inner-box-2">

                                <div class="icon-box">
                                    <i class="{{$value->structure_icon}}"></i></div>

                                <h5><a href="{{route('home.our-community', ['type' => $value->StructureTypeName ])}}">{{ $value->StructureTypeName }} </a></h5>

                                <span>{{ $value->properties_count}} </span>

                            </div>
                    </div>
                    @endif
                    <br>

                </li>
                    @empty Data is not exist.
                @endforelse
                @forelse ( $properties['single'] as  $value )
                <li class="col-lg-3 col-md-3 col-sm-6 col-12">
                    @if (!empty($value->structure_icon))
                    <div class="category-block-one">
                            <div class="inner-box inner-box-2">

                                <div class="icon-box">
                                    <i class="{{$value->structure_icon}}"></i></div>

                                <h5><a href="{{route('home.our-community', ['type' => $value->StructureTypeName ])}}">{{ $value->StructureTypeName }} </a></h5>

                                <span>{{ $value->properties_count}} </span>

                            </div>
                    </div>
                    @endif
                    <br>

                </li>
                    @empty Data is not exist.
                @endforelse

                @forelse ( $properties['condominium'] as  $value )
                <li class="col-lg-3 col-md-3 col-sm-6 col-12">
                    @if (!empty($value->structure_icon))
                    <div class="category-block-one">
                            <div class="inner-box inner-box-2">

                                <div class="icon-box">
                                    <i class="{{$value->structure_icon}}"></i></div>

                                <h5><a href="{{route('home.our-community', ['type' => $value->StructureTypeName ])}}">{{ $value->StructureTypeName }} </a></h5>

                                <span>{{ $value->properties_count}} </span>

                            </div>
                    </div>
                    @endif
                    <br>

                </li>
                    @empty Data is not exist.
                @endforelse
                @forelse ( $properties['townhouse'] as  $value )
                <li class="col-lg-3 col-md-3 col-sm-6 col-12">
                    @if (!empty($value->structure_icon))
                    <div class="category-block-one">
                            <div class="inner-box inner-box-2">

                                <div class="icon-box">
                                    <i class="{{$value->structure_icon}}"></i></div>

                                <h5><a href="{{route('home.our-community', ['type' => $value->StructureTypeName ])}}">{{ $value->StructureTypeName }} </a></h5>

                                <span>{{ $value->properties_count}} </span>

                            </div>
                    </div>
                    @endif
                    <br>

                </li>
                    @empty Data is not exist.
                @endforelse
                @forelse ( $properties['land'] as  $value )
                <li class="col-lg-3 col-md-3 col-sm-6 col-12">
                    @if (!empty($value->structure_icon))
                    <div class="category-block-one">
                            <div class="inner-box inner-box-2">

                                <div class="icon-box">
                                    <i class="{{$value->structure_icon}}"></i></div>

                                <h5><a href="{{route('home.our-community', ['type' => $value->StructureTypeName ])}}">{{ $value->StructureTypeName }} </a></h5>

                                <span>{{ $value->properties_count}} </span>

                            </div>
                    </div>
                    @endif
                    <br>

                </li>
                    @empty Data is not exist.
                @endforelse --}}
            </ul>

        </div>

    </div>

</section>
