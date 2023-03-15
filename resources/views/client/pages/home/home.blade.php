@extends('client.layouts.layout')

@section('content')
@include('client.pages.home.banner')
@include('client.pages.home.news')
<section class="bg3 p-t-23 p-b-100 p-t-100">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Chào mừng bạn đã đến với thế giời truyện</h2>
                <h3 class="section-sub-title">Đọc truyện chất lượng cao</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-button">
                    <!--Nav Button  -->
                    <nav class="">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-Recently-tab" data-toggle="tab" href="#nav-Recently" role="tab" aria-controls="nav-Recently" aria-selected="true">Mới cập nhật</a>
                            <a class="nav-item nav-link" id="nav-Trending-tab" data-toggle="tab" href="#nav-Trending" role="tab" aria-controls="nav-Trending" aria-selected="false">Hot</a>
                            <a class="nav-item nav-link" id="nav-Viewed-tab" data-toggle="tab" href="#nav-Viewed" role="tab" aria-controls="nav-Viewed" aria-selected="false">Top views</a>
                            <a class="nav-item nav-link" id="nav-Rated-tab" data-toggle="tab" href="#nav-Rated" role="tab" aria-controls="nav-Rated" aria-selected="false">Top Rated</a>
                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
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
                                                        <span class="text-uppercase">Chương 9999999</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <!-- Card two -->
                            <div class="tab-pane fade" id="nav-Trending" role="tabpanel" aria-labelledby="nav-Trending-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-13.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        The Quintessential Quintuplets 2
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-15.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Mushoku Tensei: Jobless Reincarnation
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 6</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-14.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        The Testament of Sister New Devil
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star-half-stroke"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-16.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Attack on Titan Final Season
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star-half-stroke"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 16</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-19.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Kaguya-sama: Love is War Season 3
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-20.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Classroom of the Elite <br> II
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-17.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Demon Slayer: Entertainment District
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-11.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        My Hero Academia Season 6
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-24.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Kyokou Suiri <br> 2nd Season
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-22.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Urusei Yatsura <br> (2022)
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 36</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-21.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Inu ni Nattara Suki na Hito ni Hirowareta
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-10.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Handyman Saitou in Another World
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Card three -->
                            <div class="tab-pane fade" id="nav-Viewed" role="tabpanel" aria-labelledby="nav-Viewed-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-21.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Inu ni Nattara Suki na Hito ni Hirowareta
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-22.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Urusei Yatsura <br> (2022)
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 36</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-23.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Kubo-san wa Mob wo Yurusanai
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 16</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-01.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Chainsaw <br> Man
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-24.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Kyokou Suiri <br> 2nd Season
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-17.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Demon Slayer: Entertainment District
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-11.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        My Hero Academia Season 6
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star-half-stroke"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-25.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Isekai Nonbiri <br> Houka
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-26.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Tomo-chan wa <br> Onnanoko!
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-27.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Kage no Jitsuryokusha ni Naritakute!
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-28.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Arknights: Reimei <br> Zensou
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-13.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        The Quintessential Quintuplets 2
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- card four -->
                            <div class="tab-pane fade" id="nav-Rated" role="tabpanel" aria-labelledby="nav-Rated-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-02.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        One Piece: Adventure of Nebulandia
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 100</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-03.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Tokyo <br> Revengers
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-01.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Chainsaw <br> Man
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-13.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        The Quintessential Quintuplets 2
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-14.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        The Testament of Sister New Devil
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-20.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Classroom of the Elite <br> II
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star-half-stroke"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-19.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Kaguya-sama: Love is War Season 3
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-29.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Akame ga Kill! <br> season 1
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 25</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic sub  hov-img0">
                                                <img src="images/client/anime/product-30.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Kanojo Okarishimasu 2nd Season
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-11.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        My Hero Academia Season 6
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-15.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Mushoku Tensei: Jobless Reincarnation
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 6</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <!-- Block2 -->
                                        <div class="block2 hd">
                                            <div class="block2-pic dub  hov-img0">
                                                <img src="images/client/anime/product-05.jpg" alt="IMG-PRODUCT">
                                                <a href="anime_page.html" class="block2-btn">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                </a>
                                            </div>

                                            <div class="block2-txt text-center">
                                                <div class="block2-txt-child1">
                                                    <a class="text-uppercase" href="anime_page.html">
                                                        Mairimashita! Iruma-kun 3rd Season
                                                    </a>
                                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="text-uppercase">Total episode 4</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ts-anime">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title"> Truyện tranh</h2>
                <h3 class="section-sub-title">Mới phát hành</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-12">
                <div id="anime-slide" class="row anime-slide">
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic sub  hov-img0">
                                <img src="images/client/anime/product-01.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Chainsaw <br> Man
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic dub  hov-img0">
                                <img src="images/client/anime/product-02.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        One Piece: Adventure of Nebulandia
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 100</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic sub  hov-img0">
                                <img src="images/client/anime/product-03.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Tokyo <br> Revengers
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic dub  hov-img0">
                                <img src="images/client/anime/product-05.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Mairimashita! Iruma-kun 3rd Season
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic sub  hov-img0">
                                <img src="images/client/anime/product-04.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Boruto: Naruto Next Generations
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 100</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic sub  hov-img0">
                                <img src="images/client/anime/product-06.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Yuusha Party O Tsuihou Sareta Beast..
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic dub  hov-img0">
                                <img src="images/client/anime/product-07.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        BLEACH: Thousand-Year Blood War
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 101</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic sub  hov-img0">
                                <img src="images/client/anime/product-08.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Raven of the Inner Palace
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic sub  hov-img0">
                                <img src="images/client/anime/product-18.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Don't Toy With Me, Miss Nagatoro
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 14</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ anime end -->
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                team start
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                anime added Series start
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
<section class="ts-anime">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Truyện tranh</h2>
                <h3 class="section-sub-title">Bản raw</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-12">
                <div class="row anime-slide">
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic dub  hov-img0">
                                <img src="images/client/anime/product-21.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Inu ni Nattara Suki na Hito ni Hirowareta
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic sub  hov-img0">
                                <img src="images/client/anime/product-22.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Urusei Yatsura <br> (2022)
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 36</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic sub  hov-img0">
                                <img src="images/client/anime/product-23.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Kubo-san wa Mob wo Yurusanai
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 16</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic sub  hov-img0">
                                <img src="images/client/anime/product-01.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Chainsaw <br> Man
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic dub  hov-img0">
                                <img src="images/client/anime/product-24.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Kyokou Suiri <br> 2nd Season
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic dub  hov-img0">
                                <img src="images/client/anime/product-17.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Demon Slayer: Entertainment..
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic dub  hov-img0">
                                <img src="images/client/anime/product-11.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        My Hero Academia Season 6
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic dub  hov-img0">
                                <img src="images/client/anime/product-26.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Tomo-chan wa <br> Onnanoko!
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <!-- Block2 -->
                        <div class="block2 hd">
                            <div class="block2-pic sub  hov-img0">
                                <img src="images/client/anime/product-27.jpg" alt="IMG-PRODUCT">
                                <a href="anime_page.html" class="block2-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </a>
                            </div>

                            <div class="block2-txt text-center">
                                <div class="block2-txt-child1">
                                    <a class="text-uppercase" href="anime_page.html">
                                        Kage no Jitsuryokusha ni Naritakute!
                                    </a>
                                    <div class="star mb-2 d-flex flex-wrap justify-content-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-uppercase">Total episode 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ anime end -->
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                anime added Series start
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                discord  start
  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
<section class="subscribe no-padding">
    <div class="discord">
        <a href="#"><img class="w-100 img-fluid" src="images/client/banner/discord.jpg" alt=""></a>
    </div>
</section>
<!--/ subscribe end -->
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                discord  end
  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                news Start
  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Bản tin</h2>
                <h3 class="section-sub-title">Recent Blog</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="images/client/news/news6.jpg" alt="img">
                            <div class="topic">Top</div>
                            <div class="date">June 17, 2023
                            </div>
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-block post_link">Top 58 Best Anime Waifus Of All Time [Cute Waifus
                                List]</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur illo ab amet officiis, at culpa
                            cum animi reprehenderit commodi natus....</p>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 1st post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="images/client/news/news5.jpg" alt="img">
                            <div class="topic">List
                            </div>
                            <div class="date">June 17, 2023
                            </div>
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-block post_link">22 Best Demon Girls In Anime: Our Favorite
                                Characters List</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur illo ab amet officiis, at culpa
                            cum animi reprehenderit commodi natus....</p>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 2nd post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="images/client/news/news4.jpg" alt="img">
                            <div class="topic">Ranking
                            </div>
                            <div class="date">Aug 13, 2023
                            </div>
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-block post_link">Top 28 Best Beautiful Anime Fox Girl List</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur illo ab amet officiis, at culpa
                            cum animi reprehenderit commodi natus....</p>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 3rd post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="images/client/news/news1.jpg" alt="img">
                            <div class="topic">Top
                            </div>
                            <div class="date">June 17, 2023
                            </div>
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-block post_link">Top 58 Best Anime Waifus Of All Time [Cute Waifus
                                List]</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur illo ab amet officiis, at culpa
                            cum animi reprehenderit commodi natus....</p>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 1st post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="images/client/news/news2.jpg" alt="img">
                            <div class="topic">Anime
                            </div>
                            <div class="date">June 17, 2023
                            </div>
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-block post_link">Top 100 Best anime Waifus Of All Time [Best Waifus
                                List] </a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur illo ab amet officiis, at culpa
                            cum animi reprehenderit commodi natus....</p>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 2nd post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="images/client/news/news3.jpg" alt="img">
                            <div class="topic">Ranking
                            </div>
                            <div class="date">Aug 13, 2023
                            </div>
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-block post_link">Top 10 cutest anime characters with green hair!</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur illo ab amet officiis, at culpa
                            cum animi reprehenderit commodi natus....</p>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 3rd post col end -->
        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
        </div>

    </div>
    <!--/ Container end -->
</section>
<!--/ News end -->
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                news end
  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
@endsection
