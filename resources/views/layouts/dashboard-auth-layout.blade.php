@include('vendor-dashboard.section.header')
@yield('styles')
<main class="ttr-wrapper">
		<div class="container-fluid">
@include('vendor-dashboard.section.notification')
@yield('main-content')
@include('vendor-dashboard.section.footer')