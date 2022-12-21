@extends('admin.layout.app')
@section('content')


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Video</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Video</li>
            </ol>
            <a href="{{ route('video.create') }}" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                  class="fa fa-plus-circle"></i> Create New</a>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Info box -->
<!-- ============================================================== -->
<div class="row g-0">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="m-b-0 text-dark">Edit Video</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('video.update',$video->id) }}" method="POST" class="floating-labels"
                  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" name="title" id="title" value="{{ $video->title }}">
                            <span class="bar"></span>
                            <label for="title">Video title</label>
                        </div>
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" name="subtitle" id="subtitle"
                              value="{{ $video->subtitle }}">
                            <span class="bar"></span>
                            <label for="subtitle">Video subtitle</label>
                        </div>
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" name="link" id="link" value="{{ $video->link }}">
                            <span class="bar"></span>
                            <label for="link">Embeaded Link</label>
                        </div>
                        <div class="form-group m-b-40">

                            <h5 for="content" class="m-b-3">Video Content</h5>
                            <span class="bar"></span>
                            <textarea class="form-control" name="content" id="summernote">
                                {!! $video->content !!}
                            </textarea>
                        </div>
                        <div class="form-group m-b-40">
                            <h4 class="card-title">Video thumbnail</h4>
                            <input type="file" id="thumbnail" name="thumbnail" class="dropify" data-max-file-size="500k"
                              data-default-file="{{ $video->thumbnail }}" />

                        </div>


                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i>
                            Save</button>
                        {{-- <button type="button" class="btn btn-inverse">Cancel</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
<!-- ============================================================== -->
<!-- End Info box -->
<!-- ============================================================== -->

@section('script')

<script>
    $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 500,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });


     $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
     })
</script>
@endsection

@endsection
