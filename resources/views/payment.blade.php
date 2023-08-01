@extends('layout.master')
@section('content')
    <div class="container mx-auto">
        <div class="row">
            <div class="flex justify-center">
                <div>
                    @if (Session()->has('success'))
                        <h2 class="text-lg text-green-300">
                            {{ Session()->get('success') }}
                        </h2>
                    @endif
                    <h2 class="text-green-700 text-xl mt-12">
                        Please pay for the payment to complete your registration
                    </h2>
                    <div>
                        <p class="text-center">
                            Price to pay:
                        </p>
                        <h2 class="text-center text-red-800 text-3xl">
                            Rp. {{ $payment }}
                        </h2>
                    </div>
                    <form action="/payment" method="post" onsubmit="return check()">
                        @csrf
                        <input type="hidden" value="{{$payment}}" id="payment">
                        <input type="number" name="price" id="price" class="w-full p-3 mt-3" placeholder="Amount you want to pay">
                        <button type="submit"
                            class="bg-[#DC0000] mt-5 bg-gradient-to-r from-orange-500 to-pink-500 py-3 text-white rounded-xl w-full">
                            PAY
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <script>
        function check(){
            var price = parseInt(document.getElementById('price').value);
            var payment = parseInt(document.getElementById('payment').value);
            if(price < payment){
                var underpaid = payment-price;
                alert('You are still underpaid '+underpaid.toString());
                return false
            }
            if(price > payment){
                var overpaid = price-payment;
                return confirm("Sorry you over paid "+overpaid.toString()+" ,would you like to enter a balance?");
            }
            return true;
        }
    </script>
@endsection
