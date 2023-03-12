@extends('layouts.main')
@section('content2')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Form Pengaduan</h2>

                <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">Sampaikan Keluhan Anda</p>
            </div>
            <!-- text - end -->

            <!-- form - start -->
            <div
                class="max-w-4xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-auto py-8">
                <form class="mx-auto grid max-w-screen-md gap-4 sm:grid-cols-2" method="POST" action="{{ route('post.store.pengaduan') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="first-name" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Provinsi</label>
                        <input name="provinsi" type="text"
                            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    </div>

                    <div>
                        <label for="last-name" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Kota</label>
                        <input name="kota" type="text"
                            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    </div>
                    {{-- Judul Pengaduan --}}
                    <div class="sm:col-span-2">
                        <label for="company" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Judul Pengaduan</label>
                        <input name="judul_pengaduan" type="text"
                            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    </div>
                    {{-- <div class="sm:col-span-2">
                        <label for="company" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Tanggal
                            Pengaduan</label>
                        <input name="tanggal_pengaduan" type="date"
                            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    </div> --}}

                    <div class="sm:col-span-2">
                        <label for="email" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Ketik Lokasi
                            Kejadian</label>
                        <input name="lokasi_pengaduan" type="text"
                            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="subject" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Masukan Foto
                            pengaduan</label>
                        <input name="foto_pengaduan" type="file"
                            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="message" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Ketik Isi
                            Pengaduan Anda</label>
                        <textarea name="isi_laporan"
                            class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
                    </div>

                    <div class="flex items-center justify-between sm:col-span-2">
                        <button type="submit"
                            class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">Send</button>
                    </div>
                </form>
            </div>
            <!-- form - end -->
        </div>
    </div>
@endsection
