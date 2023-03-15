@extends('client.layouts.layout')
@section('content')
<section id="main-container" class="main-container">
    <div class="container">
        <div class="title-chapter">
            <h3 class="into-sub-title text-align">{{$detailComic->name}}</h3>
            <h5 class="into-sub-title text-align">{{$current_chapter->name}}</h5>
        </div>
        <div class="button-chapter">
            @if($previous_chapter == null)
            <button type="button" class="btn web-btn mt-1">Chương trước</button> 
            @else
            <button type="button" class="btn web-btn mt-1"><a href="{{url('truyen-tranh/'.$detailComic->slug.'/'.$previous_chapter["slug"])}}">Chương trước</a></button> 
            @endif

            @if($next_chapter == null)
            <button type="button" class="btn web-btn mt-1" >Chương sau</button> 
            @else
            <button type="button" class="btn web-btn mt-1"><a href="{{url('truyen-tranh/'.$detailComic->slug.'/'.$next_chapter['slug'])}}">Chương sau</a></button> 
            @endif
        </div>
        <div class="list-img">
            @foreach($img_chapter as $key => $value)    
            <div class="box">
                <img src="{{Storage::url($value)}}" alt="" srcset="">
            </div>
            @endforeach
        </div>
    </div>
</section>
<style>
    .list-img{
        display: flex;
        flex-direction: column;
    }

    .box{
        display: flex;
        justify-content: center;
    }
    .box img {
        width: 100%;
        /* max-width: 700px; */
        position: relative;
    }

    .button-chapter{
        display: flex;
        justify-content: center
    }
    .button-chapter button{
        margin: 5px;
    }
</style>
@endsection

