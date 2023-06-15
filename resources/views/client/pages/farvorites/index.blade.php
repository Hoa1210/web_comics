@extends('client.layouts.layout')

@section('content')
<section class="bg3 p-t-23 p-b-100 p-t-100">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Theo dõi</h2>
                <h3 class="section-sub-title">Truyện tranh theo dõi</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Recently" role="tabpanel" aria-labelledby="nav-Recently-tab">
                                <div class="row">
                                    @foreach($comics as $key => $value)    
                                        <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                                            <!-- Block2 -->
                                            <div class="block2 raw">
                                                <div class="block2-pic sub  hov-img0">
                                                    <img src="{{Storage::url($value->img_path)}}" alt="IMG-PRODUCT" >
                                                </div>

                                                <div class="block2-txt text-center">
                                                    <div class="block2-txt-child1">
                                                        <a class="text-uppercase" href="{{url('truyen-tranh/'.$value->slug)}}">
                                                            {{$value->name}}
                                                        </a>
                                                        <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        {{-- <span class="text-uppercase"><a href="{{url('truyen-tranh/'.$value->slug.'/'.$value->chapters[0]->slug)}}">{{$value->chapters[0]->name}}</a></span> --}}
                                                        <span class="text-uppercase"><a href="#">Chap zero</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
