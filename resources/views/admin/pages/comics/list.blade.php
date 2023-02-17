@extends('admin.layouts.layout')
@section('title', ' Thể loại')
@section('contents')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Truyện</li>
                </ol>
            </div>
            <h4 class="page-title">Truyện</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane show active" id="input-types-preview">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Tên truyện</th>
                                    <th>Hình ảnh</th>
                                    <th>Tác giả</th>
                                    <th>Ngày thêm</th>
                                    <th>Ngày cập nhật</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comics as $key => $value)    
                                <tr>
                                    <td>{{$value->name}}</td>
                                    <td><img src="{{Storage::url($value->img_path)}}" alt="{{$value->slug}}" height="100" ></td>
                                    <td>{{$value->author}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>{{$value->updated_at}}</td>
                                    <td>đang cập nhật...</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush

