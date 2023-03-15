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
                    <li class="breadcrumb-item active">Thể loại</li>
                </ol>
            </div>
            <h4 class="page-title">Thể loại</h4>
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
                                    <th>Tên thể loại</th>
                                    <th>Slug</th>
                                    <th>Trạng thái</th>
                                    <th>Mô tả</th>
                                    <th>Ngày tạo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($genres as $key => $value)    
                                <tr>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->slug}}</td>
                                    <td>{{$value->is_public == 1 ? "Hoạt động" : "Đóng"}}</td>
                                    <td>{{$value->description}}</td>
                                    <td>{{$value->created_at}}</td>
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

