@extends('admin.layouts.layout')
@section('title', ' Thể loại')
@section('contents')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Người dùng</a></li>
                    <li class="breadcrumb-item active">Thêm người dùng</li>
                </ol>
            </div>
            <h4 class="page-title">Thêm người dùng</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.users.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên thể loại</label>
                                <input type="text" id="name" name="name" class="form-control"  placeholder="Tên thể loại" required>
                                <p class="text-danger">
                                    * Không được viết ký tự đặc biệt và số
                                </p>
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug thể loại" readonly required>
                            </div>

                            <label for="open" class=" form-label">Trạng thái</label>
                            <div class="">
                                <div class="form-check">
                                    <input type="radio" id="open" name="is_public" value="1" class="form-check-input" checked>
                                    <label class="form-check-label" for="open">Mở</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="close" name="is_public" value="0" class="form-check-input">
                                    <label class="form-check-label" for="close">Đóng</label>
                                </div>
                            </div>

                            <label for="open" class="mt-3 form-label">Trạng thái</label>
                            <div class="">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" name="description" id="floatingTextarea" style="height: 100px"></textarea>
                                    <label for="floatingTextarea">Comments</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success mt-3">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $("#name").on('keyup', function() {
        var slug = changKeyWordToSlug($(this).val());
        $("#slug").val(slug);
    })

</script>
@endpush

