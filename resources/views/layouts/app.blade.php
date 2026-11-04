<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title', 'Toko Praktikum')</title>
    @stack('styles')
</head>
<body>
    @include('partials.navbar')
    <main>@yield('content')</main>
    <footer>&copy; {{ date('Y') }}</footer>
    @stack('scripts')
</body>
</html>

@extends('layouts.app')
@section('title', 'Daftar Produk')
@section('content')
    <h1>Daftar Produk</h1>
@endsection
@push('scripts')
    <script>console.log('produk dimuat');</script>
@endpush