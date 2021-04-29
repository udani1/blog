{{--can put anything to any page breadcrum because we had used '@yield(.....)'concept below --}}

<h1 class="mt-4">@yield('content_header')</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">@yield('breadcrumb')</li>
</ol>