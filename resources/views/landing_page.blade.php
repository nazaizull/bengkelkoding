<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landing Page - Poliklinik</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  
  <!-- Custom Styles -->
  <style>
    body {
      background-color: #000;
      font-family: 'Source Sans Pro', sans-serif;
      color: #fff;
    }

    .hero-section {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .hero-section h1 {
      font-size: 5rem;
      font-weight: bold;
      letter-spacing: 5px;
      z-index: 2;
      margin-bottom: 20px;
    }

    .hero-section p {
      font-size: 1.5rem;
      z-index: 2;
      margin-bottom: 40px;
    }

    .btn-custom {
      padding: 15px 30px;
      font-size: 18px;
      width: 200px;
      margin: 10px;
    }

    .background-lines {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('https://www.transparenttextures.com/patterns/lines.png');
      z-index: 1;
      opacity: 0.1;
    }

    .container-buttons {
      z-index: 2;
    }

    .btn-primary, .btn-success {
      border-radius: 50px;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .btn-success:hover {
      background-color: #28a745;
    }
  </style>
</head>
<body class="hold-transition landing-page">
  
  <!-- Hero Section -->
  <div class="hero-section">
    <div class="background-lines"></div>
    <div class="container-buttons">
      <h1>SISKEMAS</h1>
      <p>Welcome to our clinic</p>
      <a href="/login" class="btn btn-primary btn-custom">Masuk</a>
      <a href="/register" class="btn btn-success btn-custom">Daftar</a>
    </div>
  </div>

  <!-- AdminLTE Scripts -->
  <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
