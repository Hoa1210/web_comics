@extends('admin.layouts.layout')
@section('title', ' Người dùng')
@section('contents')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Người dùng</li>
                </ol>
            </div>
            <h4 class="page-title">Người dùng</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane show active" id="input-types-preview">
                        @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{session('error')}}
                        </div>
                        @endif
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $value)    
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{$value->provider_id == null ? Storage::url('avatar/avatar-default.jpg') : $value->avatar}}" alt="Ảnh đại diện" class=".avatar-md .rounded-circle" width="96"></td>
                                    <td>{{$value->name}}</td>
                                    <td><a href="mailto:{{$value->email}}">{{$value->email}}</a></td>
                                    <td>{{$value->is_public == 1 ? "Hoạt động" : "Đóng"}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.users.edit',$value->id)}}" class="btn btn-info ms-xl-2" title="Sửa tài khoản"><i class="mdi mdi-pencil"></i></a>

                                        <button type="button" class="btn btn-danger ms-xl-2" data-bs-toggle="modal" data-bs-target="#standard-modal{{$value->id}}"><i class="dripicons-trash"></i></button>
                                        <div id="standard-modal{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="standard-modalLabel">Xóa tài khoản</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Bạn thực sự muốn xóa?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
                                                        <form action="{{route('admin.genres.delete',$value->id)}}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-primary">Xóa</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
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

