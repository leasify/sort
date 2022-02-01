<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>[x-cloak] { display: none !important; }</style>
  <livewire:styles />
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="container mx-auto mt-12">
        @yield('content')
    </div>
</body>

<livewire:scripts />
<script src="{{ mix('js/app.js') }}"></script>
@stack('scripts')

</html>
