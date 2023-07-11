<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    //
    public function displayItem(){

        $veg = Item::paginate(10);

        return view('home', [
            'itemVegetable' => $veg
        ]);
    }

    public function searchItem($id){

        $veg = Item::find($id);

        return view('grocery', [
            'item' => $veg,
        ]);
    }

    public function addItem(Request $request){

        $veg = Item::find($request->itemId);

        $cart = Cart::create([
            'userId' => Auth::user()->id,
            'itemId' => $veg->id,
        ]);

        return redirect('/cart');
    }

    public function getCart(){

        $veg = Cart::where('userId', '=', Auth::user()->id)->get();

        return view('cart', [
            'cart' => $veg,
        ]);
    }

    public function deleteItem(Request $req){

        $veg = Cart::find($req->itemCartId)->delete();

        return back();
    }

    public function checkOut(){

        $cart = Cart::where('userId', Auth::user()->id)->delete();

        return view('successCheckOut');
    }
}
