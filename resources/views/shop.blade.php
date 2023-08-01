@extends('layout.master')
@section('content')
    <div class="container mx-auto">
        <div class="row mt-5">
            <div class="grid-cols-3 grid gap-5">
                <div
                    class="shadow-xl flex flex-col rounded-lg shadow-2xl bg-white md:max-w-xl md:flex-row">

                    <div class="flex flex-col justify-start p-6">
                        <a href="">
                            <img src="{{ asset('avatar1.jpg') }}" class="w-[20vw] h-[15vw] object-cover" alt="">
                        </a>
                        <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">

                        </h5>
                        <a href="/add-friend" class="gap-4 flex items-center bg-blue-500 text-white border-none py-4 px-2">
                            BUY AVATAR
                        </a>
                    </div>
                </div>
                <div
                    class="shadow-xl flex flex-col rounded-lg shadow-2xl bg-white md:max-w-xl md:flex-row">

                    <div class="flex flex-col justify-start p-6">
                        <a href="">
                            <img src="{{ asset('avatar2.png') }}" class="w-[20vw] h-[15vw] object-cover" alt="">
                        </a>
                        <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">

                        </h5>
                        <a href="" class="gap-4 flex items-center bg-blue-500 text-white border-none py-4 px-2">
                            BUY AVATAR
                        </a>
                    </div>
                </div>
                <div
                    class="shadow-xl flex flex-col rounded-lg shadow-2xl bg-white to-pink-500 md:max-w-xl md:flex-row">

                    <div class="flex flex-col justify-start p-6">
                        <a href="">
                            <img src="{{ asset('avatar3.png') }}" class="w-[20vw] h-[15vw] object-cover" alt="">
                        </a>
                        <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">

                        </h5>
                        <a href="/add-friend" class="gap-4 flex items-center bg-blue-500 text-white border-none py-4 px-2">
                            BUY AVATAR
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
