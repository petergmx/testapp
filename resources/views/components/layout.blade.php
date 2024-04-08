<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title ?? 'Úlohy' }}</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- css stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>


<!-- Navbar --><
<x-navbar />
<!-- Navbar ends -->


<!-- Content -->
<div class="container.fluid vh-100">
  <div class="row vh-100">
    <div class="col">
      &nbsp;
    </div>
    <div class="col-7">

        {{ $slot }}

    </div>
    <div class="col">
      &nbsp;
    </div>
  </div>
</div>
<!-- Content ends -->


</body>
</html>
