@extends('layouts.app')
@section('content1')
    <div class="intro-y news p-5 box mt-8">
        <!-- BEGIN: Blog Layout -->
        <h2 class="intro-y font-medium text-xl sm:text-2xl">{{ $data->judul_pengaduan }}</h2>
        <div class="intro-y text-slate-600 dark:text-slate-500 mt-3 text-xs sm:text-sm">
            {{ $data->created_at->format('d M Y') }} <span class="mx-1">•</span> <a class="text-primary" href="">{{ $data->provinsi}}</a> <span
                class="mx-1">•</span> {{ $data->kota }}
        </div>
        <div class="intro-y mt-6 w-3/5 ml-auto mr-auto">
            <div class="news__preview image-fit">
                <img alt="Midone - HTML Admin Template" class="rounded-md"
                    src="{{ asset('images/'.$data->foto_pengaduan) }}">
            </div>
        </div>
        <div class="intro-y text-justify leading-relaxed mt-10">
            <p class="">{{ $data->isi_laporan }}</p>
        </div>
        <!-- END: Blog Layout -->
        <!-- BEGIN: Comments -->
        <div class="intro-y mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <div class="text-base sm:text-lg font-medium">Responses</div>
            <div class="news__input relative mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" icon-name="message-circle" data-lucide="message-circle"
                    class="lucide lucide-message-circle w-5 h-5 absolute my-auto inset-y-0 ml-6 left-0 text-slate-500">
                    <path
                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                </svg>
                <textarea class="form-control border-transparent bg-slate-100 pl-16 py-6 resize-none" rows="3"
                    placeholder="Post a comment..."></textarea>
            </div>
        </div>
        <div class="intro-y mt-20">
            <button class="btn btn-primary">Send <i class="lab la-telegram-plane text-xl ml-2"></i></button>
        </div>
        <!-- END: Comments -->
    </div>
@endsection
