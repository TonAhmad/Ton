@extends('layout/Halaman')

@section('isi')
    <h1>Daftar Pengguna</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
@endsection
