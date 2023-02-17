@extends('admin.layouts.layout')
@section('title', 'Thêm chapter')
@section('contents')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                    <li class="breadcrumb-item active">Thêm chapter</li>
                </ol>
            </div>
            <h4 class="page-title">Thêm chapter</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane show active" id="input-types-preview">
                        <form action="{{route('admin.chapter.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="open" class=" form-label">Chọn truyện</label>
                                    <div class="">
                                        <select class="select2 form-control" name="comic_id" data-toggle="select2" data-placeholder="Chọn ...">
                                            @if($comics)
                                            @foreach($comics as $key => $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label for="name" class="form-label">Tên chapter</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Tên truyện">
                                    </div>
                                    <div class="mt-3">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug truyện">
                                    </div>
                                    <label for="default" class="mt-3 form-label">Chọn phương thức</label>
                                    <div class="">
                                        <div class="form-check">
                                            <input type="radio" id="default" name="method_upload" value="default" class="form-check-input" checked>
                                            <label class="form-check-label" for="default">Default</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="compression" name="method_upload" value="compression" class="form-check-input">
                                            <label class="form-check-label" for="compression">File nén</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="link" name="method_upload" value="link" class="form-check-input">
                                            <label class="form-check-label" for="link">Link</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-3" id="up_default">
                                        <label for="image_comic" class="form-label">Thêm ảnh</label>
                                        <input type="file" id="image_comic" name="img_path[]" class="form-control" multiple>
                                        <div id="box-preview">
                                        </div>
                                    </div>
                                    <div class="mt-3" id="up_compression">
                                        <label for="file_compression" class="form-label">Thêm file nén</label>
                                        <input type="file" id="file_compression" name="file_compression" class="form-control" multiple>
                                        <div id="box-preview">
                                        </div>
                                    </div>
                                    <div class="mt-3" id="up_link">
                                        <label for="file_link" class="form-label">Thêm đường dẫn</label>
                                        <input type="text" id="file_link" class="form-control" multiple>
                                        <div id="box-preview">
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" id="submitform" class="btn btn-success mt-3">Thêm truyện</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #box-preview {
        display: flex;
        flex-flow: wrap;
    }

    .preview {
        position: relative;
        max-width: 100px;
        max-height: 200px;
        margin-top: 10px;
        margin-left: 3px;
        cursor: pointer;
    }

    .preview:hover img {
        opacity: 0.3;
    }

    .preview:hover i {
        color: red;
        display: block;
    }

    .preview i {
        display: none;
        position: absolute;
        top: 30%;
        right: 35%;
        font-size: 30px;
    }

    .preview img {
        width: 100%;
        height: 100%;
    }

    .preview img:hover {}

</style>
@endsection

@push('js')
<script>
    $(document).ready(function() {

        $('#up_compression').hide();
        $('#up_link').hide();

        function checkTypeUpload(valType) {
            if (valType == 'default') {
                $('#up_default').show();
                $('#up_compression').hide();
                $('#up_link').hide();
            } else if (valType == 'compression') {
                $('#up_compression').show();
                $('#up_default').hide();
                $('#up_link').hide();
            } else {
                $('#up_link').show();
                $('#up_default').hide();
                $('#up_compression').hide();
            }
        }
        $("input[name='method_upload']").change(function() {
            const valType = $("input[name='method_upload']:checked").val();
            console.log(valType);
            checkTypeUpload(valType);

        });

        var imagesPreview = function(input, placeToInsertImagePreview) {
            $('#box-preview').html('');
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    html = '';
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        html += `<div class="preview">
                                    <img class="image-preview" src="${event.target.result}" alt="Preview Image">
                                    <i class="uil uil-multiply"></i>
                                </div>`;
                        $('#box-preview').html(html);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };
        $('#image_comic').on('change', function() {
            imagesPreview(this, 'div#box-preview');

        });
    });


    $("#name").on('keyup', function() {
        var slug = changKeyWordToSlug($(this).val());
        $("#slug").val(slug);
    })

</script>
@endpush

