<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
    </head>
    <body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
            <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->
        @include('layouts.sidebar')

        @include('layouts.navbar')

        <!-- [ Main Content ] start -->
        <div class="pc-container">
            <div class="pc-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 >@yield('title')</h2>
                        </div>
                        {{-- <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">UI Components</a></li>
                            <li class="breadcrumb-item" aria-current="page">Color</li>
                        </ul> --}}
                        </div>
                    </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->


                <div class="row">
                    <!-- [ link-button ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.footer')

        @yield('js_content')
        <script>
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: '{{ session('success') }}',
                    showConfirmButton: true,
                    timer: 5000
                });
            @endif
        
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: '{{ session('error') }}',
                    showConfirmButton: true,
                    timer: 5000
                });
            @endif
        </script>
    </body>
</html>
