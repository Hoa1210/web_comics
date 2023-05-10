@extends('client.layouts.layout')
@section('content')
<section id="main-container" class="main-container">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url("/")}}"> Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="{{url('truyen-tranh/'.$detailComic->slug)}}">{{$detailComic->name}}</a></li>
            </ul>
        </nav>
        <div class="row">
            <div class="col-lg-8">
                <h3 class="into-sub-title text-align">{{$detailComic->name}}</h3>
                <h2 class="into-title text-align">Cập nhật lúc : {{$detailComic->updated_at}}</h2>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <img src="{{Storage::url($detailComic->img_path)}}" width="100%">
                        <div class="mt-2">
                            @if(auth()->check())
                            
                            {{-- <input type="button" id="unflow-comics" class="btn web-btn mt-1" value="Đang theo dõi"> --}}

                            <input type="button" id="flow-comics" class="btn web-btn mt-1" @if($checkFarvorite) value="Đang theo dõi" @else value="Theo dõi" @endif>

                            @endif
                            @if($firstChapter != null && $lastChapter != null)
                            <button type="button" class="btn web-btn mt-1"><a href="{{url('truyen-tranh/'.$detailComic->slug.'/'.$firstChapter['slug'])}}">Đọc từ đầu</a></button>
                            <button type="button" class="btn web-btn mt-1"><a href="{{url('truyen-tranh/'.$detailComic->slug.'/'.$lastChapter['slug'])}}">Đọc mới nhất</a></button>
                            @else
                            <button type="button" class="btn web-btn mt-1">Đọc từ đầu</button>
                            <button type="button" class="btn web-btn mt-1">Đọc mới nhất</button>
                            @endif
                        </div>
                    </div>
                    <div class="anime col-lg-8">
                        <ul class="d-flex flex-wrap">
                            <li class="mr-1">
                                <h5>Thể loại: </h5>
                            </li>
                            <li>
                                @foreach($genres as $key => $value)
                                <a href="{{url('tim-truyen/'.$value->slug)}}">{{$value->name}} </a>
                                @if($key < count($genres)-1) , @endif @endforeach </li>
                        </ul>

                        <ul class="d-flex flex-wrap">
                            <li class="mr-1">
                                <h5>Ngày phát hành: </h5>
                            </li>
                            <li>
                                <p>{{$detailComic->release_date}}</p>
                            </li>
                        </ul>

                        <ul class="d-flex flex-wrap">
                            <li class="mr-1">
                                <h5>Tác giả: </h5>
                            </li>
                            <li>
                                <p>{{$detailComic->author}}</p>
                            </li>
                        </ul>

                        <div class="d-flex flex-wrap">
                            <div class="anime mr-3">
                                <ul class="d-flex flex-wrap">
                                    <li class="mr-1">
                                        <h5>Trạng thái: </h5>
                                    </li>
                                    <li>
                                        <p>Đang cập nhật</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="anime mr-3">
                                <ul class="d-flex flex-wrap">
                                    <li class="mr-1">
                                        <h5>Lượt xem: </h5>
                                    </li>
                                    <li>
                                        <p>3,176,823</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="anime mr-3">
                                <ul class="d-flex flex-wrap">
                                    <li class="mr-1">
                                        <h5>Yêu thích: </h5>
                                    </li>
                                    <li>
                                        <p>3,176,823</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <ul>
                            <li class="mr-1">
                                <h5>Nội dung:</h5>
                            </li>
                            <li>
                                <p>{{$detailComic->description}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Col end -->

            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="episodes">
                    <div class="anime">
                        <ul class="d-flex flex-wrap">
                            <li class="mr-1">
                                <h5>Danh sách các chương</h5>
                            </li>
                        </ul>
                    </div>
                    <ul class="d-flex flex-direction list-chapter">

                        @if($chapters != null && count($chapters) > 0)
                        @foreach($chapters as $key => $value)
                        <li><a href="{{url('truyen-tranh/'.$detailComic->slug.'/'.$value->slug)}}"><span>{{$value->name}}</span><span>{{$value->updated_at}}</span></a></li>
                        @endforeach
                        @else
                        Truyện đang được cập nhật. Ấn theo dõi để cập nhật thông tin sớm nhất
                        @endif

                    </ul>
                </div>
            </div><!-- Content row end -->

            <div class="discord mt-2">
                <div class="discord">
                    <a href="#"><img class="w-100 img-fluid" src="{{asset('images/client/banner/discord.jpg')}}" alt=""></a>
                </div>
            </div>
            <!--/ subscribe end -->

            @include('client.pages.comments.cmt')

        </div>
    </div><!-- Container end -->
</section>
@endsection

