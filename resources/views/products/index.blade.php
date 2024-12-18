@extends('layout/Halaman')

@section('isi')
    <h1>Daftar Produk</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }} - Rp{{ number_format($product['price'], 0, ',', '.') }}</li>
        @endforeach
    </ul>
@endsection
