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

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

    </style>
    <div class="limiter">
        <div class="container mx-auto mt-5">
            <div class="flex flex-row items-center justify-center mt-[0vw]">
                <div class="grid grid-cols-2 flex">
                    <div class="p-8 bg-[#FFFFFF] w-[30vw] mx-[6.4vw] mb-12 shadow-2xl rounded-md">
                        @if (Session()->has('success'))
                            <h2 class="text-lg text-green-300">
                                {{ Session()->get('success') }}
                            </h2>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/register" method="post" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <span class="flex justify-center font-bold text-center text-2xl mt-2 mb-3">
                                Register
                            </span>
                            <div class="flex mx-4">
                                <div class="w-full mb-3">
                                    <label for="" class="text-xs font-semibold px-1 text-gray-700">Name</label>

                                    <div class="flex">
                                        <input type="text" autocomplete="off" name="name"
                                            class="w-full p-1 px-3 border-0 text-sm border-b border-gray-300 outline-none opacity-50 focus:border-blue-400"
                                            placeholder="Full Name">
                                    </div>
                                </div>
                            </div>

                            <div class="flex mx-4">
                                <div class="w-full mb-3">
                                    <label for="" class="text-xs font-semibold px-1 text-gray-700">Email</label>
                                    <div class="flex">
                                        <input type="email" autocomplete="off" name="email"
                                            class="w-full p-1 px-3 border-0 text-sm border-b border-gray-300 outline-none opacity-50 focus:border-blue-400"
                                            placeholder="emailmu@example.com">
                                    </div>
                                </div>
                            </div>

                            <div class="flex mx-4">
                                <div class="w-full mb-3">
                                    <label for="" class="text-xs font-semibold px-1 text-gray-700">Gender</label>

                                    <div class="my-4 flex items-center">
                                        <div class=" mr-5">
                                            <input type="radio" class="border-gray-300 mx-2" name="gender" id="L"
                                                value="Male" required>
                                            <label for="L">Male</label>
                                        </div>
                                        <div>
                                            <input type="radio" class="border-gray-300 mx-2" name="gender" id="P"
                                                value="Female" required>
                                            <label for="P">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex mx-4">
                                <div class="w-full mb-3">
                                    <label for="" class="text-xs font-semibold px-1 text-gray-700">Hobby</label>

                                    <div class="my-4 flex items-center">
                                        <div class=" mr-5">
                                            <input type="checkbox" class="border-gray-300 mx-2" name="hobby[]"
                                                id="Basket" value="Basket">
                                            <label for="Basket">Basket</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="border-gray-300 mx-2" name="hobby[]"
                                                id="Football" value="Football">
                                            <label for="Football">Football</label>
                                        </div>
                                    </div>
                                    <div class="my-4 flex items-center">
                                        <div class=" mr-5">
                                            <input type="checkbox" class="border-gray-300 mx-2" name="hobby[]"
                                                id="Badminton" value="Badminton">
                                            <label for="Badminton">Badminton</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="border-gray-300 mx-2" name="hobby[]"
                                                id="Football" value="Football">
                                            <label for="Football">Football</label>
                                        </div>
                                    </div>
                                    <div class="my-4 flex items-center">
                                        <div class=" mr-5">
                                            <input type="checkbox" class="border-gray-300 mx-2" name="hobby[]"
                                                id="Cooking" value="Cooking">
                                            <label for="Cooking">Cooking</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="border-gray-300 mx-2" name="hobby[]"
                                                id="Running" value="Running">
                                            <label for="Running">Running</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex mx-4">
                                <div class="w-full mb-3">
                                    <label for="" class="text-xs font-semibold px-1 text-gray-700">Date of Birth
                                        (Min 17)
                                    </label>
                                    <div class="flex">
                                        <input type="date" autocomplete="off" name="dob"
                                            class="w-full p-1 px-3 border-0 text-sm border-b border-gray-300 outline-none opacity-50 focus:border-blue-400">
                                    </div>
                                </div>
                            </div>

                            <div class="flex mx-4">
                                <div class="w-full mb-3">
                                    <label for="" class="text-xs font-semibold px-1 text-gray-700">Instagram
                                        (Link)</label>
                                    <div class="flex">
                                        <input type="text" autocomplete="off" name="instagram"
                                            class="w-full p-1 px-3 border-0 text-sm border-b border-gray-300 outline-none opacity-50 focus:border-blue-400"
                                            placeholder="https://instagram...">
                                    </div>
                                </div>
                            </div>


                            <div class="flex mx-4">
                                <div class="w-full mb-3">
                                    <label for="" class="text-xs font-semibold px-1 text-gray-700">Phone
                                        Number</label>
                                    <div class="flex">
                                        <input type="number" autocomplete="off" name="phone"
                                            class="w-full p-1 px-3 border-0 text-sm border-b border-gray-300 outline-none opacity-50 focus:border-blue-400"
                                            placeholder="0xxxxxxxxxx">
                                    </div>
                                </div>
                            </div>

                            <div class="flex mx-4">
                                <div class="w-full mb-3">
                                    <label for=""
                                        class="text-xs font-semibold px-1 text-gray-700">Password</label>
                                    <div class="flex">
                                        <input type="password" autocomplete="off" name="password"
                                            class="w-full p-1 px-3 border-0 text-sm border-b border-gray-300 outline-none opacity-50 focus:border-blue-400"
                                            placeholder="************">
                                    </div>
                                </div>
                            </div>

                            <div class="flex mx-4">
                                <div class="w-full mb-3">
                                    <label for="image" class="text-xs font-semibold px-1 text-gray-700">
                                        Upload image
                                    </label>

                                    <input type="file" autocomplete="off" name="image" id="image"
                                        class="w-full p-1 px-3 border-0 text-sm border-b border-gray-300 outline-none opacity-50 focus:border-blue-400"
                                        onchange="previewImage()">
                                    <img src="" alt=""
                                        class="img-preview img-fluid mb-3 col-sm-5 d-block w-[30vw]">
                                </div>
                            </div>


                            <div class="flex justify-center mx-4 mb-4">
                                <button type="submit"
                                    class="bg-[#DC0000] bg-gradient-to-r from-orange-500 to-pink-500 px-10 py-3 text-white rounded-xl w-full">
                                    DAFTAR
                                </button>
                            </div>

                            <div
                                class="my-6 mx-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-[#850000] after:mt-0.5 after:flex-1 after:border-t after:border-[#850000]">
                                <p class="mx-4 mb-0 text-center font-semibold text-[#850000]">
                                    Or
                                </p>
                            </div>

                            <div class="mx-4 text-center">
                                Already have account? <a href="/login"
                                    class="font-bold text-[#f069e5] underline text-md hover:text-pink-600">Login</a>
                            </div>

                        </form>
                    </div>
                    <div>
                        <img src="{{ asset('login_img.png') }}" alt="">
                    </div>

                </div>

            </div>

        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvenet) {
                imgPreview.src = oFREvenet.target.result;
            }
        }
    </script>
@endsection
