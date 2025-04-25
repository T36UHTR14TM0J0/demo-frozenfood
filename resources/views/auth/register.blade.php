<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Register</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('images/favicon.svg')}}" type="image/x-icon"> <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('fonts/tabler-icons.min.css')}}" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('fonts/feather.css')}}" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome.css')}}" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('fonts/material.css')}}" >
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" id="main-style-link" >
    <link rel="stylesheet" href="{{ asset('css/style-preset.css')}}" >
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <div class="auth-main">
    <div class="auth-wrapper v3">
      <div class="auth-form">
        <div class="card my-5">
          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="d-flex justify-content-between align-items-end mb-4">
                    <h3 class="mb-0"><b>Register</b></h3>
                    <a href="{{ route('login') }}" class="link-primary">Sudah memiliki akun ?</a>
                </div>
                
                <!-- Untuk field name -->
                <div class="form-group mb-3">
                    <label class="form-label">{{ __('Nama Lengkap') }}</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Nama Lengkap" value="{{ old('name') }}" autofocus autocomplete="name">
                    @error('name')
                        <span class="text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Untuk field email -->
                <div class="form-group mb-3">
                    <label class="form-label">{{ __('Email') }}</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" autocomplete="email">
                    @error('email')
                        <span class="text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Untuk field password -->
                <div class="form-group mb-3">
                    <label class="form-label">{{ __('Password') }}</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="current-password">
                    @error('password')
                        <span class="text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Untuk field password_confirmation -->
                <div class="form-group mb-3">
                    <label class="form-label">{{ __('Password Konfirmasi') }}</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Konfirmasi" autocomplete="new-password">
                    @error('password_confirmation')
                        <span class="text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>

                
                
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <!-- Required Js -->
  <script src="{{ asset('js/plugins/popper.min.js')}}"></script>
  <script src="{{ asset('js/plugins/simplebar.min.js')}}"></script>
  <script src="{{ asset('js/plugins/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/fonts/custom-font.js')}}"></script>
  <script src="{{ asset('js/pcoded.js')}}"></script>
  <script src="{{ asset('js/plugins/feather.min.js')}}"></script>

  
  
  
  
  <script>layout_change('light');</script>
  
  
  
  
  <script>change_box_container('false');</script>
  
  
  
  <script>layout_rtl_change('false');</script>
  
  
  <script>preset_change("preset-1");</script>
  
  
  <script>font_change("Public-Sans");</script>
  
    
 
</body>
<!-- [Body] end -->

</html>