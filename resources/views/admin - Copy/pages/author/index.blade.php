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
                <li class="breadcrumb-item active">author</li>
            </ol>
            <a href="{{ route('author.create') }}" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
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
                <h4 class="card-title">All author </h4>
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display text-center table-striped border no-wrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>author Name</th>
                                <th>author Email</th>

                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>


                                <td>

                                    {{-- <a class="btn btn-primary waves-effect btn-circle waves-light"
                                      href="{{ route('author.edit',$item->id) }}">
                                    <i class="fa fa-edit"></i> </a> --}}
                                    <form hidden action="{{ route('author.destroy',$item->id) }}"
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
