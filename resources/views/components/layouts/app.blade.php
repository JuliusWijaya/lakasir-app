<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title ?? config('app . name') }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('Assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('Assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{ asset('Assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @auth
            <!-- Sidebar -->
            <x-dashboard.sidebar />
            <!-- End of Sidebar -->
        @endauth

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @auth
                    <!-- Topbar -->
                    <x-dashboard.topbar />
                    <!-- End of Topbar -->
                @endauth

                <div class="container-fluid">
                    @if (request()->routeIs('dashboard'))
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        </div>
                    @endif

                    <div class="row">
                        @if (request()->routeIs('adm.dashboard'))
                            <x-dashboard.card />
                        @endif
                    </div>

                    @auth
                        {{ $slot }}
                    @endauth
                </div><i class="ri-xbox-fill"></i>
            </div>
            <!-- End of Main Content -->
            @guest
                @if (!request()->is('login'))
                    <x-navigation />
                @endif
                <div class="container">
                    {{ $slot }}
                </div>
            @else
                <x-dashboard.footer />
            @endguest
            <!-- Footer -->
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('Assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('Assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('Assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('Assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('Assets/js/demo/datatables-demo.js') }}"></script>
    @stack('scripts')
</body>

</html>
