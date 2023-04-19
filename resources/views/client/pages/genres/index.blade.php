@extends('client/layouts.layout')

@section('content')
<section class="ts-anime genre">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Tìm kiếm</h2>
                <h3 class="section-sub-title">Thể loại truyện tranh</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    @isset($list_comic)
                    @foreach($list_comic as $value)

                    <div class="col-lg-3 col-sm-6 col-md-4">
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
                                    <span class="text-uppercase">Chương 9999999</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    @else
                    <h3>Hãy chọn thể loại truyện mà bạn muốn tìm kiếm!!</h3>
                    @endisset
                </div>
            </div>
            <div class="col-lg-3">
                <ul class="d-flex flex-wrap">
                    @foreach($list_genre as $value)
                    <li><a href="{{url('tim-truyen/'.$value->slug)}}">{{$value->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
@endsection

