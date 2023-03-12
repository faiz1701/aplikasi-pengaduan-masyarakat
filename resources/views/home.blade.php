@extends('layouts.main')
@section('content2')
    <section
        class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-16 shadow-lg md:py-20 xl:py-48">
        <!-- image - start -->
        <img src="{{ asset('assets/img/comp.jpeg') }}" loading="lazy" alt="Photo by Fakurian Design"
            class="absolute inset-0 h-full w-full object-cover object-center" />
        <!-- image - end -->

        <!-- overlay - start -->
        <div class="absolute inset-0 bg-indigo-300 mix-blend-multiply"></div>
        <!-- overlay - end -->

        <!-- text start -->
        <div class="relative flex flex-col items-center p-4 sm:max-w-xl">
            <p class="mb-4 text-center text-lg text-indigo-200 sm:text-xl md:mb-8">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
            <h5 class="mb-8 text-center font-bold text-lg text-white sm:text-5xl md:mb-12 md:text-6xl">Layanan Aspirasi dan Pengaduan Online Rakyat</h5>

            <div class="flex w-full flex-col gap-2.5 sm:flex-row sm:justify-center">
                <a href="{{ route('get.index.pengaduan') }}"
                    class="inline-block rounded-lg bg-white px-8 py-3 text-center text-sm font-semibold text-indigo-500 outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 hover:text-white focus-visible:ring active:bg-indigo-700 md:text-base">Form Pengaduan</a>
            </div>
        </div>
        <!-- text end -->
    </section>
@endsection
