@extends('layout.master')
@section('content')
    <style>
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-transition-delay: 9999s;
            transition-delay: 9999s;
        }
    </style>
    <div class="limiter">
        <div class="container mx-auto">
            <div class="flex flex-row items-center justify-center mt-[6vw]">
                <div class="grid grid-cols-2">
                    <div>
                        <img src="{{ asset('login_img.png') }}" alt="">
                    </div>
                    <div class="p-8 bg-[#FFFFFF] w-[30vw] mx-[6.4vw] mb-12 shadow-2xl rounded-md">
                        @if (Session()->has('loginError'))
                            <h2 class="text-lg text-red-300">
                                {{ Session()->get('loginError') }}
                            </h2>
                        @endif
                        <form action="/login" method="post" autocomplete="off">
                            @csrf
                            <span class="flex justify-center font-bold text-center text-2xl mt-2 mb-5">
                                Log in
                            </span>

                            <div class="flex mx-4">
                                <div class="w-full mb-5">
                                    <label for="" class="text-xs font-semibold px-1 text-gray-700">Email</label>
                                    <div class="flex">
                                        <input type="text" autocomplete="off" name="email"
                                            class="w-full p-3 border-0 text-sm border-b border-gray-300 outline-none opacity-50 focus:border-blue-400"
                                            placeholder="youremail@example.com">
                                    </div>
                                </div>
                            </div>

                            <div class="flex mx-4">
                                <div class="w-full mb-5">
                                    <label for="" class="text-xs font-semibold px-1 text-gray-700">Password</label>
                                    <div class="flex">
                                        <input type="password" autocomplete="off" name="password"
                                            class="w-full p-3 border-0 text-sm border-b border-gray-300 outline-none opacity-50 focus:border-blue-400"
                                            placeholder="************">
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-center mx-4 mb-4">
                                <button type="submit"
                                    class="bg-[#DC0000] bg-gradient-to-r from-orange-500 to-pink-500 px-10 py-3 text-white rounded-xl w-full">
                                    MASUK
                                </button>
                            </div>

                            <div
                                class="my-6 mx-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-[#850000] after:mt-0.5 after:flex-1 after:border-t after:border-[#850000]">
                                <p class="mx-4 mb-0 text-center font-semibold text-[#850000]">
                                    Or
                                </p>
                            </div>

                            <div class="mx-4 text-center">
                                Belum punya akun? <a href="/register"
                                    class="font-bold text-[#f069e5] underline text-md hover:text-pink-600">Register</a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
