<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ secure_asset('assets/img/logo.png')}}" type="image/x-icon">
  <title>ArsipDokumen | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" media="all" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" media="all" href="{{ secure_asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" media="all" href="{{ secure_asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" media="all" href="{{ secure_asset('assets/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{{ secure_asset('assets/img/logo.png') }}"></img>
    <a href="/"><b>Arsip</b>Dokumen</a>
  </div>
  <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="/postlogin" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  @if(session('success'))
  Swal.fire({
    icon: "success",
    title: "BERHASIL",
    text: "{{ session('success') }}",
    showConfirmButton: false,
    timer: 4000
  });
  @endif
  </script>
  <script>
  @if(session('error'))
  Swal.fire({
    icon: "error",
    title: "GAGAL",
    text: "{{ session('error') }}",
    showConfirmButton: false,
    timer: 4000
  });
  @endif
  </script>
  
<!-- jQuery -->
<script src="{{ secure_asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ secure_asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ secure_asset('assets/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
