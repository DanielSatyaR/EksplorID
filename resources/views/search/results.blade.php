@extends('layouts.app')

@section('content')
    <div class="container mx-auto max-w-1xl px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold mb-4">Hasil Pencarian</h1>

        @if($results->isEmpty())
            <p>Tidak ada hasil ditemukan.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                @foreach($results as $result)
                    <a href="/destinasi/{{ $result->slug }}" class="block">
                        <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                            <img src="{{ asset('storage/' . $result->image) }}" alt="{{ $result->title }}" class="w-full h-full object-cover">
                            <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">{{ $result->title }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
@endsection
