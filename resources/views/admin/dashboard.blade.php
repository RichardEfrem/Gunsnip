{{-- Menggunakan base layout base.blade.php --}}
@extends('admin/base.base')

@section('admin/content')
    <section class="mt-4">
        <h1 class="text-4xl font-bold">Welcome {{ $user->name }}</h1>
    </section>
@endsection