@extends('layouts.app')

@section('content')
    <div class="container mx-auto max-w-1xl px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold mb-4">Detail Destinasi</h1>

        <!-- Tampilkan detail destinasi di sini -->
        <div class="destinasi-detail">
            <h2>{{ $destinasi->name }}</h2>
            <img src="{{ asset('storage/' . $destinasi->image) }}" alt="{{ $destinasi->name }}" class="w-full h-48 object-cover">
            <p>{{ $destinasi->description }}</p>
        </div>

        <h2 class="mt-6">Rating & Review</h2>
        @foreach($reviews as $review)
            <div class="review">
                <div class="review-header">
                    <strong>{{ $review->user->name }}</strong>
                    <div>
                        @for($i = 0; $i < $review->rating; $i++)
                            ★
                        @endfor
                    </div>
                </div>
                <p>{{ $review->review }}</p>
            </div>
        @endforeach

        <!-- Form untuk menambahkan review -->
        <div class="mt-6">
            <h2 class="text-xl font-semibold">Tulis Review Anda</h2>
            <form action="{{ route('reviews.store') }}" method="POST" class="mt-4">
                @csrf
                <input type="hidden" name="destinasi_id" value="{{ $destinasi->id }}">

                <div class="mb-4">
                    <label for="rating" class="block text-sm font-medium text-gray-700">Rating:</label>
                    <select name="rating" id="rating" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                        <option value="">Pilih Rating</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="review" class="block text-sm font-medium text-gray-700">Review:</label>
                    <textarea name="review" id="review" rows="4" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50"></textarea>
                </div>

                <button type="submit" class="bg-[#FF2D20] text-white rounded p-2">Kirim Review</button>
            </form>
        </div>
    </div>
@endsection
