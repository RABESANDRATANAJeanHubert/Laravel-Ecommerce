<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Support\Cart;
use Livewire\Component;

class ShopComponent extends Component
{   use WithPagination;

    public function store($product_id,$product_name,$product_price){

        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item ad in Cart');
        return redirect()->route('product.cart');

    }


    public function render()
    {

        $product = Product::paginate(12);
        return view('livewire.shop-component',['product'=>$product])->layout('layouts.base');
    }

}
