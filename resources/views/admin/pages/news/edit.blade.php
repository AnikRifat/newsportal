@extends('admin.layout.app')
@section('content')


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">news</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">news</li>
            </ol>
            <a href="{{ route('news.create') }}" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
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
                <h3 class="m-b-0 text-dark">Edit news</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('news.update',$news->id) }}" method="POST" class="floating-labels"
                  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group m-b-40">
                            <h4 for="category">news Catyegory</h4>
                            <select class="form-select" name="category_id" id="category">
                                @foreach ($category as $item)
                                <option @if($news->category_id == $item->id)
                                    selected
                                    @endif
                                    value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" name="title" id="title" value="{{ $news->title }}">
                            <span class="bar"></span>
                            <label for="title">news title</label>
                        </div>
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" name="subtitle" id="subtitle"
                              value="{{ $news->subtitle }}">
                            <span class="bar"></span>
                            <label for="subtitle">news subtitle</label>
                        </div>
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" name="author" id="author"
                              value="{{ $news->author }}">
                            <span class="bar"></span>
                            <label for="author">news author</label>
                        </div>
                        <div class="form-group m-b-40">

                            <h5 for="content" class="m-b-3">News Content</h5>
                            <span class="bar"></span>
                            <textarea class="form-control summernote" name="content" id="content">
                                {!! $news->content !!}
                            </textarea>
                        </div>
                        <div class="form-group m-b-40">
                            <h4 class="card-title">News Image</h4>
                            <input type="file" id="image" name="image" class="dropify" data-max-file-size="500k"
                              data-default-file="{{ $news->image }}" />

                        </div>
                        <div class="form-group m-b-40">
                            <h4 class="card-title">News Primary Image</h4>
                            <input type="file" id="primary_image" name="primary_image" class="dropify"
                              data-max-file-size="500k" data-default-file="{{ $news->primary_image }}" />
                        </div>
                        <div class="form-group m-b-40">
                            <h4 class="card-title">News secondary Image</h4>
                            <input type="file" id="social_image" name="social_image" class="dropify"
                              data-max-file-size="500k" data-default-file="{{ $news->social_image }}" />
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
<script src="{{ asset('/assets') }}/node_modules/summernote/dist/summernote-bs4.min.js"></script>
<script>
    $(function() {

$('.summernote').summernote({
    height: 350, // set editor height
    minHeight: null, // set minimum height of editor
    maxHeight: null, // set maximum height of editor
    focus: false // set focus to editable area after initializing summernote
});
     })


     $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
     })
</script>
@endsection

@endsection
