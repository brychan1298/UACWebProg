@extends('layout.master')
@section('content')
    <div class="container mx-auto">
        <div class="row mt-5">
            <h2 class="text-center text-3xl">
                Your Friend's Biodata
            </h2>
            <div class="flex mt-4">
                <div class="w-1/3">
                    <img src="{{ asset('storage/' . $user->image) }}" class="w-[20vw] h-[20vw] object-cover" alt="">
                </div>
                <div class="w-2/3 bg-white shadow-2xl bg-opacity-70 p-10">
                    <p class="text-xl mb-4">
                        Name : {{ $user->name }}
                    </p>
                    <p class="text-xl mb-4">
                        Email : {{ $user->email }}
                    </p>
                    <p class="text-xl mb-4">
                        Phone Number : {{ $user->phone }}
                    </p>
                    <p class="mb-5">
                        Hobbies : {{ $user->hobby }}
                    </p>
                    <a href="/add-friend/{{$user->id}}" class="gap-4 flex items-center bg-blue-500 text-white border-none py-4 px-2">
                        <img src="{{asset('thumbs.png')}}" class="w-[1.5vw] h-[1.5vw]" alt="">
                        Like & Add
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
