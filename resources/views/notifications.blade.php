@extends('layout.master')
@section('content')
    <div class="container mx-auto">
        <div class="row mx-[20vw] mt-12">
            <p class="text-red-500 text-xl">
                Friend Request
            </p>
            @foreach ($friend_req as $notif)
                @php
                    $from = App\Models\User::find($notif->from_id);
                @endphp
                <div class="shadow-xl border px-7 py-5">
                    there is a friend request from <b>{{ $from->name }}</b>
                    @if ($notif->acc == 0)
                        <a href="acc-friend/{{ $notif->id }}" class="ml-8 bg-green-700 text-white px-5 py-3">
                            Accept
                        </a>
                        <a href="" class="bg-red-700 text-white ml-4 px-5 py-3">
                            Ignore
                        </a>
                    @else
                        <p class="text-lg text-green-700">Accepted Friend Request</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
