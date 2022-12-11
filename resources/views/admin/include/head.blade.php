<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="{{ $content->description }}">
  <meta name="author" content="{{ $content->name }}">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ $content->favicon }}">
  <title>{{ $content->name }}</title>
  <!-- This page CSS -->
  <!-- chartist CSS -->
  <link href="{{ asset('/assets') }}/node_modules/morrisjs/morris.css" rel="stylesheet">
  <!--Toaster Popup message CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{ asset('/assets') }}/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
  <!-- floating-label css -->
  <link href="{{ asset('/assets') }}/dist/css/pages/floating-label.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css"
    href="{{ asset('/assets') }}/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('/assets') }}/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">

  <!-- summernote CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/node_modules/summernote/dist/summernote-bs4.css">
  <!--alerts CSS -->
  <link href="{{ asset('/assets') }}/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- Typehead CSS -->
  <link href="{{ asset('/assets') }}/dist/css/pages/other-pages.css" rel="stylesheet">
  <!-- file upload CSS -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/node_modules/dropify/dist/css/dropify.min.css">
  <!-- Custom CSS -->
  <link href="{{ asset('/assets') }}/css/style.min.css" rel="stylesheet">
  <!-- Dashboard 1 Page CSS -->
  <link href="{{ asset('/assets') }}/css/pages/dashboard1.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

</head>
