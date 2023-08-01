@extends('layout.master')
@section('content')
    <div class="container mx-auto">
        <div class="row">
            <div class="row mt-12">
                <h1 class="text-3xl font-bold">
                    Find your best friends
                </h1>

                Filter Gender :
                <select name="gender" id="select_gender" class="mt-4" onchange="filter()">
                    <option value="">All</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <div class="grid grid-cols-4 gap-5 mt-5">
                    @foreach ($users as $u)
                        <div
                            class="shadow-xl flex flex-col rounded-lg bg-gradient-to-r from-orange-500 to-pink-500 md:max-w-xl md:flex-row">

                            <div class="flex flex-col justify-start p-6">
                                <a href="/detailUser2/{{ $u->id }}">
                                    <img src="{{ asset('storage/' . $u->image) }}" class="w-[20vw] h-[15vw] object-cover"
                                        alt="">
                                </a>
                                <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                                    {{ $u->name }}
                                </h5>
                                <a href="/add-friend/{{$u->id}}" class="gap-4 flex items-center bg-blue-500 text-white border-none py-4 px-2">
                                    <img src="{{asset('thumbs.png')}}" class="w-[1.5vw] h-[1.5vw]" alt="">
                                    Like & Add
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="mt-[50px]">
                    {{-- {{ $users->links() }} --}}
                </div>
            </div>
        </div>
    </div>
    <script>
        function filter() {

        }

        $('#select_gender').on('change', function() {
            var id = $(this).val();
            if (id) {
                window.location = "/" + id;
            }
            return false;
        });
    </script>
@endsection
