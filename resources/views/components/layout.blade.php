@include('partials._header')
@include('partials._navbar')
@include('partials._navfilter')

{{ $slot }}

@include('partials._footer')