<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="csrf-param" content="_token" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="{{ asset('js/app.js') }}"></script>