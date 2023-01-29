<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard &mdash; ngoding-era</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('')}}admin/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}admin/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{asset('')}}admin/vendor/perfect-scrollbar/css/perfect-scrollbar.css">

    <!-- CSS for this page only -->
    @stack('css')
    @stack('datatables')
    <!-- End CSS  -->

    <link rel="stylesheet" href="{{asset('')}}admin/assets/css/style.min.css">
    <link rel="stylesheet" href="{{asset('')}}admin/assets/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="{{asset('')}}admin/assets/css/dark.min.css">
</head>

<body>
    <div id="app">
        <div class="shadow-header"></div>
        @php
        $routeName = Route::currentRouteName();
        @endphp
        @include('layouts.header')
        @if (Auth::user()->role_id == 1)
            @include('layouts.superadmin_navbar')
        @elseif(Auth::user()->role_id == 2 )
            @include('layouts.navbar')
        @elseif(Auth::user()->role_id == 3 )
            @include('layouts.user_navbar')
        @endif

        @yield('content')

        @include('layouts.settings')

        <footer>
            Copyright © 2022 &nbsp <a href="https://www.ngoding-era.com" target="_blank" class="ml-1"> ngoding-era </a> <span> . All rights Reserved</span>
        </footer>
        <div class="overlay action-toggle">
        </div>
    </div>
    {{-- Modal --}}
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
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary" href="login.html">{{ __('Logout') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
    <script src="{{asset('')}}admin/vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="{{asset('')}}admin/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>

    <!-- js for this page only -->
    @stack('script')
    @stack('js')
    @stack('js_datatables')
    <script>
        DataTable.init()
    </script>
    <!-- ======= -->
    <script src="{{asset('')}}admin/assets/js/main.js"></script>
    <script>
        Main.init()
    </script>
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('status'))
            Swal.fire({
                title: 'Congratulations!',
                text: "{{ session('status') }}",
                icon: 'success',
                timer: 3000
            })
        @endif
        @if (session('error'))
            Swal.fire({
                title: 'Error!',
                html: "{{ session('error') }}",
                icon: 'error',
                timer: 3000
            })
        @endif
        @if ($errors->any())
            @php
                $message = '';
                foreach ($errors->all() as $error) {
                    $message .= $error . '<br/>';
                }
            @endphp
            Swal.fire({
                title: 'Error',
                html: "{!! $message !!}",
                icon: 'error',
            })
        @endif

        function deleteConfirmation(nama) {
            var form = event.target.form;
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                icon: 'warning',
                html: "Anda akan menghapus data dengan nama <strong>" + nama +
                    "</strong> dan tidak dapat mengembalikannya kembali",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus saja!',
            }).then((result) => {
                if (result.value) {
                    form.submit();
                }
            });
        }
    </script>
</body>

</html>
