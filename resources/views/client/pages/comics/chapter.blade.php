@extends('client.layouts.layout')
@section('content')
<section id="main-container" class="main-container">
    <div class="container">
        <div class="title-chapter">
            <h2 class="into-sub-title text-align"><a href="{{url('truyen-tranh/'.$detailComic->slug)}}">{{$detailComic->name}}</a></h2>
            <h5 class="text-align">{{$current_chapter->name}} - [ Cập nhật lúc: {{date_format($current_chapter->updated_at,'H:i d/m/Y')}}]</h5>

        </div>
        <div class="button-chapter mb-3">
            @if($previous_chapter == null)
            <button type="button" class="btn  mt-1 bg-secondary">
                <i class="fas fa-chevron-left" aria-hidden="true"></i>
            </button>
            @else
            <button type="button" class="btn web-btn mt-1">
                <a href="{{url('truyen-tranh/'.$detailComic->slug.'/'.$previous_chapter["slug"])}}">
                    <i class="fas fa-chevron-left" aria-hidden="true"></i>
                </a>
            </button>
            @endif

            <select class="form-select m-1 listchapter">
                {{-- @dd() --}}
                <option selected>Chương</option>
                @foreach($allChapter as $chapter)
                <option value="{{url('truyen-tranh/'.$detailComic->slug.'/'.$chapter['slug'])}}">{{$chapter['name']}}</option>
                @endforeach
            </select>

            @if($next_chapter == null)
            <button type="button" class="btn mt-1 bg-secondary">
                <i class="fas fa-chevron-right" aria-hidden="true"></i>
            </button>
            @else
            <button type="button" class="btn web-btn mt-1">
                <a href="{{url('truyen-tranh/'.$detailComic->slug.'/'.$next_chapter['slug'])}}"><i class="fas fa-chevron-right" aria-hidden="true"></i></a>
            </button>
            @endif
            @if(auth()->check())
            <button type="button" class="btn web-btn mt-1" id="flow-comics">Theo dõi</button>
            @endif
        </div>
        <div class="list-img">
            @foreach($img_chapter as $key => $value)
            <div class="box">
                <img src="{{Storage::url($value)}}" alt="" srcset="">
            </div>
            @endforeach
        </div>
        <div class="button-chapter-bottom mb-3">
            @if($previous_chapter == null)
            <button type="button" class="btn  mt-1 bg-secondary">
                <i class="fas fa-chevron-left" aria-hidden="true"></i> Chap trước
            </button>
            @else
            <button type="button" class="btn web-btn mt-1">
                <a href="{{url('truyen-tranh/'.$detailComic->slug.'/'.$previous_chapter["slug"])}}">
                    <i class="fas fa-chevron-left" aria-hidden="true"></i> Chap trước
                </a>
            </button>
            @endif

            @if($next_chapter == null)
            <button type="button" class="btn mt-1 bg-secondary">
                <i class="fas fa-chevron-right" aria-hidden="true"></i> Chap sau
            </button>
            @else
            <button type="button" class="btn web-btn mt-1">
                <a href="{{url('truyen-tranh/'.$detailComic->slug.'/'.$next_chapter['slug'])}}"><i class="fas fa-chevron-right" aria-hidden="true"></i> Chap sau</a>
            </button>
            @endif
        </div>
    </div>
</section>
@endsection

