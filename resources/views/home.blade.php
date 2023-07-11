@extends('homeTemplate')

@section('title')
<title>Amazing E-Grocery - Home</title>
@endsection

@section('content-1')
<div class="container-fluid d-flex flex-wrap justify-content-center positin-relative mt-3">
    @foreach ($itemVegetable as $item)
    <div class="card text-center border-dark mt-3" style="width: 18rem; height:18rem; margin-left:3rem; ">
        {{-- div class="containter-fluid d-flex flex-wrap justify-content-left" style="width: fit-content;" --}}
        <img src="{{asset('vegetables.png')}}" class="card-img-top" style="width:50%; height:50%; margin-left:4rem" alt="...">
        <div class="card-body" style="margin-top:2rem; margin-left:-2rem">
          <h5 class="card-title">{{$item->itemName}}</h5>
          <a href="/grocery/{{$item->id}}" class="btn btn-primary">Detail</a>
        </div>
      </div>
    @endforeach
</div>
<div class="w-100 d-flex justify-content-center mt-5">
    {{$itemVegetable->links()}}
</div>


<footer>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; height: 3rem; margin-top: 1rem; display:flex; align-items: center; justify-content:center; position: absolute>
        <div class="container-fluid">
            <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33) font-size: 1%">
                <a class="navbar-brand">Amazing E-grocery 2023</a>
            </h3>
        </div>
    </nav>
</footer>

@endsection
