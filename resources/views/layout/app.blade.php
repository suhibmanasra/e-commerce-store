<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>W3Admin Dashboard - Free Dashboard for HTML5/w3css by W3MIX</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="{{ asset('assets/icons/font-awesome-4.7.0/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/w3pro-4.13.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/w3-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/admin-styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css') }}">
</head>

<body class="w3-light-grey">
  <input id="sidebar-control" type="checkbox" class="w3-hide">
  <div id="app">

    @include('layout.navbar')
    

    <div style="margin-top:54px">
      <div class="w3-container w3-padding-large w3-margin-bottom">
        @yield('content')
      </div>
      @include('layout.footer')
    </div>
        
  </div>
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/chartjs/dashboard.js') }}"></script>
</body>

</html>