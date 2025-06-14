@extends('layouts.app')

@section('title', 'Projects') {{-- Ini akan ganti title browser --}}

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Projects</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="p-4 bg-dark rounded shadow-sm">
                <h3>Project 1</h3>
                <p>Deskripsi singkat tentang project 1.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 bg-dark rounded shadow-sm">
                <h3>Project 2</h3>
                <p>Deskripsi singkat tentang project 2.</p>
            </div>
        </div>
    </div>
</div>
@endsection
