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
        <!-- table responsive -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All news </h4>
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Action</th>
                                <th>news title</th>
                                <th>news Category</th>
                                <th>Id</th>
                                <th>Author</th>
                                <th>news id</th>
                                <th>Image</th>
                                <th>Date</th>


                            </tr>
                        </thead>
                        @if(Auth::user()->type == 0)
                        <tbody>

                            @foreach ($newsAll as $item)
                            <tr>
                                <td>
                                    @if($item->status == 1)
                                    <span class="label label-success">Active</span @else <span
                                      class="label label-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    @if($item->status == 1)
                                    <a class="btn btn-warning waves-effect btn-circle waves-light"
                                      href="{{ route('news.inactive',$item->id) }}">
                                        <i class="fa fa-eye-slash"></i> </a>
                                    @else
                                    <a class="btn btn-info waves-effect btn-circle waves-light"
                                      href="{{ route('news.active',$item->id) }}">
                                        <i class="fa fa-eye"></i> </a> @endif

                                    <a class="btn btn-primary waves-effect btn-circle waves-light"
                                      href="{{ route('news.edit',$item->id) }}">
                                        <i class="fa fa-edit"></i> </a>
                                    <form hidden action="{{ route('news.destroy',$item->id) }}"
                                      id="form{{ $item->id }}">
                                        @csrf
                                    </form>
                                    <button class="btn btn-danger waves-effect btn-circle waves-light"
                                      onclick="deleteItem({{ $item->id }});" type="button">
                                        <i class="fa fa-trash"></i> </button>
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->category_name }}</td>

                                <td>{{ $item->id }}</td>
                                <td>{{ $item->author }}</td>
                                <td>{{ $item->news_id }}</td>


                                <td><img src="{{ $item->image }}" height="100px"></td>
                                <td>{{ $item->datetime }}</td>



                            </tr>

                            @endforeach

                        </tbody>
                        @else
                        <tbody>

                            @foreach ($news as $item)
                            <tr>
                                <td>@if($item->status == 1)
                                    <span class="label label-success">Active</span @else <span
                                      class="label label-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ $item->author }}</td>
                                <td>{{ $item->news_id }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>{{ $item->title ,10 }}</td>
                                <td><img src="{{ $item->image }}" height="100px"></td>
                                <td>{{ $item->datetime }}</td>
                                <td>
                                    @if($item->status == 1)
                                    <span class="label label-success">Active</span @else <span
                                      class="label label-danger">Inactive</span @endif </td>

                                <td>
                                    @if($item->status == 1)
                                    <a class="btn btn-warning waves-effect btn-circle waves-light"
                                      href="{{ route('news.inactive',$item->id) }}">
                                        <i class="fa fa-eye-slash"></i> </a>
                                    @else
                                    <a class="btn btn-info waves-effect btn-circle waves-light"
                                      href="{{ route('news.active',$item->id) }}">
                                        <i class="fa fa-eye"></i> </a> @endif

                                    <a class="btn btn-primary waves-effect btn-circle waves-light"
                                      href="{{ route('news.edit',$item->id) }}">
                                        <i class="fa fa-edit"></i> </a>
                                    <form hidden action="{{ route('news.destroy',$item->id) }}"
                                      id="form{{ $item->id }}">
                                        @csrf
                                    </form>
                                    <button class="btn btn-danger waves-effect btn-circle waves-light"
                                      onclick="deleteItem({{ $item->id }});" type="button">
                                        <i class="fa fa-trash"></i> </button>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                        @endif

                    </table>
                </div>
            </div>
        </div>
        <!-- ///table responsive ///-->
    </div>
</div>
<!-- ============================================================== -->
<!-- End Info box -->
<!-- ============================================================== -->
@section('script')
<script>
    function deleteItem(id) {
    //  console.log(id);

    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    console.log('ok');
    document.getElementById(`form${id}`).submit();
  }
})

    }
</script>

@endsection

@endsection
