@extends('_partial.top')
@section('title', 'Pengaduan Masyarakat')
@section('css')
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png" />
    <title>@yield('title')</title>
@endsection

<body>
    <div id="app">
        @include('_partial.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <h3>@yield('title_content')</h3>
            </div>
            <div class="page-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
        </div>
    </div>
    {{-- Script JS --}}
@include('_partial.script')
</body>

</html>
