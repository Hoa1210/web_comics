@extends('client.layouts.layout')
@section('content')
<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ts-intro">
                    <h2 class="into-title">Đọc truyện</h2>
                    <h3 class="into-sub-title">{{$comic->name}}</h3>
                    <div class="anime">
                        <ul class="d-flex flex-wrap">
                            <li class="mr-1">
                                <h5>Other name: </h5>
                            </li>
                            <li><a href="#">Go-toubun No Hanayome S2</a> ,</li>
                            <li><a href="#">五等分の花嫁∬</a> ,</li>
                            <li><a href="#">The Five Wedded Brides 2nd Season</a> ,</li>
                            <li><a href="#">5-Toubun No Hanayome 2</a> ,</li>
                            <li><a href="#">The Quintessential Quintuplets 2nd Season </a> ,</li>
                            <li><a href="#">5-toubun No Hanayome 2nd Season</a></li>
                        </ul>
                    </div>
                    <div class="anime">
                        <ul class="d-flex flex-wrap">
                            <li class="mr-1">
                                <h5>Genres: </h5>
                            </li>
                            <li><a href="#">Comedy </a> ,</li>
                            <li><a href="#">Romance</a></li>
                        </ul>
                    </div>
                    <div class="anime">
                        <ul class="d-flex flex-wrap">
                            <li class="mr-1">
                                <h5>Date aired: </h5>
                            </li>
                            <li>
                                <p>Jan 8, 2021 to Mar 26, 2021</p>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="anime mr-3">
                            <ul class="d-flex flex-wrap">
                                <li class="mr-1">
                                    <h5>Status: </h5>
                                </li>
                                <li>
                                    <p>Completed</p>
                                </li>
                            </ul>
                        </div>
                        <div class="anime mr-3">
                            <ul class="d-flex flex-wrap">
                                <li class="mr-1">
                                    <h5>Views: </h5>
                                </li>
                                <li>
                                    <p>3,176,823</p>
                                </li>
                            </ul>
                        </div>
                        <div class="anime mr-3">
                            <ul class="d-flex flex-wrap">
                                <li class="mr-1">
                                    <h5>Views: </h5>
                                </li>
                                <li>
                                    <p>3,176,823</p>
                                </li>
                            </ul>
                        </div>
                        <div class="anime">
                            <ul class="d-flex flex-wrap">
                                <li class="mr-1"><i class="fa-solid fa-circle-plus"></i></li>
                                <li><a href="#">Bookmark</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="anime">
                        <ul>
                            <li class="mr-1">
                                <h5>Summary:</h5>
                            </li>
                            <li>
                                <p>Through their tutor Fuutarou Uesugi's diligent guidance, the Nakano quintuplets' academic
                                    performance shows signs of improvement, even if their path to graduation is still rocky. However,
                                    as they continue to cause various situations that delay any actual tutoring, Fuutarou becomes
                                    increasingly involved with their personal lives, further complicating their relationship with each
                                    other. On another note, Fuutarou slowly begins to realize the existence of a possible connection
                                    between him and the past he believes to have shared with one of the five girls. With everyone's
                                    feelings beginning to develop and overlap, will they be able to keep their bond strictly to that
                                    of a teacher and his students—or will it mature into something else entirely?</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Col end -->

            <div class="col-lg-6 mt-5 mt-lg-0">
                <div id="page-slider" class="page-slider small-bg">
                    <div class="item" style="background-image:url(images/anime_banner/slide-page1.jpg)"></div>
                    <div class="item" style="background-image:url(images/anime_banner/slide-page2.jpg)"> </div>
                    <div class="item" style="background-image:url(images/anime_banner/slide-page3.jpg)"></div>
                </div><!-- Col end -->

                <div class="episodes">
                    <div class="anime">
                        <ul class="d-flex flex-wrap">
                            <li class="mr-1">
                                <h5>Episodes 1-12</h5>
                            </li>
                        </ul>
                    </div>
                    <ul class="d-flex flex-wrap">
                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/zg8uog" class="iframe-link">1</a></li>
                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/7jszsb" class="iframe-link">2</a></li>
                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/leonz0" class="iframe-link">3</a></li>
                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/jga900" class="iframe-link">4</a></li>

                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/zg8uog" class="iframe-link">5</a></li>
                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/7jszsb" class="iframe-link">6</a></li>
                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/leonz0" class="iframe-link">7</a></li>
                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/jga900" class="iframe-link">8</a></li>

                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/zg8uog" class="iframe-link">9</a></li>
                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/7jszsb" class="iframe-link">10</a></li>
                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/leonz0" class="iframe-link">11</a></li>
                        <!-- Change the url -->
                        <li><a href="https://streamable.com/e/jga900" class="iframe-link">12</a></li>
                    </ul>
                </div>
            </div><!-- Content row end -->

            <div class="discord mt-2">
                <div class="discord">
                    <a href="#"><img class="w-100 img-fluid" src="images/banner/discord.jpg" alt=""></a>
                </div>
            </div>
            <!--/ subscribe end -->

            <div class="col-lg-12">
                <!-- Comments Area -->
                <div class="comment_area mb-50 clearfix">
                    <h5 class="title">12 Comments</h5>

                    <ol>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img class="w-100 img-fluid" src="images/feedback/1.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#!" class="post-date">27 Aug 2024</a>
                                    <h5>Miku Nakano</h5>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit,
                                        sed quia non numquam eius modi</p>
                                    <a href="#!" class="like">Like</a>
                                    <a href="#!" class="reply">Reply</a>
                                </div>
                            </div>

                            <ol class="children">
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img class="w-100 img-fluid" src="images/feedback/2.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#!" class="post-date">27 Aug 2024</a>
                                            <h5>Nino Nakano</h5>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci
                                                velit, sed quia non numquam eius modi</p>
                                            <a href="#!" class="like">Like</a>
                                            <a href="#!" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </li>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img class="w-100 img-fluid" src="images/feedback/3.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#!" class="post-date">27 Aug 2024</a>
                                    <h5>Yotsuba Nakano</h5>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit,
                                        sed quia non numquam eius modi</p>
                                    <a href="#!" class="like">Like</a>
                                    <a href="#!" class="reply">Reply</a>
                                </div>
                            </div>
                        </li>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img class="w-100 img-fluid" src="images/feedback/4.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#!" class="post-date">27 Aug 2024</a>
                                    <h5>Itsuki Nakano</h5>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit,
                                        sed quia non numquam eius modi</p>
                                    <a href="#!" class="like">Like</a>
                                    <a href="#!" class="reply">Reply</a>
                                </div>
                            </div>
                        </li>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img class="w-100 img-fluid" src="images/feedback/5.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#!" class="post-date">27 Aug 2024</a>
                                    <h5>Ichika Nakano</h5>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit,
                                        sed quia non numquam eius modi</p>
                                    <a href="#!" class="like">Like</a>
                                    <a href="#!" class="reply">Reply</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>

                <!-- Leave A Reply -->
                <div class="web-contact-form">
                    <h2 class="mb-4">Leave A Comment</h2>

                    <!-- Form -->
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="message-name" class="form-control mb-15" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="message-email" class="form-control mb-15" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control mb-15" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn web-btn">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- Container end -->
</section>
@endsection
