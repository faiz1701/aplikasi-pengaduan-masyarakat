@extends('layouts.app')
@section('content1')
    <h2 class="intro-y text-lg font-medium mt-10">Product Grid</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        @foreach ($data as $item)
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                <div class="box">
                    <div class="p-5">
                        <div
                            class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md"
                                src="{{ asset('images/'.$item->foto_pengaduan) }}">
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                <a href="" class="block font-medium text-base">{{ $item->judul_pengaduan }}</a>
                                <span class="text-white/90 text-xs mt-3">{{ $item->status }}</span>
                            </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <div class="flex items-center"><b class="mr-2">Nama:</b>{{ $item->user->name }}</div>
                            <div class="flex items-center mt-2"><b class="mr-2">Provinsi:</b>{{ $item->provinsi }}</div>
                            <div class="flex items-center mt-2"><b class="mr-2">Kota:</b>{{ $item->kota }}</div>
                        </div>
                    </div>
                    <div
                        class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <a class="flex items-center text-primary mr-auto" href="{{ route('get.pengaduan.detail', $item->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="eye" data-lucide="eye"
                                class="lucide lucide-eye w-4 h-4 mr-1">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg> Preview
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
