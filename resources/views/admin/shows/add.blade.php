@extends('admin.layouts.new')

@section('title')

    Add Shows
@endsection


@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Add Shows </h3>
        </div>
        @if ($errors->count() > 0)
            <div class="alert alert-danger">
                Validation Error:
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ ucfirst($error) }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('admin.shows.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label style="color:black; font-size:1rem">Title<span
                            style="color:red;font-size:15px;">&nbsp;*</span></label>
                    <input type="text" name="show_title" class="form-control" />
                </div>

                <div class="form-group">

                    <label style="color:black; font-size:1rem"> Select Shows Category<span
                            style="color:red;font-size:15px;">&nbsp;*</span></label>
                    <select class="form-control category_select" name="category_id" id="exampleFormControlSelect1">
                        <option disabled selected>Select Shows Category</option>
                        @foreach ($showsCategory as $catData)
                            <option value="{{ $catData->id }}">
                                {{ $catData->category_title }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label style="color:black; font-size:1rem">Description <span
                            style="color:red;font-size:15px;">&nbsp;*</span></label>
                    <textarea name="description" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:black; font-size:1rem">Featured Image <span
                                    style="color:red;font-size:15px;">&nbsp;*</span><br>
                            </label>
                            <input type="file" src="" name="featured_image" onchange="readURL(this);" />
                            <br><br>
                            <img id="blah" src="{{ asset('assets/img/upload.png') }}"
                                alt="Uploaded Image will be displayed here." style="height:120px; width:120px;" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Select Image" style="color:black; font-size:1rem">Input
                                URL of the videos</label><br>

                            <input type="url" step="any" name="youtube_video_url" min="0" class="form-control"
                                placeholder="Enter Youtube Link of the video Here">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:black; font-size:1rem">News Status<span
                                    style="color:red;font-size:15px;">&nbsp;*</span></label><br>
                            <div class="form-check">

                                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1"
                                    checked>
                                <label class="form-check-label" for="exampleRadios1" checked style="color:black">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">

                                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0">
                                <label class="form-check-label" for="exampleRadios2" style="color:black">
                                    Not Active
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary" />
                    {{-- <input type="submit" value="Save As Draft" class="btn btn-primary" /> --}}
                </div>
            </form>
        </div>
    </div>

@endsection
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.2/tinymce.min.js" referrerpolicy="origin"></script>

@section('scripts')
    <script>
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | image code | bold italic ' +
                'backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css',

            forced_root_block: false,
            force_br_newlines: true,
            force_p_newlines: false,
            images_upload_handler: function(blobInfo, success, failure) {
                var xhr, formData;
                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', 'shows/image');
                var token = '{{ csrf_token() }}';
                xhr.setRequestHeader("X-CSRF-Token", token);
                xhr.onload = function() {
                    var json;
                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }
                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }
                    success(json.location);
                };
                formData = new FormData();
                formData.append('image', blobInfo.blob(), blobInfo.filename());
                xhr.send(formData);
            }
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
