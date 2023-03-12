@extends('layouts.app')
@section('content1')
    <h2 class="intro-y text-lg font-medium mt-10">
        Form Add Petugas
    </h2>
    <div class="intro-y box p-5 mt-5">
        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
            <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down w-4 h-4 mr-2">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg> Add Petugas
            </div>
            <div class="mt-5">
                <form action="{{ route('post.petugas.store') }}" method="POST" id="form-store-petugas">
                    @csrf
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label xl:w-64 xl:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Nama</div>
                                    <div
                                        class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                        Required</div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <input id="product-name" type="text" name="name" class="form-control"
                                placeholder="Product name">
                        </div>
                    </div>
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label xl:w-64 xl:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Email</div>
                                    <div
                                        class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                        Required</div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <input id="product-name" type="text" name="email" class="form-control"
                                placeholder="Product name">
                        </div>
                    </div>
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label xl:w-64 xl:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Nik</div>
                                    <div
                                        class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                        Required</div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <input id="product-name" type="text" name="nik" class="form-control"
                                placeholder="Product name">
                        </div>
                    </div>
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label xl:w-64 xl:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">No Telpon</div>
                                    <div
                                        class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                        Required</div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <input id="product-name" type="number" name="no_telp" class="form-control"
                                placeholder="Product name">
                        </div>
                    </div>
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label xl:w-64 xl:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Password</div>
                                    <div
                                        class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                        Required</div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <input id="product-name" type="text" name="password" class="form-control"
                                placeholder="Product name">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex justify-end md:flex-row gap-2 mt-5">
        <a href="{{ route('get.petugas') }}"
            class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-52 md:w-52">Cancel</a>
        <button type="submit" class="btn py-3 btn-primary w-52 md:w-52" form="form-store-petugas">Save</button>
    </div>
@endsection
