<script src="{{ asset('/assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
</script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('/assets') }}/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="{{ asset('/assets') }}/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{ asset('/assets') }}/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{ asset('/assets') }}/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{ asset('/assets') }}/node_modules/raphael/raphael-min.js"></script>
<script src="{{ asset('/assets') }}/node_modules/morrisjs/morris.min.js"></script>
<script src="{{ asset('/assets') }}/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="{{ asset('/assets') }}/node_modules/toast-master/js/jquery.toast.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.js"
  integrity="sha512-S1KaVll2UTj29SOXML7O4LxU7zEoQhJgnondHE/ZvNrk7H4Rc9TLFKDaWuEzsHmAEkJnWFedc0hcVrpvFTOlwA=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Sweet-Alert  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.5/sweetalert2.all.min.js"
  integrity="sha512-Ne7tFIuQ9TY6PXjMLKcfZlOnBLUVmLW0YDUV1h1wp+Qr5Fe0EoqHh242XT+GbX/tcXsbnVALt/zF6ouJaKa91w=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery file upload -->
    <script src="{{ asset('/assets') }}/node_modules/dropify/dist/js/dropify.min.js"></script>
<!-- Chart JS -->
<script src="{{ asset('/assets') }}/js/dashboard1.js"></script>
<script src="{{ asset('/assets') }}/node_modules/toast-master/js/jquery.toast.js"></script>
<script src="{{ asset('/assets') }}/dist/js/custom.min.js"></script>
<script src="{{ asset('/assets') }}/dist/js/pages/jasny-bootstrap.js"></script>
@if ($massage = Session::get('success'))
<script>
    Swal.fire({
  position: "top-end",
  icon: "success",
  title: "{{ $massage }}",
  showConfirmButton: !1,
  timer: 3000
  })
  Swal();
</script>
@endif


@if ($massage = Session::get('error'))
<script>
    Swal.fire({
position: "top-end",
icon: "Error",
title: "{{ $massage }}",
showConfirmButton: !1,
timer: 3000
})
Swal();
</script>
@endif
