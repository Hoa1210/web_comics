@extends('client.layouts.layout')
@section('content')
<section id="main-container" class="main-container">
    <div class="container">
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
</style>
@endsection

