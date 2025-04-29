<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">

  <!-- Custom styles for login -->
  <style>
    body {
      background: linear-gradient(to right, #00bcd4, #8e44ad);
      font-family: 'Source Sans Pro', sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }
    .login-box {
      width: 100%;
      max-width: 400px;
      margin-top: -20px; /* Sedikit mengatur ke atas */
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #007bff;
      color: white;
      border-radius: 15px 15px 0 0;
      text-align: center;
    }
    .card-body {
      padding: 30px;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: all 0.3s ease;
      width: 100%;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .login-box-msg {
      font-weight: bold;
      font-size: 1.2rem;
      text-align: center;
      margin-bottom: 20px;
    }
    .input-group-text {
      background-color: #f1f1f1;
    }
    label {
      font-size: 1rem;
      margin-bottom: 5px;
      font-weight: 600;
    }
    .form-group {
      margin-bottom: 15px;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="./login" class="h1"><b>Login</b>Page</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan Login</p>

      <form action="/login" method="post">
        @csrf

        <!-- Email -->
        <label for="email">Email</label>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <!-- Password -->
        <label for="password">Password</label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <!-- Login Button -->
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>

      <!-- Register Link -->
      <p class="mb-0 text-center">
        <a href="/register" class="text-center">Belum Punya Akun? Daftar Disini</a>
      </p>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
