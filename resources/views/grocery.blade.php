@extends('homeTemplate')

@section('title')
<title>Amazing E-Grocery - Home</title>
@endsection

@section('content-1')
<div class="container-fluid">
    <h4 class="price text-center" style="margin-top: 7vh; margin-left:75vh; display: flex; align-items: center; justify-content:center;
    position: absolute">Price : {{$item->price}}</h4>
    <p class="font-monospace" style="margin-top: 14vh; margin-left:75vh; display: flex; align-items: center; justify-content:center;
    position: absolute">{{$item->itemDesc}}</p>

    <p class="font-monospace" style="margin-top: 21vh; margin-left:75vh; display: flex; align-items: center; justify-content:center;
     position: absolute">Vegetables are parts of plants that are consumed by humans or other animals as food.</p>

     <p class="font-monospace" style="margin-top: 24vh; margin-left:75vh; display: flex; align-items: center; justify-content:center;
     position: absolute">This limited vegetable is the only one in the world because of its size and its color.</p>

    <div class="card border-dark text-dark mb-3" style="max-width: 20rem; min-height:22rem; margin-top:15vh; margin-left:25vh">
        <div class="card-header fw-bold text-center">{{$item->itemName}}</div>
        <div class="card-body">
            <img src="{{asset('vegetables.png')}}" class="card-img-top" style="width:80%; height:80%; margin-left:2.5rem; margin-top:1.5rem" alt="...">
        </div>
    </div>

    <div class="btnBuy" style="margin-left: 74vh; margin-top:-18vh">
        <form action="/cart" method="POST">
            @csrf
            <input type="hidden" name="itemId" value="{{$item->id}}">
            <button type="submit" class="btn btn-warning m-2 shadow-sm" style="width:6vw">Buy</button>
        </form>
    </div>

</div>

<footer>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; height: 3rem; margin-top: 11.5rem; display:flex; align-items: center; justify-content:center; position: absolute>
        <div class="container-fluid">
            <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33) font-size: 1%">
                <a class="navbar-brand">Amazing E-grocery 2023</a>
            </h3>
        </div>
    </nav>
</footer>

@endsection
