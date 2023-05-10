<div class=" col-lg-12 mt-2">

    <!-- Leave A Reply -->
    <div class="web-contact-form">
        <h2 class="mb-4">Bình luận</h2>

        @if(auth()->check())
        <!-- Form -->
        <form action="#" method="GET" id="form-cmt">
            <div class="row">
                <div class="col-2">
                    <div class="comment-author">
                        <img class="w-50 img-fluid" src="{{auth()->user()->avatar}}" width="50" alt="author">
                    </div>
                    <h5>{{auth()->user()->name}}</h5>
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <input type="hidden" name="comic_id" value="{{$detailComic->id ? $detailComic->id : ""}}">
                </div>
                <div class="col-10">
                    <textarea name="message" class="form-control mb-15" placeholder="Comment" id="comment"></textarea>
                    <button type="submit" class="btn web-btn" id="btn-cmt">Bình luận</button>
                </div>
            </div>
        </form>
        @else
        Hãy đăng nhập để bình luận
        @endif
    </div>

    @isset($comments)
    <!-- Comments Area -->
    <div class="comment_area mb-50 clearfix">
        <h5 class="title">{{count($comments)}} Bình luận</h5>

        <ol id="list-cmt">
            @foreach($comments as $key => $value)
            <!-- Single Comment Area -->
            <li class="single_comment_area">
                <!-- Comment Content -->
                <div class="comment-content d-flex">
                    <!-- Comment Author -->
                    <div class="comment-author">
                        <img class="w-100 img-fluid" src="{{$value->user->avatar}}" alt="author">
                    </div>
                    <!-- Comment Meta -->
                    <div class="comment-meta">
                        <a href="#!" class="post-date">{{$value->created_at}}</a>
                        <h5>{{$value->user->name}}</h5>
                        <p>{{$value->content}}</p>
                        <a href="#!" class="like">Thích</a>
                        <a href="#!" class="reply">Trả lời</a>
                    </div>
                </div>

                {{-- <ol class="children">
                    <li class="single_comment_area">
                        <!-- Comment Content -->
                        <div class="comment-content d-flex">
                            <!-- Comment Author -->
                            <div class="comment-author">
                                <img class="w-100 img-fluid" src="images/client/feedback/2.jpg" alt="author">
                            </div>
                            <!-- Comment Meta -->
                            <div class="comment-meta">
                                <a href="#!" class="post-date">27 Aug 2024</a>
                                <h5>Nino Nakano</h5>
                                <p>test</p>
                                <a href="#!" class="like">Like</a>
                                <a href="#!" class="reply">Reply</a>
                            </div>
                        </div>
                    </li>
                </ol> --}}
            </li>
            @endforeach
        </ol>
    </div>
    @endisset
</div>

