@extends('layout.master')
@section('content')
    <div class="container mx-auto">
        <div class="row mx-[20vw] mt-12">
            <form action="top-up" method="post">
                @csrf
                <div class="p-6 space-y-6">
                    <div class="border-2 h-10 w-full relative bg-transparent">
                        <input type="number" readonly id="Qty" value="0"
                            class="Qty text-center text-center w-full text-md" name="wallet">
                        <div id="addButton" onclick="add100Coins()"
                            class=" bg-gradient-to-r from-orange-500 to-pink-500 text-white h-full w-20 cursor-pointer">
                            <span class="m-auto text-2xl">+100+</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center p-6 border-gray-200">
                    <button type="submit" class=" px-5 py-3 text-white bg-blue-700">
                        Top Up
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function add100Coins() {
            var amount = document.getElementById('Qty');
            amount.value = parseInt(amount.value) + 100;
        };
    </script>
@endsection
