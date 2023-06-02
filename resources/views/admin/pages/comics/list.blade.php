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
                        @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{sesion('success')}}
                        </div>
                        @endif
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#Mã</th>
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
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->name}}</td>
                                    <td><img src="{{Storage::url($value->img_path)}}" alt="{{$value->slug}}" height="100"></td>
                                    <td>{{$value->author}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>{{$value->updated_at}}</td>
                                    <td class="d-flex">
                                        <a href="#" class="btn btn-info " title="Danh sách chương"><i class="mdi mdi-playlist-edit"></i></a>
                                        <a href="#" class="btn btn-info ms-xl-2" title="Sửa truyện"><i class="mdi mdi-pencil"></i></a>

                                        <button type="button" class="btn btn-danger ms-xl-2" data-bs-toggle="modal" data-bs-target="#standard-modal{{$value->id}}"><i class="dripicons-trash"></i></button>
                                        <div id="standard-modal{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="standard-modalLabel">Xóa truyện</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Bạn thực sự muốn xóa?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
                                                        <form action="{{route('admin.comics.delete',$value->id)}}" method="post">
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

