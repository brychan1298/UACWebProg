@extends('layout.master')
@section('content')
    <div class="container mx-auto">
        <div class="row mt-5">
            <h2 class="text-center text-3xl">
                Your Profile
            </h2>
            <div class="flex mt-4">
                <div class="w-1/3">
                    <img src="{{ asset('storage/' . $user->image) }}" class="w-[20vw] h-[20vw] object-cover" alt="">
                </div>
                <div class="w-2/3">
                    <p class="text-xl mb-4">
                        Name : {{ $user->name }}
                    </p>
                    <p class="text-xl mb-4">
                        Email : {{ $user->email }}
                    </p>
                    <p class="text-xl mb-4">
                        Phone Number : {{ $user->phone }}
                    </p>
                    <p>
                        Balance : {{$user->wallet}} Coins
                        <a href="top-up" class="px-4 py-2 bg-green-700 text-white text-xl">
                            Top Up
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <hr class="my-5 border-red-100 border-2">
        <div class="row mt-5 mb-12">
            <h2 class="text-xl mb-5">
                Your Friend's List
            </h2>
            <div class="grid grid-cols-4">
                @foreach ($friend_to as $ff)
                    <div
                        class="shadow-xl flex flex-col rounded-lg bg-gradient-to-r from-orange-500 to-pink-500 md:max-w-xl md:flex-row">
                        @php
                            $from = App\Models\User::find($ff->from_id);
                        @endphp
                        <div class="flex flex-col justify-start p-6">
                            <a href="/detailUser/{{ $from->id }}">
                                <img src="{{ asset('storage/' . $from->image) }}" class="w-[20vw] h-[15vw] object-cover"
                                    alt="">
                            </a>
                            <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                                {{ $from->name }}
                            </h5>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="grid grid-cols-4">
                @foreach ($friend_from as $ff)
                    <div
                        class="shadow-xl flex flex-col rounded-lg bg-gradient-to-r from-orange-500 to-pink-500 md:max-w-xl md:flex-row">
                        @php
                            $to = App\Models\User::find($ff->to_id);
                        @endphp
                        <div class="flex flex-col justify-start p-6">
                            <a href="/detailUser/{{ $to->id }}">
                                <img src="{{ asset('storage/' . $to->image) }}" class="w-[20vw] h-[15vw] object-cover"
                                    alt="">
                            </a>
                            <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                                {{ $to->name }}
                            </h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
