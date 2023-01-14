@extends('admin.layout.app')
@section('content')


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">author</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Create author</li>
            </ol>
            <a href="{{ route('author.index') }}" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                  class="fa fa-bar"></i>All author</a>
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
                <h3 class="m-b-0 text-dark">Add author</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('author.store') }}" class="">
                    @csrf
                    <div class="form-body">
                        <div class="form-group m-b-40">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                              name="name" required autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="bar"></span>
                            <label for="name">Author Name</label>
                        </div>
                        <div class="form-group m-b-40">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                              name="email" required autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="bar"></span>
                            <label for="email">Author email</label>
                        </div>
                        <div class="form-group m-b-40">
                            <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autofocus>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="bar"></span>
                            <label for="password">Author password</label>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i>
                                Save</button>

                        </div>
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
