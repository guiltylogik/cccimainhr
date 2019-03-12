@include('parts.head')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('parts.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        @include('parts.nav')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->
          @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>

      </div>
      <!-- End of Main Content -->
      </div>
@include('parts.footer')