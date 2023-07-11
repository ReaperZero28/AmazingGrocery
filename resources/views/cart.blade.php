@extends('homeTemplate')

@section('title')
<title>Amazing E-Grocery - Home</title>
@endsection

@section('content-1')
<div class="container-fluid">
    <div class="text_content text-center">
        <h4 class="regisFormTitle" style="padding-top:3vh; padding-bottom:2vh; padding-right: 198vh">Cart</h4>

    @php
        $totalPrice = 0;
    @endphp
    <div class="container d-flex">
        @if ($cart->count()>0)
        @foreach ($cart as $item)
        @php
            $totalPrice += $item->cartItem->price;
        @endphp
        <div class="card text-center border-dark mb-3 mt-3 position-relative" style="width: 18rem; height:25rem; margin-left:7rem; margin-top:3rem">
            <div class="card-header">{{$item->cartItem->itemName}}</div>
            <img src="{{asset('vegetables.png')}}" class="card-img-top mx-auto" style="width:50%" alt="...">
            <div class="card-body">
            <h5 class="card-title" style="margin-top: 5vh">Rp{{$item->cartItem->price}}</h5>
            <form action="/deleteItem" method="post">
                @csrf
                <input type="hidden" name="itemCartId" value="{{$item->id}}">
                <button type="submit" class="btn btn-primary">Delete</button>
            </form>
            </div>
        </div>
        @endforeach
    @endif
    </div>

      <div class="total" style="margin-top: 5rem; margin-left:-3rem">
        <h4>Total : {{$totalPrice}}</h4>
            <form action="/checkOut" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Check Out</button>
            </form>
    </div>

</div>

<footer>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; height: 3rem; margin-top: 15rem; display:flex; align-items: center; justify-content:center; position: absolute>
        <div class="container-fluid">
            <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33) font-size: 1%">
                <a class="navbar-brand">Amazing E-grocery 2023</a>
            </h3>
        </div>
    </nav>
</footer>

@endsection
