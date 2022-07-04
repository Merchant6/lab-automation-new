<html lang="en"><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/theme/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/theme/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/theme/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('../../theme/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/theme/images/favicon.png')}}">

  
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
<body>

      

      <div class="container-scroller m-0">

        @include('navbars\navabar', ['searchValue' => 'search'])

        <div class="container-fluid page-body-wrapper my-0">
          <!-- partial:partials/_sidebar.html -->
          @include('navbars\sidebar')
          <!-- partial -->

            @yield('content')
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
      </div>

         {{-- <!-- partial:partials/_navbar.html -->
         @include('navbars\navabar')
         <!-- partial -->
         
        
          <!-- partial:partials/_sidebar.html -->
         @include('navbars\sidebar')

            <div class="container-fluid">
                <!--Main Content-->
                @yield('content')  
                <!--Main_Content_End-->         
            </div>

    
   
        <!-- partial --> --}}
        
 <!-- plugins:js -->
  <script src="{{asset('/theme/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('/theme/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('/theme/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/theme/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('/theme/js/off-canvas.js')}}"></script>
  <script src="{{asset('/theme/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/theme/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('/theme/js/dashboard.js')}}"></script>
  <script src="{{asset('/theme/js/data-table.js')}}"></script>
  <script src="{{asset('/theme/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/theme/js/dataTables.bootstrap4.js')}}"></script>
  <!-- End custom js for this page-->

  <script src="{{asset('/theme/js/jquery.cookie.js')}}" type="text/javascript"></script>




</body></html>