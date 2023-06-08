@extends('admin.layouts.layout')
@section('title', 'Thêm truyện')
@section('contents')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Thêm truyện</li>
                </ol>
            </div>
            <h4 class="page-title">Thêm truyện</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.comics.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên truyện</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Tên truyện" required>
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug truyện" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label">Tác giả</label>
                                <input type="text" id="author" name="author" class="form-control" placeholder="Tác giả" required>
                            </div>

                            <label for="open" class=" form-label">Thể loại</label>
                            <div class="">
                                <select class="select2 form-control select2-multiple" name="genre_id[]" data-toggle="select2" multiple="multiple" data-placeholder="Chọn ..." required>
                                    @foreach($genres as $key => $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="open" class="mt-3 form-label">Trạng thái</label>
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

                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 position-relative" id="datepicker1">
                                <label class="form-label">Ngày phát hành</label>
                                <input type="text" name="release_date" class="form-control" data-provide="datepicker" data-date-container="#datepicker1">
                            </div>
                            <div class="mt-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Viết mô tả" id="description" name="description" style="height: 100px"></textarea>
                                    <label for="description">Mô tả</label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="image_comic" class="form-label">Chọn ảnh bìa</label>
                                <input type="file" id="image_comic" name="img_path" class="form-control" required>
                                <div class="preview">
                                    <img id="image-preview" src="#" alt="Preview Image">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success mt-3">Thêm truyện</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .preview {
        max-width: 100px;
        max-height: 200px;
        margin-top: 10px;
    }

    .preview img {
        width: 100%;
        height: 100%;
    }

</style>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('#image-preview').hide();
        $("#image_comic").change(function() {
            var input = this;
            if (input.files && input.files[0]) {
                // $('#image_comic').hide();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#image-preview").attr("src", e.target.result);
                    $('#image-preview').show();
                }
                reader.readAsDataURL(input.files[0]);
            }
        });
    });

    $("#name").on('keyup', function() {
        var slug = changKeyWordToSlug($(this).val());
        $("#slug").val(slug);
    })

</script>
@endpush

