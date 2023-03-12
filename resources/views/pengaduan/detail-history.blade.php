@extends('layouts.main')
@section('content2')
    <a href="{{ route('get.history.pengaduan') }}"
        class="p-3 bg-gray-200 text-gray-500 rounded-xl items-center justify-center"><i class="las la-arrow-left"></i>
        Back</a>

    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
            <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
                <div>
                    <div class="h-64 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-auto">
                        <img src="{{ asset('images/' . $data->foto_pengaduan) }}" loading="lazy" alt="Photo by Martin Sanchez"
                            class="h-full w-full object-cover object-center" />
                    </div>
                </div>

                <div class="md:pt-8">
                    <p class="text-center font-bold text-indigo-500 md:text-left">{{ $data->created_at->format('Y-M-d') }}
                    </p>

                    <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-left">
                        {{ $data->judul_pengaduan }}</h1>

                    <p class="mb-6 text-gray-500 sm:text-lg md:mb-8">{{ $data->isi_laporan }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
