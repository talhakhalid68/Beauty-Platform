<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/bundles/izitoast/css/iziToast.min.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('img/logo.png')}}' />
  <link rel="stylesheet" href="{{asset('admin/assets/bundles/select2/dist/css/select2.min.css')}}">

  <link rel="stylesheet" href="{{asset('admin/assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <style>
    .cke_notification_warning {
        display: none !important;
    }

    .tag-container {
        min-height: 40px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        padding: 5px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        cursor: text;
    }
    .tag {
        background-color: #6a1b9a;
        color: white;
        padding: 5px 10px;
        margin: 3px;
        border-radius: 5px;
        font-size: 14px;
        display: flex;
        align-items: center;
    }
    .tag .remove {
        margin-left: 8px;
        cursor: pointer;
        font-weight: bold;
    }
    .tag-container:focus {
        border-color: #6a1b9a;
    }
   </style>




</head>

<body>
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
            @include('admin.layouts.navbar')
            @include('admin.layouts.sidebar')
            @yield('content')
          
        </div>
   </div>



     <!-- General JS Scripts -->
  <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('admin/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('admin/assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('admin/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('admin/assets/js/custom.js')}}"></script>

  <script src="{{asset('admin/assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('admin/assets/js/page/toastr.js')}}"></script>

  <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
  <script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>

  <script src="{{asset('admin/assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/page/datatables.js')}}"></script>



@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function() {
        iziToast.success({
            title: 'Success!',
            message: '{{ session("success") }}',
            position: 'topRight'
        });
    });
</script>
@endif





</body>

</html>