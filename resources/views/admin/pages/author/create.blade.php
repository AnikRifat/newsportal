@extends('admin.layout.app')
@section('content')


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">category</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Create Category</li>
            </ol>
            <a href="{{ route('category.index') }}" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                  class="fa fa-bar"></i>All Category</a>
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
                <h3 class="m-b-0 text-dark">Add Category</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST" class="floating-labels">
                    @csrf
                    <div class="form-body">
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" name="name" id="name">
                            <span class="bar"></span>
                            <label for="name">Category name</label>
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



@endsection
