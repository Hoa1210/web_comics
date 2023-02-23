@extends('client.layouts.layout')
@section('content')
<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="into-sub-title text-align">{{$detailComic->name}}</h3>
                <h2 class="into-title text-align">Cập nhật lúc : {{$detailComic->updated_at}}</h2>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <img src="{{Storage::url($detailComic->img_path)}}" width="100%" >
                        <div class="mt-2">
                            <button type="button" class="btn web-btn mt-1">Theo dõi</button>
                            <button type="button" class="btn web-btn mt-1"><a href="">Đọc từ đầu</a></button>
                            <button type="button" class="btn web-btn mt-1">Đọc mới nhất</button> 
                        </div>
                    </div>
                    <div class="anime col-lg-8">
                        <ul class="d-flex flex-wrap">
                            <li class="mr-1">
                                <h5>Thể loại: </h5>
                            </li>
                            <li>
                                @foreach($genres as $key => $value)
                                <a href="#">{{$value->name}} </a>
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
                                <p>Thông qua sự hướng dẫn tận tình của gia sư Fuutarou Uesugi,
                                    thành tích học tập của các em nhỏ nhà Nakano có dấu hiệu cải thiện,
                                    ngay cả khi con đường tốt nghiệp của họ vẫn còn nhiều chông gai.
                                    Tuy nhiên, khi họ tiếp tục gây ra nhiều tình huống làm trì hoãn mọi hoạt động dạy kèm thực tế,
                                    Fuutarou ngày càng quanchapters tâm đến cuộc sống cá nhân của họ, khiến mối quan hệ của họ với nhau càng thêm phức tạp.
                                    Một lưu ý khác, Fuutarou dần bắt đầu nhận ra sự tồn tại của một mối liên hệ có thể có giữa anh ta
                                    và quá khứ mà anh ta tin rằng đã chia sẻ với một trong năm cô gái. Khi tình cảm của mọi người bắt đầu phát
                                    triển và chồng chéo lên nhau, liệu họ có thể giữ mối quan hệ chặt chẽ giữa giáo viên và học sinh của mình
                                    hay nó sẽ phát triển thành một thứ gì đó hoàn toàn khác?</p>
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
                                <h5>Chap 1-12</h5>
                            </li>
                        </ul>
                    </div>
                    <ul class="d-flex flex-direction list-chapter">
                        @if($chapters != null)
                            @foreach($chapters as $key => $value)
                                <li><a href="{{url('/truyen-tranh'.$detailComic->slug.'/'.$value->slug)}}" ><span>{{$value->name}}</span><span>{{$value->updated_at}}</span></a></li>
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

        </div>
    </div><!-- Container end -->
</section>
@endsection

