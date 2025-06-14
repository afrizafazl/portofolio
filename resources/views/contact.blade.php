@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container py-5">
    <h1>Hubungi Saya</h1>
    <p>Silakan tinggalkan pesan melalui form di bawah ini:</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/pesan">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Pesan</label>
            <textarea name="pesan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-light">Kirim</button>
    </form>
</div>
@endsection
